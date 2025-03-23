<?php

declare(strict_types=1);

namespace Factories;

use Classes\LinkedListNode;
use Interfaces\LinkedListNodeInterface;

class LinkedListNodeFactory
{
    /**
     * @param string[]|int[] $linkedListNodesArray
     */
    public static function createFromArray(array $linkedListNodesArray): ?LinkedListNodeInterface
    {
        $previousNode = null;
        $newNode = null;

        foreach ($linkedListNodesArray as $linkedListNodeData) {
            $node = new LinkedListNode($linkedListNodeData);

            if ($newNode === null) {
                $newNode = $node;
            }

            $previousNode?->setNextNode($node);

            $previousNode = $node;
        }

        return $newNode;
    }
}