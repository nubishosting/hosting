# !/bin/bash

# Set default parameters

username=$1
domain=$2

hosts_path="/etc/hosts"
vhosts_path="/etc/apache2/sites-available/"
userDir="/var/www/html/projet/storage/app/public/users/"

# construct absolute path
absolute_doc_root=$userDir$username

filetocreated="$userDir$username.ext4"

# unmount FS
`umount "$absolute_doc_root"`

# delete directory
`rm -r "$absolute_doc_root/"`

a2dissite $domain

# delete vhost
rm "$vhosts_path$domain.conf"

# delete FL
rm "$filetocreated"

# restart apache

/etc/init.d/apache2 reload

#/etc/init.d/apache2 restart

exit 0