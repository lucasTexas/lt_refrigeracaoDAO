<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/vo/Ganhos.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/dao/GanhosDAO.php';

$ganhosDAO = GanhosDAO::getInstance();

$delete = $ganhosDAO->delete($_POST['id']);

if ($delete){
    header("Location: /lt_refrigeracaoDAO/controller/ganhosDeleteAlert.php");
    exit();
}
