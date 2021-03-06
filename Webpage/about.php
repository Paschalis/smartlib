<?php 
/*
  This file is part of SmartLib Project.

    SmartLib is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    SmartLib is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with SmartLib.  If not, see <http://www.gnu.org/licenses/>.
    
    
	Author: Paschalis Mpeis

	Affiliation:
	Data Management Systems Laboratory 
	Dept. of Computer Science 
	University of Cyprus 
	P.O. Box 20537 
	1678 Nicosia, CYPRUS 
	Web: http://dmsl.cs.ucy.ac.cy/
	Email: dmsl@cs.ucy.ac.cy
	Tel: +357-22-892755
	Fax: +357-22-892701
    
  
 */
session_start();
include 'scripts/sessionInit.php';
?>
<!DOCTYPE html>
<html lang=en>
<head>
	<meta charset=UTF-8>
	<title>SmartLib</title>
	<link href=styles.css rel=stylesheet />
</head>

<body>
<header>

   <section>
   <?php include 'scripts/header.php'; ?>
		</section>
		

     <aside>
     <?php include 'scripts/smartWidget.php'; ?>
     
</aside>
	

		
</header>

<div class=clearfix>
	<div id=content>
<!--    If user is logged in-->
		<article>
        	<nav id=global>
		<ul>
			<li><a href="index.php">Home</a></li>
                             <?php 
							//User is logged in
							if($_SESSION['loggedin']==1){
								?>
								<li><a href="userProfile.php"><?php echo $_SESSION['name']?> Profile</a>
								</li>
                                <?php
								}
							//User is Guest
							else{
								?>
								
								<li><a href="register.php">Register</a>
								</li>
                                <?php
								}
								?>
			<li><a href="downloads.php">Downloads</a></li>
			<li><a href="about.php">About</a></li>
   			<li><a href="contact.php">Contact</a></li>
		</ul>
	</nav>
			<header>	
				<h1>SmartLib Open Source Project</h1>
			</header>
            <p>SmartLib Goal is to provide users an
                                    easy way to share their personal book library with others,
                                    voluntary. Users first have to create an account to
                                    	their desired SmartLib.</br>
                                        Acounts can created using library's webpage or Smartphone
                                        Application.</br></br>
								Organizations can create their own SmartLib, using the Project Sources 
                               for webpage and database, hosted on GitHub.
                               Those sources are under the General Public Licence.
                               <br>More information about Smartphone applications, and SmartLib's
                               installation process can be found on Download section.</p>
			<br><br>
			<header>
				<h1>Project Members</h1>
			</header>
			<p>
      <span class="textHandle">
             <strong>Demetris Zeinalipour:<br>

            PhD Lecturer at University of Cyprus</strong><br>
           &nbsp;&nbsp;&nbsp;&nbsp;
            Project Supervisor</span><br>
          
            <br><br> <span class="textHandle">
            <strong>Paschalis Mpeis:<br>
            BSc 4th at University of Cyprus</strong><br>
                       &nbsp;&nbsp;&nbsp;&nbsp;
            Requirement Analysis<br>
                       &nbsp;&nbsp;&nbsp;&nbsp;
            Web Interface (HTML5/PHP/JS)<br>
                       &nbsp;&nbsp;&nbsp;&nbsp;
            Database (MySQL)<br>
                       &nbsp;&nbsp;&nbsp;&nbsp;
            Smartlib API for Smartphone Clients(PHP/MySQL)<br>
                       &nbsp;&nbsp;&nbsp;&nbsp;
            Android Client (Java)</span><br>
            <br><br> <span class="textHandle">
            <strong>Chrysovalantis Anastasiou:<br>
            BSc 2nd at University of Cyprus</strong><br>
                       &nbsp;&nbsp;&nbsp;&nbsp;
            iOS Client (Objective C)</span><br>
            <br><br> <span class="textHandle">
             <strong>Chrystalla Tsoutsouki:<br>
            BSc 2nd at University of Cyprus</strong><br>
                       &nbsp;&nbsp;&nbsp;&nbsp;
            iOS Client (Objective C)</span><br>
            <br><br>
             
            
         	</article>
			
	</div>   




</div>

<footer class=clearfix>

<?php include "scripts/footer.php" ?>

</footer>

</body>
</html>