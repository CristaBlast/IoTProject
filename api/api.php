<?php
header('Content-Type: text/html; charset=utf-8');
//optimize?
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['valor']) && $_POST['nome'] && $_POST['hora']) {
        file_put_contents("files/" . $_POST['nome'] . "/valor.txt", $_POST['valor']);
        //file_put_contents("files/".$_POST['nome']."/name.txt", $_POST['nome']);
        file_put_contents("files/" . $_POST['nome'] . "/time.txt", $_POST['hora']);
        file_put_contents("files/" . $_POST['nome'] . "/log.txt", $_POST['hora'] . ';' . $_POST['valor'] . PHP_EOL, FILE_APPEND);
    } else {
        http_response_code(400);
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['nome'])) {
        echo file_get_contents("files/" . $_GET['nome'] . "/valor.txt");
    } else {
        http_response_code(400);
    }
} else {
    http_response_code(403);
}
