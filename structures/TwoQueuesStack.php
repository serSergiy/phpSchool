<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 17.02.2019
 * Time: 18:22
 */
require_once __DIR__ . '/Queue.php';
require_once __DIR__ . '/IStack.php';

class TwoQueuesStack implements IStack
{
    public $queueBuffer;
    public $queueStorage;

    public function __construct()
    {
        $this->queueStorage = new Queue();
        $this->queueBuffer = new Queue();
    }

    public function isEmpty()
    {
        return $this->queueStorage->isEmpty();
    }

    public function push($value)
    {
        $this->queueStorage->in($value);
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            throw new RuntimeException("Queue is empty");
        } else {
            $value = $this->queueStorage->out();
            if (!$this->isEmpty()) {
                do {
                    $this->queueBuffer->in($value);
                    $value = $this->queueStorage->out();
                } while (!$this->queueStorage->isEmpty());

                $this->queueStorage = $this->queueBuffer;
                $this->queueBuffer = new Queue();
            }
            return $value;
        }
    }
}

