<?php

include_once 'dbconnect.php';

if (isset($_POST['submit'])) {
 include 'phpmailer.php';


    $Name = $_POST['name'];
    $Phone_Number = $_POST['PhNo'];
    $Email = $_POST['Email'];
    $Subject = $_POST['Subject'];
    $Message = $_POST['Message'];


    $sql = "INSERT INTO `application_form` (`Name`, `PhoNo`, `Email`, `Subject`, `Message`) VALUES ('$Name', '$Phone_Number', '$Email', '$Subject', '$Message')";

    $result = mysqli_query($conn, $sql);


    if ($result) {
        // echo "Data inserted successfully";
        Send_mail($Email, $Name);
        $insert = true;
    } else {
        echo "Something went wrong " . mysqli_connect_error();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="form-container">
        <form action="/phpwork/index.php" method="post">
            <h1>Application Form</h1>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Your name">

            <label for="name">Phone Number:</label>
            <input type="text" id="name" name="PhNo" placeholder="Your Phone Number">

            <label for="email">Email:</label>
            <input type="email" id="email" name="Email" placeholder="Your email">

            <label for="name">Subject:</label>
            <input type="text" id="name" name="Subject" placeholder="Subject">

            <label for="message">Message:</label>
            <textarea id="message" name="Message" placeholder="Your message"></textarea>



            <button type="submit" name="submit">Submit</button>
    </div>
    </form>

</body>

</html>