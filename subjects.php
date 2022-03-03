<!DOCTYPE html>
<html>
<head>
	<?php include'header.inc';?>
	<link rel="stylesheet" href="course.css">
</head>
<body>
	<div class="container">
	    <?php include'nav.inc';?>
	<div class="subject">
	  <table>
        <tr>
		  <th>NO.</th>
          <th>More Info</th>
          <th>Subject</th>
         </tr>
		
		<?php 
		include'dbconnect.php';
		
			$id=1;
		
		 $sql="SELECT DISTINCT(subject) FROM `course`";
		 $result = mysqli_query($con,$sql);
		 while($data=mysqli_fetch_assoc($result)){
			echo "<tr><td>".$id++."</td><td><a href='subject.php?subject=".$data['subject']."'>view</a></td><td>".$data['subject']."</td></tr>";
		 }
			
		?>
		 
       </table>		
		
	</div>
	    <?php include'footer.inc';?>
	</div>
</body>
</html>
	
