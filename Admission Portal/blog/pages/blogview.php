<div class="container">
     <div class="row">
       <div class="col-md-8 col-md-offset-2" ng-repeat="bdata in blogdetail">
          <div class="page-header">
            <center>
              <h2> {{bdata.b_title}}</h2> <br>
              <small>Posted on: {{bdata.b_date}} | By: {{bdata.b_authorname}} | Author email: {{bdata.b_authoremail}} </small>
            </center>
          </div>
          
         <img ng-src="pages{{bdata.b_image}}" class="img-responsive">
         <br>
        <p ng-bind-html="bdata.b_content"> </p>
       </div>
     </div>
   </div>