<!DOCTYPE HTML>

<html lang="en">
	
	<?php
	
	session_start();
	include("config.php");
	include ("functions.php");   // include data sanitising...
		
		// Connect to database...
		
		$dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
	
	if (mysqli_connect_errno())
		
	{
		
		
		echo "Connection failed:".mysqli_connect_error();
		exit;
	}
	
	?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Restuarant Review Database">
    <meta name="keywords" content="restaurant,food,dishes,rating, reviews">
    <meta name="author" content="Nishil Bharadwajs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Restaurant Review Database</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="book_style.css"> 
    
</head>
    
<body>
    
    <div class="wrapper">
    

        
        <div class="box banner">
            
        <!-- logo image linking to home page goes here -->
        <a href="index.php">
            <div class="box logo"  title="Logo - Click here to go to the Home Page">
            <img class="img-circle" src="images/Restaurant_review_main_logo.webp" width="150" height="150" alt="generic logo" >
            
            </div>    <!-- / logo -->
        </a>
            
            <h1>Restaurant Reviews</h1>
        </div>    <!-- / banner -->
		
		
		
		

        <!-- Navigation goes here.  Edit BOTH the file name and the link name -->
        <div class="box side">
			<h2>Search | <a class="side" href="show_all.php">Show All</a></h2>
			
			<i> Search by type of food, restaurant or suburb </i>
			
			<hr />
			
			
		
            <!-- Start of type of food Search -->
			<form method="post" action="food_search.php"  enctype="multipart/form-data">
                
                <input class="search" type="text" name="dish" size="40" value="" required placeholder="Type of food..." />
                
                <input class="submit" type="submit" name="find_by_food_type" value="&#xf002" />
            
            </form>
            <!-- End  Search -->
			
			
            
			
			
			<!-- Start of restaurant Search -->
			<form method="post" action="restaurant_search.php"  enctype="multipart/form-data">
                
                <input class="search" type="text" name="restaurant" size="40" value="" required placeholder="restaurant..." />
				
				<input class="submit" type="submit" name="find_by_restaurant" value="&#xf002" />
				
			</form> <!-- End of restaurant Search -->
			
			
			
			
            
            
            <!-- Start of suburb Search -->
           <form method="post" action="suburb_search.php"  enctype="multipart/form-data">

                <input class="search" type="text" name="suburb" size="40" value="" required placeholder="suburb..." />
                
                <input class="submit" type="submit" name="find_suburb" value="&#xf002" />
            
            </form>
            
			
			<!-- End of suburb Search -->
			
			
			
			
			
			<hr />
			
			<i>Use the dropdowns to search by dietry requirement or rating</i>
			
			<hr/>
			
			<!-- Start of dietry type Search -->
				<form method="post" action="dietry_search.php" enctype="multipart/form-data">
				   <select name="dietry_type" class="search" required>
					
					<option value="" disabled selected>Dietry Requirement...</option>
					<option value="vegetarian">Vegetarian</option>	
					<option value="vegan">Vegan</option>	
					<option value="Non Vegetarian">Non Vegetarian</option>	
	
					</select>
					
				<input class="submit" type="submit" name="find_dietry_type" value="&#xf002" />

			</form>
                
			
            <!-- End of dietry type Search -->


			
			<!-- Start of Ratings form -->
            
            
            
            
                    <form method="post" action="rating_search.php" enctype="multipart/form-data">

				<select class="half_width" class="ratings_search" name="amount">
					
					<option value="exactly" selected>Exactly...</option>
					<option value="more" selected>At Least...</option>
					<option value="less" selected>At Most...</option>
				
				
				</select>
				
				
				
			<select class="size" name="stars">
				<option value=1>&#9733;</option>
				<option value=2>&#9733;&#9733;</option>
				<option value=3>&#9733;&#9733;&#9733;</option>
				<option value=4>&#9733;&#9733;&#9733;&#9733;</option>
				<option value=5>&#9733;&#9733;&#9733;&#9733;&#9733;
				
				</option>

				
				</select>
			
			<input type="submit" class="submit" name="find_rating" value="&#xf002" />
						
						
						
						<!-- End of Ratings form -->
			
			
			
						
			</form>
			
			<br />
			
			
        </div>    <!-- / side bar -->  
		
		
		
			
