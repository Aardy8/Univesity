<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>UNIVERSITY</title>
	<link rel="stylesheet" type="text/css" href="style.css">
     <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
     <link rel="icon" type="image/x-icon" href="./icon.png">
     <style>
          body{
               background-color:grey; 
               overflow-x:hidden; 
               background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),url(images/background.jpg); 
               background-size:cover;
          }
          table{
               margin:50px;
          }
          th {
               border: 1px solid white;
               color: white;
               padding:  10px 40px;
          }
          #hello{
               margin: 30px;
          }
          h2{
               color: white;
          }
          #logo{
               width: 200px;
               padding: 40px 0 0 0;
          }
          a{
               margin: 20px; 
               color: white;
          }
          p{
               text-align: center;
          }
          @media (max-width: 1000px) {
               table{
                    width: 80%;
               }
               th{
                    padding: 5px 2%;
                    font-size: 10px;
               }
               
          }
     </style>
</head>

<body>
     
     <div class="home" style="display: flex;
     flex-direction: column;
  justify-content: center;
  align-items: center;">
  <img id="logo" src="images/logo1.png"/>
     <h1 style="color: white;" id="hello"><?php echo $_SESSION['name']; ?></h1>
     <img style="width:200px;padding: 20px;" src="./images/user2.jpg"/>
<h2>REG NO: 91060001234</h2>
<h2>ROLL NO: 194102</h2>
<br>

<a href="https://www.klnce.edu/download/HallTicket/2021-22/ODDSem/910619104103.pdf"><h2>HALL TICKET DOWNLOAD</h2></a>
<br>   
<h2>Consolidated Attendance Details</h2>
<a href="./circular.html"><h2>Student Circular</h2></a>
     <table>
          <tr style="border: 1px solid white;">
               <th>Sl.No.</th>
               <th>Semester</th>
               <th>Nof Working Hours</th>
               <th>Nof Present Hours</th>
               <th>Percentage</th>
          </tr>
          <tr>
               <th>1</th>
               <th>1</th>
               <th>532</th>
               <th>529</th>
               <th>99.4</th>
          </tr>
          <tr>
               <th>2</th>
               <th>2</th>
               <th>532</th>
               <th>529</th>
               <th>99.4</th>
          </tr>
          <tr>
               <th>3</th>
               <th>3</th>
               <th>532</th>
               <th>529</th>
               <th>99.4</th>
          </tr>
          <tr>
               <th>4</th>
               <th>4</th>
               <th>532</th>
               <th>529</th>
               <th>99.4</th>
          </tr>
     </table>
     <h2>Consolidated Semester Marks</h2>
     <table>
          <tr>
               <th>Sl. No.</th>
               <th>Semester</th>
               <th>Paper Code</th>
               <th>Paper Name</th>
               <th>Grade</th>
               <th>Credit</th>
          </tr>
          <tr>
               <th>1</th>
               <th>1</th>
               <th>HS8151</th>
               <th>COMMUNICATIVE ENGLISH</th>
               <th>B</th>
               <th>4</th>
          </tr>
          <tr>
               <th>2</th>
               <th>1</th>
               <th>MA8151</th>
               <th>ENGINEERING MATHEMATICS - I</th>
               <th>B+</th>
               <th>4</th>
          </tr>
          <tr>
               <th>3</th>
               <th>1</th>
               <th>PH8151</th>
               <th>ENGINEERING PHYSICS</th>
               <th>A</th>
               <th>3</th>
          </tr>
          <tr>
               <th>4</th>
               <th>1</th>
               <th>CY8151</th>
               <th>ENGINEERING CHEMISTRY</th>
               <th>A</th>
               <th>3</th>
          </tr>
          <tr>
               <th>5</th>
               <th>1</th>
               <th>GE8151 </th>
               <th>PROBLEM SOLVING AND PYTHON PROGRAMMING</th>
               <th>O</th>
               <th>3</th>
          </tr>
          <tr>
               <th>6</th>
               <th>1</th>
               <th>GE8152</th>
               <th>ENGINEERING GRAPHICS</th>
               <th>O</th>
               <th>3</th>
          </tr>
          <tr>
               <th>7</th>
               <th>1</th>
               <th>GE8161</th>
               <th>PROBLEM SOLVING AND PYTHON PROGRAMMING LABORATORY</th>
               <th>O</th>
               <th>2</th>
          </tr>
          <tr>
               <th>8</th>
               <th>1</th>
               <th>BS8161</th>
               <th>PHYSICS AND CHEMISTRY LABORATORY</th>
               <th>O</th>
               <th>2</th>
          </tr>
          <tr>
               <th>9</th>
               <th>2</th>
               <th>HS8251</th>
               <th>TECHNICAL ENGLISH</th>
               <th>B+</th>
               <th>4</th>
          </tr>
          <tr>
               <th>10</th>
               <th>2</th>
               <th>MA8251</th>
               <th>ENGINEERING MATHEMATICS - II</th>
               <th>B+</th>
               <th>4</th>
          </tr>
          <tr>
               <th>11</th>
               <th>2</th>
               <th>GE8291</th>
               <th>ENVIRONMENTAL SCIENCE AND ENGINEERING</th>
               <th>A</th>
               <th>3</th>
          </tr>
          <tr>
               <th>12</th>
               <th>2</th>
               <th>GE8261</th>
               <th>ENGINEERING PRACTICES LABORATORY</th>
               <th>O</th>
               <th>2</th>
          </tr>
     </table>
     <a href="logout.php" style="text-decoration: none;
  border: 1px solid white;
  padding: 10px;
  margin-bottom:90px;
  color: white;
  background: rgb(68, 68, 68);">Logout</a>
  </div>
  <p>University All Right Reserved</p>
</body>
</html>

<?php 
}else{
     header("Location: login1.php");
     exit();
}
 ?>