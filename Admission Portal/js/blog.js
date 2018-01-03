var app = angular.module("blogapp", ["ngRoute","ui.bootstrap", "ngSanitize"]);

app.config(function($routeProvider,$locationProvider) 
{
	
    $routeProvider
    .when("/", {
        templateUrl : "pages/home.php",
        controller:"blogcontroller"
    })
    
    .when("/contact", {
    	templateUrl : "pages/contact.html",
    	controller : "contactcontroller",
    })
    .when("/submit", {
    	templateUrl : "pages/submitblog.php",
    	controller : "submitblog",
    })
    .when("/team", {
    	templateUrl : "pages/team.html",
    	controller : "teamcontroller",
    })
    .when("/blogshow", {
        templateUrl : "pages/blogshow.php",
        controller : "blogshowcontroller",
    })
    .when("/blogview/:id", {
        templateUrl : "pages/blogview.php",
        controller : "blogsviewcontroller",
    })
    $locationProvider.hashPrefix(''); 

     new WOW().init();

});

app.controller("blogcontroller",function($scope, $http)
{
    $scope.myInterval = 3000;
    $scope.slides = 
    [
    {
       image: "../assets/img/blog-img/b1.jpg"
    },
    {
      image: "../assets/img/blog-img/b2.jpg"
    },
    {
      image: "../assets/img/blog-img/b3.jpg" 
    }
  ];
    $http({
                method: 'GET',
                url: 'pages/nextblogpage.php'
            }).success(function(response){
                $scope.blogdata = response;
            });

    


});

app.controller("submitblog", function($scope){
     tinymce.init({
            selector: '#content',
            height: "300"
        });
    $(document).ready(function(){

$("#blog-form").validate({

          rules:
          {
                title: {
                required: true
                },
                content: {
                required: true
                },
                file:{
                    required : true,
                    accept: "jpg, jpeg, png, gif, JPG, JPEG, PNG, GIF"
                },
                authorname :{
                  required: true
                },
                authoremail :{
                  required: true,
                  email:true
                }
           },
           messages:
           {
                title:{
                required: "Please enter the title of the blog"
                },
                content:{
                required: "Please enter content of the blog"
                },
                file:{
                required: "Please upload an image for your blog",
                accept: "Please upload a valid image"
                },
                authorname :{
                  required: "Please enter your name"
                },
                authoremail:{
                  required: "Please enter your email",
                  email: "Please provide a valid email address"
                }
           },
           
           submitHandler: submitblogForm    
           });  

 function submitblogForm(){
            var form = $('#blog-form')[0];
            var data = new FormData(form);
            
            $.ajax({
                type: 'POST',
                enctype: 'multipart/form-data',
                url: 'pages/publish.php',
                data: data,
                 cache: false,
                 processData: false,  
                 contentType: false, 
                 beforeSend: function(){
                    $("#error").fadeOut();
                    $("#submit").html('<span class="glyphicon glyphicon-transfer"></span>&nbsp; Sending...');
                },
                success: function(response){
                    if (response == "Successfuly published.") {
                           alert("You will now be redirected to your blog");
                            window.location.href= "#/blogshow"; 
                    }
                    else{
                        $("#error").fadeIn(1000, function(){
                            $("#error").html('<div class="alert alert-danger"<span class="glyphicon glyphicon-info-sign"> </span>&nbsp; '+response+' </div>');
                            $("#submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Submit');
                        });
                        
                    }
                }

            });
            return false;
        }
});




    
});
app.controller("blogshowcontroller", function($scope, $http, $routeParams){
    $scope.id = $routeParams.id;
    
});

app.controller("blogsviewcontroller", ["$scope", "$http", "$routeParams", function($scope, $http, $routeParams){
   $scope.id = $routeParams.id;
    $http({
                method: 'GET',
                url: 'pages/blogdetails.php',
                params: {'id': $routeParams.id }
            }).success(function(response){
                $scope.blogdetail = response;
            });

}]);