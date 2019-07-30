echo 'START ----> Configuring node.js <----'

source $HOME/.nvm/nvm.sh

cd /var/www

nvm install >/dev/null 2>&1
nvm install v12.6.0
nvm alias default v12.6.0

npm ci

echo 'END ----> Configuring node.js <----'
