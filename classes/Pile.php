<?php

class Pile
{
    private array $pile;
    private int $nbElements;

    public function __construct()
    {
        $this->pile = array();
        $this->nbElements = 0;
    }

    public function reinitialiserPile()
    {
        $this->nbElements = 0;
    }

    public function empiler($element)
    {
        $this->pile[$this->nbElements] = $element;
        $this->nbElements++;
    }

    public function depiler()
    {
        $this->nbElements--;
        return $this->pile[$this->nbElements];
    }

    public function vide()
    {
        if ($this->nbElements == 0) return TRUE;
        else return FALSE;
    }
}
