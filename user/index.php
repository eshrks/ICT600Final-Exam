<?php
include_once '../process/select_exe.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Users</title>
    <link rel="icon" href="../assets/images/shark_icon.png">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,200&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #010812;
            font-family: 'Poppins', sans-serif;
        }

        /* This design is for the Table */

        .table-container {
            display: flex;
            justify-content: center;
        }

        .box-container {
            /* Add border styling */
            border-radius: 10px;
            background-color: #DADFDE;

            margin: 20px;

            /* Set a fixed height */
            height: 70vh;
            /* flex: 1; */
            max-height: 70vh;

            overflow-y: auto;
            /* Add a vertical scrollbar if content overflows */
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }


        td {
            border: 1px solid #91A09D;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #70a8f7;
            position: sticky;
            top: 0;
            border-left: 1px solid #91A09D;
            border-right: 1px solid #91A09D;
            padding: 8px;
            text-align: center;
        }

        @media (max-width: 600px) {
            .box-container {
                margin: 10px;
            }

            th,
            td {
                font-size: 12px;
            }
        }

        .table_header {
            margin-bottom: 0;
            background-color: #004AAD;
            text-align: center;
            font-weight: bolder;
            padding: 1rem 0;
        }

        /* End of Table Design */

        /* This design is for the Navbar */

        .nav-item a:hover .gthub-img {
            transform: scale(1.25);
        }

        .navbar-nav li.nav-item a.nav-link:hover {
            color: #497eff;
        }

        @media (min-width: 992px) {
            .dropdown:hover .dropdown-menu {
                display: block;
            }

            .dropdown-item:hover {
                color: #497eff;
                background-color: white;
            }
        }

        /* End of Navbar Design */

        .btn-primary {
            font-family: 'Poppins', sans-serif;
            font-size: 20px;
            border-radius: 50px;
            width: 50px;
            color: #000000;
            background-color: #004AAD;
        }
    </style>
</head>

<body>


    <!-- Here's the Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href=".." style="margin-left: 3%; margin-bottom: .5%;">
            <img src="../assets/images/logo.png" alt="logo" width="250px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto" style="margin-right: 5%;">
                <li class="nav-item active">
                    <a class="nav-link" href="..">Home<span class="sr-only"></span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        New
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="student_add.php">Add Student</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="user_add.php">Add User</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="https://github.com/eshrks" target="_blank">
                        <img class="gthub-img" src="../assets/images/github-logo.png" alt="github logo" height="27px" style="transition: transform 0.2s ease-in-out;">
                    </a>
                </li>
            </ul>

        </div>
    </nav>

    <!-- Here's the User Table -->
    <div class="table-container" id="user-table-container">
        <div class="box-container">
            <table>
                <!-- Here's the table header -->
                <thead>
                    <h2 class="table_header">USER'S TABLE</h2>
                    <tr>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Contact Number</th>
                        <th>Username</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    if (mysqli_num_rows($result1) > 0) {
                        while ($row = mysqli_fetch_assoc($result1)) {

                    ?>
                            <!-- Here's the table datas (td) -->
                            <tr>
                                <td>
                                    <?php echo $row['lastName']; ?>
                                </td>
                                <td>
                                    <?php echo $row['firstName']; ?>
                                </td>
                                <td>
                                    <?php echo $row['middleName']; ?>
                                </td>
                                <td>
                                    <?php echo $row['contactNumber']; ?>
                                </td>
                                <td>
                                    <?php echo $row['userName']; ?>
                                </td>
                            </tr>
                    <?php
                        }
                    } else {
                        echo "no data to show";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Here's the Student Table -->
    <div class="table-container" id="student-table-container" style="display: none;">
        <div class="box-container">
            <table>
                <!-- Here's the table header -->
                <thead>
                    <h2 class="table_header">Student's Table</h2>
                    <tr>
                        <th>Student Level</th>
                        <th>Student Number</th>
                        <th>Full Name</th>
                        <th>Midterm Grade</th>
                        <th>Final Grade</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    if (mysqli_num_rows($result2) > 0) {
                        while ($row = mysqli_fetch_assoc($result2)) {

                    ?>
                            <!-- Here's the table datas (td) -->
                            <tr>
                                <td>
                                    <?php echo $row['userLevel']; ?>
                                </td>
                                <td>
                                    <?php echo $row['studentNumber']; ?>
                                </td>
                                <td>
                                    <?php echo $row['fullName']; ?>
                                </td>
                                <td>
                                    <?php echo $row['midtermGrade']; ?>
                                </td>
                                <td>
                                    <?php echo $row['finalGrade']; ?>
                                </td>
                            </tr>
                    <?php
                        }
                    } else {
                        echo "no data to show";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Navigation buttons -->
    <div style="text-align: center; margin-top: 10px;">
        <button class="btn btn-primary" style="margin-right: 5px;" onclick="showTable('user-table-container')"><</button>
        <button class="btn btn-primary" style="margin-left: 5px;" onclick="showTable('student-table-container')">></button>
    </div>

    <script>
        function showTable(tableId) {
            // Hide all tables
            document.getElementById('user-table-container').style.display = 'none';
            document.getElementById('student-table-container').style.display = 'none';

            // Show the selected table
            var selectedTable = document.getElementById(tableId);
            selectedTable.style.display = 'flex'; // Use flex layout
            selectedTable.style.justifyContent = 'center'; // Center the content horizontally
        }
    </script>

    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/popper.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

</body>

</html>