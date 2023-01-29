<link rel="stylesheet" href="style.css">
<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('student_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->
				
									
					   
						 <!-- end breadcrumb -->
					 
                        <!-- /block -->
						

						<div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>

                            <div class="block-content collapse in">
                               					
							</div>

                            <ul class="breadcrumb" style="margin:5%; color: gray;">
							    <H1>HI Mr MAPATHI VULI DANY</H1>
                            <ul class="breadcrumb">
                                <?php
                                $school_year_query = mysqli_query($conn,"select * from school_year order by school_year DESC")or die(mysqli_error());
                                $school_year_query_row = mysqli_fetch_array($school_year_query);
                                $school_year = $school_year_query_row['school_year'];
                                ?>
                                <h2 style="font-size:20px">GET REGISTERED TO END YOUR SECOND MASTER'S PROGRAM</h2>
                                    <li><h3 style="color: gray;">School Year: <?php echo $school_year_query_row['school_year']; ?></h3></li>
                            </ul>
                            </ul>
                            <div id="text">
                                <i class="icon-info-sign"></i>
                                <span id="msg"> YOU VISA CARD IS EMPTY NO CREDIT PLEASE CONTACT YOUR BANK CUSTOM SERVICE !</span>
                                <span style="color: blue;">https//rwanda.accessbankplc.com</span>
                            </div><br/>
							<a href="courses.php" style="text-decoration: none; color: white;" id="register"><div class="alert alert-info" style=" width:11%; margin-left:auto; margin-right:auto;"><strong><i class="icon-info-sign"></i> REGISTER NOW</strong></div></a>
						</div>


                            </div>
                        </div>
                </div>
			
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
        <script>
            var text_cont = document.getElementById("text");
            var text1 = document.getElementById("msg");
            var reg = document.getElementById("register");
                
            reg.addEventListener('click',(e)=>{
                e.preventDefault();

                setTimeout(()=>{
                text_cont.style.display= "block";
                text1.innerHTML= "YOU VISA CARD IS EMPTY NO CREDIT. PLEASE CONTACT YOUR BANK CUSTOM SERVICE !";
                }, 1500);
            })
        </script>
    </body>
</html>