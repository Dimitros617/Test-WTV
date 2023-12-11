Install
Xamp, Composer, GitBash, nodeJS

composer global require "laravel/installer"
->if(git not install -> go to php.ini and uncomment extension=zip.)

composer create-project laravel/laravel example-app

cd to folder

php artisan serve //Start app

php artisan migrate

composer require laravel/jetstream //download jetstream
composer require laravel/breeze

php artisan jetstream:install livewire
php artisan breeze:install

->Install Node.JS 

npm install

-> restart terminal -> npm run dev


Debug bar: https://github.com/barryvdh/laravel-debugbar#installation
