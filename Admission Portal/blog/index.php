<!doctype html>
<html lang="en">
    <head>
            
        <!-- meta data & title -->
        <meta charset="utf-8">
        <title>Admission Portal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">


        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300">
        <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/animate.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <!--angular core-->
        <script src="https://code.angularjs.org/1.3.0-rc.0/angular.js"></script>
        <script src="https://code.angularjs.org/1.3.0-rc.0/angular-route.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-sanitize/1.3.0/angular-sanitize.min.js"></script>
    
    </head>
  <body ng-app="blogapp">

    <!-- Header -->
        
     <nav class="navbar navbar-inverse" ng-controller="blogcontroller">
      
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://localhost:3000/#/" style="color: #55CBD2;">Admission Portal</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#/" >Blog</a></li>
            <li><a href="#/submit">Submit Blog</a></li>
            <li><a href="http://localhost:3000/#/contact">Contact</a></li>
          </ul>
          
        </div><!-- /.navbar-collapse -->
    </nav>
    <!-- End Header -->

    <section>
        <div ng-view></div>
    </section>
    
    <!-- Footer -->
    <footer> 
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3><i class="fa fa-map-marker"></i> Contact:</h3>
                    <p class="footer-contact">
                        Delhi<br>
                        Phone: 123-4567-890 <br>
                        Email: info@admissionportal.com<br>
                    </p>
                </div>
                <div class="col-md-4 footer-link">
                    <h3><i class="fa fa-external-link"></i> Links</h3>
                    <p> <a href="http://localhost:3000/#/collegecomparator"> College Comparator</a></p>
                    <p> <a href="http://localhost:3000/#/contact"> Contact Us</a></p>
                    <p> <a href="#"> Blog </a></p>
                    <p> <a href="http://localhost:3000/#/team"> Team </a></p> 
                </div>
              <div class="col-md-4">
                <h3><i class="fa fa-heart"></i> Socialize</h3>
                <div id="social-icons">
                    <a href="#" class="btn-group google-plus">
                        <i class="fa fa-google-plus"></i>
                    </a>
                      <a href="#" class="btn-group linkedin">
                        <i class="fa fa-linkedin-square"></i>
                    </a>
                      <a href="#" class="btn-group twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                      <a href="#" class="btn-group facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                </div>
              </div>    
        </div>
      </div>
    </footer>

    
    <div class="copyright text center">
        <p>&copy; Copyright 2017, <a href="http://localhost:3000/#/">Admission Portal</a>. 
    </div>

     
    <script type="text/javascript" src="../js/jquery.js"></script>
   
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.11.0/ui-bootstrap-tpls.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script src="../js/blog.js"></script>
    <script src="tinymce/js/tinymce/tinymce.min.js"></script> 
    <script src="../js/validation.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
  </body>
</html>
