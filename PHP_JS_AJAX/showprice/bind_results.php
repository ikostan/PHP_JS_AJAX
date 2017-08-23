<?php
    
	//Index
	$i = 1;
	
	//Load file with connect function
  	require_once('../sql/sql_connect.php');  	
	
	echo "<p>Number of books found: ".$stmt->num_rows."</p>";
	 	

	if($stmt->num_rows > 0){
		
		echo '<thead><tr>' . '<th>#</th>' . '<th>ISBN</th>' . '<th>Title</th>' . '<th>Autor</th>' .  '<th>Price</th>' . '</tr></thead>';
        
   		$stmt->bind_result($book_title, $book_isbn, $book_autor, $book_price);  
		
		echo '<tbody>';

   		while($stmt->fetch()) {
   			
   			echo '<tr>';
   			echo "<td>" . $i . "</td>";
      		echo "<td>" . $book_isbn . "</td>";
      		echo "<td>" . $book_title . "</td>";
      		echo "<td>" . $book_autor . "</td>";
      		echo "<td> $" . $book_price . "</td>";
      		echo '</tr>';
      		
      		$i++;
    	}     	
    	   	   	
    	echo '</tbody>';
	}
	

?>