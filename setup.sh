#!/bin/bash

#
# Run `curl -s https://get.docker.io/ubuntu/ | sudo sh` if docker isn't installed
#

## Set up the data directory

mkdir -p $HOME/data/{ghost,varnish}
DATADIR=$HOME/data


## Ghost

# /data/
# ├── config.js
# └── content
#     ├── data
#     │   └── ghost.db
#     └── images
#     └── themes
#         └── myTheme

sudo docker pull dockerfile/ghost
sudo docker run -d -v $DATADIR/ghost:/ghost-override --name ghost dockerfile/ghost


## Varnish

sudo docker pull paul91/varnish
sudo docker run -d -p 80:80 -v $DATADIR/varnish/default.vcl:/etc/varnish/default.vcl:ro -v $DATADIR/varnish/logs:/var/log/varnish --name varnish --link ghost:ghost paul91/varnish