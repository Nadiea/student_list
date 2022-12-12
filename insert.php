
<?php 

include ("db.php"); 

?>



<!DOCTYPE html>
<html>
  <head>
    <title>Student registration form</title>
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
   
  </head>
  <body>

  
    <center><h2 color: "black">Student registration form</h2></center>
  <div class="left-part">
    <div class="main-block">
     
        
    
      <form action="insert.php" method="post">
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Student registration here</h2>
        </div>
        <div class="info">
          <input class="fname" type="text" name="name" required placeholder=" Student Full name">
          <input type="text" name="email" required placeholder=" Student Email">
          <input type="phone" name="phone" required placeholder="Phone number">
          <input type="text" name="address" required placeholder="Address">
          <select name="section" required >
            <option value="SEC" selected><Section></Section> Section type*</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
           
          </select>
        </div>
      
        <button type="submit" name="submit" href="list.php">Submit</button>
      </form>
      <?php 
      if(isset($_POST['submit']))
      {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        
        $section = $_POST['section'];

        $result = "INSERT into register(id, name ,email,phone, address,section) 
       VALUES ('','$name','$email','$phone','$address','$section')";
     
     if ($conn-> query($result) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $result . "<br>" . $conn->error;
    }
    
    $conn->close();
    
    
    }
      
      ?>
      </div>
    </div>
  </body>
</html>