$(document).ready(function(){

	$("#next-1").click(function(){
		$("#second").show();
		$("#first").hide();
		$("#third").hide();
		$("#forth").hide();
		$("#ProgressBar").css("width","40%");
		$("#ProgressText").html("Step-2");
	});
	$("#next-2").click(function(){
		$("#third").show();
		$("#second").hide();
		$("#forth").hide();
		$("#ProgressBar").css("width","65%");
		$("#ProgressText").html("Step-3");
	});
	$("#prev-2").click(function(){
		$("#first").show();
		$("#second").hide();
		$("#forth").hide();
		$("#ProgressBar").css("width","30%");
		$("#ProgressText").html("Step-1");
	}); 
	$("#next-3").click(function(){
		$("#forth").show();
		$("#third").hide();
		$("#ProgressBar").css("width","100%");
		$("#ProgressText").html("Step-4");
	});
	$("#prev-3").click(function(){
		$("#second").show();
		$("#third").hide();
		$("#forth").hide();
		$("#ProgressBar").css("width","40%");
		$("#ProgressText").html("Step-2");
	});
	$("#prev-4").click(function(){
		$("#third").show();
		$("#forth").hide();
		$("#ProgressBar").css("width","65%");
		$("#ProgressText").html("Step-3");
	});
	$("#submit").click(function(){
	   alert("Thank you for submiting your application you will be notified after approval.");
	});

  });

  function triggerClick(){
	document.querySelector('#ProfileImage').click();
	}
   function DisplayImage(e) {
	  if(e.files[0]){
		var reader =new FileReader();   
		reader.onload = function(e){
			document.querySelector('#ProfileDisplay').setAttribute('src',e.target.result);
		}
		reader.readAsDataURL(e.files[0]);
	}
}