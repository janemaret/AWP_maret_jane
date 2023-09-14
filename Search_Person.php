<?php
include("DB_Config.php");


$person_Id = "person_Id";
$last_Name = "last_Name";
$first_Name = "first_Name";
$middle_Name = "middle_Name";
$extension_Name = "extension_Name";
$Sex = "sex";
$birth_Date = "birth_Date";
$age = "age";
$home_Address = "home_Address";
$civil_Status = "civil_Status";
$nationality = "nationality";
$religion = "religion";
$boarding_Address = "boarding_Address";
$contact_Number = "contact_Number";
$email_Address = "email_Address";



if (array_key_exists('search_user', $_POST)) {
    $person_Id = $_POST['person_Id'];

    // Corrected SQL query with SELECT instead of SEARCH
    $SearchUserAccountQuery = "SELECT * FROM person WHERE person_Id = '$person_Id'";

    // Execute the SQL query and check if it was successful
    $result = $db_connect->query($SearchUserAccountQuery);

    if ($result) {
    // Fetch the user account data
    while ($row = mysqli_fetch_object($result)) {
    // Values for 'username' and 'password' are taken from the query result 
    $last_Name = $row->last_Name;
    $first_Name = $row->first_Name;
    $middle_Name = $row->middle_Name;
    $extension_Name = $row->extension_Name;
    $Sex = $row->Sex;
    $birth_Date= $row->birth_Date;
    $age = $row->age;
    $home_Address = $row->home_Address;
    $civil_Status = $row->civil_Status;
    $nationality = $row->nationality;
    $religion = $row->religion;
    $boarding_Address = $row->boarding_Address;
    $contact_Number = $row->contact_Number;
    $email_Address = $row->email_Address;
    }

    } else {
    echo "Error executing the query: " . $db_connect->error;
    }
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISPLAY USER</title>
</head>
<body>
    <form method="post">
        <input type="text" id="person_Id" name="person_Id">
        <label for="person_Id">Person ID</label><br>
        <button type="submit"  name="search_user">SEARCH</button>
    </form>
    <input type="text" id="last_Name" name="last_Name" value="<?php echo $last_Name ?>">
    <label for="last_Name">Last_Name</label><br>

    <input type="text" id="first_Name" name="first_Name" value="<?php echo $first_Name ?>">
    <label for="first_Name">First_Name</label><br>
    
    <input type="text" id="middle_Name" name="middle_Name" value="<?php echo $middle_Name ?>">
    <label for="middle_Name">Middle_Name</label><br>

    <input type="text" id="extension_Name" name="extension_Name" value="<?php echo $extension_Name ?>">
    <label for="extension_Name">Extension_Name</label><br>

    <input type="text" id="Sex" name="Sex" value="<?php echo $Sex ?>">
    <label for="Sex">Sex</label><br>

    <input type="text" id="birth_Date" name="birth_Date" value="<?php echo $birth_Date?>">
    <label for="birth_Date">Birth_Date</label><br>

    <input type="text" id="age" name="age" value="<?php echo $age ?>">
    <label for="age">Age</label><br>

    <input type="text" id="home_Address" name="home_Address" value="<?php echo $home_Address ?>">
    <label for="home_Address">Home_Address</label><br>

    <input type="text" id="civil_Status" name="civil_Status" value="<?php echo $civil_Status ?>">
    <label for="civil_Status">Civil_Status</label><br>

    <input type="text" id="religion" name="religion" value="<?php echo $religion ?>">
    <label for="religion">Religion</label><br>

    <input type="text" id="nationality" name="nationality" value="<?php echo $nationality ?>">
    <label for="nationality">Nationality</label><br>

    <input type="text" id="boarding_Address" name="boarding_Address" value="<?php echo $boarding_Address ?>">
    <label for="boarding_Address">Boarding_address</label><br>
    
    <input type="text" id="contact_Number" name="contact_Number" value="<?php echo $contact_Number ?>">
    <label for="contact_Number">Contact_Number</label><br>

    
    <input type="text" id="email_Address" name="email_Address" value="<?php echo $email_Address ?>">
    <label for="email_Address">Email_Address</label><br>


</body>
</html>