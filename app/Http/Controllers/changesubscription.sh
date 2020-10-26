# !/bin/bash

# Set default parameters

username=$1
plan=$2

userDir="/var/www/html/projet/storage/app/public/users/"

# construct absolute path
absolute_doc_root=$userDir$username
filetocreated="$userDir$username.ext4"

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

`umount "$absolute_doc_root"`

`e2fsck -f "$filetocreated"`

`resize2fs -p "$filetocreated" "$quota"`

`mount -o loop,rw,usrquota,grpquota "$filetocreated" "$absolute_doc_root"`

exit 0