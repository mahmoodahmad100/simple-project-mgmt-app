### Intro:
The app is built on Laravel and [Laragine](https://github.com/yepwoo/laragine)

### Getting started:
* You do not have a `.env` file in the project root directory so copy `.env.example` and save it as `.env`
* In `.env` file update the database info
* Open the terminal and navigate to the project directory and run `composer update`
* Generate the application key using `php artisan key:generate`
* Clear the config cache by running `php artisan config:cache`
* Create the database tables by running `php artisan migrate`
* enjoy 😃 !

### Notes:
* You can run the tests by running `./vendor/bin/phpunit` also before running the tests you check the code coverage reports by opening `ci/codeCoverage/index.html` in the browser