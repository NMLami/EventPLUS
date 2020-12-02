<!DOCTYPE html>
<html lang="en">

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
  <title>Event+</title>
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
    <div class="col-md-6 offset-md-3" style="border:1px solid #333">


      <h2 id="Header">Create Event</h2>
      <form>
        <!-- TEXT FIELD GROUPS -->
        <div class="form-group">
          <label for="name">Event Name</label>
          <input class="form-control" type="text" id="name" placeholder="Fest name">
        </div>
        <!-- TEXTAREA -->
        <div class="form-group">
          <label for="message">Details</label>
          <textarea class="form-control" id="message" rows="5"></textarea>
        </div>
        <div class="form-group">
          <label for="Fee">Registration Fee</label>
          <input class="form-control form-control" type="text" id="fee">
        </div>
        <div class="form-group">
          <label for="message">Rules</label>
          <textarea class="form-control" id="message" rows="2"></textarea>
        </div>
        <div class="form-group">
          <label for="money">Prize Money</label>
          <input class="form-control form-control" type="text" id="money">
        </div>
        <div class="form-group">
          <label for="team">Team Members</label>
          <input class="form-control" type="text" id="team">
        </div>


        <div class="form-group">
          <label for="contact">Contact Info</label>
          <textarea class="form-control" id="contact" rows="2"></textarea>
        </div>
        <div class="form-group">
          <label for="Date">Deadline</label>
          <input class="form-control" type="Date" id="date">
        </div>
        <a href="form1.html" class="btn btn-primary btn-block">Save And Add New Event</a>
        <a href="output1.html" class="btn btn-primary btn-block mb-5">Save And Exit</a>
      </form>
    </div>
  </div>
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




  <script src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
    integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

  <script>
    // Get the current year for the copyright
    $("#year").text(new Date().getFullYear());

    // Init Scrollspy
    $("body").scrollspy({ target: "#main-nav" });

    // Smooth Scrolling
    $("#main-nav a").on("click", function (event) {
      if (this.hash !== "") {
        event.preventDefault();

        const hash = this.hash;

        $("html, body").animate(
          {
            scrollTop: $(hash).offset().top
          },
          800,
          function () {
            window.location.hash = hash;
          }
        );
      }
    });
  </script>
</body>

</html>
