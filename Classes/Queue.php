<?php


class Queue
{
    protected $queue;
    protected $limit;

    public function __construct($limit)
    {
        $this->queue = [];
        $this->limit = $limit;
    }

    public function enqueue($item)
    {
        if (count($this->queue) < $this->limit) {
            array_push($this->queue, $item);
        } else {
            throw new RuntimeException ("Full Queue1");
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            throw new RuntimeException("Empty Queue!");
        } else {
            return array_shift($this->queue);
        }
    }

    public function isEmpty()
    {
        return empty($this->queue);
    }
}