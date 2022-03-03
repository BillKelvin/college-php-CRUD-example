<!DOCTYPE html>
<html>
<head>
	<?php include'header.inc';?>
	<link rel="stylesheet" href="course.css">
</head>
<body>
	<div class="container">
	    <?php include'nav.inc';?>
	<div class="view_subj">
		<?php 
		include'dbconnect.php';
		$subject=$_GET['subject'];
		
		 $sql="SELECT * FROM `course` WHERE `subject`='$subject'";
		 $result = mysqli_query($con,$sql);
		if(($count= mysqli_num_rows($result))>0){
			
			echo "<h2>".$subject."</h2>";
			$id=1;
		 while($data=mysqli_fetch_assoc($result)){
		 echo "<p>".$id++.". ".$data['name']."</p>";
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
	
