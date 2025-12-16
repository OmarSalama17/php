<?php



trait TimestampTrait {
        public function getTime (){
            return "current time";
        }
}


class User {
    use TimestampTrait;
}

class Order {
    use TimestampTrait;
}


$arrays = [new User() , new Order()];

foreach($arrays as $arr){
    echo $arr->getTime() . "\n";
}