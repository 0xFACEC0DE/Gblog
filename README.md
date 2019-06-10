Get Started:

composer install

setup .env settings
APP_URL=http://localhost
DB_HOST=localhost
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

php artisan migrate
php artisan voyager:admin your@email.com --create