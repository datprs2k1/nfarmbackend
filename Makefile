


install:
	composer install; php artisan migrate ; php artisan jwt:secret; php artisan db:seed --class=AdminSeeder

