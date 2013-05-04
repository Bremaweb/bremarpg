$(document).ready( function () {
$.support.cors = true;
	// attach code to the links
	$(".itemLink").click( function (){
		$("#loading-image").fadeIn(100);
		$("#rental-image").hide();
		$("#rental-info").center();
		$("#rental-info").fadeIn(200);
		$("#rental-image").load("get-image.php .rental-thumbnail > img", { 'href' : $(this).attr("href") }, function ( txt, status, xhr ) {
			// prepend amberg events domain to the image src
			//$("#rental-image > img").attr("src", "http://www.ambergevents.com/" + $("#rental-image > img").attr("src"));
			$("#loading-image").hide();
			$("#rental-image").fadeIn(100);
		});
		return false;
	});

});


jQuery.fn.center = function () {
    this.css("position","absolute");
    this.css("top", Math.max(0, (($(window).height() - this.outerHeight()) / 2) + 
                                                $(window).scrollTop()) + "px");
    this.css("left", Math.max(0, (($(window).width() - this.outerWidth()) / 2) + 
                                                $(window).scrollLeft()) + "px");
    return this;
}

function closeWindow(){
	$("#rental-info").fadeOut(200);
	$("#loading-image").fadeIn(100);
	$("#rental-image").hide();
}