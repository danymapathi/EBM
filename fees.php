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
					   
						<div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left">
                                    <h4>Class Year: 2021-2023 / Academic Fees</h4>
                                </div>
                            </div>

                            <table>
                                        <tr>
                                            <th>No</th>
                                            <th>STUD ID</th>
                                            <th>VISA CARD</th>
                                            <th>AMOUNT</th>
                                            <th>MODULE</th>
                                            <th style="width: 10.5%;">DATE</th>
                                            <th>CUSTOMER SERVICE </th>
                                            <th>COUNTRY</th>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td class="ID">EBM20210012</td>
                                            <td>4132 1300 4106 2074</td>
                                            <td class="money">125$</td>
                                            <td>IT Law</td>
                                            <td>25-10-2022</td>
                                            <td class="bank">ACCESS BANK</td>
                                            <td>RWANDA</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td class="ID">EBM20210012</td>
                                            <td>4132 1300 4106 2074</td>
                                            <td class="money">125$</td>
                                            <td>Network and Web Security</td>
                                            <td>25-9-2022</td>
                                            <td class="bank">ACCESS BANK</td>
                                            <td>RWANDA</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td class="ID">EBM20210012</td>
                                            <td>4132 1300 4106 2074</td>
                                            <td class="money">125$</td>
                                            <td>Technology for E-commerce</td>
                                            <td>20-8-2022</td>
                                            <td class="bank">ACCESS BANK</td>
                                            <td>RWANDA</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td class="ID">EBM20210012</td>
                                            <td>4132 1300 4106 2074</td>
                                            <td class="money">125$</td>
                                            <td>Internet and Multimedia Technology</td>
                                            <td>25-7-2022</td>
                                            <td class="bank">ACCESS BANK</td>
                                            <td>RWANDA</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td class="ID">EBM20210012</td>
                                            <td>4132 1300 4106 2074</td>
                                            <td class="money">125$</td>
                                            <td>Research Methodology</td>
                                            <td>27-6-2022</td>
                                            <td class="bank">ACCESS BANK</td>
                                            <td>RWANDA</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td class="ID">EBM20210012</td>
                                            <td>4132 1300 4106 2074</td>
                                            <td class="money">125$</td>
                                            <td>Software Engeneering</td>
                                            <td>21-5-2022</td>
                                            <td class="bank">ACCESS BANK</td>
                                            <td>RWANDA</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td class="ID">EBM20210012</td>
                                            <td>4132 1300 4106 2074</td>
                                            <td class="money">125$</td>
                                            <td>Data Communication and Network</td>
                                            <td>23-4-2022</td>
                                            <td class="bank">ACCESS BANK</td>
                                            <td>RWANDA</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td class="ID">EBM20210012</td>
                                            <td>4132 1300 4106 2074</td>
                                            <td class="money">125$</td>
                                            <td>Advanced Database Design and Implementation</td>
                                            <td>26-3-2022</td>
                                            <td class="bank">ACCESS BANK</td>
                                            <td>RWANDA</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="ID">EBM20210012</td>
                                            <td>4132 1300 4106 2074</td>
                                            <td class="money">125$</td>
                                            <td>Advanced Web Technologies </td>
                                            <td>19-2-2022</td>
                                            <td class="bank">ACCESS BANK</td>
                                            <td>RWANDA</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td class="ID">EBM20210012</td>
                                            <td>4132 1300 4106 2074</td>
                                            <td class="money">125$</td>
                                            <td>Advanced OOP</td>
                                            <td>18-1-2022</td>
                                            <td class="bank">ACCESS BANK</td>
                                            <td>RWANDA</td>
                                        </tr>
                                       
                                    </table>

                            
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