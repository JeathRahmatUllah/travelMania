<!DOCTYPE html>

<?php

session_start();

include "db_connect.php";

if (!isset($_SESSION["username"])) {
	header("Location: ../signup.php");
}
$username = $_GET['username'];
?>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
	<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />

	<!-- <link rel="stylesheet" href="../traveller/css/indexStyle.css"> -->






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
					<span class="name">Travel Mania </span>

				</div>
			</div>

			<i class='bx bx-chevron-right toggle'></i>
		</header>

		<div class="menu-bar">
			<div class="menu">


				<ul class="menu-links">
					<li class="nav-link">
						<?php echo '<a href="home.php?username=' . $username . '">' ?>
						<i class='bx bx-home-alt icon'></i>
						<span class="text nav-text">Home</span>
						</a>
					</li>

					<li class="nav-link">
						<?php echo '<a href="profile.php?username=' . $username . '">' ?>


						<img src="img/profile.png" alt="" height="40px" width="40px" style="margin-left: 10px;">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="text nav-text">Vahicle Confirm</span>
						</a>
					</li>

					<li class="nav-link">
						<?php echo '<a href="more_details.php?username=' . $username . '">' ?>


						<i class="fa-solid icon fa-circle-check"></i>
						<span class="text nav-text">Hotel Confirm</span>
						</a>
					</li>

					<li class="nav-link">
						<?php echo '<a href="more_details.php?username=' . $username . '">' ?>


						&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-plus"></i>&nbsp;&nbsp;&nbsp;
						<span class="text nav-text">Restaurant Confirm</span>
						</a>
					</li>


					<li class="nav-link">
						'<a href="https://dashboard.tawk.to/#/dashboard/6262fbe67b967b11798c0cda" target="blank">


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

	<section class="home" style="height: auto;">
		<div class="text">Admin Confirmation</div>

		<div class="h-14 -mt-5">
       
    </div>
    <div class="header w-full">
        <div class="container mt-5">
            <div class="flex justify-center items-center ml-40">

                <div class="">


                    <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="hotel-booking?username=<?php echo $_GET['username'] ?>">
                            <img class="rounded-t-lg" src="../traveller/images/6662014.webp" alt="">
                        </a>
                        <div class="p-5">
                            <a href="hotel-booking?username=<?php echo $_GET['username'] ?>">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Hotel Confirmation</h5>
                            </a>

                            <a href="hotel-booking?username=<?php echo $_GET['username'] ?>" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Confirm Now
                                <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>


                </div>

                <div class="ml-14">


                    <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="rentvehicle.php?username=<?php echo $_GET['username'] ?>">
                            <img class="rounded-t-lg" src="../traveller/images/e4385d5498a380542f5497a0de60fcd7.png" alt="">
                        </a>
                        <div class="p-5">
                            <a href="rentvehicle.php?username=<?php echo $_GET['username'] ?>">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Rent Confirmation</h5>
                            </a>

                            <a href="rentvehicle.php?username=<?php echo $_GET['username'] ?>" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Book Now
                                <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>


                </div>

                <div class="ml-14">


                    <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <a href="reserverestaurant.php?username=<?php echo $_GET['username'] ?>">
                            <img class="rounded-t-lg" src="../traveller/images/restaurant.jpg" alt="">
                        </a>
                        <div class="p-5">
                            <a href="reserverestaurant.php?username=<?php echo $_GET['username'] ?>">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Restaurant Confirmation</h5>
                            </a>

                            <a href="reserverestaurant.php?username=<?php echo $_GET['username'] ?>" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Book Now
                                <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
		<?php include('add_modal.php') ?>



	</section>

	<script src="jquery/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="datatable/jquery.dataTables.min.js"></script>
	<script src="datatable/dataTable.bootstrap.min.js"></script>

	<script>
		const body = document.querySelector('body'),
			sidebar = body.querySelector('nav'),
			toggle = body.querySelector(".toggle"),
			searchBtn = body.querySelector(".search-box"),
			modeSwitch = body.querySelector(".toggle-switch"),
			modeText = body.querySelector(".mode-text");

		$(document).ready(function() {
			//inialize datatable
			$('#myTable').DataTable();

			//hide alert
			$(document).on('click', '.close', function() {
				$('.alert').hide();
			})
		});


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
<script src="https://cdn.tailwindcss.com"></script>
	<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
	<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

</html>