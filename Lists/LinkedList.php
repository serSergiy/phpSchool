<?php

require_once 'SeparateNode.php';

class LinkedList
{
    private $head;
    private $tail;

    public function append($value)
    {
        $obj = new SeparateNode();
        $obj->setValue($value);
        if (!empty($this->head)) {
            $this->tail->setNext($obj);
            $obj->setPrev($this->tail);
            $this->tail = $obj;
        } else {
            $this->head = $obj;
            $this->tail = $obj;
        }
    }

    public function prepend($value)
    {
        /** @var SeparateNode $obj */
        $obj = new SeparateNode();
        $obj->setValue($value);

        $headObj = $this->head;
        $obj->setNext($headObj);
        $headObj->serPrev($obj);
        $this->head = $obj;
    }

    public function deleteFromHead()
    {
        if (empty($this->head)) {
            throw new RuntimeException("Head is empty");
        }

        $this->head = $this->head->getNext();
        if (empty($this->head)) {
            $this->tail = null;
        } else {
            $this->head->setPrev(null);
        }
    }

    public function deleteFromEnd()
    {
        if (empty($this->head)) {
            throw new RuntimeException('List is empty');
        }

        if (empty($this->tail->getPrev())) {
            $this->head = null;
            $this->tail = null;
        } else {
            $this->tail->getPrev()->setNext(null);
            $this->tail = $this->tail->getPrev();
        }
    }

    /**
     * @param $value
     * @param $at SeparateNode
     */
    public function insertAfterAt($value, $at)
    {
        if (empty($at)) {
            throw Exception("Can't insert on empty object");
        }
        $newNode = new SeparateNode();
        $newNode->setValue($value);
        /** @var SeparateNode $tempNext */
        $tempNext = $at->getNext();
        if (!empty($tempNext)) {
            $tempNext->setPrev($newNode);
            $newNode->setNext($tempNext);
        }
        $at->setNext($newNode);
    }

    /**
     * @param $value
     * @param $at SeparateNode
     */
    public function insertBeforeAt($value, $at)
    {
        if (empty($at)) {
            throw Exception("Can't insert on empty object");
        }
        $newNode = new SeparateNode();
        $newNode->setValue($value);
        /** @var SeparateNode $tempPrev */
        $tempPrev = $at->getPrev();
        if (!empty($tempPrev)) {
            $tempPrev->setNext($newNode);
            $newNode->setPrev($tempPrev);
        }
        $at->setPrev($newNode);
    }

    /**
     * @param $at SeparateNode
     */
    public function deleteAt($at)
    {
        if (empty($at)) {
            throw Exception("Can't delete an empty object");
        }
        $tempPrev = $at->getPrev();
        if (!empty($tempPrev)) {
            $tempPrev->setNext($at->getNext());
        }
        $tempNext = $at->getNext();
        if (!empty($tempNext)) {
            $tempNext->setPrev($at->getPrev());
        }
    }

    public function search($value)
    {
        if (empty($this->head)) {
            throw Exception('List is empty');
        }

        /** @var SeparateNode $currentElement */
        $currentElement = $this->head;
        while (!empty($currentElement->getNext())) {
            if ($currentElement->getValue() == $value){
                return $currentElement;
            }
            $currentElement = $currentElement->getNext();
        }
        return null;
    }
}