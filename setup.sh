#!/bin/bash

touch database/database.sqlite
cp .env.example .env
composer install
npm install
php artisan key:generate
php artisan migrate --seed
npm run dev
