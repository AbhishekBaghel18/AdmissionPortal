var express=require("express");
var router=express.Router();
var Portal=require("../models/college_details.js");

//get a list of collegedetails

router.get("/collegedetails/:id/:slug",function(req,res)
{
	Portal.find({'college_id':req.params.id,'slug':req.params.slug},function(err,data)
		{
          if(err) throw err;
		}).then(function(data)
		{
			res.send(data);
		});
		

});

//add college details in 	database

router.post("/collegedetails",function(req,res)
{
  Portal.create(req.body).then(function(data)
  {
  	res.send(data);
  });
});
//delete data from database
router.delete("/collegedetails/:id",function(req,res,next)
  {
     Portal.findByIdAndRemove({_id:req.params.id}).then(function(data)
     {
     	res.send(data);
     	
     });
     
  });
  router.put("/collegedetails/:id",function(req,res,next)
  {
     Portal.findByIdAndUpdate({_id:req.params.id},req.body).then(function(states)
     {
        Portal.findOne({_id:req.params.id}).then(function(data)
        {
                res.send(data);
        });
      
      
     });
     
  });

module.exports=router;