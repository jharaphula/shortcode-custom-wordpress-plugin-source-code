/*-----------------------------
* i20 Sidebar Widgets JS file
-----------------------------*/
/*number validation*/
function itsw_isNumber(evt) {
	evt = (evt) ? evt : window.event;
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	if (charCode > 31 && (charCode < 48 || charCode > 57)) {
		return false;
	}
	return true;
}

/*input value range*/
function itsw_minmax(value, min, max) 
{
	if(parseInt(value) < min) 
		return min; 
	else if(parseInt(value) > max) 
		return max; 
	else return value;
}