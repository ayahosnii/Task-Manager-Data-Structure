<?php

namespace src;

class LinkedList
{
    public $head;

    public function __construct()
    {
        $this->head = NULL;
    }

    public function isEmpty()
    {
        return $this->head === null;
    }

    public function insert($data)
    {
        $newNode = new Node($data);

        if ($this->isEmpty())
        {
            $newNode->next = NULL;
            $this->head = $newNode;
        }else{
            $newNode->next = $this->head;
            $this->head = $newNode;
        }
    }

    public function display()
    {
        return $this->head;
    }
}