# !/bin/bash

# Set default parameters

username=$1
domain=$2
plan=$3
email=$4
dbpwd=$5

hosts_path="/etc/hosts"
fstab_path="/etc/fstab"
vhosts_path="/etc/apache2/sites-available/"
userDir="/var/www/html/projet/storage/app/public/users/"

# construct absolute path
absolute_doc_root=$userDir$username

#setting quota
if [ $plan = "SINGLE" ]
then 
quota=52427

elif [ $plan = "PREMIUM" ]
then
quota=157286

else
quota=104856

fi

## quota workaround
# create directory
`mkdir "$absolute_doc_root/"`
chown -R domoina:www-data "$absolute_doc_root/"
chmod g+s "$absolute_doc_root/"

#create a file full of /dev/zero, large enough to the maximum size you want to reserve for the virtual file-system
filetocreated="$userDir$username.ext4"
`touch "$filetocreated"`

`dd if=/dev/zero of="$filetocreated" bs="$quota" count=1`

#format the file
`mkfs.ext4 "$filetocreated"`

#format the disk
`mount -o loop,rw,usrquota,grpquota "$filetocreated" "$absolute_doc_root"`

#edit fstab file
echo "$filetocreated  $absolute_doc_root  ext4   0  1" >> $fstab_path
##

# create log file
log="$absolute_doc_root/log.txt"
`touch "$log"`
echo " Your PhpMyadmin password is "$dbpwd". Please delete it after you note it in a safe place ">> "$indexfile"

# update vhost
echo "
		<VirtualHost *:80>
			ServerAdmin $email
			ServerName $domain
			ServerAlias "www.$domain"
			DocumentRoot $absolute_doc_root
			<Directory />
				AllowOverride All
			</Directory>
			<Directory $absolute_doc_root>
				Options Indexes FollowSymLinks MultiViews
				AllowOverride all
				Require all granted
			</Directory>
			ErrorLog /var/log/apache2/$domain-error.log
			LogLevel error
			CustomLog /var/log/apache2/$domain-access.log combined
		</VirtualHost>" > "$vhosts_path$domain.conf"


# update hosts file
echo "192.168.1.100   $domain" >> $hosts_path

echo "192.168.1.100   www.$domain" >> $hosts_path

# restart apache
a2ensite $domain

/etc/init.d/apache2 reload

#/etc/init.d/apache2 restart

exit 0