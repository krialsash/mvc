<?php
/**
 * Created by PhpStorm.
 * User: sash
 * Date: 19.04.17
 * Time: 17:16
 */
require_once '../model/model.php';
$selected = new Article();
$sel = $selected->posts();

require_once '../view/listForm.php';