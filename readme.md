
# To Install
* simply run ./generate_files.sh  (using bash with linux or mac. Will not work with windows.)
* Run the server - php artisan serve


## OPTIONAL: Compiling Assets With Mix
To compile asset we are using webpack.

To set this up, simply run: sudo npm install
npm will parse the package.json folder to determine which packages to install.
It will install webpack and set everything up.

Edit the webpack.mix.js file to combine any assets.

sudo npm run dev :   Runs all Mix tasks.
sudo npm run watch : Watches for file changes.
sudo npm run production : // Runs all Mix tasks and minify output.
