<?php
function submitDb($sql, $basa, $data) {
				$prep = $basa->prepare($sql);
				$prep->bindValue(':user_id', $_SESSION['id'], PDO::PARAM_STR);
				$prep->bindValue(':note_title', $_POST['note_title'], PDO::PARAM_STR);
				$prep->bindValue(':note_text', $_POST['note_text'], PDO::PARAM_STR);
				$prep->bindValue(':short_text', $_POST['short_text'], PDO::PARAM_STR);
				$prep->bindValue(':data', $data, PDO::PARAM_STR);
				$arr = $prep->execute(); 
				return $arr;
}