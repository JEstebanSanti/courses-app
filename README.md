# What do you need to run this
- node js
- mysql or postgresql
- composer

# How to install
Installing composer and node dependencies Run:
```sh
composer install && npm install
```
**if you want to use mysql check .env-example and change it**

DB_CONNECTION = mysql

## Run the project:
```sh
php artisan migrate --seed && php artisan serve && npm run dev
``` 
