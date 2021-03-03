<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
		body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: black;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: green;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #3D85C3;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
		.lightblue { background-color: lightblue; }
		.lightgreen { background-color: lightgreen; }
		.lightgray { background-color: lightgray; }
		.lightpink { background-color: lightpink; }
		.red{
			background-color: red;
		}
		.header{
			text-align: center;
		}
	
		.row { width: 96%;
			padding-left: 25px;
		

		 }
		.first{
			background-color:  #9bf8f6;
			height: 400px;
			margin: 3px;
			text-align: center;
		}
		
		
		.second {
			height: 400px; margin: 3px;
			padding-left: 8px;
			background-image: url("fagun.jpg");
 

         background-position: center;
         background-repeat: no-repeat;
         background-size: cover;

			 
         }
         .third{
         	height: 300px;
         	background-color: #9bf8f6;
         	margin: 5px;
			text-align: center;
			background-image: url('images/about-background.jpg');
			color: #87fff9;
         }
         .fourth{
         	height: 140px;
         	 background-color: #53cdcb;
         	 margin: 5px;
			 text-align: center;
         }
         .fiveth,.sixth {
         	height: 200px;
         	background-color: #9bf8f6;
         	margin: 5px;
			text-align: center;
         }
         .sixth{
         	background-color: #9bf8f6;
			text-align: center;
         }
         .seventh{
         	height: 300px;
         	background-color: #9bf8f6;
         	margin: 5px;
			text-align: center;
         }
		.eightth{
			height: 100px;
			background-color: #9bf8f6;
			margin: 5px;
			text-align: center;
		}
		.col-md-1 { width: 8.333333333%; }
		.col-md-2 { width: 16.66666667%; }
		.col-md-3 { width: 25%; }
		.col-md-4 { width: 32.9%; }
		.col-md-5 { width: 41.66666667%; }
		.col-md-6 { width: 49%; }
		.col-md-7 { width: 58.33333333%; }
		.col-md-8 { width: 65.00%; }
		.col-md-9 { width: 75%; }
		.col-md-10 { width: 83.33333333%; }
		.col-md-11 { width: 99.00%; }
		.col-md-12 { width: 100%; }
		
		.col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
			float: left;
		}
		
		@media screen and (max-width: 640px)
		{
			.col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
				width: 100%;
			}
		}
input[type=text] {
    width: 60%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 10px;
    font-size: 16px;
    background-color: white;
    background-image: url('images/searchicon.png');
    background-repeat: no-repeat;
    background-position: 10px 10px; 
    padding: 12px 20px 12px 20px;
}
input[type=button], input[type=submit] {
    background-color: #3D85C3;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
#pic{
	background-image: url('images/fagun1.jpg');
	height:400px;
	width:85%;
}

input[type=text] {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc; /* Normal State Design */
    transition: 1s;
    outline: none;
}

input[type=text]:focus {
    border: 3px solid #555; /* Design on Focus */
}
.table1, .table1 td, .table1 th
{
	border: solid; 					/* solid dotted */
	border-size: 1px;
	border-collapse: collapse;
	text-align: center;
}
.table1 th
{
	background-color: gray;
	color: white;
	width: 50%;
	line-height: 100%;
}
.table1
{
	width: 100%;
}
#icon{
	background-image: url("home.png");
	height:10px;
	width:25px;
	text-align:right;
 
}
</style>
</head>
<body>

	<div class="lightblue header">
	<div class="navbar">
  <a href="#home">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Services
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Web Developer</a>
      <a href="#">Programming</a>
      <a href="#">Game Developing</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Experience
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Education</a>
      <a href="#">Work</a>
      <a href="#">Knowledge & Skill</a>
    </div>
  </div>
<form>
  <input type="text" name="search" placeholder=" Type and press enter..." />
</form>
<div id="icon">
</div>  
</div>

	
	</div>
	
		<div class=" col-md-12 lightblue">
			<div class="row">
				<div class="col-md-4 first">
				<h2>Mejbaur Bahar Fagun</h2>
					<a href="https://drive.google.com/file/d/1IKKaONCt0r7aXA3NX0Yitunnhm4hP7iK/view?usp=sharing"><input type="button" value="Download CV" /></a>
					<input type="submit" value="Contact Me" />
					
				</div>
				<div class="col-md-8 second">
					<div id="pic">
					</div>
				</div>

				<div class="col-md-11 third">
					<h2>About Me</h2>
						<p>I am a website designer from Bangladesh, with a strong focus in Web Designing with PHP, HTML, CSS, Bootstrap, etc. Scripting with JavaScript, jQuery, AJAX, JSON etc. Graphics Designing Essentials for Web Developers Search Engine Optimization Essentials for Web Developers Social Media Integration Essentials for Web Developers MySQL Database Development Core PHP with Object-Oriented Programming PDO for Advanced Database Connection and Query Processing. I love to get new experiences and always learn from my surroundings. I've done some projects . I looking forward to any opportunities and challenges.</p>

				</div>

				<div class="col-md-11 fourth">
					<h2>Bootstrap HTML Template</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 fiveth">
					<h2>Education</h2>
					<table class="table1">
						<tr>
							<th>Exam</th>
							<th>Institute</th>
							<th>Year</th>
							<th>Result</th>
						</tr>
						<tr>
							<td>BSc In CSE</td>
							<td>Bangladesh University</td>
							<td>2021</td>
							<td>3.78</td>
						</tr>
						<tr>
							<td>HSC</td>
							<td>Sarsha Upzila College</td>
							<td>2017</td>
							<td>3.42</td>
						</tr>
						<tr>
							<td>SSC</td>
							<td>Sarsha Pailot High School</td>
							<td>2015</td>
							<td>5.00</td>
						</tr>
						
					</table>
				</div>
				<div class="col-md-6 sixth">
					<h2>Experience</h2>
					<h3>No Job Experience</h3>
				</div>
				<div class="col-md-11 seventh">
					<h2>Contact</h2>
					<form>
					  <input type="text" id="fname" name="fname" placeholder="First Name"></br>
					  <input type="text" id="lname" name="lname" placeholder="Last Name"></br>
					  <input type="text" id="email" name="email" placeholder="Email"></br>
					  <input type="submit" value="Submit" />
					</form>
				</div>
				<div class="col-md-11 eightth">
					<h2>@ All Right Reserve</h2>
				</div>
				
			</div>
		</div>
</body>
</html>