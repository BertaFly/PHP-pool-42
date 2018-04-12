<?php

class Tyrion extends Lannister
{
    public function sleepWith($class)
    {
        parent::sleepWith($class);
        if ($class instanceof Jaime || $class instanceof Cersei)
            print "Not even if I'm drunk !\n";
    }
}

?>