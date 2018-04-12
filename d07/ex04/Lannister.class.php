<?php

class Lannister
{
    public function sleepWith($class)
    {
        if (($this instanceof Jaime || $this instanceof Tyrion) && $class instanceof Sansa)
            print "Let's do this.\n";
    }
}

?>