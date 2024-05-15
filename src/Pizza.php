<?php

namespace PizzaStore;

class Pizza
{
    public string $name;
    public string $sause;
    public array $toppings;

    public function __construct(string $name, string $sause, array $toppings)
    {
        $this->name = $name;
        $this->sause = $sause;
        $this->toppings = $toppings;
    }

    public function prepare(): void
    {
        print "Началась готовка пиццы $this->name" . PHP_EOL;
        print "Добавлен соус $this->sause" . PHP_EOL;
        print "Добавлены топики: " . implode(", ", $this->toppings) . PHP_EOL;
    }
    public function cut(): void
    {
        print "Данную пиццу нарезают по диагонали" . PHP_EOL;
    }
}
