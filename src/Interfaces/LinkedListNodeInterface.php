<?php

declare(strict_types=1);

namespace Interfaces;

interface LinkedListNodeInterface
{
    public function setNextNode(?LinkedListNodeInterface $node = null): void;

    public function getNextNode(): ?LinkedListNodeInterface;

    public function setData(int|string $data): void;

    public function getData(): int|string;
}