echo 'START ----> Configuring node.js <----'

source $HOME/.nvm/nvm.sh

cd /var/www

nvm install >/dev/null 2>&1
nvm use
nvm alias default current

npm ci
npx gulp build

echo 'END ----> Configuring node.js <----'
