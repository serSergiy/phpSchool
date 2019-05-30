<?php

class LNode
{
    public $value;
    public $next;

    public function __construct($value = 0, $next = null)
    {
        $this->value = $value;
        $this->next = $next;
    }
}

$l = new LNode(1);
$b = $l;
$b->value = 2;
echo $l->value;