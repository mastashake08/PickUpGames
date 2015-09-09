## Pickup Games

Pickup Games is a web application that allows you to add/find games in your local area such as 21 point basketball, or 7-on-7 football.


## Installation

The best way to install this app is to download and use Laravel Homestead http://laravel.com/docs/5.1/homestead

After SSHing into you new homestead enviorment, change directory to the project and run the following command

cp .env.example .env; nano .env

Now change the database information to match that of your homestead configuration.

Now run this command

php artisan key:generate

Now you are ready to go! Head to your web browser and point it to the app address in your homestead configuration file.