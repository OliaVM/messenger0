<?php require_once __DIR__ . '/../common/header.php'; ?> 
<?php
if (isset($_SESSION['login']) && isset($_SESSION['password'])) {
	//Get the record from databases and display on the screen for editing
	if (isset($_GET['red_id'])) { 
	    $id = $_GET['red_id']; 
	    $sql3 = 'SELECT * FROM notes WHERE id='.$id.' and user_id='.$_SESSION['id'];
		$row5 = $basa->query($sql3); 
		
		//Editing the record
	    if (isset($_POST['go_edit'])) { 
	        	// Update information in the edited record in the database
				$sql = 'UPDATE notes SET note_title =:note_title, short_text =:short_text, note_text =:note_text  WHERE id =:id';
				$prep = $basa->prepare($sql);
				$prep->bindValue(':note_title', $_POST['note_title'], PDO::PARAM_STR);
				$prep->bindValue(':short_text', $_POST['short_text'], PDO::PARAM_STR);
				$prep->bindValue(':note_text', $_POST['note_text'], PDO::PARAM_STR);
				$prep->bindValue(':id', $_GET['red_id'], PDO::PARAM_INT);
				$prep->execute(); 
				header("Location: ../index.php?page=1&key=indiv");	
				//header("Location: http://myproject.local/index.php?page=1&key=indiv");	
				//http://myproject.local/index.php?page=1		
	    }
	}
}
?>

<?php
require_once __DIR__ . '/../../src/core/form/editor_form.php';	
require_once __DIR__ . '/../common/notes_list.php'; 
?>
<?php require_once __DIR__ . '/../common/footer.php'; ?> 