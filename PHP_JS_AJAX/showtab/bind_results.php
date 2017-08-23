<?php
    
	//Index
	$i = 1;
	
	//Load file with connect function
  	require_once('../sql/sql_connect.php');  	
	
	echo "<p>Number of books found: ".$stmt->num_rows."</p>";
	

	switch ($searchtype) {
		
		
      case 'books_review':
       	
       	//$columns = array('books_review', 'book_book_isbn');
       	
       	$stmt->bind_result($books_review, $book_book_isbn);   	

		echo '<thead><tr>' . '<th>#</th>' . '<th>ISBN</th>' . '<th class=\'review\'>Review</th>' . '</tr></thead>';

		echo '<tbody>';

   		while($stmt->fetch()) {
   			
   			echo '<tr>';
   			echo "<td>" . $i . "</td>";
      		echo "<td>" . $book_book_isbn . "</td>";
      		echo "<td>" . $books_review . "</td>";
      		echo '</tr>';
      		
      		$i++;
    	}     	
       	
       	echo '</tbody>';
      	break;
      	
      case 'orders':
       	
       	//$columns = array('order_id', 'customer_customer_id', 'order_date');
       	
       	echo '<thead><tr>' . '<th>#</th>' . '<th>Order id</th>' . '<th>Date</th>' .  '<th>Customer id</th>' . '</tr></thead>';
       	
       	$stmt->bind_result($order_id, $customer_customer_id, $order_date);   	

		echo '<tbody>';

   		while($stmt->fetch()) {
   			
   			echo '<tr>';
   			echo "<td>" . $i . "</td>";
      		echo "<td>" . $order_id . "</td>";
      		echo "<td>" . $order_date . "</td>";
      		echo "<td>" . $customer_customer_id . "</td>";
      		echo '</tr>';
      		
      		$i++;
    	}     	
    	
    	echo '</tbody>';
      	break; 
      	 
      case 'order_items':
       	
        //$columns = array('book_book_isbn', 'order_order_id', 'book_has_order_amount');
        
        echo '<thead><tr>' . '<th>#</th>' . '<th>Order id</th>' . '<th>ISBN</th>' .  '<th>Order amount</th>' . '</tr></thead>';
        
        $stmt->bind_result($book_book_isbn, $order_order_id, $book_has_order_amount);   	

		echo '<tbody>';

   		while($stmt->fetch()) {
   			
   			echo '<tr>';
   			echo "<td>" . $i . "</td>";
      		echo "<td>" . $order_order_id . "</td>";
      		echo "<td>" . $book_book_isbn . "</td>";
      		echo "<td>" . $book_has_order_amount . "</td>";
      		echo '</tr>';
      		
      		$i++;
    	}  
    	
    	   	
    	echo '</tbody>';
      	break; 
      	      
      case 'books':
		
        //$columns = array('book_title', 'book_isbn', 'book_autor', 'book_price');
        
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
      	break;
      	
      case 'customers':
       	 
        //$columns = array('customer_id', 'customer_fname', 'customer_lname', 'customer_address', 'customer_city'); 
        
         echo '<thead><tr>' . '<th>#</th>' . '<th>ID</th>' . '<th>First name</th>' . '<th>Last name</th>' . '<th>Address</th>' . '<th>City</th>' . '<th>Telephone</th>' . '</tr></thead>';
        
         $stmt->bind_result($customer_id, $customer_fname, $customer_lname, $customer_address, $customer_city, $customers_tel);   	

		echo '<tbody>';

   		while($stmt->fetch()) {
   			
   			echo '<tr>';
   			echo "<td>" . $i . "</td>";
      		echo "<td>" . $customer_id . "</td>";
      		echo "<td>" . $customer_fname . "</td>";
      		echo "<td>" . $customer_lname . "</td>";
      		echo "<td>" . $customer_address . "</td>";
      		echo "<td>" . $customer_city . "</td>";
      		echo "<td>" . $customers_tel . "</td>";
      		echo '</tr>';
      		
      		$i++;
    	} 
    	
    	echo '</tbody>';    	   	       
        break;
        
      default: 
        exit; 
	}

?>