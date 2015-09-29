#!/bin/sh
#
# Sync to deploy server
#
RSYNC_TEST="-auvzn -e ssh -O"
RSYNC_EXEC="-auvz -e ssh -O"
EXCLUDE="--exclude=.svn --exclude=.git --exclude=.editorconfig --exclude=.gitignore  --exclude=.DS_Store --exclude=var/ --exclude=tmp/"

rsync ${RSYNC_TEST} ${EXCLUDE} ../* ~/Web/ishichuob/
echo ""
while : ; do
	echo -n "Are you sure ? [y/n] : "
	read answer
	if [ "$answer" = "y" -o "$answer" = "Y" ] ; then
		echo "sync"
		echo "";
		rsync ${RSYNC_EXEC} ${EXCLUDE} ../* ~/Web/ishichuob/

		exit
	elif [ "$answer" = "n" -o "$answer" = "N" ] ; then
		exit
	fi
done
echo ""

