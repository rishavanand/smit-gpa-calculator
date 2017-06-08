<?php

if (isset($_POST["maths"]) && isset($_POST["be"]) && isset($_POST["eee"]) && 
	isset($_POST["chemistry"]) && isset($_POST["be"]) && isset($_POST["chemistrylab"]) && 
	isset($_POST["es"]) && isset($_POST["cp"]) && isset($_POST["cplab"])){

  $maths_c = "4";
  $be_c = "4";
  $eee_c = "4";
  $chemistry_c = "4";
  $chemistrylab_c = "1.5";
  $es_c = "2";
  $hv_c = "1";
  $cp_c = "4";
  $cplab_c = "1.5";

  function get_point_from_grade($grade)
    {
    if ($grade == "S" || $grade == "s")
      {
      $point = "10";
      }
    elseif ($grade == "A" || $grade == "a")
      {
      $point = "9";
      }
    elseif ($grade == "B" || $grade == "b")
      {
      $point = "8";
      }
    elseif ($grade == "C" || $grade == "c")
      {
      $point = "7";
      }
    elseif ($grade == "D" || $grade == "d")
      {
      $point = "6";
      }
    elseif ($grade == "E" || $grade == "e")
      {
      $point = "5";
      }
    elseif ($grade == "F" || $grade == "f")
      {
      $point = "0";
      }
    elseif ($grade == "I" || $grade == "i")
      {
      $point = "0";
      }
    elseif (empty($grade))
      {
      $point = "0";
      }

    return $point;
  }

  $maths_grade = get_point_from_grade($_POST["maths"]);
  $es_grade = get_point_from_grade($_POST["es"]);
  $chemistry_grade = get_point_from_grade($_POST["chemistry"]);
  $be_grade = get_point_from_grade($_POST["be"]);
  $eee_grade = get_point_from_grade($_POST["eee"]);
  $cplab_grade = get_point_from_grade($_POST["cplab"]);
  $cp_grade = get_point_from_grade($_POST["cp"]);
  $hv_grade = get_point_from_grade($_POST["hv"]);

  $chemistrylab_grade = get_point_from_grade($_POST["chemistrylab"]);
  $gpa = (($maths_grade * $maths_c) + ($eee_grade * $eee_c) + ($be_grade * $be_c) + ($chemistry_grade * $chemistry_c) + ($hv_grade * $hv_c) + ($es_grade * $es_c) + ($chemistrylab_grade * $chemistrylab_c) + ($cplab_grade * $cplab_c) + ($cp_grade * $cp_c)) / ($maths_c + $eee_c + $chemistry_c + $be_c + $cp_c + $hv_c + $chemistrylab_c + $es_c + $cplab_c);
}

?>

<!DOCTYPE html>
<!-- saved from url=(0039)http://getbootstrap.com/examples/cover/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="http://getbootstrap.com/favicon.ico">

<title>GPA CALC</title>

<!-- Bootstrap core CSS -->
<link href="assets/bootstrap.min.css" rel="stylesheet">

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<link href="assets/ie10-viewport-bug-workaround.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="assets/cover.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="assets/ie-emulation-modes-warning.js.download"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

  <body cz-shortcut-listen="true">
    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Gpa Calc</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li><a href="physics.php">Physics Cycle</a></li>
                  <li class="active"><a href="chemistry.php">Chemistry Cycle</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <?php if (empty($gpa)){ ?>

          <div class="inner cover"><br /><br /><br /><br />
            <h1 class="cover-heading">Calculate your GPA</h1><br />
            Enter your grades.
            <form action="" method="POST">
            <table width="100%">
            <tr>
            <td width="50%"><label>Engineering Mathematics</label></td>
            <td><input type="text" name="maths" class="form-control"></td>
            </tr>
            <tr>
            <td width="50%"><label>Basic electronics</label></td>
            <td><input type="text" name="be" class="form-control"></td>
            </tr>
            <tr>
            <td width="50%"><label>Elements of Electrical Enigineering</label></td>
            <td><input type="text" name="eee" class="form-control"></td>
            </tr>
            <tr>
            <td width="50%"><label>Computer Programming</label></td>
            <td><input type="text" name="cp" class="form-control"></td>
            </tr>
            <tr>
            <td width="50%"><label>Chemistry</label></td>
            <td><input type="text" name="chemistry" class="form-control"></td>
            </tr>
            <tr>
            <td width="50%"><label>UHV</label></td>
            <td><input type="text" name="hv" class="form-control"></td>
            </tr>
            <tr>
            <td width="50%"><label>Environmental Science</label></td>
            <td><input type="text" name="es" class="form-control"></td>
            </tr>
            <tr>
            <td width="50%"><label>Chemistry Lab</label></td>
            <td><input type="text" name="chemistrylab" class="form-control"></td>
            </tr>
            <tr>
            <td width="50%"><label>Computer Programming Lab</label></td>
            <td><input type="text" name="cplab" class="form-control"></td>
            </tr>
            </table>
            <input type="hidden" name="category" value="coa" class="form-control"><br />
            <input type="submit" value="Calculate" name="submit" class="form-control btn btn-primary" style="width:100%;">
            </form>
          </div> 

          <?php } else { ?>

          <div class="inner cover">
            <h1 class="cover-heading">Your GPA is : <?php echo round($gpa, 2); ?></h1>
          </div>

           <?php } ?>

          <div class="inner">
            <p>SimpleApps by <a href="http://fb.com/iamrishavanand">Rishav Anand</a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-89137539-1', 'auto');
    ga('send', 'pageview');
    </script>
    <script src="assets/jquery.min.js.download"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="assets/bootstrap.min.js.download"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/ie10-viewport-bug-workaround.js.download"></script>

</body>
</html>