### Recruitr

A recruiting application written fairly quickly to accomodate the hiring process at Epicom.

#### Some Basic Features

* Full Authentication using email, secure keys, and strong salts
* Easy build process using Composer and Artisan (including schema generation and database seeding)
* Simple interface for collecting the most important information about your applicants
* Very customizable and clean code

#### Building the Project

* `git clone` the project
* Navigate to the local repo
* Pull down all dependencies using `composer install` Install Instructions for Composer [here](http://getcomposer.org/doc/00-intro.md)
* Build base schemas `php artisan migrate`
* Seed the database with basic data `php artisan db:seed`
* Start accepting applications!

#### Technologies Used

* Laravel 4
* Composer
* JQuery
* Foundation
