$(document).ready(function(){
	new AnimOnScroll( document.getElementById( 'grid' ), {
		minDuration : 0.9,
		maxDuration : 0.15,
		viewportFactor : 0.2
	});
});
$(document).ready(function(){
	$('.carousel').carousel({
		   interval: 10000     
	  });
	  
	$("nav ul li a, a.send-mail").click(function(event){

		event.preventDefault();
		var full_url = this.href;
		var parts = full_url.split("#");
		var trgt = parts[1];
		var target_offset = $("#"+trgt).offset();
		var target_top = target_offset.top;

		$('html,body').animate({scrollTop:target_top -80}, 800);
	});
	
	$(".form1").validate({
		rules:{ 
			 firstname:{
				 required: true,
				 minlength :2
			 },
			 lastname:{
				 required: true,
				 minlength :2
			 },
			 email:{
				 required: true,
				 email: true
			 },
			 text:{
				 required: true,
				 minlength :2
			 },
			 phone:{
				required: true,
				digits: true,
				minlength :7
			 }
		}

	 });
	 $(".form2").validate({
		rules:{ 
			 firstname1:{
				 required: true,
				 minlength :2
			 },
			 lastname1:{
				 required: true,
				 minlength :2
			 },
			 email1:{
				 required: true,
				 email: true
			 },
			 text1:{
				 required: true,
				 minlength :2
			 },
			 phone1:{
				required: true,
				digits: true,
				minlength :7
			 }
		}

	 });
});

$(window).load(function(){
  $("header").sticky({ topSpacing: 0 });
});
          