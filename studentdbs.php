<?php

include('security.php');

// initializing variables
$username = "";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// Here INSERT the Data in database.....
if(isset($_POST['submit'])){

	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	$address1 = $_POST['address1'];
	$state = $_POST['state'];
	$address2 = $_POST['address2'];
	$postcode = $_POST['postcode'];
	$city = $_POST['city'];
	$country = $_POST['country'];

	$membershipRadios1 = $_POST['membershipRadios1'];
	$school_Name = $_POST['school_name'];
	$Board_Name_1 = $_POST['Board_Name_1'];
	$Percentage_1 = $_POST['Percentage_1'];
	$Academic_Year_1 = $_POST['Academic_Year_1'];

	$membershipRadios2 = $_POST['membershipRadios2'];
	$college_name_1 = $_POST['college_name_1'];
	$Board_Name_2 = $_POST['Board_Name_2'];
	$Percentage_2 = $_POST['Percentage_2'];
	$Academic_Year_2 = $_POST['Academic_Year_2'];

	$membershipRadios3 = $_POST['membershipRadios3'];
	$college_name_2 = $_POST['college_name_2'];
	$Board_Name_3 = $_POST['Board_Name_3'];
	$Percentage_3 = $_POST['Percentage_3'];
	$Academic_Year_3 = $_POST['Academic_Year_3'];

	$membershipRadios4 = $_POST['membershipRadios4'];
	$college_name_3 = $_POST['college_name_3'];
	$University_Name = $_POST['University_Name'];
	$Graduation_Course = $_POST['Graduation_Course'];
	$Percentage_4 = $_POST['Percentage_4'];
	$Academic_Year_4 = $_POST['Academic_Year_4'];

	$query = "INSERT INTO `student`( `first_name`, `last_name`,
		`email`, `phone`, `address1`, `state`, `address2`, `postcode`,
		`city`, `country`, `membershipRadios1`, `school_name`, `Board_Name_1`,
		`Percentage_1`, `Academic_Year_1`, `membershipRadios2`, `college_name_1`,
		`Board_Name_2`, `Percentage_2`, `Academic_Year_2`, `membershipRadios3`,
		`college_name_2`, `Board_Name_3`, `Percentage_3`, `Academic_Year_3`,
		`membershipRadios4`, `college_name_3`, `University_Name`,
		`Graduation_Course`, `Percentage_4`, `Academic_Year_4`)
		VALUES ('$first_name', '$last_name', '$email', '$phone',
			'$address1', '$state','$address2', '$postcode', '$city', '$country',
			'$membershipRadios1', '$school_Name','$Board_Name_1', '$Percentage_1', '$Academic_Year_1',
			'$membershipRadios2', '$college_name_1', '$Board_Name_2', '$Percentage_2', '$Academic_Year_2',
			'$membershipRadios3', '$college_name_2', '$Board_Name_3', '$Percentage_3', '$Academic_Year_3',
			'$membershipRadios4', '$college_name_3', '$University_Name', '$Graduation_Course', '$Percentage_4',
			'$Academic_Year_4')";
	$query_run = mysqli_query($db, $query);
	if($query_run)
	{
			$_SESSION['status'] = "Your Data is Created";
			$_SESSION['status_code'] = "success";
			header('Location: index.php');
	}
	else
	{
			$_SESSION['status'] = "Your Data is NOT Created";
			$_SESSION['status_code'] = "error";
			header('Location: index.php');
	}
}

// Here UPDATE the Data in database.....
if(isset($_POST['updatebtn'])){

	$id = $_POST['edit_id'];
	$first_name = $_POST['edit_first_name'];
	$last_name = $_POST['edit_last_name'];
	$email = $_POST['edit_email'];
	$phone = $_POST['edit_phone'];

	$address1 = $_POST['edit_address1'];
	$state = $_POST['edit_state'];
	$address2 = $_POST['edit_address2'];
	$postcode = $_POST['edit_postcode'];
	$city = $_POST['edit_city'];
	$country = $_POST['edit_country'];

	$membershipRadios1 = $_POST['edit_membershipRadios1'];
	$school_Name = $_POST['edit_school_name'];
	$Board_Name_1 = $_POST['edit_Board_Name_1'];
	$Percentage_1 = $_POST['edit_Percentage_1'];
	$Academic_Year_1 = $_POST['edit_Academic_Year_1'];

	$membershipRadios2 = $_POST['edit_membershipRadios2'];
	$college_name_1 = $_POST['edit_college_name_1'];
	$Board_Name_2 = $_POST['edit_Board_Name_2'];
	$Percentage_2 = $_POST['edit_Percentage_2'];
	$Academic_Year_2 = $_POST['edit_Academic_Year_2'];

	$membershipRadios3 = $_POST['edit_membershipRadios3'];
	$college_name_2 = $_POST['edit_college_name_2'];
	$Board_Name_3 = $_POST['edit_Board_Name_3'];
	$Percentage_3 = $_POST['edit_Percentage_3'];
	$Academic_Year_3 = $_POST['edit_Academic_Year_3'];

	$membershipRadios4 = $_POST['edit_membershipRadios4'];
	$college_name_3 = $_POST['edit_college_name_3'];
	$University_Name = $_POST['edit_University_Name'];
	$Graduation_Course = $_POST['edit_Graduation_Course'];
	$Percentage_4 = $_POST['edit_Percentage_4'];
	$Academic_Year_4 = $_POST['edit_Academic_Year_4'];

	$query = "UPDATE `student` SET `first_name`='$first_name',
	`last_name`='$last_name', `email`='$email', `phone`='$phone',
	`address1`='$address1', `state`='$state', `address2`='$address2',
	`postcode`='$postcode', `city`='$city', `country`='$country',
	`membershipRadios1`='$membershipRadios1', `school_name`='$school_name',
	`Board_Name_1`='$Board_Name_1', `Percentage_1`='$Percentage_1',
	`Academic_Year_1`='$Academic_Year_1', `membershipRadios2`='$membershipRadios2',
	`college_name_1`='$college_name_1', `Board_Name_2`='$Board_Name_2',
	`Percentage_2`='$Percentage_2', `Academic_Year_2`='$Academic_Year_2',
	`membershipRadios3`='$membershipRadios3',`college_name_2`='$college_name_2',
	`Board_Name_3`='$Board_Name_3', `Percentage_3`='$Percentage_3',
	`Academic_Year_3`='$Academic_Year_3', `membershipRadios4`='$membershipRadios4',
	`college_name_3`='$college_name_3',`University_Name`='$University_Name',
	`Graduation_Course`='$Graduation_Course',`Percentage_4`='$Percentage_4',
	`Academic_Year_4`='Academic_Year_4' WHERE  id='$id'";

	$query_run = mysqli_query($db, $query);
	if($query_run)
	{
			$_SESSION['status'] = "Your Data is Updated";
			$_SESSION['status_code'] = "success";
			header('Location: index.php');
	}
	else
	{
			$_SESSION['status'] = "Your Data is NOT Updated";
			$_SESSION['status_code'] = "error";
			header('Location: index.php');
	}
}

// Here DELETE the Data in database.....
if(isset($_POST['delete_btn']))
{
$id = $_POST['delete_id'];
$query = "DELETE FROM `student` WHERE id='$id' ";
$query_run = mysqli_query($db, $query);
if($query_run)
{
$_SESSION['status'] = "Your Data is Deleted";
$_SESSION['status_code'] = "success";
header('Location: index.php');
}
else
{
$_SESSION['status'] = "Your Data is NOT DELETED";
$_SESSION['status_code'] = "error";
header('Location: index.php');
}
}
?>
