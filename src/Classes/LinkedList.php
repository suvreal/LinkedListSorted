<?php

declare(strict_types=1);

namespace Classes;

use Factories\LinkedListNodeFactory;
use Interfaces\LinkedListInterface;
use Transformers\LinkedListNodeTransformer;

class LinkedList implements LinkedListInterface
{
    public function __construct(
        private LinkedListNode $rootNode,
    )
    {
    }

    public function getRootNode(): LinkedListNode
    {
        return $this->rootNode;
    }

    private function setRootNode(LinkedListNode $node): void
    {
        $this->rootNode = $node;
    }

    public function traverse(?callable $callback = null): void
    {
        $node = $this->getRootNode();

        while ($node !== null) {
            if ($callback !== null) {
                $callback(
                    $node
                );
            }

            if ($node->getNextNode() === null) {
                break;
            }
            $node = $node->getNextNode();
        }
    }

    public function reverse(): void
    {
        $node = $this->getRootNode();

        $previousNode = null;

        while ($node !== null) {
            $nextNode = $node->getNextNode();

            $node->setNextNode($previousNode);
            $previousNode = $node;

            if ($nextNode === null) {
                break;
            }
            $node = $nextNode;
        }

        $this->setRootNode($node);
    }

    public function sort(): void
    {
        $node = $this->getRootNode();

        $linkedListNodesArray = LinkedListNodeTransformer::toArray($node);

        sort($linkedListNodesArray);

        $newNode = LinkedListNodeFactory::createFromArray($linkedListNodesArray);

        if ($newNode !== null) {
            $this->setRootNode($newNode);
        }
    }
}