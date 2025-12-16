<?php


class Product
{
    private string $name;
    private float $price;
    private int $quantity;
    public   const VAT = 0.14;

    public function __construct($name, $price, $quantity)
    {
        $this->setName(name: $name);
        $this->setPrice(price: $price);
        $this->setQuantity(quantity: $quantity);
    }

    public function setName(string $name)
    {
        if (trim($name) === "") {
            throw new InvalidArgumentException(message: "invalid name");
        } else {
            return $this->name = $name;
        }
    }
    public function setPrice(float $price)
    {
        if ($price < 0) {
            throw new InvalidArgumentException(message: "invalid price");
        } else {
            return $this->price = $price;
        }
    }
    public function setQuantity(int $quantity)
    {
        if ($quantity < 0) {
            throw new InvalidArgumentException(message: "invalid quantity");
        } else {
            return $this->quantity = $quantity;
        }
    }

    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getTotal()
    {
        return $this->price * $this->quantity;
    }
    public function priceWithVAT()
    {
        return $this->price * (1 + self::VAT);
    }
    public function sell(int $amount)
    {
        if ($amount > $this->quantity) {
            throw new InvalidArgumentException(message: "Insufficient");
        } else {
            return $this->quantity -=  $amount;
        }
    }

    public function __string()
    {
        return "Product: $this->name , Price: $this->price , Qty: $this->quantity , Total: " . $this->getTotal();
    }
}


$product = new Product(name: "phone", price: 150, quantity: 5);
echo "total" . $product->getTotal() . "\n";
echo "price" . $product->priceWithVAT() . "\n";
echo "sell : " . $product->sell(amount: 2) . "\n";

echo "getTotal" . $product->__string();
