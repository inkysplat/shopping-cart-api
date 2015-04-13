<?php

define('ROOT_PATH', realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR);

require_once ROOT_PATH . 'vendor/autoload.php';

require_once ROOT_PATH . 'src/ShoppingCart/Exceptions/InvalidPriceTierException.php';
require_once ROOT_PATH . 'src/ShoppingCart/Exceptions/InvalidProductException.php';
require_once ROOT_PATH . 'src/ShoppingCart/Interfaces/ProductInterface.php';
require_once ROOT_PATH . 'src/ShoppingCart/Interfaces/CartInterface.php';
require_once ROOT_PATH . 'src/ShoppingCart/Models/Products/Lemon.php';
require_once ROOT_PATH . 'src/ShoppingCart/Models/Products/Orange.php';
require_once ROOT_PATH . 'src/ShoppingCart/Models/Products/Tomato.php';
require_once ROOT_PATH . 'src/ShoppingCart/Models/Product.php';
require_once ROOT_PATH . 'src/ShoppingCart/Models/PriceTiers.php';
require_once ROOT_PATH . 'src/ShoppingCart/Models/Price.php';
require_once ROOT_PATH . 'src/ShoppingCart/Models/Cart.php';
require_once ROOT_PATH . 'src/ShoppingCart/ProductFactory.php';
