# Project name

Users scoring calculation

## Server Requirements

  PHP >= 7.2.5  
  Composer  
  Node.js  

## Installation

Clone the repository

    git clone https://github.com/stasmajevski/scoring.git

Switch to the repo folder

    cd scoring/scoring

Install all the dependencies using composer and npm

    composer install
    npm install
    
Compile assets

    npm run dev    

Copy the example env file

    cp .env.example .env

Make the required configuration changes in the .env file

    DB_DATABASE=scoring
    
Create database in your server

    mysql CREATE DATABASE scoring

Generate a new application key

    php artisan key:generate

Run the database migrations to create and populate tables

    php artisan migrate --seed

Start the local development server

    php artisan serve

Show all users in console
  
    php artisan scoring:show 

Show user in console
  
    php artisan scoring:show {userId}
    
    
