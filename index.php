<?php

class BankAccount
{
    private int $balance;
    public string $owner;
    public function __construct(string $owner, int $balance)
    {
        if ($balance < 0) {
            throw new InvalidArgumentException(message: "Balance cannot be negative");
        } else {
            $this->owner = $owner;
            $this->balance = $balance;
        }
    }

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        } else {
            return "invalid";
        }
    }

    public function withdraw($amount)
    {
        if ($amount > $this->balance) {
            return "invalid";
        } else {
            $this->balance -= $amount;
        }
    }
}


$owner = new BankAccount(owner: "omar", balance: 5);

$owner->deposit(amount: 150);

$owner->withdraw(amount: 40);

var_dump(value: $owner);
