#!/usr/bin/env bash

/usr/bin/mysql -uroot -p$1 -e "CREATE DATABASE IF NOT EXISTS platform DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;"

cd /vagrant/

if [ -f ./vendor/compiled.php ]; then
    rm vendor/compiled.php
fi

if [ ! -f .env ]; then
    cp ./build/provision/.env.vagrant .env
fi

composer install --prefer-dist --profile -vvv
