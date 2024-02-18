<?php include("database.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
 
  <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>

  <script src="addSchool.js"></script>

</body>

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>Registration Form</h1>
    <p>Please fill out this form with the required information</p>
    <form method="post" action='#'>
      <fieldset>

        <label for="name">Enter Your Name: <input id="name" name="name" type="text" required /></label>
        <label for="address">Enter Your Address: <input id="address" name="address" type="text" required /></label>
        <label for="city">Enter Your City: <input id="city" name="city" type="text" required /></label>
        <label for="state">Enter Your State: <input id="state" name="state" type="text" required /></label>
        <label for="contact">Enter Your Contact: <input id="contact" name="contact" type="number" required /></label>
        <label for="email">Enter Your Email: <input id="email" name="email" type="email" required /></label>
        
      </fieldset>
      <fieldset>
        <label for="file">Upload a School Image: <input id="file" type="file" name="file" /></label>


      </fieldset>
      <input type="submit" value="Submit" />
    </form>
  </body>
</html>

<!--PHP CODE-->

<?php
if(isset ($_POST['submit']))
{
  $name    =  $_POST['name'];
  $address =  $_POST['address'];
  $city  =  $_POST['city'];
  $state   =  $_POST['state'];
  $contact    =  $_POST['contact'];
  $email =  $_POST['email'];
  $file  =  $_post['file'];


 $query =   "INSERT INTO patients_appointment VALUES('$name', '$address', '$city', '$state', '$contact', 'email', 'file')";

 $data = mysqli_query($conn, $query);

 if($data)
 {
  // echo " Your record submited successfully..";
 echo '<script>alert("Your record submitted successfully..")</script>'; 
 }
 else
 {
  echo "Failed";
 }
}
?>