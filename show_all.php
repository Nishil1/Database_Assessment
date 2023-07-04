<?php 
	include "head_nav.php";

$showall_sql="SELECT * FROM `restaurant_reviews` ORDER BY `restaurant_reviews`.`Dish_name` ASC";
$showall_query=mysqli_query($dbconnect, $showall_sql);
$showall_rs=mysqli_fetch_assoc($showall_query);
$count=mysqli_num_rows($showall_query);

?>




        
 
        
        <div class="box main">
            <h2>All Items</h2>
            
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
                        
                        <p> Dish name: <span class="sub_heading"><?php echo $showall_rs['Dish_name'];?></span></p>

                        <p> Dietary Type: <span class="sub_heading"><?php echo $showall_rs['dietry_req_type'];?></span></p>

                        <p> Restaurant: <span class="sub_heading"><?php echo $showall_rs['Restaurant'];?></span></p>
						 <p> Suburb: <span class="sub_heading"><?php echo $showall_rs['suburb'];?></span></p>

                        <p> Rating: <span class="sub_heading">
                            
                            <?php 
                            
                            for ($x=0; $x < $showall_rs['Rating']; $x++)
                                
							{
                                
                                echo "&#9733;";
							}
                            
                            
                            ?>
                            
                            </span></p>

                        <p><span class="sub_heading">Review / Response</span></p>
                        
                        <p>
                        
                      <?php echo $showall_rs['Review'];?>
                        
                        
                        
                        </p>
            
            </div> <!-- / end results div -->
            
            <br />
                        
            <?php
                } // end of 'do'
                
                while($showall_rs=mysqli_fetch_assoc($showall_query));
                
            } // end else
            
            // if there are results, display them
    
    
    
                
            
            ?>
            
            
			

			
			
			

            
        </div>    <!-- / main -->
<?php 
	include "bottombit.php";

?>
 