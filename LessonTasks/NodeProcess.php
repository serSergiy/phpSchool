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

function processLists($node1, $node2){
    $excess = 0;
    $nodeResultHead = null;
    $currentNode = null;

    if (empty($node1)&&empty($node2)){
        throw Exception("Empty");
    } else {
        while (!empty($node1)||(!empty($node2))||$excess === 1){
            $term1 = empty($node1) ? 0 : $node1->value;
            $term2 = empty($node2) ? 0 : $node2->value;
            goNext($node1,$node2);
            $newNode = sumIntoNode($term1, $term2, $excess);

            if (empty($nodeResultHead)) {
                $nodeResultHead = $newNode;
                $currentNode = $newNode;
            } else {
                $currentNode->next = $newNode;
                $currentNode = $newNode;
            }
        }
    }
    return $nodeResultHead;
}

function sumIntoNode($value1, $value2, &$excess)
{
    $sum = $value1 + $value2 + $excess;
    $excess = intdiv($sum, 10);
    return new LNode($sum % 10);
}

function printList($node)
{
    while (!empty($node)){
        echo $node->value, ' ';
        $node = $node->next;
    }
    echo PHP_EOL;
}

function goNext(&$node1, &$node2)
{
    if (!empty($node1)) {
        $node1 = $node1->next;
    }
    if (!empty($node2)) {
        $node2 = $node2->next;
    }
}

function fillList(...$args)
{
    if (empty($args)){
        throw Exception('No parameters');
    } else {
        $nodeResultHead = null;
        $currentNode = null;
        foreach ($args as $value) {
            $newNode = new LNODE($value);
            if (empty($nodeResultHead)) {
                $nodeResultHead = $newNode;
                $currentNode = $newNode;
            } else {
                $currentNode->next = $newNode;
                $currentNode = $newNode;
            }
        }
        return $nodeResultHead;
    }
}

//Tests
$list1 = fillList(9, 9, 9);
$list2 = fillList(9, 9, 9, 9, 9);

echo 'Nodes 1:', PHP_EOL;
printList($list1);
echo 'Nodes 2:', PHP_EOL;
printList($list2);

$res = processLists($list1, $list2);
echo 'Process result:', PHP_EOL;
printList($res);

echo PHP_EOL, 'Simple:', PHP_EOL;
$list1 = fillList(8, 3, 4);
$list2 = fillList(7, 6, 1);

echo 'New list 1:', PHP_EOL;
printList($list1);
echo 'New list 2:', PHP_EOL;
printList($list2);

$res = processLists($list1, $list2);
echo 'Process result:', PHP_EOL;
printList($res);