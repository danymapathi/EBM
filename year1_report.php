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
					    
                        <!-- /block -->
						

						<div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left">
                                    <p class="tablinks" onclick="openCity(event, 'courses_list')" id="defaultOpen">COURSES</p>
                                    <p class="tablinks" onclick="openCity(event, 'courses_transcript')">TRANSCRIPT</p>
                                    <p class="tablinks" onclick="openCity(event, 'modules')">STUDED MODULES PDF</p>
                                    <p class="tablinks" onclick="openCity(event, 'retake')">RETAKE(S)</p>
                                </div>
                            </div>

                            
                                <div class="tabs" id="courses_list">
                                    <table>
                                        <tr>
                                            <th>Code</th>
                                            <th style="width:20%">Core modules</th>
                                            <th>Number of hours</th>
                                            <th>Credit</th>
                                            <th>Maxima</th>
                                        </tr>
                                        <tr>
                                            <td>ENS 601</td>
                                            <td>Advanced object-oriented programming</td>
                                            <td>60</td>
                                            <td>15</td>
                                            <td>100</td>
                                        </tr>
                                        <tr>
                                            <td>ENS 602</td>
                                            <td>Advanced Web Technologies</td>
                                            <td>60</td>
                                            <td>15</td>
                                            <td>100</td>
                                        </tr>
                                        <tr>
                                            <td>ENS 603</td>
                                            <td>Advanced Database Design and Implementation</td>
                                            <td>60</td>
                                            <td>15</td>
                                            <td>100</td>
                                        </tr>
                                        <tr>
                                            <td>ENS 604</td>
                                            <td>Data Communications and Network</td>
                                            <td>60</td>
                                            <td>15</td>
                                            <td>100</td>
                                        </tr>
                                        <tr>
                                            <td>ENS 605</td>
                                            <td>Software Engeneering</td>
                                            <td>60</td>
                                            <td>15</td>
                                            <td>100</td>
                                        </tr>
                                        <tr>
                                            <td>ENS 606</td>
                                            <td>Research Methodology</td>
                                            <td>60</td>
                                            <td>15</td>
                                            <td>100</td>
                                        </tr>
                                        <tr>
                                            <td>ENS 607</td>
                                            <td>Internet and Multimedia Technology</td>
                                            <td>60</td>
                                            <td>15</td>
                                            <td>100</td>
                                        </tr>
                                        <tr>
                                            <td>ENS 608</td>
                                            <td>Technologies for E-commerce</td>
                                            <td>60</td>
                                            <td>15</td>
                                            <td>100</td>
                                        </tr>
                                        <tr>
                                            <td>ENS 609</td>
                                            <td>Network and Web Security</td>
                                            <td>60</td>
                                            <td>15</td>
                                            <td>100</td>
                                        </tr>
                                        <tr>
                                            <td>ENS 610</td>
                                            <td>IT Law</td>
                                            <td>60</td>
                                            <td>15</td>
                                            <td>100</td>
                                        </tr>
                                    </table>
                                </div>
                                <!-- transcript -->

                                <div class="tabs" id="courses_transcript">
                                    <table>
                                        <tr>
                                            <th>Code</th>
                                            <th style="width:20%">Core modules</th>
                                            <th>Number of hours</th>
                                            <th>Credit</th>
                                            <th>Marks Obtained(%)</th>
                                            <th>Maxima</th>
                                            <th>Attendance /60 hours </th>
                                        </tr>
                                        <tr>
                                            <td>ENS 601</td>
                                            <td>Advanced object-oriented programming</td>
                                            <td>60</td>
                                            <td>15</td>
                                            <td>76</td>
                                            <td>100</td>
                                            <td>satisfaction</td>
                                        </tr>
                                        <tr>
                                            <td>ENS 602</td>
                                            <td>Advanced Web Technologies</td>
                                            <td>60</td>
                                            <td>15</td>
                                            <td>72</td>
                                            <td>100</td>
                                            <td>satisfaction</td>
                                        </tr>
                                        <tr>
                                            <td>ENS 603</td>
                                            <td>Advanced Database Design and Implementation</td>
                                            <td>60</td>
                                            <td>15</td>
                                            <td>60</td>
                                            <td>100</td>
                                            <td>satisfaction</td>
                                        </tr>
                                        <tr>
                                            <td>ENS 604</td>
                                            <td>Data Communications and Network</td>
                                            <td>77</td>
                                            <td>15</td>
                                            <td>69</td>
                                            <td>100</td>
                                            <td>medium</td>
                                        </tr>
                                        <tr>
                                            <td>ENS 605</td>
                                            <td>Software Engeneering</td>
                                            <td>60</td>
                                            <td>15</td>
                                            <td>74</td>
                                            <td>100</td>
                                            <td>over medium</td>
                                        </tr>
                                        <tr>
                                            <td>ENS 606</td>
                                            <td>Research Methodology</td>
                                            <td>60</td>
                                            <td>15</td>
                                            <td style="color: red;">46</td>
                                            <td>100</td>
                                            <td style="color: red;">minimum</td>
                                        </tr>
                                        <tr>
                                            <td>ENS 607</td>
                                            <td>Internet and Multimedia Technology</td>
                                            <td>60</td>
                                            <td>15</td>
                                            <td>87</td>
                                            <td>100</td>
                                            <td>satisfaction</td>
                                        </tr>
                                        <tr>
                                            <td>ENS 608</td>
                                            <td>Technologies for E-commerce</td>
                                            <td>60</td>
                                            <td>15</td>
                                            <td style="color: red;">48.5</td>
                                            <td>100</td>
                                            <td style="color: red;">minimum</td>
                                        </tr>
                                        <tr>
                                            <td>ENS 609</td>
                                            <td>Network and Web Security</td>
                                            <td>60</td>
                                            <td>15</td>
                                            <td>84</td>
                                            <td>100</td>
                                            <td>satisfaction</td>
                                        </tr>
                                        <tr>
                                            <td>ENS 610</td>
                                            <td>IT Law</td>
                                            <td>60</td>
                                            <td>15</td>
                                            <td>76</td>
                                            <td>100</td>
                                            <td>satisfaction</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 10%; background: rgb(78, 78, 161); color:white;">TOTAL</td>
                                            <td></td>
                                            <td>600</td>
                                            <td>150</td>
                                            <td>709.5</td>
                                            <td>1000</td>
                                            <!-- <td>satisfaction</td> -->
                                        </tr>
                                    </table>

                                    <div class="percent" style="padding:10px;">
                                        <h4>PERCENTAGE: 70.9%</h4>
                                        <h4>GRADE: SECOND CLASS HONOURS, HIGHT DIVISION</h4>
                                    </div>
                                </div>

                                <!-- retake -->

                                <div class="tabs" id="retake">
                                    <table>
                                        <tr>
                                            <th>Code</th>
                                            <th style="width:20%">Core modules</th>
                                            <th>Number of hours</th>
                                            <th>Credit</th>
                                            <th>Marks Obtained(%)</th>
                                            <th>Maxima</th>
                                            <th>Attendance /60 hours </th>
                                        </tr>
                                        <tr>
                                            <td>ENS 608</td>
                                            <td>Technologies for E-commerce</td>
                                            <td>60</td>
                                            <td>15</td>
                                            <td style="color: red;">46</td>
                                            <td>100</td>
                                            <td style="color: red;">minimum</td>
                                        </tr>
                                        <tr>
                                            <td>ENS 606</td>
                                            <td>Research Methodology</td>
                                            <td>60</td>
                                            <td>15</td>
                                            <td style="color: red;">48.5</td>
                                            <td>100</td>
                                            <td style="color: red;">minimum</td>
                                        </tr>
                                    </table>  
                                </div> 
                                
                                <!-- studied modules -->
                                <div class="tabs" id="modules">

                                    <div class="lien">
                                    <span>Module(.PDF)</span>
                                        <a href="pdf/Daniel Reis - Odoo 12 Development Essentials-Packt (2018).pdf">
                                            Research Methodology   
                                        </a>
                                    </div>

                                    <div class="lien">
                                    <span>Module(.PDF)</span>
                                        <a href="pdf/Daniel Reis - Odoo 12 Development Essentials-Packt (2018).pdf">
                                            Technologies for E-commerce   
                                        </a>
                                    </div>

                                    <div class="lien">
                                    <span>Module(.PDF)</span>
                                        <a href="pdf/Daniel Reis - Odoo 12 Development Essentials-Packt (2018).pdf">
                                            Network and Web Security  
                                        </a>
                                    </div>

                                    <div class="lien">
                                    <span>Module(.PDF)</span>
                                        <a href="pdf/Daniel Reis - Odoo 12 Development Essentials-Packt (2018).pdf">
                                            IT Law   
                                        </a>
                                    </div>

                                    <div class="lien">
                                    <span>Module(.PDF)</span>
                                        <a href="pdf/Daniel Reis - Odoo 12 Development Essentials-Packt (2018).pdf">
                                            Internet and Multimedia Technology 
                                        </a>
                                    </div>

                                    <div class="lien">
                                    <span>Module(.PDF)</span>
                                        <a href="pdf/Daniel Reis - Odoo 12 Development Essentials-Packt (2018).pdf">
                                            Software Engeneering  
                                        </a>
                                    </div>

                                    <div class="lien">
                                    <span>Module(.PDF)</span>
                                        <a href="pdf/Daniel Reis - Odoo 12 Development Essentials-Packt (2018).pdf">
                                            Data communications and Network   
                                        </a>
                                    </div>

                                    <div class="lien">
                                    <span>Module(.PDF)</span>
                                        <a href="pdf/Daniel Reis - Odoo 12 Development Essentials-Packt (2018).pdf">
                                            Advanced Web Technologies  
                                        </a>
                                    </div>

                                    <div class="lien">
                                    <span>Module(.PDF)</span>
                                        <a href="pdf/Daniel Reis - Odoo 12 Development Essentials-Packt (2018).pdf">
                                            Advanced Database Design and Implementation   
                                        </a>
                                    </div>

                                    <div class="lien">
                                    <span>Module(.PDF)</span>
                                        <a href="pdf/Daniel Reis - Odoo 12 Development Essentials-Packt (2018).pdf">
                                            Advanced Object-Oriented Programming   
                                        </a>
                                    </div>
 
                                </div>
						</div>
                </div>
			
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
        <script>
            document.getElementById("defaultOpen").click();
            function openCity(evt, tab_id) {
            // Declare all variables
                var i, tabs, tablinks;

                // Get all elements with class="tabcontent" and hide them
                tabs = document.getElementsByClassName("tabs");
                for (i = 0; i < tabs.length; i++) {
                    tabs[i].style.display = "none";
                }

                // Get all elements with class="tablinks" and remove the class "active"
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }

                // Show the current tab, and add an "active" class to the button that opened the tab
                document.getElementById(tab_id).style.display = "block";
                evt.currentTarget.className += " active";
            }
        </script>
    </body>
</html>