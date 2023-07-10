<?php

namespace src;

class Node
{
    public $data;
    public $next;
    public $priority;

    public function __construct($data, $priority)
    {
        $this->data = $data;
        $this->priority = $priority;
        $this->next = NULL;
    }

}
