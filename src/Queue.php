<?php

namespace src;

class Queue
{
    public $front;
    public $rear;

    public function __construct()
    {
        $this->front = $this->rear = NULL;
    }

    public function isEmptyQueue()
    {
        return $this->front == NULL;
    }

    public function Enqueue($data, $priority)
    {
        $newNode = new Node($data, $priority);
        $newNode->data = $data;
        $newNode->priority = $priority;
        if ($this->isEmptyQueue()){
            $this->front = $this->rear = $newNode;
        } else {
            $newNode->next = $this->front;
            $this->front = $newNode;
        }
    }

/*    public function Dequeue()
    {
        if ($this->isEmptyQueue()) {
            return 'There is no priority in this task';
        }

        if ($this->front === $this->rear) {
            $removedNode = $this->front;
            $this->front = $this->rear = null;
            return $removedNode->data;
        }

        $currentNode = $this->front;
        while ($currentNode->next !== $this->rear) {
            $currentNode = $currentNode->next;
        }

        $removedNode = $currentNode->next;
        $currentNode->next = null;
        $this->rear = $currentNode;

        return $removedNode->data;
    }
*/

    public function Dequeue()
    {
        if ($this->isEmptyQueue()) {
            return 'There is no priority in this task';
        } elseif ($this->front === $this->rear) {
            $delvalue = $this->front->data;
            $this->front = $this->rear = null;
        } else {
            $front = $this->front;
            $delptr = $front;
            while ($front->next !== NULL){
                $currentNode = $currentNode->next;
            }
        }

        return $delptr;
    }



    public function displayQueue()
    {
        return $this->rear;
    }
}