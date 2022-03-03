<!DOCTYPE html>
<html>
<head>
	<?php include'header.inc';?>
	<link rel="stylesheet" href="course.css">
</head>
<body>
	<div class="container">
	    <?php include'nav.inc';?>
	<div class="view_instructor">
		<?php 
		include'dbconnect.php';
		$instructor=$_GET['instructor'];
		
		 $sql="SELECT * FROM `course` WHERE `instructor`='$instructor'";
		 $result = mysqli_query($con,$sql);
		if(($count= mysqli_num_rows($result))>0){
			
			echo "<h2>".$instructor."</h2><h4><u>courses taught</u></h4>";
			$id=1;
		 while($data=mysqli_fetch_assoc($result)){
		 echo "<p>".$id++.". ".$data['subject']."</p>";
		 }
		}else{
					
					echo"No Records";
				}
			?>
	</div>
	    <?php include'footer.inc';?>
	</div>
</body>
</html>
	
