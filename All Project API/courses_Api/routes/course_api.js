var express=require("express");
var router=express.Router();
var Portal=require("../models/course.js");

//get a list of  courses

router.get("/course",function(req,res)
{
	Portal.find({},function(err,data)
		{
          if(err) throw err;
		}).then(function(data)
		{
			res.send(data);
		});
		

});

//add course in 	database

router.post("/course",function(req,res)
{
  Portal.create(req.body).then(function(data)
  {
  	res.send(data);
  });
});
//delete data from database
router.delete("/course/:id",function(req,res,next)
  {
     Portal.findByIdAndRemove({_id:req.params.id}).then(function(data)
     {
     	res.send(data);
     	
     });
     
  });
  router.put("/states/:id",function(req,res,next)
  {
     Portal.findByIdAndUpdate({_id:req.params.id},req.body).then(function(states)
     {
        Letsenrol.findOne({_id:req.params.id}).then(function(data)
        {
                res.send(data);
        });
      
      
     });
     
  });

module.exports=router;