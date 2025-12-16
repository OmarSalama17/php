<?php


interface logger
{
    public function log($msg);
    public function clear();
}


class FileLogger implements logger
{
    public function log($msg): string
    {
        return "Logging to FILE: $msg";
    }
    public function clear(): string
    {
        return "File logs cleared";
    }
}
interface Movable {
        public function move();
}

class DatabaseLogger implements logger , Movable
{
    public function move(){

    }
    public function log($msg): string
    {
        return "Logging to DATABASE: $msg";
    }
    public function clear(): string
    {
        return "Database logs cleared";
    }
}


$arr = [
    new DatabaseLogger(),
    new FileLogger(),
];

foreach ($arr as $ar) {
    echo $ar->log("folder")."\n";
    echo $ar->clear()."\n";
}
