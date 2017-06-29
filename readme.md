#Installation

## 1. Clone source code
	git clone git@github.com:haposoft/demo-echo.git

## 2. Install package
	Go to root of project and run:

	```
	composer install

	npm install
	```
### 3. Configuration
	* Generate `.env`:
	```
	cp .env.example .env
	```

	* Create db and config db information on `.env` file :

	```
	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=demo-echo
	DB_USERNAME=root
	DB_PASSWORD=
	```

	* Run migration:
	
	```
	php artisan migrate
	```

	* Configuare pusher or you can use my [pusher](https://pusher.com/) account:
	
	```
	PUSHER_APP_ID=
	PUSHER_APP_KEY=
	PUSHER_APP_SECRET=
	PUSHER_CLUSTER=
	```

### 4. Run app:

	Listen queue job:

	```
	php artisan queue:listen
	```

	Run app
		```
		php artisan serve
		```
	Test app at: `http://locahost::8000`
