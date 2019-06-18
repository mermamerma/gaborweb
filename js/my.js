// JavaScript Document

function quitoImg (obj){
	var idImg = obj.id ;
	var idImg2 = obj.id+'-2' ;
	$('#'+idImg).hide();
	$('#'+idImg+'-2').show();	
}

function pongoImg (obj){
	var id   	= obj.id ;
	var size 	= id.length;
	var poner	= id.substring(0,size - 2) 
	console.log(poner);
	var idImg2  = obj.id+'-2' ;	
	$('#'+id).hide();
	$('#'+poner).show();
	//setTimeout(function(){ $('#imgCaucho').show(); }, 2000);
}

function test (obj) {
	$('#imgCaucho').hide();
	setTimeout(function(){ $('#imgCaucho').show(); }, 2000);
	
}