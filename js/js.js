// JavaScript Document
$(document).ready(function(e) {
    $(".mainmu").mouseover(
		function()
		{
			$(this).children(".mw").stop().show()
		}
	)
	$(".mainmu").mouseout(
		function ()
		{
			$(this).children(".mw").hide()
		}
	)
});
function lo(x)
{
	location.replace(x)
}
function op(x,y,url,body)
{
	$(x).fadeIn()
	$("body").css("overflow","hidden")
	if(y)
	$(y).fadeIn()
	if(y&&url)
	$(y).load(url)
	
}
function cl(x)
{
	$(x).fadeOut();
	$("body").css("overflow","auto")
}