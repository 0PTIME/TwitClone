# Twitter Clone, Laravel Version

## Installation
Before installing the site the following tools need to be installed:
- php7.1 or higher with extensions
- apache2
- MySQL (MariaDB)
- git
- composer (added to the PATH)
- npm
- yarn
- laravel installer (added to the PATH)

<br/>

Clone repository into current working directory and change directory into it

`git clone https://github.com/0PTIME/TwitClone.git Yapper && cd Yapper`

<br>

Install dependencies

`composer install && npm install`

<br>

Generate css and js

`npm run prod`

<br>

Run this to setup the environment

`cp .env.example .env && php artisan key:generate`

<br>
Make sure you change the Docuement root to the public folder of this project and then restart your server

Also make sure to add:

```
   <Directory /var/www/html/Yapper/public>

      Options Indexes FollowSymLinks

      AllowOverride All

      Require all granted

   </Directory>
```
-Make sure to change the path to match your environment


- Enable mod_rewrite extension and restart apache

   `sudo a2enmod rewrite && sudo service apache2 restart`

<br>

Allow apache to server files

`sudo chown -R www-data Yapper`

<br>

# Database setup

Create a mysql Database and a user that can access it and fill this out in the .env file

- DB_DATABASE=
- DB_USERNAME=
- DB_PASSWORD=

Run the database migration and seed it with the test user

`php artisan migrate && php artisan db:seed`

You should now be able to go to localhost and see the laravel main page, just select login and enter the test users credentials and you should see the default tweets that comes with the Migrations

