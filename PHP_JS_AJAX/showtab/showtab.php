<!DOCTYPE html>
<html>
<head>
  <title>Book-O-Rama Search Results</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
  
  <?php


if(isset($_POST['searchtype'])){

	// create short variable names
    $searchtype = $_POST['searchtype'];
    //$searchterm="%{$_POST['searchterm']}%";
    
    $query;

    // Create SQL query:
    switch ($searchtype) {
      case 'books_review':
       	$query = "SELECT * FROM books_reviews;";
       	//$columns = array('books_review', 'book_book_isbn');
      	break;
      case 'orders':
       	$query = "SELECT * FROM orders;";
       	//$columns = array('order_id', 'customer_customer_id', 'order_date');
      	break;  
      case 'order_items':
       	$query = "SELECT * FROM order_items;";
        //$columns = array('book_book_isbn', 'order_order_id', 'book_has_order_amount');
      	break;       
      case 'books':
		$query = "SELECT * FROM books;";
        //$columns = array('book_title', 'book_isbn', 'book_autor', 'book_price');
      	break;
      case 'customers':
       	$query = "SELECT * FROM customers ORDER BY customer_fname ASC, customer_lname ASC;";  
        //$columns = array('customer_id', 'customer_fname', 'customer_lname', 'customer_address', 'customer_city'); 
        break;
      default: 
        echo '<p>That is not a valid search type. <br/>
        Please go back and try again.</p>';
        exit; 
    }

   
    include_once 'showtab_form.php'; 

    echo '<table>';   
     
	require_once 'bind_results.php';
     	
	echo '</table>';

    $stmt->free_result();
    $conn->close();

}
else{

	echo '<p>Unexpected error.<br/>Please go back and try again.</p>';
    exit;
} 
    
  ?>

</body>
</html>
