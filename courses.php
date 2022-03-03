<!DOCTYPE html>
<html>
<head>
	<?php include'header.inc';?>
	<link rel="stylesheet" href="course.css">
</head>
<body>
	<div class="container">
	    <?php include'nav.inc';?>
	<div class="course">
		<table>
        <tr>
          <th>Course Code</th>
          <th>Name</th>
          <th>Subject</th>
          <th>Instructor</th>
          <th>Weeks</th>
        </tr>
			
				<?php
				include'dbconnect.php';
				 $sql="SELECT * FROM `course`";
				$result = mysqli_query($con,$sql);
				if(($count= mysqli_num_rows($result))>0){
				while($data=mysqli_fetch_assoc($result)){
				?>
			<tr>
				<td><?php echo"<a href='course.php?course_id=".$data['code']."'>".$data['code']."</a>";?></td>
				<td><?php echo $data['name'];?></td>
				<td><?php echo $data['subject'];?></td>
				<td><?php echo $data['instructor'];?></td>
				<td><?php echo $data['weeks'];?></td>
			</tr>
				<?php 
						}
					}else{
					
					echo"<td colspan='5'>No Records</td>";
				} 	
				?>
			
      </table>	
	</div>
	    <?php include'footer.inc';?>
	</div>
</body>
</html>
	
