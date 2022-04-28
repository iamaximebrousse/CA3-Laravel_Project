## Laravel 8 Complete Blog

This repository is inspired by the video at this link [this youtube video](https://www.youtube.com/watch?v=HKJDLXsTr8A&t=4710s) where he shows you how to create a complete blog in Laravel 8 using best practices. I cloned the repository and made my own modification.

•	Original Author: Code With Dary <br>
•	Twitter: [@codewithdary](https://twitter.com/codewithdary) <br>
•	Instagram: [@codewithdary](https://www.instagram.com/codewithdary/) <br>

## Visuals of the final website
•	Main page
![alt text](https://github.com/iamaximebrousse/CA3-Laravel_Project/blob/public/images/mainPage.jpg)
![alt text](https://github.com/iamaximebrousse/CA3-Laravel_Project/blob/public/images/mainPage2.jpg)

•	Blog page
![alt text](https://github.com/iamaximebrousse/CA3-Laravel_Project/blob/public/images/blogPage.jpg)
![alt text](https://github.com/iamaximebrousse/CA3-Laravel_Project/blob/public/images/blogPage2.jpg)
![alt text](https://github.com/iamaximebrousse/CA3-Laravel_Project/blob/public/images/blogPage3.jpg)

•	Movie page
![alt text](https://github.com/iamaximebrousse/CA3-Laravel_Project/blob/public/images/moviePage.jpg)
![alt text](https://github.com/iamaximebrousse/CA3-Laravel_Project/blob/public/images/moviePage2.jpg)
![alt text](https://github.com/iamaximebrousse/CA3-Laravel_Project/blob/public/images/moviePage3.jpg)


## Requirements
•	PHP 7.3 or higher <br>
•	Node 12.13.0 or higher <br>

## Usage <br>
Setting up your development environment on your local machine: <br>
```
git clone git@github.com:iamaximebrousse/CA3-Laravel_Project.git
cd CA3-Laravel_Project
cp .env.example .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve
```

## Before starting <br>
Create a database <br>
```
mysql
create database ca3_laravel_cinema;
exit;
```

Setup your database credentials in the .env file <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ca3_laravel_cinema
DB_USERNAME=root
DB_PASSWORD=root
```

Migrate the tables
```
php artisan migrate
```

## Contributing
Do not hesitate to contribute to the project by adapting or adding features ! Bug reports or pull requests are welcome.
