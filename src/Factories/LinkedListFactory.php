<?php

declare(strict_types=1);

namespace Factories;

use Classes\LinkedList;

class LinkedListFactory
{
    /**
     * @param string[]|int[] $linkedListData
     */
    public static function createLinkedList(array $linkedListData): LinkedList
    {
        return new LinkedList(
            LinkedListNodeFactory::createFromArray(
                $linkedListData
            )
        );
    }
}