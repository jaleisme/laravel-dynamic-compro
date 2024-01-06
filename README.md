# 1. Setup Project
After cloning this repository, run this command in your terminal:
~~~
composer install

npm i
~~~

# 2. Prepare Environment
Open file .env (if doesn't exist, rename .env.example to .env) and setup the APP_NAME, APP_AUTHOR, and the database credentials
## 2.a Generate App Key (Optional)
If you want to generate a new app key, run this command:
~~~
php artisan key:generate 
~~~ 

# 3. Run Migration
After setting up the enivronment, run this command:
~~~
php artisan migrate:fresh --seed
~~~
