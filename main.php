<?php

require_once 'vendor/autoload.php';

use PizzaStore\PizzaStore;

$store = new PizzaStore;
$store->orderPizza("Маргарита", "Сырный", ["Томат", "Колбоса", "Грибы"]);
