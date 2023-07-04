<?php

use src\LinkedList;

require_once 'autoload.php';

session_start();



if (!isset($_SESSION['linked_list'])) {
    $_SESSION['linked_list'] = new LinkedList();
}

$list = $_SESSION['linked_list'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $item = $_POST['selectTask'] ?? null;
    $data = $_POST['task'];

    if ($item === null) {
        $list->insertFirst($data);
    } else {
        $list->insertBefore($item, $data);
    }
}

?>


<?php
include 'views' . DIRECTORY_SEPARATOR . 'todolist.html';
?>
