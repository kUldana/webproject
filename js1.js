function clickMe(image){
	document.getElementById('i1').src=image;
}
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});