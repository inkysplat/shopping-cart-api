# Shopping API

A simple Shopping Cart API to adding products into a cart.

## Usage

To use this API simply create a new Product via the ```ProductFactory``` and add it to the Cart with a quantity amount.

```php
$product \src\ShoppingCart\ProductFactory::create('Tomato');
$cart = new Cart();
$cart->addItem($product, 5);
```

To retrieve the cart's total cost you can call the ```getToalSum()``` method like so.

```php
$cart->getTotalSum();//int(1.00)
```

To retrieve the price of an individual item in the cart based on it's price tier and quantity simply pass the ```Product``` object into ```getPriceOf()```.

```php
$product \src\ShoppingCart\ProductFactory::create('Tomato');
$cart = new Cart();
$cart->addItem($product, 5);
$cart->getTotalSum(); //1.00
$cart->getPriceOf($product); //0.20
```

## Implementation

The aim of this project is to prove my knowlege of Object Orientated PHP and my ability to create testable code.

### CartInterface
The ```CartInterface``` was provided to me as part of an technical test, all other code is written by myself.

This interface requires an ```Product``` object to be passed to the ```addItem()``` and ```getPriceOf()``` methods. To achieve this, I've used my own interface called ```ProductInterface```. Each Product in the system must implement this interface to be considered a valid product. By using an alias in the ```use``` statement I am able to typehint the ```ProductInterface``` as instead of an actual ```Product``` object.

### ProductFactory

The factory is a classic OO pattern, it's designed to create an object depending on a number of requirements. What makes the factory powerful in my opinion is that it allows us to create our object in one place, so if the constructor or the build of an object changes we only have to update our factory and not everywhere we've instantiated it through out the codebase.

The factory pattern also allows us to abstract the underlying object. A typical use case for a factory pattern for example is switching database adaptors or changing your REST client library (perhaps switching between Guzzle or Buzz). So long as these adaptors or objects have the same interface and implement the same contracts we don't really care which of these objects are created. This is where the PSR standards come in really handy for switching 3rd party libraries out.

### Product Object

The ```Product``` object in this example could be considered a Proxy. By injecting the product into the ```Product``` object and implementing the same interfaces we're able to mask the underlying product object (lemon, orange, tomato, etc) from the rest of the codebase and let everything assume it's a ```Product``` object. 

Why would I want to do this? Well I might prehaps extend the ```Product``` with a few methods that do other things to the ```Tomato```, ```Lemon```, ```Orange``` objects. For example my ```Tomato```, ```Lemon```, ```Orange``` objects might have a ```getWeight()``` method that returns their weight in lbs, I could add a method to my ```Product``` object that converts those lbs to kg. This could be considered the Decorator pattern.


## Tests

There are PHPUnit tests that live under the */tests* directory. Given the amount of objects we are working with and injecting we've inevitably created some dependencies between the objects. The ```Cart``` object for instance requires a ```Product``` object in it's cart to be able to really give us a total sum. Something for later on would be to use Mockery to __mock__ a ```Product``` object and simulate different products going into the cart. The benefit here is we can test any number of varying products (even ones we've not created or have in our shop!) and test that the ```Cart``` object behaves the same regardless.

To run these tests you can install PHPUnit via https://getcomposer.org/download.

```bash
php composer install
php vendor/bin/phpunit
```
