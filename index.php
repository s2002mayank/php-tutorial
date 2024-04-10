<?php
    $server='localhost';
    $username='root';
    $password='';
    $database='students'; 

    $conn= mysqli_connect($server, $username, $password, $database);

    if(!$conn){
        die("connection to this database failed due to". mysqli_connect_error());  
    }
        
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if all fields are filled
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['dob']) && !empty($_POST['phone']) && !empty($_POST['description'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $dob = $_POST['dob'];
            $phone = $_POST['phone'];
            $description = $_POST['description'];
            
            // Prepare SQL statement to prevent SQL injection
            $sql = $conn->prepare("INSERT INTO studentbase (name, email, DOB, phone, remarks, date) VALUES (?, ?, ?, ?, ?, current_timestamp())");
            $sql->bind_param("sssss", $name, $email, $dob, $phone, $description);
            
            // Execute the query
            if ($sql->execute()) {
                echo "Data inserted successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            // Close prepared statement
            $sql->close();
        } else {
            echo "All fields are required";
        }
    }
    
    // Close the database connection
    $conn->close();
?>

<!DOCTYPE html>
<htm
l lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
    <div class="container">
    <h2>Registration Form</h2>  
    <p>Kindly fill the necessary details.</p>     
    
    <form action="index.php" method="post">        
        <div class="form-field">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="enter your name">        
        </div>
        <div class="form-field">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="enter your email">
        </div>
        <div class="form-field">            
            <label for="date">D.O.B.</label>
            <input type="date" name="dob" id="dob" placeholder="enter your D.O.B.">        
        </div>
        <div class="form-field">
            <label for="phone">Phone Number</label>
            <input type="tel" name="phone" id="phone" placeholder="enter your contact number">
        </div>
        <div class="form-field">
            <label for="description">Remarks</label>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="enter remarks"></textarea>
        </div>
        <div class="form-field btn-wrapper">        
            <input type="submit" value="submit">                
        </div>
        <div class="form-field btn-wrapper">
            <input type="reset" value="reset">
        </div>    
    </form>
    </div>
</body>
<script src="script.js"></script>
</html>