<?php
/**
 * Created by PhpStorm.
 * User: sash
 * Date: 19.04.17
 * Time: 17:22
 */
require_once '../model/model.php';

if(!empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['created_at'])) {

    $create = new Article();
    $id=$create->create($_POST['name'], $_POST['description'], $_POST['created_at']);

    header("location:edit.php?id=".$id);
}

$created_at = date('Y-m-d H:i:s', time());

require_once '../view/createForm.php';