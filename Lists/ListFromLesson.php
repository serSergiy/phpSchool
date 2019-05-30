<?php
abstract class LinkedList
{
    /** @var SeparateNode */
    private $head = null;
    private $tail = null;
    // todo use tail
    public function append($value) {
        $newElement = new SeparateNode();
        $newElement->setValue($value);
        if(!empty($this->head)) {
            /** @var SeparateNode $lastElement */
            $lastElement = $this->head;
            // O(n)
            while (!empty($lastElement->getNext())) {
                $lastElement = $lastElement->getNext();
            }
            $lastElement->setNext($newElement);
        } else {
            $this->head = $newElement;
        }
    }
    public function prepend($value) {
        $obj = new SeparateNode();
        $obj->setValue($value);
        $headObj = $this->head;
        $obj->setNext($headObj);
        $this->head = $obj;
    }
    public function deleteFromHead() {
        if(empty($this->head)) {
            throw new RuntimeException("Notice");
        }
        $this->head = $this->head->getNext();
    }
    // todo use tail
    public function deleteFromEnd() {
        if(!empty($this->head)) {
            /** @var SeparateNode $lastElement */
            $lastElement = $this->head;
            $prev = null;
            // O(n)
            while (!empty($lastElement->getNext())) {
                $prev = $lastElement;
                $lastElement = $lastElement->getNext();
            } // end of the list
            $prev->setNext(null);
        } else {
            throw new RuntimeException('Notice');
        }
    }

    abstract public function insertAfterAt($value, $at); //
    abstract public function insertBeforeAt($value, $at); //
    abstract public function deleteAt($value, $at); //
    abstract public function search();
}