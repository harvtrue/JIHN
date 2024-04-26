<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UKirk - Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="landing.css"> 
</head>
<!--
			Author:		    Nolan Trent
			Class:			CSCI 1210
			Date:			04/25/2024
			Assignment:		Phase 3
			Purpose:		Home/Landing Page
		-->
<body>
    <?php include 'header.php';?>
	<?php include 'nav.php';?>
    <!-- Header with Organization Name -->
    <div><img class = "Logo" src="UKirklogo.jpg" alt="banner image"></div>
    <header>
        <h1>Welcome to UKirk Campus Ministry</h1>
        <p>We're a student organization at ETSU dedicated to creating an inclusive and involved ministry.</p>
        
    </header>


    <!-- Past Events Section -->
    <section id="events">
        <h2>Past Events</h2>
        <ul>
            <li><strong>Student Fundraiser</strong> - [Feb. 12] - Student Fundraiser located on the Culp 1st floor 11am-4pm</li>
            <li><strong>Group Lunch</strong> - [Feb. 15] - Lets have lunch together! Culp Center from 12pm-2pm</li>
            <li><strong>Valentines Craft Night</strong> - [Feb 16] - Arts and Crafts with a Valentines theme located at UKirk from 7pm-9pm</li>
        </ul>
    </section>
    
    


    <?php include 'footer.php';?>
    <!-- Footer -->
    <?php include 'w3c.php';?>
</body>
</html>
