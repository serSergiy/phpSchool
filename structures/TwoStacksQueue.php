<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 17.02.2019
 * Time: 18:22
 */
require_once __DIR__.'/Stack.php';
require_once __DIR__.'/IQueue.php';

class TwoStacksQueue implements IQueue
{
    public $stackBuffer;
    public $stackStorage;

    public function __construct()
    {
        $this->stackStorage = new Stack();
        $this->stackBuffer = new Stack();
    }

    public function isEmpty() {
        return $this->stackBuffer->isEmpty() && $this->stackStorage->isEmpty();
    }

    public function in($value)
    {
        $this->stackBuffer->push($value);
    }

    public function out()
    {
        if($this->isEmpty()) {
            throw new RuntimeException("Queue is empty");
        } elseif ($this->stackStorage->isEmpty()) {
            while (!$this->stackBuffer->isEmpty()) {
                $this->stackStorage->push($this->stackBuffer->pop());
            }
        }
        return $this->stackStorage->pop();
    }
}


