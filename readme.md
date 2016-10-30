### Running

1. Delete Vendor folder and Composer.Lock
2. Create .env File form .env.example
3. Run command : "composer update"
4. Run command : "php artisan key:generate"
5. Create "schneider" BD on mysql
6. Update .env
	APP_ENV=local
	APP_DEBUG=true
	APP_KEY="your php artisan key:generate"

	DB_HOST=127.0.0.1
	DB_DATABASE=schneider
	DB_USERNAME=root
	DB_PASSWORD=
	
	CACHE_DRIVER=file
	SESSION_DRIVER=file
	QUEUE_DRIVER=sync

	MAIL_DRIVER=smtp
	MAIL_HOST=mailtrap.io
	MAIL_PORT=2525
	MAIL_USERNAME=null
	MAIL_PASSWORD=null
	MAIL_ENCRYPTION=null

6. Run command : "php artisan serve"
