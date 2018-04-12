<?php

class Jaime extends Lannister
{
    public function sleepWith($class)
    {
        parent::sleepWith($class);
        if ($class instanceof Tyrion)
            print "Not even if I'm drunk !\n";
        else if ($class instanceof Cersei)
            print "With pleasure, but only in a tower in Winterfell, then.\n";
    }
}

?>