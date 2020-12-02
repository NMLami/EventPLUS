
<html lang="en">
<head>
  <title>Event Table</title>
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
            <a href="fest.html" class="nav-link"><i class="fas fa-expand"></i> Fests</a>
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








<div class="container">
  <h2>Event</h2>
           
  <table class="table table-bordered">
    <thead>
      <tr>
          <th>id</th>
        <th>name</th>
        <th>Event_name</th>
         <th>Details</th>
       <th>Fee</th>
        <th>Rules </th>
      <th>Prize</th>
       <th>Member</th>
        <th>Contact</th>
        <th>Deadline</th>
      
      </tr>
    </thead>
    
    <tbody>
        <?php
			include"dbfile.php";


	$sql="SELECT * from buet where name='ICT fest'";

	$result=mysqli_query($conn,$sql);

	$sl=1; while($row=mysqli_fetch_array($result)) {  ?>
        
      <tr>
          <td> <?php echo  $sl++; ?></td>
        
             <td><?php echo $row['name']; ?></td>
             <td><?php echo $row['ename']; ?></td>
             <td><?php echo $row['message']; ?></td>
             <td><?php echo $row['fee']; ?></td>
             <td><?php echo $row['rules']; ?></td>
             <td><?php echo $row['prize']; ?></td>
             <td><?php echo $row['member']; ?></td>
             <td><?php echo $row['contact']; ?></td>
              <td><?php echo $row['deadline']; ?></td>
      </tr>
     <?php } ?>
    </tbody>
  </table>
</div>

<section id="explore-head-section">
    
      <div class="container">
        <div class="row">
          <div class="col text-center py-5">

            
            <a href="output1.html" class="btn btn-outline-secondary">Registration  Page</a>
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
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