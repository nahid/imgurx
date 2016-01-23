# Imgurx

Imgurx is a laravel 5 package for [Imgur](http://imgur.com/) based on [Adyg/php-imgur-api-client](https://github.com/Adyg/php-imgur-api-client)

## Installation

You can install it via composer. open your terminal and run this command from your project

```shell
composer require nahid/imgurx
```

Wait for a while. After installation complete you have to define your provider in `app.php`. Open `config/app.php' and add this code in providers key

```php
Nahid\Imgurx\ImgurxServiceProvider::class,
```

If you want to use laravel facade then add this line in aliases key

```php
'Imgurx'	=>	Nahid\Imgurx\Facades\Imgurx::class,
```

Okay, Your laravel integration was complete. Now open your terminal agian and run this code from your project

```shell
php artisan vendor:publish
```

now `imgurx.php` config file copy to `config` directory.

## Configuration

If you successfully complete the installation process. Then now open `config/imgurx.php` file and enter your applications crentials.

```php
return [
    'client_id'    =>  '',
    'client_secret'=>   '',
];
```

Great. You are sucessfully completed Imgurx configuration process :)

## Usage

Imgurx is inherited from  [Adyg/php-imgur-api-client](https://github.com/Adyg/php-imgur-api-client) so you will feel free to use all functionalities of this package. See its doc section.

Happy Coding :)