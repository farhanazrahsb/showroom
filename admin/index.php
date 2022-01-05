<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TOYOTA | Purbalingga Admin</title>
  <link rel="shortcut icon" href="../images/favicon.png"/>
	 <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet"/>
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet"/>
  <!-- CUSTOM STYLES-->
  <link href="assets/css/custom.css" rel="stylesheet"/>
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
</head>

<body>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <br/><br/>
                <h2> TOYOTA | Purbalingga</h2>
                <h5>( Login yourself to get access )</h5>
                <br />
            </div>
        </div>
        <div class="row ">
          <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
              <div class="panel panel-default">
              <div class="panel-heading">
              <strong>Enter Details To Login</strong>  
              </div>
                <div class="panel-body">
                  <form action="part/ceklogin.php" method="post" role="form">
                  <br/>
                    <div class="form-group input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="username" placeholder="Your Username" autofocus="autofocus" autocomplete="Off" />
                    </div>
                    <div class="form-group input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" name="password" placeholder="Your Password"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                  </form>
                </div>
              </div>
          </div>
        </div>
    </div>

<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>
   
</body>
</html>
