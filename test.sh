#!/bin/bash

trap printout SIGINT
printout() {
    echo ""
    echo "Finished with count=$count"
    exit
}
while :
do
    ((count++))
    rm -rf app/vendor && (cd app && composer update) && app/vendor/bin/rector process --clear-cache > output/run-$count.log
done
