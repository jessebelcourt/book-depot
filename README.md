# book-depot

Simple October CMS project for sharing books.

## Local Setup

You will need Docker, and Docker Compose installed to setup this environment. If you don't already have those installed, it is super simple, check out [Docker Installation](https://docs.docker.com/install/), and [Docker Compose Installation](https://docs.docker.com/compose/install/)

## Edit /etc/hosts

Add this line to you /etc/hosts file:

`127.0.0.1 book-depot`

## Clone repo, and install dependencies

`git clone https://github.com/jessebelcourt/book-depot.git`

`cd book-depot/book-depot`

`docker container run -v $(pwd):/book-depot --rm -w /book-depot composer composer install`

## Add .env files

Add the provided via email. (more here)

## Start Env

From root of project (same level as docker-compose.yml):

`docker-compose up -d`

## Run Migrations

`docker-compose exec php bash`

`cd /book-depot`

`php artisan october:up`

## Use Theme

`php artisan theme:use book-depot`

## Check it out!

[book-depot](http://book-depot/)
