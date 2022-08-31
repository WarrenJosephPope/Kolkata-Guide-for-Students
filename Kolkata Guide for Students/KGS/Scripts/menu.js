function open_menu(){
	document.getElementById("toggle").style.display="none";
	document.getElementById("menu").style.display="block";
	var pos=-80;
	var col = 0.0;
	var id = setInterval(frame, 1);
	function frame(){
		if(pos==0)
			clearInterval(id);
		else{
			pos++;
			if(pos%10==0)
				col = col+0.05;
			document.getElementById("main_menu").style.left = pos+"%";
			document.getElementById("menu").style.backgroundColor = "rgba(0, 0, 0, "+col+")"
		}
	}
}

function close_menu(){
	var id = setInterval(frame, 1);
	var pos = 0;
	var col = 0.4;
	function frame(){
		if(pos==-80){
			document.getElementById("menu").style.display = "none";
			document.getElementById("toggle").style.display = "block";
			clearInterval(id);
		}
		else{
			pos--;
			if(pos%10==0)
				col = col-0.05;
			document.getElementById("main_menu").style.left = pos+"%";
			document.getElementById("menu").style.backgroundColor = "rgba(0, 0, 0, "+col+")"
		}
	}
}