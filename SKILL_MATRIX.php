<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "skill_matrix";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="SKILL_MATRIX.css">
    <title>QC/QA SKILL MATRIX</title>
</head>
<header>
        <div class="flex">

            <a href="SKILL_MATRIX.php">QA/QC</a>   
            
            <div class="dropdown">
                <a href="#">Production</a>
                <div class="dropdown-content">
                    <a href="MC_SP3.php"></i>MC SP3</a>
                    <a href="MC_SP4.php"></i>MC SP4</a>
                    <a href="Milling.php"></i>Milling</a>
                    <a href="SP4_Assy.php" ></i>SP4 Assy, brazz, pack, polish</a>
                    <a href="Polishing_SP1.php" ></i>Polishing SP1</a>
                    <a href="TM_SP1.php" ></i>TM SP1</a>
                    <a href="Auto_SP2.php" ></i>Auto Lathe SP2</a>
                    <a href="Assembly.php" ></i>Assembly COHU</a>
                    <a href="Wire_SP1.php" ></i>Wire Cut SP1</a>
                    <a href="EDM_SP1.php"></i>EDM SP1</a>
                    <a href="Grinding_SP1.php" ></i>Grinding Surface & PG SP1</a>
                </div>
            </div>
            <a href="">NA</a>
        </div> 
   </header>
