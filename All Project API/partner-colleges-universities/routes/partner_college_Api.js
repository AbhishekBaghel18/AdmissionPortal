var express=require("express");
var router=express.Router();
var MongoClient = require('mongodb').MongoClient;
var url = "mongodb://127.0.0.1:27017/Admission_portal";
var Letsenrol=require("../models/partner_college.js");

//get a list of approval college

router.get("/partner_college",function(req,res)
{
   
  Letsenrol.find({},function(err,data)
    {
          if(err) throw err;
    }).then(function(data)
    {
      res.send(data);
    });
    

});
/*
router.get("/filter_college",function(req,res)
{
  MongoClient.connect(url, function(err, db) {
  if (err) throw err;
  db.collection('partner_colleges').aggregate([
 {
    $lookup:
 {
    from:"collegedetails",
  localField:"cid",
   foreignField:"college_id",
   as:"Related_field"
 }
 }
 ],function(err, res) {
    if (err) throw err;
    console.log(JSON.stringify(res));
    db.close();
  });
});
   /* console.log(req.query.fstate);
    console.log(req.query.ftype);
    
   /*if(req.query.fstate==!undefined||req.query.ftype==!undefined)*/
  /*
  Letsenrol.find({"si":req.query.fstate},function(err,data)
    {
          if(err) throw err;
    }).then(function(data)
    {
      res.send(data);
    });


    /*
else
{
  Letsenrol.find({},function(err,data)
    {
          if(err) throw err;
    }).then(function(data)
    {
      res.send(data);
    });
}
   

});

*/

//add approval college in   database

router.post("/partner_college",function(req,res)
{
  Letsenrol.create(req.body).then(function(college)
  {
    res.send(college);
  });
});
//delete data from database
router.delete("/partner_college/:id",function(req,res,next)
  {
     Letsenrol.findByIdAndRemove({_id:req.params.id}).then(function(college)
     {
      res.send(college);
      
     });
     
  });
  router.put("/partner_college/:id",function(req,res,next)
  {
     Letsenrol.findByIdAndUpdate({_id:req.params.id},req.body).then(function(college)
     {
        Letsenrol.findOne({_id:req.params.id}).then(function(college)
        {
                res.send(college);
        });
      
      
     });
     
  });

module.exports=router;