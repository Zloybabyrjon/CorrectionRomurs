<?php

namespace PizzaStore;

use PizzaStore\Pizza;

class PizzaStore
{
    public function orderPizza(string $type): void
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->cut();
    }
    public function createPizza(string $type): Pizza
    {
        return new Pizza('','',[]);
    }
}
