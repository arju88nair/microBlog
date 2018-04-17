##Requirements
PHP >= 5.6
MongoDB >= 3.4

## Blog
Just a crude micro blog setup done on Laravel and MongoDB with Bootstrapped frontend
Resides in http://hush.thenair.tk/

## Installation and setup
* Install Composer 
* Since it depends upon MongoDB,we use life saver[Jenssegers MongoDB Driver](https://github.com/jenssegers/Laravel-MongoDB)
* Have to make sure you have the MongoDB PHP driver installed. You can find installation instructions at http://php.net/manual/en/mongodb.installation.php 
* Clone project: `git clone https://github.com/arju88nair/microBlog `
* Install dependencies: `composer install`
* Create your `.env` file and use `.env.example` to configure the settings
* Create a database with whatever name you want and with the collection blogs in it and put the name also into the `.env` file
* Server the application through Apache/Homestead/Nginx