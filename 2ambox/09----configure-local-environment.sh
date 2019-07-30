echo 'START ----> Configuring local environment <----'

echo '----> Upgrading composer to latest version'
composer self-update

echo '----> Moving to project root'
cd /var/www

echo '----> Installing composer dependencies'
composer install

echo '----> Init environment'
php init --env=Local --overwrite=Yes

echo '----> Migrate database'
php yii migrate --interactive=0

echo 'END ----> Configuring local environment <----'
