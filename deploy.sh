#!/bin/bash

$ERRORSTRING="Error. Please make sure you've indicated correct parameters\
Options:
dry-run      - Perform Dry Run Deploy
dry-run go   - Perform Actual Deployment"
if [ $# -eq 0 ]
    then
        echo $ERRORSTRING;
elif [ $1 == "dry-run" ]
    then
        if [[ -z $2 ]]
            then
                echo "Running dry-run"
                rsync --dry-run -az --force --delete --progress --exclude-from=rsync_exclude.txt -e "ssh -p22" * siteadmin@52.170.201.247:/var/www/html/
        elif [ $2 == "go" ]
            then
                echo "Running actual deploy"
                rsync -az --force --delete --progress --exclude-from=rsync_exclude.txt -e "ssh -p22" * siteadmin@52.170.201.247:/var/www/html/
        else
            echo $ERRORSTRING;
        fi
fi
