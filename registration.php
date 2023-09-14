<!DOCTYPE html>
<?php
include("db_config.php");
?>
<html lang = "en">
    <header>
        <title>Add new student</title>
    </header>
    <body>
    <form method="post">
        <label>Last Name</label><br>
        <input type="text" id="Last_Name" name="Last_Name">
        <br>

        <label>First Name</label><br>
        <input type="text" id="First_Name" name="First_Name">
        <br>

        <label>Middle Name</label><br>
        <input type="text" id="Middle_Name" name="Middle_Name">
        <br>

        <label>Extension Name</label><br>
        <input type="text" id="Extension Name" name="extension_Name">
        <br>

        <label>Sex</label><br>
        <select name="sex" id="sex">
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select> 
        <br>

        <label>Birth_Date</label><br>
        <input type="date" id="birth_Date" name="birth_Date">
        <br>

        <label>Age</label><br>
        <input type="number" id="age" name="age">
        <br>

        <label>Home Address</label><br>
        <input type="text" id="home_Address" name="home_Address">
        <br>

        <label>Civil Status</label><br>
        <select name="civil_Status" id="civil_Status">
            <option value="Single">Single</option>
            <option value="Maried">Maried</option>
            <option value="Widowed/Widower">Widowed/Widower</option>
        </select> 
        <br>

        <label>Nationality</label><br>
        <input type="text" id="nationality" name="nationality">
        <br>

        <label>Religion</label><br>
        <input type="text" id="religion" name="religion">
        <br>

        <label>Boarding Address</label><br>
        <input type="text" id="boarding_Address" name="boarding_Address">
        <br>

        <label>Contact Number</label><br>
        <input type="text" id="contact_Number" name="contact_Number">
        <br>

        <label>Email Address</label><br>
        <input type="email" id="email_Address" name="email_Address">
        <br>
<button type="submit"  name="add_Student">ADD STUDENT</button>
</form>
<?php
if(array_key_exists('add_Student', $_POST))
{
    $Last_Name = $_POST['Last_Name'];
    $First_Name = $_POST['First_Name'];
    $Middle_Name = $_POST['Middle_Name'];
    $Extension_Name = $_POST['extension_Name'];
    $Sex = $_POST['sex'];
    $Birth_Date = $_POST['birth_Date'];
    $Age = $_POST['age'];
    $Home_Address = $_POST['home_Address'];
    $Civil_Status = $_POST['civil_Status'];
    $Nationality = $_POST['nationality'];
    $Religion = $_POST['religion'];
    $Boarding_Address = $_POST['boarding_Address'];
    $Contact_Number = $_POST['contact_Number'];
    $Email_Address = $_POST['email_Address'];

    $insertUserAccountQuery = "INSERT INTO `person` (`last_Name`, `first_Name`, `middle_Name`, `extension_Name`, `Sex`, `birth_Date`, `age`,`home_Address`, `civil_Status`, `religion`, `nationality`, `boarding_Address`, `contact_Number`, `email_Address`) VALUES ('$Last_Name', '$First_Name', '$Middle_Name', '$Extension_Name', '$Sex', '$Birth_Date', '$Age', '$Home_Address', '$Civil_Status', '$Religion', '$Nationality', '$Boarding_Address', '$Contact_Number', '$Email_Address');";

    $result = $db_connect->query($insertUserAccountQuery);

    if ($result) {
        echo "Add Account Successfully!";
    } else {
        echo "Error: " . $db_connect->error;
    }
}
?>
    </body>
</html>