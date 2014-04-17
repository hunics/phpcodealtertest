<h1>MSG.....</h1>
<?php
			/*
			 * 
			 * Test Comment
			 * 
			 */
			 //session_start();
			 //echo "un-Output\n";
			 
			 // test comment 2
			 
			 $unVar = array();
			 $unVar["uno"] = 10;
			 $unVar["due"] = "ketto";
			 $encoded_data = json_encode($unVar);
			 
			   
			header("HTTP/1.1 200 OK");
			header("Content-Type: application/json");
					
			echo $encoded_data;

			?>   
			<!---Comment in HTML Comment style
			    ¿¿  ~ {}[]^``'@@·~#$%&'|°¬<<>
			balablabla
			blablabla...
			
			
		 -->  

