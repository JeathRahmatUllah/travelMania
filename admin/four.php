<!DOCTYPE html>

<?php
include "connection.php";
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: ../signup.php");
}
$username = $_GET['username'];
$idselector = $_GET['id'];

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/details.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />


    <!--<title>Dashboard Sidebar Menu</title>-->
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../img/logo.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Plano &</span>
                    <span class="profession">Tramo</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <?php echo '<a href="index.php?username=' . $username . '">' ?>
                        <i class='bx bx-home-alt icon'></i>
                        <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <?php echo '<a href="profile.php?username=' . $username . '">' ?>


                        <img src="img/profile.png" alt="" height="40px" width="40px" style="margin-left: 10px;">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="text nav-text">Profile</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <?php echo '<a href="more_details.php?username=' . $username . '">' ?>


                        <img src="img/plus.png" alt="" height="40px" width="40px" style="margin-left: 10px;">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="text nav-text">Add More details</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <?php echo '<a href="chat.php?username=' . $username . '">' ?>


                        <img src="img/chat.png" alt="" height="40px" width="40px" style="margin-left: 10px;">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="text nav-text">Chat</span>
                        </a>
                    </li>







                </ul>
            </div>

            <div class="bottom-content">
                <li class="">

                    <a href="logout.php">
                        <i class='bx bx-log-out icon'></i></a>
                    <a href="logout.php"><span class="text nav-text">Logout</span></a>

                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>

    </nav>

    <section class="home" style="height: 100%;">
        <div class="text">Add More Details about your property</div>
        <div class="container">
            <div class="details">

                <div class="progress-bar">
                    <div class="step">
                        <p>
                            Basic Information
                        </p>
                        <div class="bulle">
                            <span><img src="img/checked.png" alt="" height="21px"></span>

                        </div>
                        <div class="check fas fa-check"></div>
                    </div>
                    <div class="step">
                        <p>
                            Description
                        </p>
                        <div class="bulle">
                            <span><img src="img/checked.png" alt="" height="21px"></span>

                        </div>
                        <div class="check fas fa-check"></div>
                    </div>
                    <div class="step">
                        <p>
                            Attachment
                        </p>
                        <div class="bulle">
                            <span><img src="img/checked.png" alt="" height="21px"></span>

                        </div>
                        <div class="check fas fa-check"></div>
                    </div>
                    <div class="step">
                        <p>
                            Submit
                        </p>
                        <div class="bullet">
                            <span>4</span>
                        </div>
                        <div class="check fas fa-check"></div>
                    </div>
                </div>
                <div class="form-outer">
                    <form action="show.php" method="POST">

                        <div class="page">
                            <div class="title">
                                ALMOST DONE
                            </div>
                           
                                
                                    <div class="label" style="font-size: 15px; text-align: center">
                                        We are almost done. If you want to change anything before publishing this will be the best moment to do it.***
                                    </div>

                            
                            <div class="field btns">
                                <button class="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                    <?php
                    $username =  $_GET['username'];
                    $id = $_GET['id'];

                    echo '
                    <a href="three.php?username=' . $username . '&id='.$id.'">' ?><button class="prev-1 prev">Back To Previous page Editor</button></a>


                </div>



            </div>
        </div>
    </section>

    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");


        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        })

        searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
        })

        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");

            if (body.classList.contains("dark")) {
                modeText.innerText = "Light mode";
            } else {
                modeText.innerText = "Dark mode";

            }
        });
    </script>
</body>

</html>