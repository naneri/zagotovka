install:
	cp .env.example .env
	composer install
	npm install
	npm run dev
	php artisan key:generate
	touch database/database.sqlite

set-permissions:
	sudo chgrp -R www-data storage bootstrap/cache -S
	sudo chmod -R ug+rwx storage bootstrap/cache -S

serve:
	php artisan serve

install-db:
	php artisan migrate
	php artisan db:seed
