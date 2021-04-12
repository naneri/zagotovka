install:
	cp .env.example .env
	composer install
	npm install
	npm run dev
	php artisan key:generate

set-permissions:
	sudo chgrp -R www-data storage bootstrap/cache -S
	sudo chmod -R ug+rwx storage bootstrap/cache -S
