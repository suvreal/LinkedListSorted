<?php

declare(strict_types=1);

namespace Transformers;

use Interfaces\LinkedListNodeInterface;

class LinkedListNodeTransformer
{
    /**
     * @return string[]|int[]
     */
    public static function toArray(LinkedListNodeInterface $node): array
    {
        $linkedListNodesArray = [];

        while ($node !== null) {
            $linkedListNodesArray[] = $node->getData();

            if ($node->getNextNode() === null) {
                break;
            }
            $node = $node->getNextNode();
        }

        return $linkedListNodesArray;
    }
}