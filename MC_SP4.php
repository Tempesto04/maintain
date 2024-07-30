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
    <link rel="stylesheet" type="text/css" href="Production_Skill.css">
    <title>Emoloyee SKILL MATRIX</title>
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

    </div> 
</header>
<body>
    <section id="add-product" class="form-section">
        <h2>Add New Production Employee</h2>
        <h2>MC SP4</h2>
        <!-- Form to add New QC/QA -->
        <form id="addProductionForm" method="POST" action="" enctype="multipart/form-data">
            <label for="Employee_No">Employee No:</label>
            <input type="text" id="Employee_No" name="Employee_No" required>
            <label for="Name">Employee Name:</label>
            <input type="text" id="Name" name="Name" required>
            <label for="PD">PD:</label>
            <input type="text" id="PD" name="PD" required>
            <label for="Photo">Photo:</label>
            <input type="file" id="Photo" name="Photo" required>
            <label for="Position">Current Position:</label>
            <input type="text" id="Position" name="Position" required>
            <label for="Shift">Shift:</label>
            <p>DAY <input type="radio" id="Shift" name="Shift" value="1" required>&nbsp;&nbsp;&nbsp;
            NIGHT <input type="radio" id="Shift" name="Shift" value="2" required>&nbsp;&nbsp;&nbsp;</p>
            <table>
                <tr>
                    <th></th>
                    <th>Level 1</th>
                    <th>Level 2</th>
                    <th>Level 3</th>
                    <th>Level 4</th>
                    <th>Level 5</th>
                </tr>
                <tr>
                    <td><label for="FANUC_3_AXIS1">FANUC-3 AXIS:</label></td>
                    <td>
                        <input type="date" id="FANUC_3_AXIS1" name="FANUC_3_AXIS1">
                        <button type="button" onclick="clearDate('FANUC_3_AXIS1')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="FANUC_3_AXIS2" name="FANUC_3_AXIS2">
                        <button type="button" onclick="clearDate('FANUC_3_AXIS2')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="FANUC_3_AXIS3" name="FANUC_3_AXIS3">
                        <button type="button" onclick="clearDate('FANUC_3_AXIS3')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="FANUC_3_AXIS4" name="FANUC_3_AXIS4">
                        <button type="button" onclick="clearDate('FANUC_3_AXIS4')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="FANUC_3_AXIS5" name="FANUC_3_AXIS5">
                        <button type="button" onclick="clearDate('FANUC_3_AXIS5')">Clear</button>
                    </td>
                </tr>
                <tr>
                    <td><label for="FANUC_4_AXIS1">FANUC-4 AXIS:</label></td>
                    <td>
                        <input type="date" id="FANUC_4_AXIS1" name="FANUC_4_AXIS1">
                        <button type="button" onclick="clearDate('FANUC_4_AXIS1')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="FANUC_4_AXIS2" name="FANUC_4_AXIS2">
                        <button type="button" onclick="clearDate('FANUC_4_AXIS2')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="FANUC_4_AXIS3" name="FANUC_4_AXIS3">
                        <button type="button" onclick="clearDate('FANUC_4_AXIS3')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="FANUC_4_AXIS4" name="FANUC_4_AXIS4">
                        <button type="button" onclick="clearDate('FANUC_4_AXIS4')">CLear</button>
                    </td>
                    <td>
                        <input type="date" id="FANUC_4_AXIS5" name="FANUC_4_AXIS5">
                        <button type="button" onclick="clearDate('FANUC_4_AXIS5')">Clear</button>
                    </td>
                </tr>
                <tr>
                    <td><label for="DAHLIH1">DAHLIH:</label></td>
                    <td>
                        <input type="date" id="DAHLIH1" name="DAHLIH1">
                        <button type="button" onclick="clearDate('DAHLIH1')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="DAHLIH2" name="DAHLIH2">
                        <button type="button" onclick="clearDate('DAHLIH2')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="DAHLIH3" name="DAHLIH3">
                        <button type="button" onclick="clearDate('DAHLIH3')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="DAHLIH4" name="DAHLIH4">
                        <button type="button" onclick="clearDate('DAHLIH4')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="DAHLIH5" name="DAHLIH5">
                        <button type="button" onclick="clearDate('DAHLIH5')">Clear</button>
                    </td>
                </tr>
                <tr>
                    <td><label for="MAKINO1">MAKINO:</label></td>
                    <td>
                        <input type="date" id="MAKINO1" name="MAKINO1">
                        <button type="button" onclick="clearDate('MAKINO1')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="MAKINO2" name="MAKINO2">
                        <button type="button" onclick="clearDate('MAKINO2')">Clear</burron>
                    </td>
                    <td>
                        <input type="date" id="MAKINO3" name="MAKINO3">
                        <button type="button" onclick="clearDate('MAKINO3')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="MAKINO4" name="MAKINO4">
                        <button type="button" onclick="clearDate('MAKINO4')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="MAKINO5" name="MAKINO5">
                        <button type="button" onclick="clearDate('MAKINO5')">Clear</button>
                    </td>
                </tr>
                <tr>
                    <td><label for="GAMMA1">GAMMA:</label></td>
                    <td>
                        <input type="date" id="GAMMA1" name="GAMMA1">
                        <button type="button" onclick="clearDate('GAMMA1')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="GAMMA2" name="GAMMA2">
                        <button type="button" onclick="clearDate('GAMMA2')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="GAMMA3" name="GAMMA3">
                        <button type="button" onclick="clearDate('GAMMA3')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="GAMMA4" name="GAMMA4">
                        <button type="button" onclick="clearDate('GAMMA4')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="GAMMA5" name="GAMMA5">
                        <button type="button" onclick="clearDate('GAMMA5')">Clear</button>
                    </td>
                </tr>
                <tr>
                    <td><label for="PINNACLE1">PINNACLE:</label></td>
                    <td>
                        <input type="date" id="PINNACLE1" name="PINNACLE1">
                        <button type="button" onclick="clearDate('PINNACLE1')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="PINNACLE2" name="PINNACLE2">
                        <button type="button" onclick="clearDate('PINNACLE2')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="PINNACLE3" name="PINNACLE3">
                        <button type="button" onclick="clearDate('PINNACLE3')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="PINNACLE4" name="PINNACLE4">
                        <button type="button" onclick="clearDate('PINNACLE4')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="PINNACLE5" name="PINNACLE5">
                        <button type="button" onclick="clearDate('PINNACLE5')">Clear</button>
                    </td>
                </tr>
                <tr>
                    <td><label for="MICRON1">MICRON:</label></td>
                    <td>
                        <input type="date" id="MICRON1" name="MICRON1">
                        <button type="button" onclick="clearDate('MICRON1')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="MICRON2" name="MICRON2">
                        <button type="button" onclick="clearDate('MICRON2')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="MICRON3" name="MICRON3">
                        <button type="button" onclick="clearDate('MICRON3')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="MICRON4" name="MICRON4">
                        <button type="button" onclick="clearDate('MICRON4')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="MICRON5" name="MICRON5">
                        <button type="button" onclick="clearDate('MICRON5')">Clear</button>
                    </td>
                </tr>
                <tr>
                    <td><label for="POR_CE&CP1">POR CE&CP:</label></td>
                    <td>
                        <input type="date" id="POR_CE&CP1" name="POR_CE&CP1">
                        <button type="button" onclick="clearDate('POR_CE&CP1')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="POR_CE&CP2" name="POR_CE&CP2">
                        <button type="button" onclick="clearDate('POR_CE&CP2')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="POR_CE&CP3" name="POR_CE&CP3">
                        <button type="button" onclick="clearDate('POR_CE&CP3')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="POR_CE&CP4" name="POR_CE&CP4">
                        <button type="button" onclick="clearDate('POR_CE&CP4')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="POR_CE&CP5" name="POR_CE&CP5">
                        <button type="button" onclick="clearDate('POR_CE&CP5')">Clear</button>
                    </td>
                </tr>
                <tr>
                    <td><label for="5S_cleaning">5S cleaning:</label></td>
                    <td>
                        <input type="date" id="5S_cleaning1" name="5S_cleaning1">
                        <button type="button" onclick="clearDate('5S_cleaning1')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="5S_cleaning2" name="5S_cleaning2">
                        <button type="button" onclick="clearDate('5S_cleaning2')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="5S_cleaning3" name="5S_cleaning3">
                        <button type="button" onclick="clearDate('5S_cleaning3')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="5S_cleaning4" name="5S_cleaning4">
                        <button type="button" onclick="clearDate('5S_cleaning4')">Clear</button>
                    </td>
                    <td>
                        <input type="date" id="5S_cleaning5" name="5S_cleaning5">
                        <button type="button" onclick="clearDate('5S_cleaning5')">Clear</button>
                    </td>
                </tr>
            </table>
            <hr>
            <button type="submit" name="action" value="add" class="form-button">Add</button>
        </form>
    </section>
    <!-- Searching Input Box -->
    <div class="search-container">
        <input type="text" id="search" onkeyup="searchEmployee()" placeholder="Search Employee by Name or Employee No">
    </div>

    <section id="Employee-list">
        <h2>Employee List</h2>
        <!-- This is the list that show the database data -->
        <table id="employeeTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Employee No</th>
                    <th>Name</th>
                    <th>Photo</th>
                    <th>Position</th>
                    <th>Shift</th>
                    <th>FANUC-3 AXIS</th>
                    <th>FANUC-4 AXIS</th>
                    <th>DAHLIH</th>
                    <th>MAKINO</th>
                    <th>GAMMA</th>
                    <th>PINNACLE</th>
                    <th>MICRON</th>
                    <th>POR CE&CP</th>
                    <th>5S cleaning</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- This php help to update the data that we have type in to the database -->
                <?php
                if (!is_dir('mc_sp4')) {
                    mkdir('mc_sp4', 0777, true);
                }

                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action'])) {
                    if ($_POST['action'] == 'add') {
                        $Employee_No = $_POST['Employee_No'];
                        $Name = $_POST['Name'];
                        $PD = $_POST['PD'];
                        $Photo = $_FILES['Photo']['name'];
                        $target_dir = "mc_sp4/";
                        $target_file = $target_dir . basename($_FILES["Photo"]["name"]);
                        $Position = $_POST['Position'];
                        $Shift = $_POST['Shift'];
                
                        $FANUC_31 = $_POST['FANUC_3_AXIS1'];
                        $FANUC_32 = $_POST['FANUC_3_AXIS2'];
                        $FANUC_33 = $_POST['FANUC_3_AXIS3'];
                        $FANUC_34 = $_POST['FANUC_3_AXIS4'];
                        $FANUC_35 = $_POST['FANUC_3_AXIS5'];
                
                        $FANUC_41 = $_POST['FANUC_4_AXIS1'];
                        $FANUC_42 = $_POST['FANUC_4_AXIS2'];
                        $FANUC_43 = $_POST['FANUC_4_AXIS3'];
                        $FANUC_44 = $_POST['FANUC_4_AXIS4'];
                        $FANUC_45 = $_POST['FANUC_4_AXIS5'];

                        $DAHLIH1 = $_POST['DAHLIH1'];
                        $DAHLIH2 = $_POST['DAHLIH2'];
                        $DAHLIH3 = $_POST['DAHLIH3'];
                        $DAHLIH4 = $_POST['DAHLIH4'];
                        $DAHLIH5 = $_POST['DAHLIH5'];

                        $MAKINO1 = $_POST['MAKINO1'];
                        $MAKINO2 = $_POST['MAKINO2'];
                        $MAKINO3 = $_POST['MAKINO3'];
                        $MAKINO4 = $_POST['MAKINO4'];
                        $MAKINO5 = $_POST['MAKINO5'];

                        $GAMMA1 = $_POST['GAMMA1'];
                        $GAMMA2 = $_POST['GAMMA2'];
                        $GAMMA3 = $_POST['GAMMA3'];
                        $GAMMA4 = $_POST['GAMMA4'];
                        $GAMMA5 = $_POST['GAMMA5'];
                
                        $PINNACLE1 = $_POST['PINNACLE1'];
                        $PINNACLE2 = $_POST['PINNACLE2'];
                        $PINNACLE3 = $_POST['PINNACLE3'];
                        $PINNACLE4 = $_POST['PINNACLE4'];
                        $PINNACLE5 = $_POST['PINNACLE5'];
                
                        $MICRON1 = $_POST['MICRON1'];
                        $MICRON2 = $_POST['MICRON2'];
                        $MICRON3 = $_POST['MICRON3'];
                        $MICRON4 = $_POST['MICRON4'];
                        $MICRON5 = $_POST['MICRON5'];
                
                        $POR_CECP1 = $_POST['POR_CE&CP1'];
                        $POR_CECP2 = $_POST['POR_CE&CP2'];
                        $POR_CECP3 = $_POST['POR_CE&CP3'];
                        $POR_CECP4 = $_POST['POR_CE&CP4'];
                        $POR_CECP5 = $_POST['POR_CE&CP5'];
                
                        $cleaning1 = $_POST['5S_cleaning1'];
                        $cleaning2 = $_POST['5S_cleaning2'];
                        $cleaning3 = $_POST['5S_cleaning3'];
                        $cleaning4 = $_POST['5S_cleaning4'];
                        $cleaning5 = $_POST['5S_cleaning5'];
                
                        // Ensure file is moved to the target directory
                        if (move_uploaded_file($_FILES["Photo"]["tmp_name"], $target_file)) {
                            $sql = "INSERT INTO mc_sp4 (
                                Employee_No, 
                                Name, 
                                PD, 
                                Photo, 
                                Position, 
                                Shift, 
                                FANUC_3_AXIS1, 
                                FANUC_3_AXIS2, 
                                FANUC_3_AXIS3, 
                                FANUC_3_AXIS4, 
                                FANUC_3_AXIS5, 
                                FANUC_4_AXIS1, 
                                FANUC_4_AXIS2, 
                                FANUC_4_AXIS3, 
                                FANUC_4_AXIS4, 
                                FANUC_4_AXIS5, 
                                DAHLIH1, 
                                DAHLIH2, 
                                DAHLIH3, 
                                DAHLIH4, 
                                DAHLIH5, 
                                MAKINO1, 
                                MAKINO2, 
                                MAKINO3, 
                                MAKINO4, 
                                MAKINO5,  
                                GAMMA1, 
                                GAMMA2, 
                                GAMMA3, 
                                GAMMA4, 
                                GAMMA5, 
                                PINNACLE1, 
                                PINNACLE2, 
                                PINNACLE3, 
                                PINNACLE4, 
                                PINNACLE5,
                                MICRON1,
                                MICRON2,
                                MICRON3,
                                MICRON4,
                                MICRON5,
                                `POR_CE&CP1`, 
                                `POR_CE&CP2`, 
                                `POR_CE&CP3`, 
                                `POR_CE&CP4`, 
                                `POR_CE&CP5`, 
                                `5S_cleaning1`, 
                                `5S_cleaning2`, 
                                `5S_cleaning3`, 
                                `5S_cleaning4`, 
                                `5S_cleaning5`
                            ) VALUES (
                                '$Employee_No', 
                                '$Name', 
                                '$PD', 
                                '$Photo', 
                                '$Position', 
                                '$Shift', 
                                '$FANUC_31', 
                                '$FANUC_32', 
                                '$FANUC_33', 
                                '$FANUC_34', 
                                '$FANUC_35', 
                                '$FANUC_41', 
                                '$FANUC_42', 
                                '$FANUC_43', 
                                '$FANUC_44', 
                                '$FANUC_45', 
                                '$DAHLIH1', 
                                '$DAHLIH2', 
                                '$DAHLIH3', 
                                '$DAHLIH4', 
                                '$DAHLIH5',  
                                '$MAKINO1', 
                                '$MAKINO2', 
                                '$MAKINO3', 
                                '$MAKINO4', 
                                '$MAKINO5', 
                                '$GAMMA1', 
                                '$GAMMA2', 
                                '$GAMMA3', 
                                '$GAMMA4', 
                                '$GAMMA5', 
                                '$PINNACLE1', 
                                '$PINNACLE2', 
                                '$PINNACLE3', 
                                '$PINNACLE4', 
                                '$PINNACLE5', 
                                '$MICRON1', 
                                '$MICRON2', 
                                '$MICRON3', 
                                '$MICRON4', 
                                '$MICRON5', 
                                '$POR_CECP1', 
                                '$POR_CECP2', 
                                '$POR_CECP3', 
                                '$POR_CECP4', 
                                '$POR_CECP5', 
                                '$cleaning1', 
                                '$cleaning2', 
                                '$cleaning3', 
                                '$cleaning4', 
                                '$cleaning5'
                            )";
                
                            if ($conn->query($sql) === TRUE) {
                                echo "<script>alert('New Employee added successfully');</script>";
                            } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                        } else {
                            echo "Adding Unsuccessful.";
                        }
                    } elseif ($_POST['action'] == 'edit') { 
                        $No = $_POST['Num'];
                        $Employee_No = $_POST['Employee_No'];
                        $Name = $_POST['Name'];
                        $PD = $_POST['PD'];
                        $Photo = $_FILES['Photo']['name'];
                        $target_dir = "mc_sp4/";
                        $target_file = $target_dir . basename($_FILES["Photo"]["name"]);
                        $Position = $_POST['Position'];
                        $Shift = $_POST['Shift'];
                
                        $FANUC_31 = $_POST['FANUC_3_AXIS1'];
                        $FANUC_32 = $_POST['FANUC_3_AXIS2'];
                        $FANUC_33 = $_POST['FANUC_3_AXIS3'];
                        $FANUC_34 = $_POST['FANUC_3_AXIS4'];
                        $FANUC_35 = $_POST['FANUC_3_AXIS5'];
                
                        $FANUC_41 = $_POST['FANUC_4_AXIS1'];
                        $FANUC_42 = $_POST['FANUC_4_AXIS2'];
                        $FANUC_43 = $_POST['FANUC_4_AXIS3'];
                        $FANUC_44 = $_POST['FANUC_4_AXIS4'];
                        $FANUC_45 = $_POST['FANUC_4_AXIS5'];

                        $DAHLIH1 = $_POST['DAHLIH1'];
                        $DAHLIH2 = $_POST['DAHLIH2'];
                        $DAHLIH3 = $_POST['DAHLIH3'];
                        $DAHLIH4 = $_POST['DAHLIH4'];
                        $DAHLIH5 = $_POST['DAHLIH5'];

                        $MAKINO1 = $_POST['MAKINO1'];
                        $MAKINO2 = $_POST['MAKINO2'];
                        $MAKINO3 = $_POST['MAKINO3'];
                        $MAKINO4 = $_POST['MAKINO4'];
                        $MAKINO5 = $_POST['MAKINO5'];

                        $GAMMA1 = $_POST['GAMMA1'];
                        $GAMMA2 = $_POST['GAMMA2'];
                        $GAMMA3 = $_POST['GAMMA3'];
                        $GAMMA4 = $_POST['GAMMA4'];
                        $GAMMA5 = $_POST['GAMMA5'];
                
                        $PINNACLE1 = $_POST['PINNACLE1'];
                        $PINNACLE2 = $_POST['PINNACLE2'];
                        $PINNACLE3 = $_POST['PINNACLE3'];
                        $PINNACLE4 = $_POST['PINNACLE4'];
                        $PINNACLE5 = $_POST['PINNACLE5'];
                
                        $MICRON1 = $_POST['MICRON1'];
                        $MICRON2 = $_POST['MICRON2'];
                        $MICRON3 = $_POST['MICRON3'];
                        $MICRON4 = $_POST['MICRON4'];
                        $MICRON5 = $_POST['MICRON5'];
                
                        $POR_CECP1 = $_POST['POR_CE&CP1'];
                        $POR_CECP2 = $_POST['POR_CE&CP2'];
                        $POR_CECP3 = $_POST['POR_CE&CP3'];
                        $POR_CECP4 = $_POST['POR_CE&CP4'];
                        $POR_CECP5 = $_POST['POR_CE&CP5'];
                
                        $cleaning1 = $_POST['5S_cleaning1'];
                        $cleaning2 = $_POST['5S_cleaning2'];
                        $cleaning3 = $_POST['5S_cleaning3'];
                        $cleaning4 = $_POST['5S_cleaning4'];
                        $cleaning5 = $_POST['5S_cleaning5'];
                        
                        if(!empty($Photo)) {
                            // Photo was uploaded
                            if (move_uploaded_file($_FILES["Photo"]["tmp_name"], $target_file)) {
                                $sql = "UPDATE mc_sp4 SET Employee_No='$Employee_No', Name='$Name', PD='$PD', Photo='$Photo', Position='$Position', Shift='$Shift', FANUC_3_AXIS1='$FANUC_31', FANUC_3_AXIS2='$FANUC_32', FANUC_3_AXIS3='$FANUC_33', FANUC_3_AXIS4='$FANUC_34', FANUC_3_AXIS5='$FANUC_35', `FANUC_4_AXIS1`='$FANUC_41', `FANUC_4_AXIS2`='$FANUC_42', `FANUC_4_AXIS3`='$FANUC_43', `FANUC_4_AXIS4`='$FANUC_44', `FANUC_4_AXIS5`='$FANUC_55', `DAHLIH1`='$DAHLIH1', `DAHLIH2`='$DAHLIH2', `DAHLIH3`='$DAHLIH3', `DAHLIH4`='$DAHLIH4', `DAHLIH5`='$DAHLIH5', `MAKINO1`='$MAKINO1', `MAKINO2`='$MAKINO2', `MAKINO3`='$MAKINO3', `MAKINO4`='$MAKINO4', `MAKINO5`='$MAKINO5', `GAMMA1`='$GAMMA1', `GAMMA2`='$GAMMA2', `GAMMA3`='$GAMMA3', `GAMMA4`='$GAMMA4', `GAMMA5`='$GAMMA5', `PINNACLE1`='$PINNACLE1', `PINNACLE2`='$PINNACLE2', `PINNACLE3`='$PINNACLE3', `PINNACLE4`='$PINNACLE4', `PINNACLE5`='$PINNACLE5', `MICRON1`='$MICRON1', `MICRON2`='$MICRON2', `MICRON3`='$MICRON3', `MICRON4`='$MICRON4', `MICRON5`='$MICRON5', `POR_CE&CP1`='$POR_CECP1', `POR_CE&CP2`='$POR_CECP2', `POR_CE&CP3`='$POR_CECP3', `POR_CE&CP4`='$POR_CECP4', `POR_CE&CP5`='$POR_CECP5', `5S_cleaning1`='$cleaning1', `5S_cleaning2`='$cleaning2', `5S_cleaning3`='$cleaning3', `5S_cleaning4`='$cleaning4', `5S_cleaning5`='$cleaning5' WHERE Num='$No'";
                            } else {
                                echo "Error uploading photo.";
                            }
                        } else {
                            $sql = "UPDATE mc_sp4 SET Employee_No='$Employee_No', Name='$Name', PD='$PD', Position='$Position', Shift='$Shift', FANUC_3_AXIS1='$FANUC_31', FANUC_3_AXIS2='$FANUC_32', FANUC_3_AXIS3='$FANUC_33', FANUC_3_AXIS4='$FANUC_34', FANUC_3_AXIS5='$FANUC_35', `FANUC_4_AXIS1`='$FANUC_41', `FANUC_4_AXIS2`='$FANUC_42', `FANUC_4_AXIS3`='$FANUC_43', `FANUC_4_AXIS4`='$FANUC_44', `FANUC_4_AXIS5`='$FANUC_55', `DAHLIH1`='$DAHLIH1', `DAHLIH2`='$DAHLIH2', `DAHLIH3`='$DAHLIH3', `DAHLIH4`='$DAHLIH4', `DAHLIH5`='$DAHLIH5', `MAKINO1`='$MAKINO1', `MAKINO2`='$MAKINO2', `MAKINO3`='$MAKINO3', `MAKINO4`='$MAKINO4', `MAKINO5`='$MAKINO5', `GAMMA1`='$GAMMA1', `GAMMA2`='$GAMMA2', `GAMMA3`='$GAMMA3', `GAMMA4`='$GAMMA4', `GAMMA5`='$GAMMA5', `PINNACLE1`='$PINNACLE1', `PINNACLE2`='$PINNACLE2', `PINNACLE3`='$PINNACLE3', `PINNACLE4`='$PINNACLE4', `PINNACLE5`='$PINNACLE5', `MICRON1`='$MICRON1', `MICRON2`='$MICRON2', `MICRON3`='$MICRON3', `MICRON4`='$MICRON4', `MICRON5`='$MICRON5', `POR_CE&CP1`='$POR_CECP1', `POR_CE&CP2`='$POR_CECP2', `POR_CE&CP3`='$POR_CECP3', `POR_CE&CP4`='$POR_CECP4', `POR_CE&CP5`='$POR_CECP5', `5S_cleaning1`='$cleaning1', `5S_cleaning2`='$cleaning2', `5S_cleaning3`='$cleaning3', `5S_cleaning4`='$cleaning4', `5S_cleaning5`='$cleaning5' WHERE Num='$No'";
                        }
                        if ($conn->query($sql) === TRUE) {
                            echo "<script>alert('Employee updated successfully');</script>";
                        } else {
                            echo "Error: Uploading erro" . $sql . "<br>" . $conn->error;
                        }
                    }
                }elseif (isset($_GET['delete'])) {
                    $No = $_GET['delete'];
                    $stmt = "DELETE FROM mc_sp4 WHERE Num = $No";

                    if ($conn->query($stmt) === TRUE) {
                        echo "<script>alert('Employee deleted successfully');</script>";
                    } else {
                        echo "Error: " . $stmt . "<br>" . $conn->error;
                    }
                }

                // This is to fetch the data from the database to let us edit on it
                $sql = "SELECT * FROM mc_sp4";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr class='mc_sp4-row'>
                            <form method='POST' action='' enctype='multipart/form-data'>
                                <td>{$row['Num']}</td>
                                <td>
                                    <span class='view-mode'>{$row['Employee_No']}</span>
                                    <input class='edit-mode' type='text' name='Employee_No' value='{$row['Employee_No']}' style='display:none;' required>
                                </td>
                                <td>
                                    <span class='view-mode'>{$row['Name']}<br><br>PD:{$row['PD']}</span>
                                    <input class='edit-mode' type='text' name='Name' value='{$row['Name']}' style='display:none;' required>
                                    <input class='edit-mode' type='text' name='PD' value='{$row['PD']}' style='display:none;' required>
                                </td>
                                <td>
                                    <span class='view-mode'><img src='mc_sp4/{$row['Photo']}' alt='{$row['Name']}' style='max-width: 100px;' /></span>
                                    <input type='file' name='Photo' class='edit-mode' style='display: none;' />
                                </td>
                                <td>
                                    <span class='view-mode'>{$row['Position']}</span>
                                    <input class='edit-mode' type='text' name='Position' value='{$row['Position']}' style='display:none;' required>
                                </td>
                                <td><span class='view-mode'>" . getES($row['Shift']) . "</span>
                                    <select class='edit-mode' name='Shift' style='display:none;' required>
                                        <option value='1'" . ($row['Shift'] == 1 ? ' selected' : '') . ">DAY</option>
                                        <option value='2'" . ($row['Shift'] == 2 ? ' selected' : '') . ">NIGHT</option>
                                    </select>
                                </td>
                                <td>
                                    <table>
                                        <tr>
                                            <td>
                                                LV 1&nbsp;<span class='view-mode'>{$row['FANUC_3_AXIS1']}</span>
                                                <input class='edit-mode' type='date' name='FANUC_3_AXIS1' value='{$row['FANUC_3_AXIS1']}' style='display:none;'>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                LV 2&nbsp;<span class='view-mode'>{$row['FANUC_3_AXIS2']}</span>
                                                <input class='edit-mode' type='date' name='FANUC_3_AXIS2' value='{$row['FANUC_3_AXIS2']}' style='display:none;'>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                LV 3&nbsp;<span class='view-mode'>{$row['FANUC_3_AXIS3']}</span>
                                                <input class='edit-mode' type='date' name='FANUC_3_AXIS3' value='{$row['FANUC_3_AXIS3']}' style='display:none;'>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                LV 4&nbsp;<span class='view-mode'>{$row['FANUC_3_AXIS4']}</span>
                                                <input class='edit-mode' type='date' name='FANUC_3_AXIS4' value='{$row['FANUC_3_AXIS4']}' style='display:none;'>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                LV 5&nbsp;<span class='view-mode'>{$row['FANUC_3_AXIS5']}</span>
                                                <input class='edit-mode' type='date' name='FANUC_3_AXIS5' value='{$row['FANUC_3_AXIS5']}' style='display:none;'>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td>
                                    <table>
                                        <tr>
                                            <td>
                                                1&nbsp;<span class='view-mode'>{$row['FANUC_4_AXIS1']}</span>
                                                <input class='edit-mode' type='date' name='FANUC_4_AXIS1' value='{$row['FANUC_4_AXIS1']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2&nbsp;<span class='view-mode'>{$row['FANUC_4_AXIS2']}</span>
                                                <input class='edit-mode' type='date' name='FANUC_4_AXIS2' value='{$row['FANUC_4_AXIS2']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                3&nbsp;<span class='view-mode'>{$row['FANUC_4_AXIS3']}</span>
                                                <input class='edit-mode' type='date' name='FANUC_4_AXIS3' value='{$row['FANUC_4_AXIS3']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                4&nbsp;<span class='view-mode'>{$row['FANUC_4_AXIS4']}</span>
                                                <input class='edit-mode' type='date' name='FANUC_4_AXIS4' value='{$row['FANUC_4_AXIS4']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                5&nbsp;<span class='view-mode'>{$row['FANUC_4_AXIS5']}</span>
                                                <input class='edit-mode' type='date' name='FANUC_4_AXIS5' value='{$row['FANUC_4_AXIS5']}' style='display:none;' >
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td>
                                    <table>
                                        <tr>
                                            <td>
                                                1&nbsp;<span class='view-mode'>{$row['DAHLIH1']}</span>
                                                <input class='edit-mode' type='date' name='DAHLIH1' value='{$row['DAHLIH1']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2&nbsp;<span class='view-mode'>{$row['DAHLIH2']}</span>
                                                <input class='edit-mode' type='date' name='DAHLIH2' value='{$row['DAHLIH2']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                3&nbsp;<span class='view-mode'>{$row['DAHLIH3']}</span>
                                                <input class='edit-mode' type='date' name='DAHLIH3' value='{$row['DAHLIH3']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                4&nbsp;<span class='view-mode'>{$row['DAHLIH4']}</span>
                                                <input class='edit-mode' type='date' name='DAHLIH4' value='{$row['DAHLIH4']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                5&nbsp;<span class='view-mode'>{$row['DAHLIH5']}</span>
                                                <input class='edit-mode' type='date' name='DAHLIH5' value='{$row['DAHLIH5']}' style='display:none;' >
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td>
                                    <table>
                                        <tr>
                                            <td>
                                                1&nbsp;<span class='view-mode'>{$row['MAKINO1']}</span>
                                                <input class='edit-mode' type='date' name='MAKINO1' value='{$row['MAKINO1']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2&nbsp;<span class='view-mode'>{$row['MAKINO2']}</span>
                                                <input class='edit-mode' type='date' name='MAKINO2' value='{$row['MAKINO2']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                3&nbsp;<span class='view-mode'>{$row['MAKINO3']}</span>
                                                <input class='edit-mode' type='date' name='MAKINO3' value='{$row['MAKINO3']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                4&nbsp;<span class='view-mode'>{$row['MAKINO4']}</span>
                                                <input class='edit-mode' type='date' name='MAKINO4' value='{$row['MAKINO4']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                5&nbsp;<span class='view-mode'>{$row['MAKINO5']}</span>
                                                <input class='edit-mode' type='date' name='MAKINO5' value='{$row['MAKINO5']}' style='display:none;' >
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td>
                                    <table>
                                        <tr>
                                            <td>
                                                1&nbsp;<span class='view-mode'>{$row['GAMMA1']}</span>
                                                <input class='edit-mode' type='date' name='GAMMA1' value='{$row['GAMMA1']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2&nbsp;<span class='view-mode'>{$row['GAMMA2']}</span>
                                                <input class='edit-mode' type='date' name='GAMMA2' value='{$row['GAMMA2']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                3&nbsp;<span class='view-mode'>{$row['GAMMA3']}</span>
                                                <input class='edit-mode' type='date' name='GAMMA3' value='{$row['GAMMA3']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                4&nbsp;<span class='view-mode'>{$row['GAMMA4']}</span>
                                                <input class='edit-mode' type='date' name='GAMMA4' value='{$row['GAMMA4']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                5&nbsp;<span class='view-mode'>{$row['GAMMA5']}</span>
                                                <input class='edit-mode' type='date' name='GAMMA5' value='{$row['GAMMA5']}' style='display:none;' >
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td>
                                    <table>
                                        <tr>
                                            <td>
                                                1&nbsp;<span class='view-mode'>{$row['PINNACLE1']}</span>
                                                <input class='edit-mode' type='date' name='PINNACLE1' value='{$row['PINNACLE1']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2&nbsp;<span class='view-mode'>{$row['PINNACLE2']}</span>
                                                <input class='edit-mode' type='date' name='PINNACLE2' value='{$row['PINNACLE2']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                3&nbsp;<span class='view-mode'>{$row['PINNACLE3']}</span>
                                                <input class='edit-mode' type='date' name='PINNACLE3' value='{$row['PINNACLE3']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                4&nbsp;<span class='view-mode'>{$row['PINNACLE4']}</span>
                                                <input class='edit-mode' type='date' name='PINNACLE4' value='{$row['PINNACLE4']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                5&nbsp;<span class='view-mode'>{$row['PINNACLE5']}</span>
                                                <input class='edit-mode' type='date' name='PINNACLE5' value='{$row['PINNACLE5']}' style='display:none;' >
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td>
                                    <table>
                                        <tr>
                                            <td>
                                                1&nbsp;<span class='view-mode'>{$row['MICRON1']}</span>
                                                <input class='edit-mode' type='date' name='MICRON1' value='{$row['MICRON1']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2&nbsp;<span class='view-mode'>{$row['MICRON2']}</span>
                                                <input class='edit-mode' type='date' name='MICRON2' value='{$row['MICRON2']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                3&nbsp;<span class='view-mode'>{$row['MICRON3']}</span>
                                                <input class='edit-mode' type='date' name='MICRON3' value='{$row['MICRON3']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                4&nbsp;<span class='view-mode'>{$row['MICRON4']}</span>
                                                <input class='edit-mode' type='date' name='MICRON4' value='{$row['MICRON4']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                5&nbsp;<span class='view-mode'>{$row['MICRON5']}</span>
                                                <input class='edit-mode' type='date' name='MICRON5' value='{$row['MICRON5']}' style='display:none;' >
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td>
                                    <table>
                                        <tr>
                                            <td>
                                                1&nbsp;<span class='view-mode'>{$row['POR_CE&CP1']}</span>
                                                <input class='edit-mode' type='date' name='POR_CE&CP1' value='{$row['POR_CE&CP1']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2&nbsp;<span class='view-mode'>{$row['POR_CE&CP2']}</span>
                                                <input class='edit-mode' type='date' name='POR_CE&CP2' value='{$row['POR_CE&CP2']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                3&nbsp;<span class='view-mode'>{$row['POR_CE&CP3']}</span>
                                                <input class='edit-mode' type='date' name='POR_CE&CP3' value='{$row['POR_CE&CP3']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                4&nbsp;<span class='view-mode'>{$row['POR_CE&CP4']}</span>
                                                <input class='edit-mode' type='date' name='POR_CE&CP4' value='{$row['POR_CE&CP4']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                5&nbsp;<span class='view-mode'>{$row['POR_CE&CP5']}</span>
                                                <input class='edit-mode' type='date' name='POR_CE&CP5' value='{$row['POR_CE&CP5']}' style='display:none;' >
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td>
                                    <table>
                                        <tr>
                                            <td>
                                                1&nbsp;<span class='view-mode'>{$row['5S_cleaning1']}</span>
                                                <input class='edit-mode' type='date' name='5S_cleaning1' value='{$row['5S_cleaning1']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2&nbsp;<span class='view-mode'>{$row['5S_cleaning2']}</span>
                                                <input class='edit-mode' type='date' name='5S_cleaning2' value='{$row['5S_cleaning2']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                3&nbsp;<span class='view-mode'>{$row['5S_cleaning3']}</span>
                                                <input class='edit-mode' type='date' name='5S_cleaning3' value='{$row['5S_cleaning3']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                4&nbsp;<span class='view-mode'>{$row['5S_cleaning4']}</span>
                                                <input class='edit-mode' type='date' name='5S_cleaning4' value='{$row['5S_cleaning4']}' style='display:none;' >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                5&nbsp;<span class='view-mode'>{$row['5S_cleaning5']}</span>
                                                <input class='edit-mode' type='date' name='5S_cleaning5' value='{$row['5S_cleaning5']}' style='display:none;' >
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td>
                                    <input type='hidden' name='Num' value='{$row['Num']}'>
                                    <button type='button' class='edit-button'>Edit</button>
                                    <button type='submit' name='action' value='edit' class='save-button' style='display:none;'>Save</button>
                                    <a href='#' class='delete-link' data-id='{$row['Num']}'>Delete</a>
                                </td>
                            </form>
                        </tr>";
                    }
                }

                function getES($Shift) {
                    switch ($Shift) {
                        case 1: return 'DAY';
                        case 2: return 'NIGHT';
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

        function clearDate(inputId) {
            document.getElementById(inputId).value = '';
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

        document.querySelectorAll('.delete-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const No = this.dataset.id;
                if (confirm('Are you sure you want to delete this Employee?')) {
                    window.location.href = `?delete=${No}`;
                }
            });
        });
    </script>
</body>
</html>
