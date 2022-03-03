<!DOCTYPE html>
<html>
<head>
	<?php include'header.inc';?>
	<link rel="stylesheet" href="course.css">
</head>
<body>
	<div class="container">
	    <?php include'nav.inc';?>
	<div class="add">
		<groupbox name="Add New Course"></groupbox>
		<?php
			include'dbconnect.php';
			if(isset($_POST['code'])){
				$code=stripslashes($_POST['code']);
				$code=mysqli_real_escape_string($con,$code);
				$name=stripslashes($_POST['Course_name']);
				$name=mysqli_real_escape_string($con,$name);
				$subject=stripslashes($_POST['subject']);
				$subject=mysqli_real_escape_string($con,$subject);
				$instructor=stripslashes($_POST['instructor']);
				$instructor=mysqli_real_escape_string($con,$instructor);
				$weeks=stripslashes($_POST['weeks']);
				$weeks=mysqli_real_escape_string($con,$weeks);
				$description=stripslashes($_POST['description']);
				$description=mysqli_real_escape_string($con,$description);
				$moreInfo=$_FILES['moreInfo']['name'];
                    $target_dir = "uploads/";
                    $target_file = $target_dir . basename($_FILES["moreInfo"]["name"]);
				$sql="INSERT INTO `course`(`code`,`name`,`subject`,`instructor`,`weeks`,`description`)VALUES('$code', '$name', '$subject', '$instructor', '$weeks', '$description')";
				$insert=mysqli_query($con,$sql);
				if($insert){
					echo"<script>alert('records added successfully');</script>";
					move_uploaded_file($_FILES['moreInfo']['tmp_name'],$target_file);
				}else{
					echo"<script>alert('error occured! Please try again');</script>";
				}
				
			}
		?>
	 <form method="post" enctype="multipart/form-data">
	  <table>
        <tr>
			<td>Course Code</td>
			<td><input type="text" name="code" required/></td>
		 </tr>
		 <tr>
			<td>Course Name</td>
			<td><input type="text" name="Course_name" required/></td>
		 </tr>
		  <tr>
			<td>Subject</td>
			<td><input type="text"name="subject" required/></td>
		 </tr>
		  <tr>
			<td>Instructor</td>
			<td><input type="text" name="instructor" required/></td>
		 </tr>
		  <tr>
			<td>weeks</td>
			<td><input type="number" name="weeks" required/></td>
		 </tr>
		  <tr>
			<td>Description</td>
			<td><textarea type="text" name="description" style="width:350px;height:100px;" required></textarea></td>
		 </tr>
		  <tr>
			<td>Upload More info</td>
			<td><input type="file" name="moreInfo"/></td>
		 </tr>
		  <tr>
			
			<td colspan="2"><center><button name="submit">Add Course</button></center></td>
		 </tr>
        </table>		
	   </form>
		
	</div>
	    <?php include'footer.inc';?>
	</div>
</body>
</html>
	
