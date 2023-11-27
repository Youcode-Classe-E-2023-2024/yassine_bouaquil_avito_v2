<?php
	$conn = mysqli_connect("localhost","root","","user_db");
 
	$Prname=$_POST['Prname'];
	$description=$_POST['description'];
	$Category=$_POST['Category'];
	$Prix=$_POST['Prix'];
 
    $image = $_FILES['image']['name'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_size = $_FILES['image']['size'];
   $image_folder = 'uploaded_img/'.$image;

	mysqli_query($conn,"insert into products (name, description, price, category) values ('$Prname','$description','$Prix','$Category')");
	header('location:../cart-user/index.php');
?>
