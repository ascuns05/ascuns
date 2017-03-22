var color = 180;
var item = 1; 
function backgroundColor(_class){
	//1
	if (item == 1) {
	rgb = 'rgb(' + 255 + ',' + 180 + ',' + color + ')';
	$(_class).css({"background-color" : rgb});	
	color = color + 1;
	if (color == 255) {
			item++;
		}
    }
    //2
    if (item == 2) {
    rgb = 'rgb(' + color + ',' + 180 + ',' + 255 + ')';
	$(_class).css({"background-color" : rgb});	
	color = color - 1;
	if (color == 180) {
			item++;
		}
    }
    //3
    if (item == 3) {
	rgb = 'rgb(' + 180 + ',' + color + ',' + 255 + ')';
	$(_class).css({"background-color" : rgb});	
	color = color + 1;
	if (color == 255) {
			item++;
		}
    }
    //4
    if (item == 4) {
    rgb = 'rgb(' + 180 + ',' + 255 + ',' + color + ')';
	$(_class).css({"background-color" : rgb});	
	color = color - 1;
	if (color == 180) {
		color = 255;
			item++;
		}
    }
    //5
    if (item == 5) {
	rgb = 'rgb(' + 180 + ',' + 255 + ',' + color + ')';
	$(_class).css({"background-color" : rgb});	
	color = color - 1;
	if (color == 180) {
			item++;
		}
    }    
    //6
    if (item == 6) {
	rgb = 'rgb(' + color + ',' + 255 + ',' + 180 + ')';
	$(_class).css({"background-color" : rgb});	
	color = color + 1;
	if (color == 255) {
			item++;
		}
    }
    //7
    if (item == 7) {
	rgb = 'rgb(' + 255 + ',' + color + ',' + 180 + ')';
	$(_class).css({"background-color" : rgb});	
	color = color - 1;
	if (color == 180) {
			color = 180;
			item = 1;
		}
    }  

}