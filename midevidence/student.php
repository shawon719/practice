<?php
    include_once("student_class.php");

    // Handling form submission
    if (isset($_POST['submit'])) {
        $name = $_POST['txtfield'];
        $id = $_POST['idfield'];
        $batch = $_POST['batchfield'];

        // Create a new instance of Student_class
        $studentObj = new Student_class($name, $id, $batch);
        $studentObj->store();  // Store the student data
        echo "store and display successful!";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <style>
        /* Form Styling */
        #form_container {
            width: 500px;
            margin: 20px auto;
            padding: 30px;
            border: none;
            /* border-radius: 10px; */
            background: palevioletred;
            color: white;
        }
        .inputbox {
            margin-bottom: 20px;
        }
        .inputbox input {
            width: 70%;
            padding: 8px;
            margin-top: 5px;
        }
        .btn {
            padding: 10px 20px;
            background-color: #4CAF50;
            border: none;
            outline: none;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #45a049;
        }
        
        .file_center {
        text-align: center;
    }

     table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 500px;
    margin: 0 auto;
    text-align: center;
    }

    td{
        border: 1px solid #dddddd;
        /* text-align: left; */
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

    /* .name_value {
        text-align: right;
    } */
        
        /* Table Styling
        table {
            /width: 70%;
            margin: 20px auto;
            border-collapse: collapse;
            font-size: 18px;
         } 
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }

         Additional Styling 
         h2 {
            text-align: center;
            color: #333; 
        }  */
    </style>
</head>
<body>

    <!-- Form Container -->
    <form action="#" method="post" id="form_container">
        <h2>Student Registration</h2>
        <div class="inputbox">
            <label for="txtfield">Name:</label>
            <input type="text" name="txtfield" id="txtfield" required><br><br>
        </div>

        <div class="inputbox">
            <label for="idfield">ID:</label>
            <input type="text" name="idfield" id="idfield" required><br><br>
        </div>

        <div class="inputbox">
            <label for="batchfield">Batch:</label>
            <input type="text" name="batchfield" id="batchfield" required><br><br>
        </div>

        <div>
            <button name="submit" class="btn">Submit</button>
        </div>
    </form>

    <!-- Display Student Data -->
    <?php
        Student_class::display();  // This will call the display method from Student_class
    ?>

</body>
</html>
