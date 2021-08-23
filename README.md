# weatherapi
Weather API is a simple script that uses Open Weather API

Script requires Apache Web server and PHP installed.

Steps to use the script :

1) Create account on https://openweathermap.org/ and a default API key shall be generated for you here https://home.openweathermap.org/api_keys

2) Rename .env.example to .env and add that API key to 'API_KEY' variable.

3) Get composer : 

```
curl -sS https://getcomposer.org/installer | php
``` 
4) Install dependencies
```
php composer.phar install
``` 

5) Enjoy !! :rocket:
