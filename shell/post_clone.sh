#!/bin/bash

#To setup project locally: bash /shell/post_clone.sh --local
if [[ ${1} -eq "--local" ]]
    composer install
    cp .env.local .env
    php artisan key:generate
    php artisan migrate
    php artisan storage:link
then
    composer-php7.4 install
    cp .env.prod .env
    php7.4 artisan key:generate
    php7.4 artisan migrate:fresh
    php7.4 artisan storage:link
    ln -s public public_html
fi

npm i
npm run dev

echo '*** Setup is done. To fireup project run: php artisan serve'
