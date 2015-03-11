#!/bin/sh

if [ -d .subsplit ]; then
    git subsplit update
else
    git subsplit init git@github.com:jomweb/platform.git
fi

git subsplit publish --heads="develop" --no-tags extensions/diskus:git@github.com:orchestral/diskus.git
git subsplit publish --heads="develop" --no-tags extensions/shorty:git@github.com:orchestral/shorty.git
