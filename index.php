<?php

use src\LinkedList;
use src\Node;

require_once 'autoload.php';

session_start();

if (!isset($_SESSION['linked_list'])) {
    $_SESSION['linked_list'] = new LinkedList();
}



$list = $_SESSION['linked_list'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        if ($_POST['action'] === 'Submit') {
            $item = $_POST['selectTask'] ?? null;
            $data = $_POST['task'];

            $newNode = new Node($data);

            if ($item === null) {
                $list->insertFirst($newNode);
            } else {
                $list->insertBefore($item, $newNode);
            }


        } elseif ($_POST['action'] === 'Undo') {
            $list->pop();
        } elseif ($_POST['action'] === 'Redo') {
            $list->push();
        }
    }

    $temp = $list->display();
}
include 'views' . DIRECTORY_SEPARATOR . 'todolist.html';

?>
