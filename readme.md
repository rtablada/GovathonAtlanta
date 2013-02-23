## Govathon Atlanta - NPO Space Finder

This is the working repository for the Govathon Project on Feb 22-23.

## Installation instructions

This project uses Laravel 4 and requires some setup to work.

### Installing Composer

If you do not have composer, then do yourself a favor and follow this guide: http://net.tutsplus.com/tutorials/php/easy-package-management-with-composer/

Otherwise, you can run ```php composer.phar update```

### Install dependancies

Now you should be able to run ```composer install``` in the directory of the repository and all should be well and good. (This can take a bit of time).

### Configuration options

By going into app/config/database.php you should be able to set up your credentials for your local database.

### Running the server

If you've got PHP 5.4 just runn ```php artisan serve``` and PHP will start a local server which can be accessed at localhost:8000