<?php
	$con=mysql_connect("localhost","indrajeetsingh","8605244154");
	if(!$con)
	{
		echo "<script type='text/javascript'> alert('Could not connect');</script>";	
	}
	if(!mysql_select_db('tushar_industry'))
	{	
		echo "<script type='text/javascript'> alert('Could not found DataBase plz Contact to expert');</script>";
	}
	/*
	else
	{
		echo "<script type='text/javascript'> alert('connection done successfull');</script>";
	}*/
?>