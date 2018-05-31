<?php include ("connect_db.php");?>


    <?php

$sql = "SELECT id, title, category, created_at FROM books INNER JOIN categoria ON books.id = categoria.id_categoria";

if($result = $mysqli->query($sql)){while($row = $result->fetch_array(MYSQLI_ASSOC)){
			echo json_encode($row);
		
	}
}

?>