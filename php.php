<?php



class User {
    public string $name;
    public int $age;

    public function __construct($name , $age)
    {
        if($age < 0 ){
            throw new InvalidArgumentException(message: "invalid age");
        }else{
            $this->age=$age;
            $this->name = $name;
        }
    }
}

$user = new User(name:"omar" , age:-5);
var_dump($user);