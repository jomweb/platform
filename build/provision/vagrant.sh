#!/usr/bin/env bash

/usr/bin/mysql -uroot -p$1 -e "CREATE DATABASE IF NOT EXISTS jomweb DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;"

cd /vagrant/

if [ -f ./storage/framework/compiled.php ]; then
    rm storage/framework/compiled.php
fi

if [ ! -f .env ]; then
    cp ./build/provision/.env.vagrant .env
fi

composer install --prefer-dist --dev
