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
            $this->rear->next = $newNode;
            $this->rear = $newNode;
            var_dump($this->front);
        }
    }

    public function Dequeue()
    {
        if ($this->isEmptyQueue()) {
            return 'There is no priority in this task';
        } elseif ($this->front === $this->rear) {
            $delvalue = $this->front->data;
            $this->front = $this->rear = null;
        } else {
            $delptr = $this->front;
            $this->deqData = $delptr->data;
            $this->front = $this->front->next;
            $delvalue = $delptr->data;
            return $delvalue;
        }
    }

    public function DequeuedData()
    {
        return $this->deqData ?? 'There is no data';
    }


    public function displayQueue()
    {
        return $this->front;
    }
}