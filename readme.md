## elfsundae/laravel-framework

[![Build Status](https://travis-ci.org/ElfSundae/laravel-framework.svg?branch=master)](https://travis-ci.org/ElfSundae/laravel-framework)
[![Total Downloads](https://poser.pugx.org/elfsundae/laravel-framework/downloads.svg)](https://packagist.org/packages/elfsundae/laravel-framework)
[![Latest Stable Version](https://poser.pugx.org/elfsundae/laravel-framework/v/stable.svg)](https://packagist.org/packages/elfsundae/laravel-framework)
[![Latest Unstable Version](https://poser.pugx.org/elfsundae/laravel-framework/v/unstable.svg)](https://packagist.org/packages/elfsundae/laravel-framework)
[![License](https://poser.pugx.org/elfsundae/laravel-framework/license.svg)](https://packagist.org/packages/elfsundae/laravel-framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.

Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).

### Setup laravel-framework

+ install [Composer](https://getcomposer.org/)
+ install Laravel installer

		$ composer global require "laravel/installer=~1.1"

+ create project

		$ composer create-project elfsundae/laravel-framework your-project-name --prefer-dist

+ configuration
	
 `$ hostname` to get hostname and edit `bootstrap/start.php`
 
		$env = $app->detectEnvironment(array(
			'local' => array('0x123'),
		));
		
 edit `app/config/[local/]database.php` , `app/config/settings.php`, `app/routes.php`

### Included Package

*require*

+ [jenssegers/agent](https://github.com/jenssegers/laravel-agent) : A user agent class for Laravel 4
+ [laravelbook/ardent](https://github.com/laravelbook/ardent) : Self-validating, secure and smart models for Laravel 4's Eloquent O/RM

*require-dev*

+ [way/generators](https://github.com/JeffreyWay/Laravel-4-Generators) : Rapidly speed up your Laravel workflow with generators
+ [fzaninotto/faker](https://github.com/fzaninotto/Faker) : PHP library that generates fake data for you

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
