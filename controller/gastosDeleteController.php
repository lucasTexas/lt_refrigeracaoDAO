<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/vo/Gastos.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lt_refrigeracaoDAO/model/dao/GastosDAO.php';

$gastosDAO = GastosDAO::getInstance();

$delete = $gastosDAO->delete($_POST['id']);

if ($delete){
    header("Location: /lt_refrigeracaoDAO/controller/gastosDeleteAlert.php");
    exit();
}
