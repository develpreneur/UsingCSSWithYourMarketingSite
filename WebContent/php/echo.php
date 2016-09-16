<?php
if (array_key_exists ( "Submit", $_POST )) {	
	// loop through post data for form
	foreach ( $_POST as $key => $value ) {		
		if (is_array ( $value )) {			
			foreach ( $_POST as $key => $value ) {			
				echo $key . " = " . $value . "<br/>";
			}
		} else {
			
			echo $key . " = " . $value . "<br/>";
		}
	}
	echo "<i>Submitted!</i>";
} else {
	echo "<i>No <b>Post</b> information submitted!</i>";
}
?>