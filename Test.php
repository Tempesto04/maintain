<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>
</head>
<body>
<section id="Employee-list">
    <h2>Employee List</h2>
    <table id="employeeTable">
        <thead>
            <tr>
                <th>No</th>
                <th>Employee No</th>
                <th>Name</th>
                <th>Photo</th>
                <th>Position</th>
                <th>Shift</th>
                <th>FANUC</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "skill_matrix";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            if (!is_dir('production')) {
                mkdir('production', 0777, true);
            }

            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action'])) {
                if ($_POST['action'] == 'add') {
                    $Employee_No = $_POST['Employee_No'];
                    $Name = $_POST['Name'];
                    $PD = $_POST['PD'];
                    $Photo = $_FILES['Photo']['name'];
                    $target_dir = "production/";
                    $target_file = $target_dir . basename($_FILES["Photo"]["name"]);
                    $Position = $_POST['Position'];
                    $Shift = $_POST['Shift'];
            
                    $FANUC1 = $_POST['FANUC1'];
                    $FANUC2 = $_POST['FANUC2'];
                    $FANUC3 = $_POST['FANUC3'];
                    $FANUC4 = $_POST['FANUC4'];
                    $FANUC5 = $_POST['FANUC5'];

                    if (move_uploaded_file($_FILES["Photo"]["tmp_name"], $target_file)) {
                        $sql = "INSERT INTO production (
                            Employee_No, 
                            Name, 
                            PD, 
                            Photo, 
                            Position, 
                            Shift, 
                            FANUC1, 
                            FANUC2, 
                            FANUC3, 
                            FANUC4, 
                            FANUC5
                        ) VALUES (
                            '$Employee_No', 
                            '$Name', 
                            '$PD', 
                            '$Photo', 
                            '$Position', 
                            '$Shift', 
                            '$FANUC1', 
                            '$FANUC2', 
                            '$FANUC3', 
                            '$FANUC4', 
                            '$FANUC5'
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
                    $target_dir = "production/";
                    $target_file = $target_dir . basename($_FILES["Photo"]["name"]);
                    $Position = $_POST['Position'];
                    $Shift = $_POST['Shift'];
            
                    $FANUC1 = $_POST['FANUC1'];
                    $FANUC2 = $_POST['FANUC2'];
                    $FANUC3 = $_POST['FANUC3'];
                    $FANUC4 = $_POST['FANUC4'];
                    $FANUC5 = $_POST['FANUC5'];
                    
                    if(!empty($Photo)) {
                        // Photo was uploaded
                        if (move_uploaded_file($_FILES["Photo"]["tmp_name"], $target_file)) {
                            $sql = "UPDATE production SET Employee_No='$Employee_No', Name='$Name', PD='$PD', Photo='$Photo', Position='$Position', Shift='$Shift', FANUC1='$FANUC1', FANUC2='$FANUC2', FANUC3='$FANUC3', FANUC4='$FANUC4', FANUC5='$FANUC5' WHERE Num='$No'";
                        } else {
                            echo "Error uploading photo.";
                        }
                    } else {
                        // Photo was not uploaded
                        $sql = "UPDATE production SET Employee_No='$Employee_No', Name='$Name', PD='$PD', Position='$Position', Shift='$Shift', FANUC1='$FANUC1', FANUC2='$FANUC2', FANUC3='$FANUC3', FANUC4='$FANUC4', FANUC5='$FANUC5' WHERE Num='$No'";
                    }

                    if ($conn->query($sql) === TRUE) {
                        echo "<script>alert('Employee updated successfully');</script>";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                }
            } elseif (isset($_GET['delete'])) {
                $No = $_GET['delete'];
                $stmt = "DELETE FROM production WHERE Num = $No";

                if ($conn->query($stmt) === TRUE) {
                    echo "<script>alert('Employee deleted successfully');</script>";
                } else {
                    echo "Error: " . $stmt . "<br>" . $conn->error;
                }
            }

            // Fetch data from the database
            $sql = "SELECT * FROM production";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr class='production-row'>
                        <form method='POST' action='' enctype='multipart/form-data'>
                            <td>{$row['Num']}</td>
                            <td>
                                <span class='view-mode'>{$row['Employee_No']}</span>
                                <input class='edit-mode' type='text' name='Employee_No' value='{$row['Employee_No']}' style='display:none;' required>
                            </td>
                            <td>
                                <span class='view-mode'>{$row['Name']}</span>
                                <input class='edit-mode' type='text' name='Name' value='{$row['Name']}' style='display:none;' required>
                            </td>
                            <td>
                                <span class='view-mode'><img src='production/{$row['Photo']}' alt='{$row['Name']}' style='max-width: 100px;' /></span>
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
                                            1&nbsp;<span class='view-mode'>{$row['FANUC1']}</span>
                                            <input class='edit-mode' type='date' name='FANUC1' value='{$row['FANUC1']}' style='display:none;' >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2&nbsp;<span class='view-mode'>{$row['FANUC2']}</span>
                                            <input class='edit-mode' type='date' name='FANUC2' value='{$row['FANUC2']}' style='display:none;' >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            3&nbsp;<span class='view-mode'>{$row['FANUC3']}</span>
                                            <input class='edit-mode' type='date' name='FANUC3' value='{$row['FANUC3']}' style='display:none;'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            4&nbsp;<span class='view-mode'>{$row['FANUC4']}</span>
                                            <input class='edit-mode' type='date' name='FANUC4' value='{$row['FANUC4']}' style='display:none;' >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            5&nbsp;<span class='view-mode'>{$row['FANUC5']}</span>
                                            <input class='edit-mode' type='date' name='FANUC5' value='{$row['FANUC5']}' style='display:none;' >
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
