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

This will take a couple min.

## Add .env files

Add providid .env file to `book-depot/book-depot` (October project root).

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

## About

This project's environment is built using Docker. There are containers for PHP, an Nginx web server, and the MySQL database engine. You can upload related book meta-data through the 'Add Book' page that will show up on the 'Books' page. The image can be any size, and will be automatically formatted to fit the display on the frontend. There is form validation on the backend making sure fields can't be empty, and the file is an image etc. You should see those errors if the form is not filled out correctly.

Since it seems important to get this project in sooner than later, I'm going to hand this in now, but some next steps would be some more robust editing/deleting features for the user. Some sorting/searching abilty. Fine tuning automatic image processing, or some editing tool for the user to adjust their own image etc. so the display image isn't so fuzzy.



