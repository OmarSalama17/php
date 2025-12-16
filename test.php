<?php





abstract class Test
{
    abstract public function getName();
}


class User extends Test{

    private string $name;
    public function __construct($name)
    {
        $this->setName($name);
    }

        public function setName ($name){
            $this-> name = $name;
        }
    public function getName()
    {
        return "hello $this->name";
    }
}



$user= new User(name: "ali");

echo $user->getName() ;