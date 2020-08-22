#!/bin/bash

touch database/database.sqlite
cp .env.example.env
php artisan key:generate
php artisan migrate --seed
