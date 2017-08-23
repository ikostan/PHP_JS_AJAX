<?php
  
    if (isset($_POST['searchterm']) && !empty($_POST['searchterm'])) {
    	
    	// create short variable names
    	$searchterm = $_POST['searchterm'];

		//SQL
    	$query = "SELECT * FROM customers WHERE customers_tel LIKE '" . $searchterm . "%' ORDER BY customer_fname ASC, customer_lname ASC;";
    
    	require_once 'bind_results.php';   
    	
    	$stmt->free_result();
    	$conn->close();

    }
    else{
		
		echo '<p>You have not entered a valid search details.<br/>
       	Please try again.</p>';
       	exit;
	}
	    
?>

