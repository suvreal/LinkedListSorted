<?php

require __DIR__ . '/vendor/autoload.php';

use Classes\LinkedList;
use Classes\LinkedListNode;
use Factories\LinkedListFactory;

// Creating Linked List Nodes into Linked List construction manually
$node = new LinkedListNode(
    'd', new LinkedListNode(
        'b', new LinkedListNode(
            'a', new LinkedListNode(
                'c',
                null
            )
        )
    )
);
$linkedList = new LinkedList($node);

// Creating linked list from array - int, string or both typed
$linkedList = LinkedListFactory::createLinkedList(
    [
        'a', 1, 2, 5, 6, 'z', 88, 10, 0, 5, 'b'
    ]
);

// Traverse through Linked List which is expected for debug using callback
$linkedList->traverse(
    (
        function(LinkedListNode $node) {
            echo $node->getData() . PHP_EOL;
        }
    )
);

// Reversing actual order of Linked List
$linkedList->reverse();

// Sorting actual order of Linked List
$linkedList->sort();
