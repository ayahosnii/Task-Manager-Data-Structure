<?php

namespace src;

class TaskManager
{
    public $list;
    public $queue;

    public function __construct()
    {
        $this->list = new LinkedList();
        $this->queue = new Queue();
    }
}
