# linked-list-sorted

 - `inked-list-sorted` is a tiny library for sorting simple linked lists
 - this library provides and implements `Linked List` and `Linked List Node` data structures
 - these data structures can be work with using functionalities like: `traverse`, `sort`, `reverse`

## How to use
 1. Obtain this repository
 2. Include it to your project
 3. Prepare your own linked list [Classes/LinkedList.php](src/Classes/LinkedList.php) using [Classes/LinkedListNode.php](src/Classes/LinkedListNode.php)
     ```php
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
     ```
 4. Debug your own linked list using `traverse(callback)` method in [Classes/LinkedList.php](src/Classes/LinkedList.php)
     ```php
        $linkedList->traverse(
            (
                function(LinkedListNode $node) {
                    echo $node->getData() . PHP_EOL;
                }
            )
        );
     ```
 5. Sort ASC your own linked list using `sort()` method in [Classes/LinkedList.php](src/Classes/LinkedList.php)
    ```php
        $linkedList->reverse();
    ```
 6. Sort DESC your own linked list using `reverse()` method in [Classes/LinkedList.php](src/Classes/LinkedList.php)
    ```php
        $linkedList->sort();
    ```
 7. Demonstration of usage is described in whole here: [linkedListSorted.php](linkedListSorted.php).


## Possible future development
 - shuffle functionality to randomly change order of linked list nodes
 - implement sorting in a more native way