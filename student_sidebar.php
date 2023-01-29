<link rel="stylesheet" href="style.css">
<?php $query= mysqli_query($conn,"select * from student where student_id = '$session_id'")or die(mysqli_error());
	  $row = mysqli_fetch_array($query);
?>
<div class="span3" id="sidebar">
					<img id="avatar" class="img-polaroid" src="admin/<?php echo $row['location']; ?>">
					<?php include('count.php'); ?>

					<div class="student_infor">
						 <span class="gmail">danymapathi@gmail.com</span>
						 <p id="names">MAPATHI VULI DANY</p>
						 <p class="after_name">CLASS: <b>Year 1 Master's/ WPCST</b></p>
						 <p class="after_name">STUD ID: <b>EBM20210012</b></p>
						 <p class="after_name">CARD ID:<b> 4132 1300 4106 2074</b></p>
						 <p class="after_name">PROGRAM:<b> COMPUTER SCIENCE</b></p>
					</div>
		<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
			<li class="active"><a href="dashboard_student.php"><i class="icon-chevron-right"></i><i class="icon-group"></i>&nbsp;My Class</a></li>
			<li class="">
				<a href="student_notification.php"><i class="icon-chevron-right"></i><i class="icon-info-sign"></i>&nbsp;Notification
				<?php if($not_read == '0'){
				}else{ ?>
					<span class="badge badge-important"><?php echo $not_read; ?></span>
				<?php } ?>
				</a>
			</li>
			<?php
			$message_query = mysqli_query($conn,"select * from message where reciever_id = '$session_id' and message_status != 'read' ")or die(mysqli_error());
			$count_message = mysqli_num_rows($message_query);
			?>
			<li class="">
			<a href="student_message.php"><i class="icon-chevron-right"></i><i class="icon-envelope-alt"></i>&nbsp;Message
				<?php if($count_message == '0'){
				}else{ ?>
					<span class="badge badge-important"><?php echo $count_message; ?></span>
				<?php } ?>
			</a>
			</li>
			<li class=""><a href="courses.php"><i class="icon-chevron-right"></i><i class="icon-list-alt"></i>Courses</a></li>
			<li class=""><a href="fees.php"><i class="icon-chevron-right"></i><i class="icon-file"></i>Fees</a></li>
			<li class=""><a href="backpack.php"><i class="icon-chevron-right"></i><i class="icon-suitcase"></i>&nbsp;Backpack</a></li>
		</ul>
					<?php /* include('search_other_class.php');  */?>	
</div>

