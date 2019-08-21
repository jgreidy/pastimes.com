#!/bin/bash
# send the generated _site to it's server
# both source and target must end with a /
SOURCE=`pwd`/_site/
TARGET=pastimes@143.95.228.87:/home/pastimes/public_html/
if [ -f "${SOURCE}index.html" ]
then
  echo "Overwriting $TARGET"
  echo "With $SOURCE"
  read -p "Are you sure? " -n 1 -r
  echo    # (optional) move to a new line
  if [[ $REPLY =~ ^[Yy]$ ]]
  then
    echo "Building production site..."
    JEKYLL_ENV=production bundle exec jekyll build
    echo "rsync..."
    rsync -azvh --delete --omit-dir-times  --exclude ".DS_Store" --exclude ".git" "$SOURCE" "$TARGET"
  fi
else
  echo "$SOURCE has no index.html!!"
  exit 1
fi
