<?php
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "cars"; 
    $conn = new mysqli($servername, $username, $password, $dbname); 
    if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
    } 
    //$sql = "SELECT * FROM customerinfo" ;
    $sql = "SELECT * FROM customer" ;
    $result = $conn->query($sql);
?>
            
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>    
    <!-- CSS style sheet -->
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
 .container{
	width: 650px;
	padding: 4% 4% 4%;
	margin : auto;
	box-shadow: 10px 10px 5px #888888;
	background-color: #fff;
	text-align: center;
	position:relative;
	top:50px;
	vertical-align: middle;
	background-color: #ffdb4d;
}
form{
	align-content: center;
	padding:10px;
	margin-top: 15px;
}
input
{
	margin :5px;
}

a{
	color:#f00f53;
	text-decoration: none;
	align-content: right;
}

.button{
	width :150px;
	margin :10px;
	padding:5px;
	font-weight: bold;
	text-align: center;
	background-color: #a30003;
	position:relative;
	right:-100px;
	color:white;
}


body{
	background-image: url('lg9.jpg');
	background-repeat: no-repeat; 
	background-size: cover;
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
    </style>
</head>

<body>
  <!-- navbar -->
   <!--Navbar-->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="logo.jpg" alt="" width="55" height="55" class="d-inline-block align-text-top">
          <a class="navbar-brand" href="#">Cars</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Products
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="https://www.audi.com/en.html">Audi</a></li>
                  <li><a class="dropdown-item" href="https://www.ferrari.com/en-IN">Ferrari</a></li>
                  <li><a class="dropdown-item" href="https://www.india.ford.com/">Ford</a></li>
                  <li><a class="dropdown-item" href="https://www.mercedes-benz.com/en/">Mercedes</a></li>
                  <li><a class="dropdown-item" href="https://www.honda2wheelersindia.com/">Honda</a></li>
                  <li><a class="dropdown-item" href="https://www.toyotabharat.com/">Toyota</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="view_customers.php" >Customer Details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="view_products.php" >Products Details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php" >Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
       <div class="container">
            <h2 style="text-align: center">Customer Details</h2>
            <br>                   
            <table id="customers">
                <thead>
                    <tr>
                    <th>Customer ID</th>
                    <th>Customer Name</th>
                    <th>Phone no</th>
                    <th>Address</th>
                    </tr>
                </thead>                     
                <?php
                while($row = $result->fetch_assoc()) { 
                ?> 
                <tr>
                    <td><?php echo $row['customer_id']; ?></td>
                    <td><?php echo $row['C_name']; ?></td>
                    
                    <td ><?php echo $row['Phone_no']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    
                </tr>
                <?php
                }
                $conn->close();
                ?> 
            </table>
        </div>
        <footer style="text-align: center">
            
        </footer>
</body>
</html>


