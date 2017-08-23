<!DOCTYPE html>
<html>
<head>

  <title>Book-O-Rama webstore</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
   
</head>
<body>
 
  <?php
  
  	include_once ('customers_form.php');
  
    if (isset($_POST['searchterm']) && !empty($_POST['searchterm'])) {
    	
    	// create short variable names
    	$searchterm = $_POST['searchterm'];

		//SQL
    	$query = "SELECT * FROM customers WHERE customers_tel LIKE '" . $searchterm . "%' ORDER BY customer_fname ASC, customer_lname ASC;";    	
    
    	require_once 'bind_results.php';    
    	
    	$stmt->free_result();
    	$conn->close();

    }
	    
  ?>
</body>
</html>
