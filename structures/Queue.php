<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 17.02.2019
 * Time: 18:19
 */

require_once __DIR__.'/Structure.php';
require_once __DIR__.'/IQueue.php';

class Queue extends Structure implements IQueue
{
    private $head = 0;
    private $tail = 0;

    public function in($value)
    {
        $this->storage[$this->tail++] = $value;
    }

    public function isEmpty() {
        return $this->head === $this->tail;
    }

    public function out()
    {
        if($this->isEmpty()) {
            throw new RuntimeException("Queue is empty");
        }
        $res = $this->storage[$this->head++];
        if($this->head > $this->tail) {
            $this->head = $this->tail = 0;
        }
        return $res;
    }
}