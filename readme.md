To Get Up and Running:

# What is Laravel Lightening?
Laravel is extremely fast to set up and get developing - however I have found
that it will still take a few hours from starting a new project until I actually
begin coding. Laravel Lightening is my forked version of laravel which comes
with additional built in features I have constantly been using. Features such
built in user log in and authentication, a contact us page, a profile page, and
a basic clean homepage. It also comes with bootstrap, animate.css,
normalize.css, and placeholder images and texts to start your project.


# To Install
* use terminal to 'cd' into the root of this project
* run 'composer update' in terminal
* run './generate_files.sh' in terminal. This generates the storage folders, the .env file and generates a secret key and places it in the .env file for you.
* put the proper database credentials into the .env file
* php artisan migrate



# Errors ive encountered:

### Internal server error:
Check the apache logs (sudo nano /var/log/apache2/error.log), if they say:

"Request exceeded the limit of 10 internal redirects due to probable configuration error. Use 'LimitInternalRecursion' to increase the limit if necessary. Use 'LogLevel debug' to get a backtrace"

This has something to do with the permissions of the folders. In this case, apache is working properly and its simply a permissions error. You can test this by making an index.php file and get it to echo out "hello" and put it in the /www/ directory, you can point your server to this file and see that it works correctly.


To fix this, make a new folder and copy all of the files from the project into it. Make a new public folder, and copy all of the files form the project into it.


**********OR***********

This could be because you have set up your htaccess file wrong. Try deleting this file and it will work.


### Errors regarding ciphers AES-128-CBC and AES-256-CBC and key lengths.

simply just run the ./generate_files ssh file again.
--- it has to do with the key which was generated.


### Only the homepage is showing. error ---> The requested URL /login was not found on this server.

In this error, you can only see the homepage - all other pages give errors.

Steps to fix this:

1) make sure your /etc/apache2/apache2.conf file has the following lines:

<Directory /var/www/>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride All
        Require all granted
        allow from all
</Directory>


2) Modify your .htaccess file. You can try one of the combinations of access file below.
The RewriteRule should be pointed at your index file... it may not may not need a / in front.


IMPORTANT! after every change make sure to clear your browsers cache and even switch between browsers - This exhibits some tricky behavior!

A)

<IfModule mod_rewrite.c>
     <IfModule mod_negotiation.c>
        Options -Indexes
    </IfModule>

    RewriteEngine On

    # Redirect Trailing Slashes...
    #RewriteRule ^(.*)/$ /$1 [L,R=301]
    RewriteBase /
    # Handle Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ /index.php [L]
</IfModule>
#**


B)

<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -Indexes
    </IfModule>

    RewriteEngine On
    RewriteRule ^(.*)$ public/$1 [L,QSA]
</IfModule>



#**




## Compiling Assets With Mix
To compile asset we are using webpack.

To set this up, simply run: sudo npm install
npm will parse the package.json folder to determine which packages to install.
It will install webpack and set everything up.

Edit the webpack.mix.js file to combine any assets.

sudo npm run dev :   Runs all Mix tasks.
sudo npm run watch : Watches for file changes.
sudo npm run production : // Runs all Mix tasks and minify output.
