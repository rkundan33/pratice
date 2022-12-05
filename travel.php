<html>

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&family=Press+Start+2P&display=swap" rel="stylesheet">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <style>
    .box {
      max-width: 80%;
      margin: auto;
      margin-left: 65%;
      font-family: 'Oswald', sans-serif;

      margin-top: 90px;
    }

    .box form h1 {
      color: #385960;
    }

    .box form h2 {
      color: rgb(28, 27, 27);
    }

    .box form lable {
      color: rgb(242, 242, 242);
      font-size: 45PX;

    }

    .box form lable checkbox {
      color: rgb(242, 242, 242);
    }




    .box input[type=text] {

      border: 2px inset;
      width: 60%;
      height: 5%;
      border-radius: 15px;
    }

    .box input[type=Email] {
      border: 2px inset;
      width: 60%;
      height: 5%;
      border-radius: 15px;
    }


    .box input[type=date] {
      border: 2px inset;
      width: 60%;
      height: 5%;
      border-radius: 15px;
    }

    .box input[type=number] {
      border: 2px inset;
      width: 60%;
      height: 5%;
      border-radius: 15px;
    }

    .box input[type=code] {
      border: 3px inset;
      width: 60%;
      height: 5%;
      border-radius: 15px;

    }

    .bg {
      width: 100%;
      position: absolute;
      z-index: -1;
      margin-top: -5%;
    }
    #st{
     color: red;
    }
  </style>
  <title>reservation form</title>
</head>

<body>

  <img class="bg" src="t.jpg" alt="travel">
  <nav class="navbar navbar-expand-lg bg-">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">HAX TRAVEL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-secondary" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="box">



    <form action="haxtravel.php" method="post">>
      <h1><b>Travel reservation form</b></h1>

      <h2><b> *denotes mandotory</b></h2>
      <br>
      <lable for="name"><b> full name *:</b> </lable><br>

      <input type="text" name="fname" placeholder="fname_lname">
      <br><br>
      <lable for="Email address"> Email address*: </lable><br>

      <input type="Email" name="mail" placeholder="Email_address">
      <br><br>

      <lable for=tour package> Select tour package*: </lable><br>

      <div >
        <select name="place" >
          <div id="st">
        <option value="select here" selected ><p> select </p></option></div>
          <option value="rishikesh" >rishikesh</option>
          <option value="leh-ladaakh">leh-ladaakh</option>
          <option value="jaipur">jaipur</option>
          <option value="manali">manali</option>
          <option value="agar">agar</option>
        </select>
      </div>



      </select>
      <br><br>
      <lable for="date"> Arrival date *: </lable><br>

      <input type="date" name="date" placeholder="m/d/y">
      <br><br>

      <lable for="number"> Number of person*: </lable><br>

      <input type="number" name="nob" placeholder="Unkown_type">
      <br><br>
      <lable> what whould want to avail?*</lable>
      <br>
      <input type="checkbox" name="check" value="boarding">boarding <br>

      <input type="checkbox" name="check" value="  fooding">fooding<br> 

      <input type="checkbox" name="check" value=" sight seeing">sight seeing<br>

      <br>
      <lable for="code"> Discount coupan code: </lable><br>

      <input type="code" name="code" placeholder="Unknown_type"><br><br>

      <lable for="T&C"> Terms and condition*</lable><br>
      <input type="radio" name="TC" value="I agree">
      <lable> I agree</lable> <br>
      <input type="radio" name="TC" value="I disagree">
      <lable> I disaree</lable>
      <br>
      <input type="submit" name="submit" value="Submit">







    </form>
  </div>
  <div class="slide">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="F.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="..." class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

</body>


</html>