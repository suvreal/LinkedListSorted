<?php

declare(strict_types=1);

namespace Classes;

use Interfaces\LinkedListNodeInterface;

class LinkedListNode implements LinkedListNodeInterface
{
    public function __construct(
        private int|string      $data,
        private ?LinkedListNode $nextNode = null,
    )
    {
    }

    public function setNextNode(?LinkedListNodeInterface $node = null): void
    {
        $this->nextNode = $node;
    }

    public function setData(int|string $data): void
    {
        $this->data = $data;
    }

    public function getNextNode(): ?LinkedListNode
    {
        return $this->nextNode;
    }

    public function getData(): int|string
    {
        return $this->data;
    }
}