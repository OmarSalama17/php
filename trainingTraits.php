<?php


trait TraitA
{
    public function say()
    {
        return "A";
    }
}

trait TraitB
{
    public function say()
    {
        return "B";
    }
}


class Test
{
    use TraitA, TraitB {
        TraitA::say insteadof TraitB;
        TraitB::say as testFromB;
    }
}


$x = new Test();
echo $x->say(), $x->testFromB();
