<?php
/**
 * Created by PhpStorm.
 * User: hrant
 * Date: 7/24/19
 * Time: 3:18 PM
 */

session_start();

session_destroy();

header("Location: index.php");