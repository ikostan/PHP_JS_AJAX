<!DOCTYPE html>
<html>
<head>
  <title>Book-O-Rama webstore</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

  <?php
  
  if(isset($_POST['searchprice']) && isset($_POST['searchterm']) && $_POST['searchprice'] != null){
  
    // create short variable names
    $searchprice = $_POST['searchprice'];
    $searchterm = $_POST['searchterm'];

	$query;

    // Create SQL query:
    switch ($searchterm) {
    	
      case 'above':
      
      	$query = "SELECT * FROM books WHERE book_price > " . $searchprice . " ORDER BY book_price ASC";
        //$columns = array('book_title', 'book_isbn', 'book_autor', 'book_price');
      	break;
      case 'below':
      
      	$query = "SELECT * FROM books WHERE book_price < " . $searchprice . "  ORDER BY book_price ASC;";
        //$columns = array('book_title', 'book_isbn', 'book_autor', 'book_price');
      	break;      
      default: 
        echo '<p>That is not a valid search type. <br/>
        Please go back and try again.</p>';
        exit; 
    }

	include_once 'showprice_form.php'; 

    echo '<table>';   
     
	require_once 'bind_results.php';
     	
	echo '</table>';

    $stmt->free_result();
    $conn->close();
    
	}
	else{
		
		echo '<div id="menu">
		<span class="mitem"><a href="../index.html">Home</a></span>
		<span class="mitem"><a href="../showtab/showtable.html">Show All Tables</a></span>
		<span class="mitem"><a href="../showprice/showprice.html">Show Price</a></span>
		<span class="mitem"><a href="../showcust/showcustomer.html">Find a Customer: Ajax</a></span><br/>
		<span class="mitem"><a href="../showcust/showcust.php">Find a Customer: PHP</a></span>
	</div>';
	
	echo '<p>You have not entered search details.<br/>
       Please go back and try again.</p>';
       exit;
	}
    
  ?>
</body>
</html>
