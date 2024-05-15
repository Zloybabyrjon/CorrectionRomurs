<?php

require_once 'src/PizzaStore.php';

use PizzaStore\PizzaStore;

$store = new PizzaStore;
$store->orderPizza("Маргарита", "Сырный", ["Томат", "Колбоса", "Грибы"]);
