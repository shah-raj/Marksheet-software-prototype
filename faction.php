<?php
    if (isset($_GET['username']))
    {
    	if($_GET['username'] == 'hod@somaiya.edu')
    	{
    		if($_GET['password'] == 'hod1234')
    		{
    			header("location: http://localhost/Marksheet/hod/index.php");
    		}
    		else
    		{	
    			echo '<script type="text/JavaScript"> alert("Wrong credentials! Please try again"); </script>';
    			header("location: http://localhost/Marksheet/flogin.php");
    		}
    	}
    	else
    	{                 
			header("location: http://localhost/Marksheet/index.php");
		}
	}
?>