  <div class="row" >

      <div id="slides_control">
        <div>
          <carousel interval="myInterval">
            <slide ng-repeat="slide in slides" active="slide.active">
              <img id="sliderimg" ng-src="{{slide.image}}" class="img-responsive" style="width: 100%">
              <div class="carousel-caption">
                <h4>Welcome to Admission Portal Blog</h4>
              </div>
            </slide>
          </carousel>
        </div>
      </div>
  </div>
     <br/>
     <br/>
     <br>
   <div class="container">
     <div class="row">
       <div class="col-md-4" ng-repeat="bdata in blogdata">
          <h3> {{bdata.b_title}}</h3> 
         <img ng-src="pages{{bdata.b_image}}" style="width: 250px; height: 150px;">
         <br> <br>
         <a ng-href="#/blogview/{{bdata.b_id}}" class="btn btn-success">View</a>
       </div>
     </div>
   </div>