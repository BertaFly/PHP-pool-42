<?php

class NightsWatch implements IFighter
{
    private $_squad = array();
    public function recruit($name)
    {
        $this->_squad[] = $name;
    }
    public function fight()
    {
        foreach ($this->_squad as $name)
        {
            if (method_exists($name,'fight'))
                $name->fight();
        }

    }
}

?>