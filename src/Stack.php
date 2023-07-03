<?php

namespace src;


class Stack
{
    private $top;

    public function __construct()
    {
        $this->top = null;
    }

    public function push($data)
    {
        $newNode = new Node($data);

        if ($this->isEmpty()) {
            $this->top = $newNode;
        } else {
            $newNode->next = $this->top;
            $this->top = $newNode;
        }
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            return null;
        }

        $data = $this->top->data;
        $this->top = $this->top->next;

        return $data;
    }

    public function isEmpty()
    {
        return $this->top === null;
    }
}

?>
