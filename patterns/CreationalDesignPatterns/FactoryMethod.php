<!--
Фабричный метод — это порождающий паттерн проектирования,
который решает проблему создания различных продуктов, без указания конкретных классов продуктов.

Фабричный метод задаёт метод, который следует использовать вместо вызова оператора new для создания объектов-продуктов.
Подклассы могут переопределить этот метод, чтобы изменять тип создаваемых продуктов.

Признаки применения паттерна:
Фабричный метод можно определить по создающим методам,
которые возвращают объекты продуктов через абстрактные типы или интерфейсы.
Это позволяет переопределять типы создаваемых продуктов в подклассах.

-->

<?php


abstract class Creator
{
    abstract public function factoryMethod(): Product;

    public function someOperations(): string
    {
        $product = $this->factoryMethod();

        $result = "Creator: The same creator's code has just worked with " . $product->operations();

        return $result;
    }

}

class ConcreteCreator1 extends Creator
{

    public function factoryMethod(): Product
    {
        return new ConcreteProduct1();
    }

}

class ConcreteCreator2 extends Creator
{

    public function factoryMethod(): Product
    {
        return new ConcreteProduct2();
    }

}

interface Product
{
    public function operations(): string;
}

class ConcreteProduct1 implements Product
{

    public function operations(): string{
        return "{Result of the ConcreteProduct1}";
    }
}

class ConcreteProduct2 implements Product
{

    public function operations(): string{
        return "{Result of the ConcreteProduct2}";
    }
}


function clientCode(Creator $creator){
    echo "Client: I'm not aware of the creator's class, but it still works.\n"
        . $creator->someOperations();
}

echo "App: Launched with the ConcreteCreator1.\n";
clientCode(new ConcreteCreator1());
echo "\n\n";

echo "App: Launched with the ConcreteCreator2.\n";
clientCode(new ConcreteCreator2());

