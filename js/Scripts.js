$(document).ready(function(){
	$('#port .parallax-layer').plaxify();
    $.plax.enable();
	/*$(".parallax-layer").parallax({
		decay: 0.8,
		xorigin: "center",
		yorigin: "center"
	});*/
	
	$("img").mouseover(flip).mouseout(flip);
	$("#Btn_Facebook").mouseover(tip).mouseout(tip);
	$("#Btn_Invite").parent().click(signup);
	$("#Btn_Facebook").parent().click(fbauth);
	$("#Btn_Email").click(openEmail);
	$("#Btn_X").parent().click(closeEmail);
	$("input[type=text]").focus(focused).blur(blured);
	
//	init();
});

var sharetext = "Rel8. it's awsome! Come and rel8";

function init2() {
	for (i=0;i<$(".parallax-layer").length;i++) {
		var el = $(".parallax-layer").eq(i);
		el.data("to",Math.random(10)/10+8);
		el.data("dir",Math.random(1)<0.5?1:-1);
		el.css("opacity",(Math.random(10)+9)/10);
	}
}
function init() {
	var dir = 1;
	for (i=0;i<$(".parallax-layer").length;i++) {
		animate($(".parallax-layer")[i],dir);
		dir = dir==1?-1:1;
	}
}
function animate(obj,dir) {
	var x = parseInt(obj.style.marginLeft);
	if (x == "") x = 0;
	var d = 10*dir//parseInt(Math.random()*10+20)*dir;
	var t = Math.random()*4;
	var t1 = new Tween(obj.style,'margin-left',Tween.regularEaseIn,x,x+d,t,'px');
	t1.onMotionFinished = function() { animate(obj,dir==1?-1:1); };
	t1.start();
}

function restart2(el) {
	var to = Math.random(2)/10+0.8;
	el.data("to",to);
	var opacity = parseFloat(el.css("opacity"));
	if (opacity < to) el.data("dir",1);
	else el.data("dir",-1);
}
function animate2() {
	for (i=0;i<$(".parallax-layer").length;i++) {
		var el = $(".parallax-layer").eq(i);
		var opacity = parseFloat(el.css("opacity")); //.replace("px","")
		opacity += 0.01*el.data("dir");
		el.css("opacity",opacity);
		if (el.data("dir") == 1 && opacity >= el.data("to")) restart(el);
		else if (el.data("dir") == -1 && opacity <= el.data("to")) restart(el);
	}
}
function flip() {
	var src = $(this).attr("src");
	if (src.indexOf("_Off") != -1) $(this).attr("src",src.replace("_Off","_On"));
	else $(this).attr("src",src.replace("_On","_Off"));
}
function tip(e) {
	if (e.type == "mouseout") $("#Tip").stop().fadeOut();
	else $("#Tip").stop().fadeIn();
}
function openEmail() {
//	$("#Btn_Email").fadeOut();
	$("#Win_Email").fadeIn();
	return false;
}
function closeEmail() {
//	$("#Btn_Email").fadeIn();
	$("#Win_Email").fadeOut();
	return false;
}
function fbauth() {
	FB.login(function(response) {
	   if (response.authResponse) {
	   accessToken = response.authResponse.accessToken;
	   //console.log(response);
	     FB.api('/me', function(response) {
		   $("#tb_email").val(response.email);
		   //$("#tb_email").trigger("focus");
//		   focused();
//console.log(response);
		   $.post("proxy.php?service=rel8",{id:response.id,token:accessToken});
		   signup();
	     });
	   }
	 }, {scope: 'email'});
}
function signup() {
	var email = $("#tb_email").val();
	$.post("proxy.php?service=prefinery",{email:email},function(share_link) {
		$("#SLink").attr("href",share_link);
		$("#SLink").text(share_link);
		$("#SGoogle").attr("href","https://plus.google.com/share?url="+share_link);
		$("#SLinkedin").attr("href","http://www.linkedin.com/shareArticle?url="+share_link+"&title="+sharetext);
		$("#SFacebook").attr("href","http://www.facebook.com/sharer.php?t="+sharetext+"&u="+share_link);
		$("#STwitter").attr("href","https://twitter.com/share?text="+sharetext+"&url="+share_link);
		
		$("#Welcome").fadeOut("fast",function(){
			$("#Thanks").fadeIn("slow");
		});
	});
}
var emailField = "Your email here";
function focused() {
	if ($(this).val() == emailField) $(this).val("");
	else if ($(this).val() == "") $(this).val(emailField);
	$(this).addClass("focused");
}

function blured() {
	if ($(this).val() == "" || $(this).val() == emailField) {
		$(this).val(emailField);
		$(this).removeClass("focused");
	}
}