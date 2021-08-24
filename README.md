# weatherapi

Weather API is a simple script that shows weather report using the Open Weather API.

Script Requirements:
Apache Web server ,
PHP

Steps to use the script :

1) Create account on https://openweathermap.org/ and a default API key shall be generated for you here https://home.openweathermap.org/api_keys

2) Rename .env.example to .env and add that API key generated in step1 to 'API_KEY' variable in .env file.

3) Get composer : 

```
curl -sS https://getcomposer.org/installer | php
``` 
4) Install dependencies
```
php composer.phar install

``` 
5) Visit the URL and enter city name and the weather 
report shall be displayed.

6) Enjoy !! :rocket:
