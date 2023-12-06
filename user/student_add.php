<?php
session_start();
function check_error($error)
{
    if (isset($_SESSION['err'])) {
        echo $_SESSION['err'][$error];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Student</title>
    <link rel="icon" href="../assets/images/shark_icon.png">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,200&display=swap" rel="stylesheet">
    <style>
        /*===== VARIABLES CSS =====*/
        :root {
            /*===== Colores =====*/
            --first-color: #1A73E8;
            --input-color: #80868B;
            --border-color: #DADCE0;
            /*===== Fonts configuration =====*/
            --body-font: 'Poppins', sans-serif;
            --normal-font-size: 1rem;
            --small-font-size: .75rem;
        }
        
        body {
            font-family: var(--body-font);
            font-size: var(--normal-font-size);
            background-color: #010812;
        }


        /* Start of the Design of Forms */

        /*===== BASE =====*/
        *,
        ::before,
        ::after {
            box-sizing: border-box;
        }


        /*===== FORM =====*/
        .l-form {
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .form {
            width: 360px;
            padding: 2rem 2rem;
            border-radius: 10px;
            background-color: whitesmoke;
            margin-top: 20px;
        }

        .form__title {
            font-weight: bold;
            margin-bottom: 2rem;
        }

        .form__div {
            position: relative;
            height: 52px;
            margin: .5rem 0;
        }

        .form__input {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            font-size: var(--normal-font-size);
            border: 2px solid var(--border-color);
            border-radius: 0.5rem;
            outline: none;
            padding: 1rem;
            background: none;
            z-index: 1;
        }

        .form__label {
            position: absolute;
            left: 1rem;
            top: 1rem;
            padding: 0 0.25rem;
            background-color: whitesmoke;
            color: var(--input-color);
            font-size: var(--normal-font-size);
            transition: 0.3s;
        }

        .form__button {
            display: block;
            margin-left: auto;
            padding: 0.75rem 2rem;
            outline: none;
            border: none;
            background-color: var(--first-color);
            color: #fff;
            font-size: var(--normal-font-size);
            border-radius: 0.25rem;
            cursor: pointer;
            transition: 0.3s;
        }

        .form__button:hover {
            background-color: #104D9D;
        }

        /*Input focus move up label*/
        .form__input:focus+.form__label {
            top: -0.5rem;
            left: 0.8rem;
            color: var(--first-color);
            font-size: var(--small-font-size);
            font-weight: 500;
            z-index: 10;
        }

        /*Input focus sticky top label*/
        .form__input:not(:placeholder-shown).form__input:not(:focus)+.form__label {
            top: -0.5rem;
            left: 0.8rem;
            z-index: 10;
            font-size: var(--small-font-size);
            font-weight: 500;
        }

        /*Input focus*/
        .form__input:focus {
            border: 2px solid var(--first-color);
        }

        .error {
            color: red;
            font-size: .8em;
        }
        /* End of Forms Design */


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

    <!-- Here's the Forms -->
    <div class="l-form">
        <form action="../process/student_add_exe.php" class="form" method="post">
            <h5 class="form__title" style="text-align: center;">Student's Information</h5>

            <div class="input-group mb-1">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Student Level</label>
                </div>
                <select name="userLevel" class="custom-select" id="inputGroupSelect01" required>
                    <option value="">Choose...</option>
                    <option value="elementary">Elementary</option>
                    <option value="highSchool">High School</option>
                    <option value="college">College</option>
                </select>
            </div>

            <div class="error">
                <?php check_error('err_studentNumber') ?>
            </div>
            <div class="form__div">
                <input type="text" name="studentNumber" class="form__input" placeholder=" ">
                <label for="" class="form__label">Student Number</label>
            </div>

            <div class="error">
                <?php
                check_error('err_fullName')
                ?>
            </div>
            <div class="form__div">
                <input type="text" name="fullName" class="form__input" placeholder=" ">
                <label for="" class="form__label">Full Name</label>
            </div>

            <div class="error">
                <?php check_error('err_midtermGrade') ?>
            </div>
            <div class="form__div">
                <input type="text" name="midtermGrade" class="form__input" placeholder=" ">
                <label for="" class="form__label">Midterm Grade</label>
            </div>

            <div class="error">
                <?php
                check_error('err_finalGrade');
                unset($_SESSION['err']);
                ?>
            </div>
            <div class="form__div">
                <input type="text" name="finalGrade" class="form__input" placeholder=" ">
                <label for="" class="form__label">Final Grade</label>
            </div>


            <input type="submit" class="form__button" value="Add">
        </form>
    </div>

    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/popper.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>