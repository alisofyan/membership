//kalo lewat HP (876px) nanti responsive

$(window).bind("load resize",function(){
	if ($(this).width() < 786) {
		$(".sidebar-collapse").addClass("collapse");
	}
	else
	{
		$(".sidebar-collapse").removeClass("collapse");

	}

})