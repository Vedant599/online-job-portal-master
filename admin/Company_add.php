<?php 

include ('connection/db.php');

$Company=$_POST['Company'];
$Description=$_POST['Description'];
$admin=$_POST['admin'];
$q1="select * from company where company = ' ".$Company." ')";
$s1=mysqli_query($conn,$q1);
if(mysqli_num_rows($s1) == 0 )
{
	$query="insert into company (company , des , admin) values (' ".$Company." ',' ".$Description." ',' ".$admin."')";
	$sql=mysqli_query($conn,$query);
	if($sql)
	{
		echo "data added successfully";
		header('location:create_company.php');
	}
	else
	{
		echo "Some error occured please try again";
	}
}



 ?>