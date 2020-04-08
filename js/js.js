$(document).ready(function () {
	var id = ["1415", "1516", "1617","1819","1920"];
	var years=["2014 - 2015","2015 - 2016","2016 - 2017","2018 - 2019","2019 - 2020"];
    var current = "4";
	$("#year").text(years[current]);
	$("#"+id[current]).addClass("fade_in");

	$( ".ttl_left_arw" ).click(function() {
	   if(current > 0){
	   	    $("#"+id[current]).removeClass("fade_in");
			$("#"+id[current]).addClass("fade_out");
		    current = current -1;
		    setTimeout(function(){
			    $("#year").text(years[current]);
			    $("#"+id[current]).addClass("fade_in");
			}, 500);
		 }
	});
	$( ".ttl_right_arw" ).click(function() {
	   if(current < 4){
	   	    $("#"+id[current]).removeClass("fade_in");
			$("#"+id[current]).addClass("fade_out");
		    current = current + 1;
		    setTimeout(function(){
			    $("#year").text(years[current]);
			    $("#"+id[current]).addClass("fade_in");
			}, 500);
		 }
	});
});