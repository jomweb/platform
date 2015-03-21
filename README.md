JomWeb Platform
==============

[![Build Status](https://img.shields.io/travis/jomweb/platform/develop.svg?style=flat)](https://travis-ci.org/jomweb/platform)
[![Scrutinizer Quality Score](https://img.shields.io/scrutinizer/g/jomweb/platform/develop.svg?style=flat)](https://scrutinizer-ci.com/g/jomweb/platform/)

## Pre-requirement

* [VirtualBox](https://www.virtualbox.org/wiki/Downloads)
* [Vagrant](http://www.vagrantup.com/downloads.html)
* [Node.js](https://nodejs.org/download/)

## Installation

### Setup using GIT

1. Fork the repository.
2. Clone the forked application `git clone git@github.com:your-github-id/platform.git faces.my`
3. Navigate to the project directory `cd faces.my`
4. Run `git remote add upstream git@github.com:jomweb/platform.git`
5. Run `git fetch —all`.
6. Run `vagrant up` (you need to make sure both Vagrant and VirtualBox are installed).
7. Setup a host alias to point to `192.168.50.100 faces.app` using `/etc/hosts` on Mac OSX or it’s equivalents.

### Updating Composer

To update composer, just run the following command:

```bash
$ vagrant ssh -c "cd /vagrant && composer install —prefer-dist"
```

### Running migration

To run project database schema migration, just run the following commnad:

```bash
$ vagrant ssh -c "php /vagrant/artisan migrate"
```


