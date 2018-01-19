# Projeto - Engenharia de software

**Getting Started:**

Install the composer dependencies
    
    composer install
    

Create .env file:

    $ cat .env.example > .env

Set application key
    
    php artisan key:generate  

Create BD:

    mysql> CREATE DATABASE "nome";

Migrate BD with fake info for testing:
    
    $ php artisan migrate --seed


	