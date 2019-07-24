<?php
/**
 * Created by PhpStorm.
 * User: hrant
 * Date: 7/23/19
 * Time: 9:41 PM
 */
try {
	$pdo = new PDO('mysql:host=localhost;dbname=cms', 'root', 'ikarus');
} catch (PDOException $e){
	exit('Database error.');
}