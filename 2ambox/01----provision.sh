echo 'START ----> Running provision script <----'

mysql -u root -e "CREATE DATABASE yii2_boilerplate CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
echo '---> Created yii2-boilerplate 2amigos database'

mysql -u root -e "CREATE DATABASE yii2_boilerplate_test CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
echo '---> Created yii2-boilerplate_test database'

echo 'END ----> Running provision script <----'
