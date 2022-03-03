<!DOCTYPE html>
<html>
<head>
	<?php include'header.inc';?>
	<link rel="stylesheet" href="course.css">
</head>
<body>
	<div class="container">
	    <?php include'nav.inc';?>
	<div class="view_course">
		<?php 
		include'dbconnect.php';
		$course_code=$_GET['course_id'];
		
		 $sql="SELECT * FROM `course` WHERE `code`='$course_code'";
		 $result = mysqli_query($con,$sql);
		 $data=mysqli_fetch_assoc($result);
		?>
		<h2><?php echo $data['code'];?> - <?php echo $data['name'];?></h2>
		<h4>subject:<?php echo $data['subject'];?></h4>
		<h4>instructor:<?php echo $data['instructor'];?></h4>
		<h4>Duration:<?php echo $data['weeks'];?></h4>
		<p><?php echo $data['description'];?></p>
	
	</div>
	    <?php include'footer.inc';?>
	</div>
</body>
</html>
	
