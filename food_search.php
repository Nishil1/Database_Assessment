<?php 
	include "head_nav.php";


// if find button pushed...
if (isset($_POST['find_by_food_type']))
    
{
    
// Retrieves food by type and sanitises it.
	
$food=test_input(mysqli_real_escape_string($dbconnect,$_POST ['dish']));
    







$find_sql="SELECT * FROM `restaurant_reviews` WHERE `Dish_name` LIKE '%$food%' ORDER BY `Dish_name` ASC ";
$find_query=mysqli_query($dbconnect, $find_sql);
$find_rs=mysqli_fetch_assoc($find_query);
$count=mysqli_num_rows($find_query);

?>




        
        <div class="box main">
            <h2>Dish search</h2>
            
            <?php
            
            // check if there are any results
            if ($count<1)
                
            {
            ?>
            
            <div class="error">
                
                Sorry! There are no results that match your search. Please use the search box in the sidebar to try again.
            
            </div>
                
            <?php    
                
                
            } // end count 'if'
            
            // if there are not results, output an error
            else{
                
                do {
                    
                    ?>
            
                    <div class="results">
                        
                        <p> Dish name: <span class="sub_heading"><?php echo $find_rs['Dish_name'];?></span></p>

                        <p> Dietary Type: <span class="sub_heading"><?php echo $find_rs['dietry_req_type'];?></span></p>

                        <p> Restaurant: <span class="sub_heading"><?php echo $find_rs['Restaurant'];?></span></p>
						 <p> Suburb: <span class="sub_heading"><?php echo $find_rs['suburb'];?></span></p>

                        <p> Rating: <span class="sub_heading">
                            
                            <?php 
                            
                            for ($x=0; $x < $find_rs['Rating']; $x++)
                                
							{
                                
                                echo "&#9733;";
							}
                            
                            
                            ?>
                            
                            </span></p>

                        <p><span class="sub_heading">Review / Response</span></p>
                        
                        <p>
                        
                      <?php echo $find_rs['Review'];?>
                        
                        
                        
                        </p>
            
            </div> <!-- / end results div -->
            
            <br />
                        
            <?php
                } // end of 'do'
                
                while($find_rs=mysqli_fetch_assoc($find_query));
                
            } // end else
            
            // if there are results, display them
    
    
            } // end isset
                
            
            ?>
            
            
			

			
			
			

            
        </div>    <!-- / main -->
        
<?php 
	include "bottombit.php";

?>
 