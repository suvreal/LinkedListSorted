<?php

declare(strict_types=1);

namespace Interfaces;

use Classes\LinkedListNode;

interface LinkedListInterface
{
    public function getRootNode(): ?LinkedListNode;

    public function traverse(?callable $callback = null): void;

    public function reverse(): void;

    public function sort(): void;
}