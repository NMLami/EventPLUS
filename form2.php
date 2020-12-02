

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
    integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  <link rel="stylesheet" href="css/style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Event+</title>
<style type="text/css">
body{
	font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif; 
	font-size:12px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
	margin:0 auto;
	width:400px;
	padding:14px;
}
	/* ----------- basic ----------- */
	#basic{
		border:solid 2px #DEDEDE;	
	}
	#basic h1 {
		font-size:14px;
		font-weight:bold;
		margin-bottom:8px;
	}
	#basic p{
		font-size:11px;
		color:#666666;
		margin-bottom:20px;
		border-bottom:solid 1px #dedede;
		padding-bottom:10px;
	}
	#basic label{
		display:block;
		font-weight:bold;
		text-align:right;
		width:140px;
		float:left;
	}
	#basic .small{
		color:#666666;
		display:block;
		font-size:11px;
		font-weight:normal;
		text-align:right;
		width:140px;
	}
	#basic input{
		float:left;
		width:200px;
		margin:2px 0 30px 10px;
	}
	#basic button{ 
		clear:both;
		margin-left:150px;
		background:#888888;
		color:#FFFFFF;
		border:solid 1px #666666;
		font-size:11px;
		font-weight:bold;
		padding:4px 6px;
	}


	/* ----------- stylized ----------- */
	#stylized{
		border:solid 2px #b7ddf2;
		background:#ffffff;

	}
	#stylized h1 {
		font-size:14px;
		font-weight:bold;
		margin-bottom:8px;
	}
	#stylized p{
		font-size:11px;
		color:#666666;
		margin-bottom:20px;
		border-bottom:solid 1px #b7ddf2;
		padding-bottom:10px;
	}
	#stylized label{
		display:block;
		font-weight:bold;
		text-align:right;
		width:140px;
		float:left;
	}
	#stylized .small{
		<color:#FFFFFF;
		display:block;
		font-size:11px;
		font-weight:normal;
		text-align:right;
		width:140px;
	}
	#stylized input{
		float:left;
		font-size:12px;
		padding:4px 2px;
		border:solid 1px #aacfe4;
		width:200px;
		margin:2px 0 20px 10px;
	}
	#stylized button{ 
		clear:both;
		margin-left:160px;
		width:125px;
		height:31px;
		background:#444;
		text-align:center;
		line-height:31px;
		color:#FFFFFF;
		font-size:11px;
		font-weight:bold;
	}
	.sss{
		color : #000000;
	}

</style>
</head>

<body>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="main-nav">
    <div class="container">
      <a href="http://localhost/login_plugin/"  class="navbar-brand">Event+</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="http://localhost/login_plugin/"  class="nav-link active"><i class="fas fa-home"></i> Home</a>
          </li>
          <li class="nav-item">
            <a href="view2.php" class="nav-link"><i class="fas fa-calendar-check"></i> Timeline</a>
          </li>
          <li class="nav-item">
            <a href="output.html" class="nav-link"><i class="fas fa-expand"></i> Fests</a>
          </li>
          <li class="nav-item">
            <a href="contactus.html" class="nav-link"><i class="fas fa-id-card"></i> Contact Us</a>
          </li>
		  <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                  <i class="fas fa-user"></i> Welcome User
                </a>
                <div class="dropdown-menu">
                  <a href="form2.php" class="dropdown-item">
                    <i class="fas fa-user-circle"></i> Create Fest
                  </a>
                  <a href="http://localhost/login_plugin/index222.php" class="dropdown-item">
                    <i class="fas fa-sign-out-alt"></i> My Profile
                  </a>
                </div>
              </li>
          <!--<li class="nav-item">
            <a href="http://localhost:5000/users/login" class="nav-link"><i class="fas fa-sign-in-alt"></i> Log In</a>
          </li>-->
        </ul>
      </div>
    </div>
  </nav>
























    <center><h1><b>Create New Fest</b></h1> </center>

<br />
<br />
<br />
<div id="stylized" class="myform">

<form id="form1" id="form1" action="" method="POST">

    <label class = "sss">Fest Name
        <span class="small">Give the fest name</span>
    </label>
<input type="text" name="name">
    <label class = "sss">Location
        <span class="small">Enter the location</span>
    </label>
<input type="text" name="location">
    <label class = "sss">Institution
        <span class="small">Name of the institution</span></label>
<input type="text" name="institution">
  <label class = "sss">Date </label>
 <input required type="date" name="date">
 <label class = "sss">Details </label>
 <input type="text" name="message">

<br />
<br /> 
  <button name="ss" type="submit" value="Send" style="margin-top:15px;">Submit</button>
	
<div class="spacer"></div>

</form>


</div> <!-- end of form class -->
<section id="explore-head-section">
    
      <div class="container">
        <div class="row">
          <div class="col text-center py-5">
            <a href="view2.php" class="btn btn-outline-secondary">View all</a>
          </div>
        </div>
      
    </div>
  </section>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

  <!-- FOOTER -->
  <footer id="main-footer" class="bg-dark secc">
    <div class="container">
      <div class="row">
        <div class="col text-center py-2">
          <h3>Event+</h3>
          <p>
            Copyright &copy;
            <span id="year"></span>
          </p>
        </div>
      </div>
    </div>
  </footer>


</body>
</html>

<?php
if(isset($_POST['ss'])){
    
    include"dbfile.php";
    
     echo    $name=$_POST['name'];
      echo $location=$_POST['location'];
      echo   $institution=$_POST['institution'];
      echo   $date=$_POST['date'];
        echo      $message=$_POST['message'];
                                                        // echo   $image=$_POST['image'];
    
$sql="INSERT INTO cse(name,location,institution,date,message)  VALUES('$name','$location','$institution','$date','$message');";
    
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

    
    
    
}



?>
