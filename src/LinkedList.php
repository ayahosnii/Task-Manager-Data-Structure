<?php

namespace src;

class LinkedList
{
    public $head;
    public $top;

    public function __construct()
    {
        $this->head = NULL;
        $this->top = NULL;

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

    public function insertFirst($newNode)
    {
        if ($this->isEmpty())
        {
            $newNode->next = NULL;
            $this->head = $newNode;
        }else{
            $newNode->next = $this->head;
            $this->head = $newNode;
        }
    }
    public function insertBefore($item, $newNode)
    {
        if ($this->isEmpty()) {
            $this->insertFirst($newNode);
        } else {
            $temp = $this->head;

            while ($temp !== null && $temp->data !== $item) {
                $temp = $temp->next;
            }

            $newNode->next = $temp->next;
            $temp->next = $newNode;
        }
    }

    //Stack




    public function display()
    {
       return $this->head;

    }
    public function push()
    {
        $value = $this->poppedNodes;
        var_dump($value);
        $newNode = new Node($value); // Create a new node with the value

        if ($this->isEmpty()) {
            $this->head = $newNode;
        } else {
            $newNode->next = $this->head; // Set the new node's next pointer to the current head
            $this->head = $newNode; // Update the head of the stack to the new node
        }
        $this->poppedNodes = null;
    }


    public function pop()
    {
        if ($this->isEmpty()) {
            return null;
        }

        $top = $this->head; // Store the current head of the stack in $top

        $value = $top->data; // Store the data of the top node in $value (this is the value being popped)
        $this->head = $top->next; // Update the head of the stack to the next node (removing the top node)

        $this->poppedNodes = $top->data; // Store the popped node in the poppedNodes array

        return $value; // Return the value of the popped element
    }



}