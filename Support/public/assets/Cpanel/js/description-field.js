function get_desc(){
	var edit_area = $('#mce_0_ifr').contents().find("body").html();
	$("#event_des_data").val(edit_area);
}
