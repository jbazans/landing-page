<?php
	$con=mysqli_connect('localhost','root','','landing');
	if ($con) {
		$nombre=$_POST['nombre'];
		$dni=$_POST['dni'];
		$consulta=$_POST['consulta'];
		$correo=$_POST['correo'];
		$celular=$_POST['celular'];

		$sql="INSERT INTO mensaje
		(nommen,dnimen,conmen,cormen,celmen)
		VALUES
		('$nombre','$dni','$consulta','$correo','$celular')";
		$result=mysqli_query($con,$sql);
		if ($result) {
			echo 1;
		}else{
			echo 2;
		}
	}else{
		echo 3;
	}