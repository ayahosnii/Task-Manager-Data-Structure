<?php

use src\LinkedList;
use src\Node;
use src\Queue;
use src\TaskManager;

require_once 'autoload.php';

session_start();

if (!isset($_SESSION['task_manager'])) {
    $_SESSION['task_manager'] = new TaskManager();
}

$taskManager = $_SESSION['task_manager'];
$list = $taskManager->list;
$queue = $taskManager->queue;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        if ($_POST['action'] === 'Submit') {
            $item = $_POST['selectTask'] ?? null;
            $priority = $_POST['priority'] ?? 0;
            $data = $_POST['task'];

            if ($priority === '0') { // Use string comparison here
                $newNode = new Node($data, $priority);

                if ($item === null) {
                    $list->insertFirst($newNode);
                } else {
                    $list->insertBefore($item, $newNode);
                }
            } elseif ($priority === '1') { // Use string comparison here
                $queue->Enqueue($data, $priority);
            }
        } elseif ($_POST['action'] === 'Undo') {
            $list->pop();
        } elseif ($_POST['action'] === 'Redo') {
            $list->push();
        } elseif ($_POST['action'] === 'Dequeue') {
            $queue->Dequeue();
        }
    }
    $temp = $list->display();
    var_dump($queue->DequeuedData());

    //var_dump($temp);
    //var_dump($queue->displayQueue());
    //var_dump($list->Dequeue());
}

include 'views' . DIRECTORY_SEPARATOR . 'todolist.html';

?>
