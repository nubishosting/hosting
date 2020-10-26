# !/bin/bash

# Set default parameters

username=$1
userDir="/var/www/html/projet/storage/app/public/users/"

# construct absolute path
absolute_doc_root=$userDir$username

`du -sh "$absolute_doc_root"`

exit 0