<body>
    <section id="add-product" class="form-section">
        <h2>Add New QC/QA</h2>
        <!-- Form to add New QC/QA -->
        <form id="addQC/QAForm" method="POST" action="" enctype="multipart/form-data">
            <label for="Employee_No">Employee No:</label>
            <input type="text" id="Employee_No" name="Employee_No" required>
            <label for="Name">QC/QA Name:</label>
            <input type="text" id="Name" name="Name" required>
            <label for="PD">PD(year/month):</label>
            <input type="text" id="PD" name="PD" required>
            <label for="Current_Position">Current Position:</label>
            <input type="text" id="Current_Position" name="Current_Position" required>
            <label for="Position">Position:</label>
            <input type="file" id="Position" name="Position" required>
            <label for="Shift">Shift:</label>
            <p>Normal <input type="radio" id="Shift" name="Shift" value="1" required>&nbsp;&nbsp;&nbsp;
            SHIFT <input type="radio" id="Shift" name="Shift" value="2" required>&nbsp;&nbsp;&nbsp;
            NIGHT SHIFT <input type="radio" id="Shift" name="Shift" value="3" required>&nbsp;&nbsp;&nbsp;</p>
            <!-- Multiple Choice Grid -->
            <table>
                <tr>
                    <th></th>
                    <th>Beginner</th>
                    <th>Intermediate</th>
                    <th>Proficient</th>
                    <th>Advanced</th>
                    <th>Expert</th>
                    <th>None</th>
                </tr>
                <tr>
                    <td><label for="iPrecision">i-Precision:</label></td>
                    <td><input type="radio" id="iPrecision" name="iPrecision" value="1" required></td>
                    <td><input type="radio" id="iPrecision" name="iPrecision" value="2" required></td>
                    <td><input type="radio" id="iPrecision" name="iPrecision" value="3" required></td>
                    <td><input type="radio" id="iPrecision" name="iPrecision" value="4" required></td>
                    <td><input type="radio" id="iPrecision" name="iPrecision" value="5" required></td>
                    <td><input type="radio" id="iPrecision" name="iPrecision" value="6" required></td>
                </tr>
                <tr>
                    <td><label for="Drawing_Literacy">Drawing Literacy:</label></td>
                    <td><input type="radio" id="Drawing_Literacy" name="Drawing_Literacy" value="1" required></td>
                    <td><input type="radio" id="Drawing_Literacy" name="Drawing_Literacy" value="2" required></td>
                    <td><input type="radio" id="Drawing_Literacy" name="Drawing_Literacy" value="3" required></td>
                    <td><input type="radio" id="Drawing_Literacy" name="Drawing_Literacy" value="4" required></td>
                    <td><input type="radio" id="Drawing_Literacy" name="Drawing_Literacy" value="5" required></td>
                    <td><input type="radio" id="Drawing_Literacy" name="Drawing_Literacy" value="6" required></td>
                </tr>
                <tr>
                    <td><label for="Drawing_Registration">Drawing Registration & Issuance:</label></td>
                    <td><input type="radio" id="Drawing_Registration" name="Drawing_Registration" value="1" required></td>
                    <td><input type="radio" id="Drawing_Registration" name="Drawing_Registration" value="2" required></td>
                    <td><input type="radio" id="Drawing_Registration" name="Drawing_Registration" value="3" required></td>
                    <td><input type="radio" id="Drawing_Registration" name="Drawing_Registration" value="4" required></td>
                    <td><input type="radio" id="Drawing_Registration" name="Drawing_Registration" value="5" required></td>
                    <td><input type="radio" id="Drawing_Registration" name="Drawing_Registration" value="6" required></td>
                </tr>
                <tr>
                    <td><label for="FAIR_Reporting">FAIR Reporting:</label></td>
                    <td><input type="radio" id="FAIR_Reporting" name="FAIR_Reporting" value="1" required></td>
                    <td><input type="radio" id="FAIR_Reporting" name="FAIR_Reporting" value="2" required></td>
                    <td><input type="radio" id="FAIR_Reporting" name="FAIR_Reporting" value="3" required></td>
                    <td><input type="radio" id="FAIR_Reporting" name="FAIR_Reporting" value="4" required></td>
                    <td><input type="radio" id="FAIR_Reporting" name="FAIR_Reporting" value="5" required></td>
                    <td><input type="radio" id="FAIR_Reporting" name="FAIR_Reporting" value="6" required></td>
                </tr>
                <tr>
                    <td><label for="Customer_Specific_Requirement">Customer Specific Requirement:</label></td>
                    <td><input type="radio" id="Customer_Specific_Requirement" name="Customer_Specific_Requirement" value="1" required></td>
                    <td><input type="radio" id="Customer_Specific_Requirement" name="Customer_Specific_Requirement" value="2" required></td>
                    <td><input type="radio" id="Customer_Specific_Requirement" name="Customer_Specific_Requirement" value="3" required></td>
                    <td><input type="radio" id="Customer_Specific_Requirement" name="Customer_Specific_Requirement" value="4" required></td>
                    <td><input type="radio" id="Customer_Specific_Requirement" name="Customer_Specific_Requirement" value="5" required></td>
                    <td><input type="radio" id="Customer_Specific_Requirement" name="Customer_Specific_Requirement" value="6" required></td>
                </tr>
                <tr>
                    <td><label for="PR_Invoicing">PR & Invoicing:</label></td>
                    <td><input type="radio" id="PR_Invoicing" name="PR_Invoicing" value="1" required></td>
                    <td><input type="radio" id="PR_Invoicing" name="PR_Invoicing" value="2" required></td>
                    <td><input type="radio" id="PR_Invoicing" name="PR_Invoicing" value="3" required></td>
                    <td><input type="radio" id="PR_Invoicing" name="PR_Invoicing" value="4" required></td>
                    <td><input type="radio" id="PR_Invoicing" name="PR_Invoicing" value="5" required></td>
                    <td><input type="radio" id="PR_Invoicing" name="PR_Invoicing" value="6" required></td>
                </tr>
                <tr>
                    <td><label for="Internal_Varification">Internal Verification:</label></td>
                    <td><input type="radio" id="Internal_Varification" name="Internal_Varification" value="1" required></td>
                    <td><input type="radio" id="Internal_Varification" name="Internal_Varification" value="2" required></td>
                    <td><input type="radio" id="Internal_Varification" name="Internal_Varification" value="3" required></td>
                    <td><input type="radio" id="Internal_Varification" name="Internal_Varification" value="4" required></td>
                    <td><input type="radio" id="Internal_Varification" name="Internal_Varification" value="5" required></td>
                    <td><input type="radio" id="Internal_Varification" name="Internal_Varification" value="6" required></td>
                </tr>
                <tr>
                    <td><label for="Outgoing_Report">Outgoing Report:</label></td>
                    <td><input type="radio" id="Outgoing_Report" name="Outgoing_Report" value="1" required></td>
                    <td><input type="radio" id="Outgoing_Report" name="Outgoing_Report" value="2" required></td>
                    <td><input type="radio" id="Outgoing_Report" name="Outgoing_Report" value="3" required></td>
                    <td><input type="radio" id="Outgoing_Report" name="Outgoing_Report" value="4" required></td>
                    <td><input type="radio" id="Outgoing_Report" name="Outgoing_Report" value="5" required></td>
                    <td><input type="radio" id="Outgoing_Report" name="Outgoing_Report" value="6" required></td>
                </tr>
                <tr>
                    <td><label for="Understanding_of_QMS_standards">Understanding of QMS standards (ISO 9001, etc.):</label></td>
                    <td><input type="radio" id="Understanding_of_QMS_standards" name="Understanding_of_QMS_standards" value="1" required></td>
                    <td><input type="radio" id="Understanding_of_QMS_standards" name="Understanding_of_QMS_standards" value="2" required></td>
                    <td><input type="radio" id="Understanding_of_QMS_standards" name="Understanding_of_QMS_standards" value="3" required></td>
                    <td><input type="radio" id="Understanding_of_QMS_standards" name="Understanding_of_QMS_standards" value="4" required></td>
                    <td><input type="radio" id="Understanding_of_QMS_standards" name="Understanding_of_QMS_standards" value="5" required></td>
                    <td><input type="radio" id="Understanding_of_QMS_standards" name="Understanding_of_QMS_standards" value="6" required></td>
                </tr>
                <tr>
                    <td><label for="Customer_Complaint">Customer Complaint:</label></td>
                    <td><input type="radio" id="Customer_Complaint" name="Customer_Complaint" value="1" required></td>
                    <td><input type="radio" id="Customer_Complaint" name="Customer_Complaint" value="2" required></td>
                    <td><input type="radio" id="Customer_Complaint" name="Customer_Complaint" value="3" required></td>
                    <td><input type="radio" id="Customer_Complaint" name="Customer_Complaint" value="4" required></td>
                    <td><input type="radio" id="Customer_Complaint" name="Customer_Complaint" value="5" required></td>
                    <td><input type="radio" id="Customer_Complaint" name="Customer_Complaint" value="6" required></td>
                </tr>
                <tr>
                    <td><label for="CEPOR_Training">CE!POR Training:</label></td>
                    <td><input type="radio" id="CEPOR_Training" name="CEPOR_Training" value="1" required></td>
                    <td><input type="radio" id="CEPOR_Training" name="CEPOR_Training" value="2" required></td>
                    <td><input type="radio" id="CEPOR_Training" name="CEPOR_Training" value="3" required></td>
                    <td><input type="radio" id="CEPOR_Training" name="CEPOR_Training" value="4" required></td>
                    <td><input type="radio" id="CEPOR_Training" name="CEPOR_Training" value="5" required></td>
                    <td><input type="radio" id="CEPOR_Training" name="CEPOR_Training" value="6" required></td>
                </tr>
            </table>
            <hr>
            <button type="submit" name="action" value="add" class="form-button">Add</button>
        </form>
    </section>
    <!-- Searching Input Box -->
    <div class="search-container">
        <input type="text" id="search" onkeyup="searchEmployee()" placeholder="Search QC/QA by Name or Employee No">
    </div>

    <section id="QC/QA-list">
        <h2>QC/QA List</h2>
        <!-- This is the list that show the database data -->
        <table id="employeeTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Employee No</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Shift</th>
                    <th>i-Precision</th>
                    <th>Drawing Literacy</th>
                    <th>Drawing Registration & Issuance</th>
                    <th>FAIR Reporting</th>
                    <th>Customer Specific Requirement</th>
                    <th>PR & Invoicing</th>
                    <th>Internal Verification</th>
                    <th>Outgoing Report</th>
                    <th>Understanding of QMS standards</th>
                    <th>Customer Complaint</th>
                    <th>CE!POR Training</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- This php help to update the data that we have type in to the database -->
                <?php
                if (!is_dir('uploads')) {
                    mkdir('uploads', 0777, true);
                }

                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action'])) {
                    if ($_POST['action'] == 'add') {
                        $Employee_No = $_POST['Employee_No'];
                        $Name = $_POST['Name'];
                        $PD = $_POST['PD'];
                        $Current_Position = $_POST['Current_Position'];
                        $Position = $_FILES['Position']['name'];
                        $target_dir = "uploads/";
                        $target_file = $target_dir . basename($_FILES["Position"]["name"]);
                        $Shift = $_POST['Shift'];
                        $iPrecision = $_POST['iPrecision'];
                        $Drawing_Literacy = $_POST['Drawing_Literacy'];
                        $Drawing_Registration = $_POST['Drawing_Registration'];
                        $FAIR_Reporting = $_POST['FAIR_Reporting'];
                        $Customer_Specific_Requirement = $_POST['Customer_Specific_Requirement'];
                        $PR_Invoicing = $_POST['PR_Invoicing'];
                        $Internal_Varification = $_POST['Internal_Varification'];
                        $Outgoing_Report = $_POST['Outgoing_Report'];
                        $Understanding_of_QMS_standards = $_POST['Understanding_of_QMS_standards'];
                        $Customer_Complaint = $_POST['Customer_Complaint'];
                        $CEPOR_Training = $_POST['CEPOR_Training'];
                        
                        // Ensure file is moved to the target directory
                        if (move_uploaded_file($_FILES["Position"]["tmp_name"], $target_file)) {
                            $sql = "INSERT INTO employee (Employee_No, Namee, PD, Current_Position, Position, Shift, iPrecision, `Drawing Literacy`, `Drawing Registration & Issurance`, `FAIR Reporting`, `Customer Specific Requirement`, `PR & Invoicing`, `Internal Verification`, `Outgoing Report`, `Understanding of QMS standards`, `Customer Complaint`, `CE!POR Training`) VALUES ('$Employee_No', '$Name', '$PD', '$Current_Position', '$Position', '$Shift', '$iPrecision', '$Drawing_Literacy','$Drawing_Registration','$FAIR_Reporting','$Customer_Specific_Requirement','$PR_Invoicing','$Internal_Varification','$Outgoing_Report','$Understanding_of_QMS_standards','$Customer_Complaint','$CEPOR_Training')";

                            if ($conn->query($sql) === TRUE) {
                                echo "<script>alert('New QC/QA added successfully');</script>";
                            } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                        } else {
                            echo "Adding Unsuccessful.";
                        }
                    } elseif ($_POST['action'] == 'edit') { // This
                        $No = $_POST['No'];
                        $Employee_No = $_POST['Employee_No'];
                        $Name = $_POST['Namee'];
                        $PD = $_POST['PD'];
                        $Current_Position = $_POST['Current_Position'];
                        $Position = $_FILES['Position']['name'];
                        $target_dir = "uploads/";
                        $target_file = $target_dir . basename($_FILES["Position"]["name"]);
                        $Shift = $_POST['Shift'];
                        $iPrecision = $_POST['iPrecision'];
                        $Drawing_Literacy = $_POST['Drawing_Literacy'];
                        $Drawing_Registration = $_POST['Drawing_Registration'];
                        $FAIR_Reporting = $_POST['FAIR_Reporting'];
                        $Customer_Specific_Requirement = $_POST['Customer_Specific_Requirement'];
                        $PR_Invoicing = $_POST['PR_Invoicing'];
                        $Internal_Varification = $_POST['Internal_Varification'];
                        $Outgoing_Report = $_POST['Outgoing_Report'];
                        $Understanding_of_QMS_standards = $_POST['Understanding_of_QMS_standards'];
                        $Customer_Complaint = $_POST['Customer_Complaint'];
                        $CEPOR_Training = $_POST['CEPOR_Training'];

                        $sql = "UPDATE employee SET Employee_No='$Employee_No', Namee='$Name', PD='$PD', Current_Position='$Current_Position', Shift='$Shift', iPrecision='$iPrecision', `Drawing Literacy`='$Drawing_Literacy', `Drawing Registration & Issurance`='$Drawing_Registration', `FAIR Reporting`='$FAIR_Reporting', `Customer Specific Requirement`='$Customer_Specific_Requirement', `PR & Invoicing`='$PR_Invoicing', `Internal Verification`='$Internal_Varification', `Outgoing Report`='$Outgoing_Report', `Understanding of QMS standards`='$Understanding_of_QMS_standards', `Customer Complaint`='$Customer_Complaint', `CE!POR Training`='$CEPOR_Training' WHERE No='$No'";

                        if ($conn->query($sql) === TRUE) {
                            echo "<script>alert('Employee updated successfully');</script>";
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }
                }elseif (isset($_GET['delete'])) {
                    $No = $_GET['delete'];
                    $stmt = "DELETE FROM employee WHERE No = $No";

                    if ($conn->query($stmt) === TRUE) {
                        echo "<script>alert('Employee deleted successfully');</script>";
                    } else {
                        echo "Error: " . $stmt . "<br>" . $conn->error;
                    }
                }

                // This is to fetch the data from the database to let us edit on it
                $sql = "SELECT * FROM employee";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr class='employee-row'>
                            <form method='POST' action='' enctype='multipart/form-data'>
                                <td>{$row['No']}</td>
                                <td><span class='view-mode'>{$row['Employee_No']}</span><input class='edit-mode' type='text' name='Employee_No' value='{$row['Employee_No']}' style='display:none;' required></td>
                                <td><span class='view-mode'>{$row['Namee']}<br><br>PD:{$row['PD']}<br><br>{$row['Current_Position']}</span>
                                    <input class='edit-mode' type='text' name='Namee' value='{$row['Namee']}' style='display:none;' required>
                                    <input class='edit-mode' type='text' name='PD' value='{$row['PD']}' style='display:none;' required>
                                    <input class='edit-mode' type='text' name='Current_Position' value='{$row['Current_Position']}' style='display:none;' required>
                                </td>
                                <td>
                                    <span class='view-mode'><img src='uploads/{$row['Position']}' alt='{$row['Namee']}' style='max-width: 100px;' /></span>
                                    <input type='file' name='Position' class='edit-mode' style='display: none;' />
                                </td>
                                <td><span class='view-mode'>" . getES($row['Shift']) . "</span>
                                    <select class='edit-mode' name='Shift' style='display:none;' required>
                                        <option value='1'" . ($row['Shift'] == 1 ? ' selected' : '') . ">NORMAL</option>
                                        <option value='2'" . ($row['Shift'] == 2 ? ' selected' : '') . ">SHIFT</option>
                                        <option value='3'" . ($row['Shift'] == 3 ? ' selected' : '') . ">NIGHT SHIFT</option>
                                    </select>
                                </td>
                                <td><span class='view-mode'>" . getEL($row['iPrecision']) . "</span>
                                    
                                </td>
                                <td><span class='view-mode'>" . getEL($row['Drawing Literacy']) . "</span>
                                    <select class='edit-mode' name='Drawing_Literacy' style='display:none;' required>
                                        <option value='1'" . ($row['Drawing Literacy'] == 1 ? ' selected' : '') . ">Beginner</option>
                                        <option value='2'" . ($row['Drawing Literacy'] == 2 ? ' selected' : '') . ">Intermediate</option>
                                        <option value='3'" . ($row['Drawing Literacy'] == 3 ? ' selected' : '') . ">Proficient</option>
                                        <option value='4'" . ($row['Drawing Literacy'] == 4 ? ' selected' : '') . ">Advanced</option>
                                        <option value='5'" . ($row['Drawing Literacy'] == 5 ? ' selected' : '') . ">Expert</option>
                                        <option value='6'" . ($row['Drawing Literacy'] == 6 ? ' selected' : '') . ">None</option>
                                    </select>
                                </td>
                                <td><span class='view-mode'>" . getEL($row['Drawing Registration & Issurance']) . "</span>
                                    <select class='edit-mode' name='Drawing_Registration' style='display:none;' required>
                                        <option value='1'" . ($row['Drawing Registration & Issurance'] == 1 ? ' selected' : '') . ">Beginner</option>
                                        <option value='2'" . ($row['Drawing Registration & Issurance'] == 2 ? ' selected' : '') . ">Intermediate</option>
                                        <option value='3'" . ($row['Drawing Registration & Issurance'] == 3 ? ' selected' : '') . ">Proficient</option>
                                        <option value='4'" . ($row['Drawing Registration & Issurance'] == 4 ? ' selected' : '') . ">Advanced</option>
                                        <option value='5'" . ($row['Drawing Registration & Issurance'] == 5 ? ' selected' : '') . ">Expert</option>
                                        <option value='6'" . ($row['Drawing Registration & Issurance'] == 6 ? ' selected' : '') . ">None</option>
                                    </select>
                                </td>
                                <td><span class='view-mode'>" . getEL($row['FAIR Reporting']) . "</span>
                                    <select class='edit-mode' name='FAIR_Reporting' style='display:none;' required>
                                        <option value='1'" . ($row['FAIR Reporting'] == 1 ? ' selected' : '') . ">Beginner</option>
                                        <option value='2'" . ($row['FAIR Reporting'] == 2 ? ' selected' : '') . ">Intermediate</option>
                                        <option value='3'" . ($row['FAIR Reporting'] == 3 ? ' selected' : '') . ">Proficient</option>
                                        <option value='4'" . ($row['FAIR Reporting'] == 4 ? ' selected' : '') . ">Advanced</option>
                                        <option value='5'" . ($row['FAIR Reporting'] == 5 ? ' selected' : '') . ">Expert</option>
                                        <option value='6'" . ($row['FAIR Reporting'] == 6 ? ' selected' : '') . ">None</option>
                                    </select>
                                </td>
                                <td><span class='view-mode'>" . getEL($row['Customer Specific Requirement']) . "</span>
                                    <select class='edit-mode' name='Customer_Specific_Requirement' style='display:none;' required>
                                        <option value='1'" . ($row['Customer Specific Requirement'] == 1 ? ' selected' : '') . ">Beginner</option>
                                        <option value='2'" . ($row['Customer Specific Requirement'] == 2 ? ' selected' : '') . ">Intermediate</option>
                                        <option value='3'" . ($row['Customer Specific Requirement'] == 3 ? ' selected' : '') . ">Proficient</option>
                                        <option value='4'" . ($row['Customer Specific Requirement'] == 4 ? ' selected' : '') . ">Advanced</option>
                                        <option value='5'" . ($row['Customer Specific Requirement'] == 5 ? ' selected' : '') . ">Expert</option>
                                        <option value='6'" . ($row['Customer Specific Requirement'] == 6 ? ' selected' : '') . ">None</option>
                                    </select>
                                </td>
                                <td><span class='view-mode'>" . getEL($row['PR & Invoicing']) . "</span>
                                    <select class='edit-mode' name='PR_Invoicing' style='display:none;' required>
                                        <option value='1'" . ($row['PR & Invoicing'] == 1 ? ' selected' : '') . ">Beginner</option>
                                        <option value='2'" . ($row['PR & Invoicing'] == 2 ? ' selected' : '') . ">Intermediate</option>
                                        <option value='3'" . ($row['PR & Invoicing'] == 3 ? ' selected' : '') . ">Proficient</option>
                                        <option value='4'" . ($row['PR & Invoicing'] == 4 ? ' selected' : '') . ">Advanced</option>
                                        <option value='5'" . ($row['PR & Invoicing'] == 5 ? ' selected' : '') . ">Expert</option>
                                        <option value='6'" . ($row['PR & Invoicing'] == 6 ? ' selected' : '') . ">None</option>
                                    </select>
                                </td>
                                <td><span class='view-mode'>" . getEL($row['Internal Verification']) . "</span>
                                    <select class='edit-mode' name='Internal_Varification' style='display:none;' required>
                                        <option value='1'" . ($row['Internal Verification'] == 1 ? ' selected' : '') . ">Beginner</option>
                                        <option value='2'" . ($row['Internal Verification'] == 2 ? ' selected' : '') . ">Intermediate</option>
                                        <option value='3'" . ($row['Internal Verification'] == 3 ? ' selected' : '') . ">Proficient</option>
                                        <option value='4'" . ($row['Internal Verification'] == 4 ? ' selected' : '') . ">Advanced</option>
                                        <option value='5'" . ($row['Internal Verification'] == 5 ? ' selected' : '') . ">Expert</option>
                                        <option value='6'" . ($row['Internal Verification'] == 6 ? ' selected' : '') . ">None</option>
                                    </select>
                                </td>
                                <td><span class='view-mode'>" . getEL($row['Outgoing Report']) . "</span>
                                    <select class='edit-mode' name='Outgoing_Report' style='display:none;' required>
                                        <option value='1'" . ($row['Outgoing Report'] == 1 ? ' selected' : '') . ">Beginner</option>
                                        <option value='2'" . ($row['Outgoing Report'] == 2 ? ' selected' : '') . ">Intermediate</option>
                                        <option value='3'" . ($row['Outgoing Report'] == 3 ? ' selected' : '') . ">Proficient</option>
                                        <option value='4'" . ($row['Outgoing Report'] == 4 ? ' selected' : '') . ">Advanced</option>
                                        <option value='5'" . ($row['Outgoing Report'] == 5 ? ' selected' : '') . ">Expert</option>
                                        <option value='6'" . ($row['Outgoing Report'] == 6 ? ' selected' : '') . ">None</option>
                                    </select>
                                </td>
                                <td><span class='view-mode'>" . getEL($row['Understanding of QMS standards']) . "</span>
                                    <select class='edit-mode' name='Understanding_of_QMS_standards' style='display:none;' required>
                                        <option value='1'" . ($row['Understanding of QMS standards'] == 1 ? ' selected' : '') . ">Beginner</option>
                                        <option value='2'" . ($row['Understanding of QMS standards'] == 2 ? ' selected' : '') . ">Intermediate</option>
                                        <option value='3'" . ($row['Understanding of QMS standards'] == 3 ? ' selected' : '') . ">Proficient</option>
                                        <option value='4'" . ($row['Understanding of QMS standards'] == 4 ? ' selected' : '') . ">Advanced</option>
                                        <option value='5'" . ($row['Understanding of QMS standards'] == 5 ? ' selected' : '') . ">Expert</option>
                                        <option value='6'" . ($row['Understanding of QMS standards'] == 6 ? ' selected' : '') . ">None</option>
                                    </select>
                                </td>
                                <td><span class='view-mode'>" . getEL($row['Customer Complaint']) . "</span>
                                    <select class='edit-mode' name='Customer_Complaint' style='display:none;' required>
                                        <option value='1'" . ($row['Customer Complaint'] == 1 ? ' selected' : '') . ">Beginner</option>
                                        <option value='2'" . ($row['Customer Complaint'] == 2 ? ' selected' : '') . ">Intermediate</option>
                                        <option value='3'" . ($row['Customer Complaint'] == 3 ? ' selected' : '') . ">Proficient</option>
                                        <option value='4'" . ($row['Customer Complaint'] == 4 ? ' selected' : '') . ">Advanced</option>
                                        <option value='5'" . ($row['Customer Complaint'] == 5 ? ' selected' : '') . ">Expert</option>
                                        <option value='6'" . ($row['Customer Complaint'] == 6 ? ' selected' : '') . ">Noone</option>
                                    </select>
                                </td>
                                <td><span class='view-mode'>" . getEL($row['CE!POR Training']) . "</span>
                                    <select class='edit-mode' name='CEPOR_Training' style='display:none;' required>
                                        <option value='1'" . ($row['CE!POR Training'] == 1 ? ' selected' : '') . ">Beginner</option>
                                        <option value='2'" . ($row['CE!POR Training'] == 2 ? ' selected' : '') . ">Intermediate</option>
                                        <option value='3'" . ($row['CE!POR Training'] == 3 ? ' selected' : '') . ">Proficient</option>
                                        <option value='4'" . ($row['CE!POR Training'] == 4 ? ' selected' : '') . ">Advanced</option>
                                        <option value='5'" . ($row['CE!POR Training'] == 5 ? ' selected' : '') . ">Expert</option>
                                        <option value='6'" . ($row['CE!POR Training'] == 6 ? ' selected' : '') . ">None</option>
                                    </select>
                                </td>
                                <td>
                                    <input type='hidden' name='No' value='{$row['No']}'>
                                    <button type='button' class='edit-button'>Edit</button>
                                    <button type='submit' name='action' value='edit' class='save-button' style='display:none;'>Save</button>
                                    <a href='#' class='delete-link' data-id='{$row['No']}'>Delete</a>
                                </td>
                            </form>
                        </tr>";
                    }
                }
                // These two function will base on the value stored inside the database and return the words
                function getEL($iPrecision) {
                    switch ($iPrecision) {
                        case 1: return '<span style="color: green;">Beginner</span>';
                        case 2: return '<span style="color: gray;">Intermediate</span>';
                        case 3: return '<span style="color: blue;">Proficient</span>';
                        case 4: return '<span style="color: orange;">Advanced</span>';
                        case 5: return '<span style="color: red;">Expert</span>';
                        case 6: return 'None';
                    }
                }

                function getES($Shift) {
                    switch ($Shift) {
                        case 1: return 'NORMAL';
                        case 2: return 'SHIFT';
                        case 3: return 'NIGHT SHIFT';
                    }
                }
                ?>
            </tbody>
        </table>
    </section>
    <script>
        function searchEmployee() {
            const input = document.getElementById('search');
            const filter = input.value.toUpperCase();
            const table = document.getElementById('employeeTable');
            const tr = table.getElementsByTagName('tr');

            for (let i = 1; i < tr.length; i++) {
                const tdArray = tr[i].getElementsByTagName('td');
                let found = false;
                for (let j = 1; j < tdArray.length; j++) {
                    const td = tdArray[j];
                    if (td) {
                        const txtValue = td.textContent || td.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            found = true;
                            break;
                        }
                    }
                }
                if (found) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }


        document.querySelectorAll('.edit-button').forEach(button => {
            button.addEventListener('click', function() {
                const row = this.closest('tr');
                row.querySelectorAll('.view-mode').forEach(el => el.style.display = 'none');
                row.querySelectorAll('.edit-mode').forEach(el => el.style.display = 'block');
                row.querySelector('.edit-button').style.display = 'none';
                row.querySelector('.save-button').style.display = 'inline';
            });
        });

        document.querySelectorAll('.save-button').forEach(button => {
            button.addEventListener('click', function() {
                const row = this.closest('tr');
                row.querySelectorAll('.view-mode').forEach(el => el.style.display = 'block');
                row.querySelectorAll('.edit-mode').forEach(el => el.style.display = 'none');
                row.querySelector('.edit-button').style.display = 'inline';
                row.querySelector('.save-button').style.display = 'none';
            });
        });

        document.querySelectorAll('.delete-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const No = this.dataset.id;
                if (confirm('Are you sure you want to delete this QC/QA?')) {
                    window.location.href = `?delete=${No}`;
                }
            });
        });
    </script>
</body>
</html>
