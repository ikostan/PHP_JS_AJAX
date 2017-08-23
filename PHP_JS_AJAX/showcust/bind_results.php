<?php
    
	//Index
	$i = 1;
	
	//Load file with connect function
  	require_once('../sql/sql_connect.php');  	
	
	echo '<h3>Search results:</h3>';
	
	echo '<div id="display">';
	 	
	if($stmt->num_rows > 0){
		
		echo "<p>Number of customers found: ".$stmt->num_rows."</p>";
		
		echo '<table><thead><tr>' . '<th>#</th>' . '<th>ID</th>' . '<th>First name</th>' . '<th>Last name</th>' . '<th>Address</th>' . '<th>City</th>' . '<th>Telephone</th>' . '</tr></thead>';
        
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
    	
    	echo '</tbody></tbody></table>';
    	echo '</div>';
	}
	else{

		//echo '<h3>Search results:</h3>';
		echo '<p>You have not entered a valid search details.<br/>
       	Please try again.</p>';
       	exit;
	}
	

?>