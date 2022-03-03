<!DOCTYPE html>
<html>
<head>
	<?php include'header.inc';?>
	<link rel="stylesheet" href="course.css">
</head>
<body>
	<div class="container">
	    <?php include'nav.inc';?>
	<div class="instructor">
	  <table>
        <tr>
		  <th>NO.</th>
          <th>More Info</th>
          <th>instructor</th>
         </tr>
		<?php 
		include'dbconnect.php';
		
			$id=1;
		
		 $sql="SELECT DISTINCT(instructor) FROM `course`";
		 $result = mysqli_query($con,$sql);
		 while($data=mysqli_fetch_assoc($result)){
			echo "<tr><td>".$id++."</td><td><a href='instructor.php?instructor=".$data['instructor']."'>view</a></td><td>".$data['instructor']."</td></tr>";
		 }
		?>
       </table>		
		
	</div>
	    <?php include'footer.inc';?>
	</div>
</body>
</html>
	
