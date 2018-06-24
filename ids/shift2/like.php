<?php
// require_once 'init.php';
define('user','root');
define('password','Kaustubh12');
define('host','localhost');
define('name','ids2');
include "21.php";
echo $var;
echo 'dsads';
include "php_login/core.inc.php";
// require "core.inc.php";
// require "connect.inc.php";

$db = mysqli_connect(host,user,password,name)
OR die('could not connect to mysql'.mysqli_connect_error());

if(isset($_GET['type'], $_GET['id'])) {

	$type = $_GET['type'];
	$pos = $_GET['pos'];
	$id  = $_GET['id'];
	$roll = $_SESSION['user_id'];

	switch($type) {
		case 'like':
			echo 'OK!!!';
			echo $pos;
			echo 'OK!!!';
			echo $id;
			echo 'OK!!!';
			echo $type;
			echo 'OK!!!';
			echo $roll;
			$result = $db->query("

				SELECT dislikes FROM promises_likes WHERE (userid = '{$_SESSION['user_id']}' AND promiseid = {$id} AND likes = 0 AND dislikes = 1)
			");

			// $db->query("
			// 		INSERT INTO promises_likes (promiseid, userid)
			// 		SELECT {$id}, {$_SESSION['user_id']}
			// 		FROM promises
			// 		WHERE EXISTS (
			// 			SELECT promiseid
			// 			FROM promises
			// 			WHERE promiseid = {$id})
			// 		AND NOT EXISTS (
			// 			SELECT id
			// 			FROM promises_likes
			// 			WHERE promiseid = {$id}
			// 			AND userid = {$_SESSION['user_id']})
			// 		LIMIT 1
			// ");

			if($result->num_rows == 0) 
			{
				$db->query("
					INSERT INTO promises_likes (userid, promiseid)
					SELECT '{$_SESSION['user_id']}', {$id}
					FROM promises
					WHERE EXISTS (
						SELECT promiseid
						FROM promises
						WHERE promiseid = {$id})
					AND NOT EXISTS (
						SELECT id
						FROM promises_likes
						WHERE promiseid = {$id}
						AND userid = '{$_SESSION['user_id']}')
					LIMIT 1
				");
				$db->query(" 
					UPDATE promises_likes set likes = 1, dislikes = 0
					WHERE (userid = '{$_SESSION['user_id']}' AND promiseid = {$id})
				");

			}

		break;

		case 'dislike':
			// echo "ok5";
			$result2 = $db->query("

				SELECT likes FROM promises_likes WHERE (userid = '{$_SESSION['user_id']}' AND promiseid = {$id} AND likes = 1 AND dislikes = 0)
			");

			if($result2->num_rows == 0) 
			{
				echo 'OK3!!!';
				$db->query("
					INSERT INTO promises_likes (userid, promiseid)
					SELECT '{$_SESSION['user_id']}', {$id} 
					FROM promises
					WHERE EXISTS (
						SELECT promiseid
						FROM promises
						WHERE promiseid = {$id})
					AND NOT EXISTS (
						SELECT id
						FROM promises_likes
						WHERE promiseid = {$id}
						AND userid = '{$_SESSION['user_id']}')
					LIMIT 1
				");
				echo 'OK4!!!';
				$db->query(" 
					UPDATE promises_likes set likes = 0, dislikes = 1
					WHERE (userid = '{$_SESSION['user_id']}' AND promiseid = {$id})
				");
				echo 'OK5!!!';

			}


		break;
	}
}

header('Location:'.$pos);

