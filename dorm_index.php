<head>
<title>
<?php
$dormName = $_REQUEST['dorm'];
echo $dormName;
?>
</title>
  <!--These two links are for bootstrap -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
  <div class="jumbotron">
    <h1>Welcome to
<?php
$dormName = $_REQUEST['dorm'];
echo $dormName;
?>
</h1>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <h3>Please fill out the following form and then begin choosing your room for next year</h3>
      <br><br>
      <form>
      <h4>What year are you going into next year:</h4>
        <input type="radio" name="function" id="2ndYr">Sophomore Year
        <input type="radio" name="function" id="3rdYr">Junior Year
        <input type="radio" name="function" id="4thYr">Senior Year
      </form>
      <form>
      <h4>Will you/your roomates spend most of the time:</h4>
        <input type="radio" name="function" id="Study">Studying
        <input type="radio" name="function" id="Fun">Having Fun
        <input type="radio" name="function" id="Both">An even amount of both
      </form>
      <form>
      <h4>Do you and/or your roomates want to be close to or far from a RA/AR/Rector:</h4>
        <input type="radio" name="function" id="CloseRA">Close to
        <input type="radio" name="function" id="FarRA">Far from
      </form>
      <form>
      <h4>Do you and/or your roomates want to be close to or far from stairs:</h4>
        <input type="radio" name="function" id="CloseStrs">Close to
        <input type="radio" name="function" id="FarStrs">Far from
      </form>
      <form>
      <h4>Do you and/or your roomates want to be close to or far from the elevator:</h4>
        <input type="radio" name="function" id="CloseElv">Close to
        <input type="radio" name="function" id="FarElv">Far from
      </form>
      <form>
      <h4>Do you and/or your roomates want a nice view of campus:</h4>
        <input type="radio" name="function" id="View">Yes
        <input type="radio" name="function" id="NoView">No
        <input type="radio" name="function" id="NoPref">Doesn't Matter      
      </form>
      <br><br>
      <h4>Please select floor:</h4>
      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dormDropdown" data-toggle="dropdown">Floor <span class="caret"></span></button>
          <ul class="dropdown-menu">
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
          </ul>
      </div>
    </div>
  </div>
</div>
</body>