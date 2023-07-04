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

    public function isFound($item)
    {
        $found = false;
        $temp = $this->head;
        while ($temp != NULL)
        {

            if ($temp == $item)
            {
                $found = true;
                break;
            }
            $temp = $temp->next;
        }
        return $found;
    }

    public function insertFirst($data)
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
    public function insertBefore($item, $newValue)
    {
        if ($this->isEmpty()) {
            $this->insertFirst($newValue);
        } else {
            $newNode = new Node($newValue);
            $temp = $this->head;

            while ($temp !== null && $temp->data !== $item) {
                $temp = $temp->next;
            }

            $newNode->next = $temp->next;
            $temp->next = $newNode;
        }
    }




    public function display()
    {
        return $this->head;
    }
}