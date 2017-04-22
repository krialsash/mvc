<?php
/**
 * Created by PhpStorm.
 * User: sash
 * Date: 19.04.17
 * Time: 17:43
 */
require_once '../model/model.php';
$del = new Article();
$sel = $del->deleteById($_GET['id']);

require_once '../view/listForm.php';

header('location:read.php' .$id);