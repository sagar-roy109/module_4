<?php
class Product {

    // TODO: Add properties

    protected int $id;
    protected string $name;
    protected float $price;

    public function __construct($id, $name, $price) {
        // TODO: Initialize properties

        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }


    // TODO: Add getFormattedPrice method

    protected function getFormattedPrice(){
        return "$".number_format($this->price, 2);
    }


    // TODO: Add showDetails method

    public function showDetails(){
        echo "Product Detials: \n";
        echo "ID: {$this->id} \n";
        echo "Name: {$this->name} \n";
        echo "Price: {$this->getFormattedPrice()} \n";
    }
}

// Test the Product class
$product = new Product(1, 'T-shirt', 20);
$product->showDetails();
