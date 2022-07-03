## Informasi

Website Kantin Kejujuran adalah sebuah website yang dibuat sebagai bagian dari submission Compfest 2022. Website ini dibangun menggunakan Framework Laravel dan Database MySQL. Dalam website Kantin Kejujuran terdapat fitur pembelian dan kotak uang. Demo website secara langsung dapat diakses di link berikut : 

[http://kantin-kejujuran-rizkina.herokuapp.com/](http://kantin-kejujuran-rizkina.herokuapp.com/).


## Menjalankan Project

1. Clone project
2. Go to the folder application using cd command on your cmd or terminal
3. Run composer install on your cmd or terminal
4. Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu
5. This project using MySQL as Database. Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.
6. Run php artisan key:generate
7. Run php artisan migrate
8. Run php artisan db:seed
9. Run php artisan serve
10. Go to http://localhost:8000/
