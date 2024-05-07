<?php

require "PizzaStore.php";

$store = new PizzaStore;
$store->orderPizza("Маргарита", "Сырный", ["Томат", "Колбоса", "Грибы"]);
