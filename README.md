# laravel-calulator-package by WebPane


![enter image description here](https://scontent.fdac27-1.fna.fbcdn.net/v/t1.6435-9/32257656_2042052772730306_6833874635356897280_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=e3f864&_nc_eui2=AeF-9fq-rgg5fDkjd40jlPzaSqY5IXpjuIZKpjkhemO4ho6xDFDtLlTaflp6dJxuf2kn8WMAVdzbDD7JIb-e7e8G&_nc_ohc=ynWLPN5UtlAAX-nh7kf&_nc_ht=scontent.fdac27-1.fna&oh=52df22c744b8947e4c8012d923e0bd95&oe=61D59178)
# Installation:

###  Run the following command in the terminal:
```
composer require webpane/nestedset733
```
# Usage:

```php

Route::get("/go",function(){
	return  Calculator::devide(80,8)->multiply(3,3)->get();
});

```
