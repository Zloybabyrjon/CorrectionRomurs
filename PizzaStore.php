<?php

require "Pizza.php";

class PizzaStore
{
    public function orderPizza(string $name, string $sause, array $toppings): void
    {
        $pizza = $this->createPizza($name, $sause, $toppings);
        $pizza->prepare();
        $pizza->cut();
    }
    public function createPizza(string $name, string $sause, array $toppings): Pizza
    {
        return new Pizza($name, $sause, $toppings);
    }
}
