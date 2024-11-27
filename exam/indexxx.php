<?php
    require_once("students_class.php");

    if(isset($_POST['actsubmit'])){
        $id=$_POST['txtfield'];
        $name=$_POST['namefield'];

        $studentObj= new StudentData($id,$name);
        $studentObj->saveData();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Entry</title>
    <style>
            /* General Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  color: #333;
  padding: 20px;
}

/* Form container */
#content {
  width: 400px;
  margin: 50px auto;
  padding: 30px;
  background-color: #ffffff;
  border-radius: 8px;
  box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
}

/* Form header */
h2 {
  text-align: center;
  margin-bottom: 30px;
  color: #4caf50;
}

/* Input Fields */
.con {
  margin-bottom: 20px;
}

label {
  font-size: 14px;
  font-weight: bold;
  color: #555;
}

input[type="text"] {
  width: 100%;
  padding: 12px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-top: 5px;
  box-sizing: border-box;
}

/* Input focus effect */
input[type="text"]:focus {
  outline: none;
  border-color: #4caf50;
}

/* Submit Button */
button[name="actsubmit"] {
  background-color: #4caf50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  width: 100%;
  margin-top: 20px;
  transition: background-color 0.3s ease;
}

/* Button hover effect */
button[name="actsubmit"]:hover {
  background-color: #45a049;
}

/* Show Data Section */
.showData {
  width: 80%;
  margin: 30px auto;
  padding: 20px;
  background-color: #ffffff;
  border-radius: 8px;
  box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
}

.showData table {
  width: 100%;
  border-collapse: collapse;
}

.showData th,
.showData td {
  padding: 12px;
  text-align: left;
  border: 1px solid #ddd;
}

.showData th {
  background-color: #4caf50;
  color: white;
}

.showData tr:nth-child(even) {
  background-color: #f9f9f9;
}

.showData tr:hover {
  background-color: #f1f1f1;
}

    </style>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Form for Data Entry -->
    <form action="#" method="post" id="content">
        <h2>Student Data Entry</h2>

        <div class="con">
            <label for="txtfield">Id:</label>
            <input type="text" name="txtfield" id="txtfield" required>
        </div><br>
        
        <div class="con">
            <label for="namefield">Name:</label>
            <input type="text" name="namefield" id="namefield" required>
        </div><br>

        <div>
            <button name="actsubmit">Submit</button>
        </div>
    </form>

    <!-- Show Data Section -->
    <?php
        StudentData::showData();  // Assuming this function displays the student data in a table
    ?>
    
</body>
</html>
