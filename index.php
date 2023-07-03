<?php

use src\LinkedList;

require_once 'autoload.php';

session_start();



if (!isset($_SESSION['linked_list'])) {
    $_SESSION['linked_list'] = new LinkedList();
}

$list = $_SESSION['linked_list'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = $_POST['task'];
    $list->insert($data);
}

include 'views' . DIRECTORY_SEPARATOR . 'todolist.html';

?>



