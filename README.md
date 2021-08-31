<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About This Project

Simple Shopping Cart System with a checkout system for a shop which only sells apples and oranges.
Apples cost 70cents and oranges cost 35cents.
Build a checkout system which takes a list of items scanned at the till and outputs the total cost
For example: [ Apple, Apple, Orange, Apple ] => $2.45
Make reasonable assumptions about the inputs to your solution; for example, many candidates take a list of strings as input

Discount:
buy one, get one free on Apples
3 for the price of 2 on Oranges
For example: with dicount [ Apple, Apple, Orange, Orange, Apple ] => $2.8


## Set up this Project

This project base on Laravel framework, make sure PHP and Composer installed.


Download/Clone thie project

# cd the project directory
composer install
(any error for composer install ----Delete composer.lock file and run composer install )

# Copy the .env.example file
Create .env file paste into
(Base on thie project do not use any DB so do not need edit .env file.)

# Generate the key for your environment file

php artisan key:generate

# run this project

php artisan serve


