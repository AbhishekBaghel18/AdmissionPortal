var mongoose=require("mongoose");
var Schema=mongoose.Schema();
var Letsenrol_Schema= new mongoose.Schema({
	rank:{
		type:Number

	},
	cid:{
		type:Number
	},
	cnm:{
		type:String
	},
	cst:{
		type:String
	},
	clc:{
		type:String
	},
	ci:{
		type:Number
	},
	si:{
		type:Number
	},
	eyr:{
		type:Number
	},
	car:{
		type:Number
	},
	ctp:{
		type:String
	},
	nac:{
		type:String
	},
	nba:{
		type:String
	},
	log:{
		type:String
	},
	des:{
		type:String
	},
	slug:{
		type:String
	},
	prt:{
		type:Boolean
	},
	tpi:{
		type:Number
	},
	snm:{
		type:String
	}
});

var Letsenrol=mongoose.model('partner_colleges',Letsenrol_Schema);
module.exports=Letsenrol;