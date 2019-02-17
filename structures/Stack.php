<?php

require_once __DIR__.'/IStack.php';
require_once __DIR__.'/Structure.php';

class Stack extends Structure implements IStack
{
    private $top = 0;

    public function isEmpty() {
        return $this->top === 0;
    }

    public function top() {
        if($this->isEmpty()) {
            throw new RuntimeException("Stack is empty!");
        }
        return $this->storage[$this->top-1];
    }

    public function pop()
    {
        if($this->isEmpty()) {
            throw new RuntimeException("Stack is empty!");
        }
        return $this->storage[--$this->top];
    }

    public function push($value)
    {
        $this->storage[$this->top++] = $value;
    }
}