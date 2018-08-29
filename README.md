# laravel-freelance-navagi

Install dan setting php 7.2.4

## Prerequisites
install `composer`
install `php`
install `mysql`

### Setting Database Awal & Migrate
1. Buat database baru di mysql (contoh : laravelbasic)
2. setting koneksi database mysql di .env file
    DB_CONNECTION=mysql
    DB_HOST=localhost
    DB_PORT=3306
    DB_DATABASE=laravelbasic
    DB_USERNAME=dbase
    DB_PASSWORD=1234
3. Migrate database user menggunakan php artisan
    php artisan migrate 

    contoh : 
    PS C:\wamp64\www\laravel> php artisan migrate
    Migration table created successfully.
    Migrating: 2018_08_29_004335_create_users_table
    Migrated:  2018_08_29_004335_create_users_table




#Perintah php artisan
##Create Model artisan command sample
php artisan make:model user -m