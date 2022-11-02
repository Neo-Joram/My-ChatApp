click = false;
function emojis(){
	if(click == false){
		document.getElementsByClassName("emo-section")[0].style.display = "block";
		document.getElementsByClassName("chat-box")[0].style.height = "37vh";
		if(window.innerWidth < 500){
			document.getElementsByClassName("chat-box")[0].style.height = "43vh";
		}
				click = true;
	}else{
		document.getElementsByClassName("emo-section")[0].style.display = "none";
		document.getElementsByClassName("chat-box")[0].style.height = "70vh";
		click = false;
	}
}
click = false;
function hide_emo(){
	if(click == false){
		document.getElementsByClassName("emo-section")[0].style.display = "none";
		document.getElementsByClassName("chat-box")[0].style.height = "70vh";
		click = true;
	}else{
		document.getElementsByClassName("emo-section")[0].style.display = "none";
		document.getElementsByClassName("chat-box")[0].style.height = "70vh";
		click = false;
	}
}

function smile(smile){
			document.getElementById("mytextarea").value += document.getElementById(smile).innerHTML;
		}
		
		click = false;
		function humans(){
			if(click == false){
				document.getElementsByClassName("humans")[0].style.display = "block";
				click = true;
			}else{
				document.getElementsByClassName("humans")[0].style.display = "block";
				document.getElementsByClassName("meal")[0].style.display = "block";
				document.getElementsByClassName("animals")[0].style.display = "block";
				document.getElementsByClassName("vehicles")[0].style.display = "block";
				document.getElementsByClassName("sports")[0].style.display = "block";
				document.getElementsByClassName("electronix")[0].style.display = "block";
				document.getElementsByClassName("hearts")[0].style.display = "block";
				document.getElementsByClassName("nature")[0].style.display = "block";
		click = false;
			}
		}
		click = false;
		function meal(){
			if(click == false){
				document.getElementsByClassName("humans")[0].style.display = "none";
				document.getElementsByClassName("meal")[0].style.display = "block";
				click = true;
			}else{
				document.getElementsByClassName("humans")[0].style.display = "none";
				document.getElementsByClassName("meal")[0].style.display = "block";
				document.getElementsByClassName("animals")[0].style.display = "block";
				document.getElementsByClassName("vehicles")[0].style.display = "block";
				document.getElementsByClassName("sports")[0].style.display = "block";
				document.getElementsByClassName("electronix")[0].style.display = "block";
				document.getElementsByClassName("hearts")[0].style.display = "block";
				document.getElementsByClassName("nature")[0].style.display = "block";
		click = false;
			}
		}
		click = false;
		function animals(){
			if(click == false){
				document.getElementsByClassName("humans")[0].style.display = "none";
				document.getElementsByClassName("meal")[0].style.display = "none";
				document.getElementsByClassName("animals")[0].style.display = "block";
				click = true;
			}else{
				document.getElementsByClassName("humans")[0].style.display = "none";
				document.getElementsByClassName("meal")[0].style.display = "none";
				document.getElementsByClassName("animals")[0].style.display = "block";
				document.getElementsByClassName("vehicles")[0].style.display = "block";
				document.getElementsByClassName("sports")[0].style.display = "block";
				document.getElementsByClassName("electronix")[0].style.display = "block";
				document.getElementsByClassName("hearts")[0].style.display = "block";
				document.getElementsByClassName("nature")[0].style.display = "block";
		click = false;
			}
		}
		click = false;
		function vehicles(){
			if(click == false){
				document.getElementsByClassName("humans")[0].style.display = "none";
				document.getElementsByClassName("meal")[0].style.display = "none";
				document.getElementsByClassName("animals")[0].style.display = "none";
				document.getElementsByClassName("vehicles")[0].style.display = "block";
				click = true;
			}else{
				document.getElementsByClassName("humans")[0].style.display = "none";
				document.getElementsByClassName("meal")[0].style.display = "none";
				document.getElementsByClassName("animals")[0].style.display = "none";
				document.getElementsByClassName("vehicles")[0].style.display = "block";
				document.getElementsByClassName("sports")[0].style.display = "block";
				document.getElementsByClassName("electronix")[0].style.display = "block";
				document.getElementsByClassName("hearts")[0].style.display = "block";
				document.getElementsByClassName("nature")[0].style.display = "block";
		click = false;
			}
		}
		click = false;
		function sports(){
			if(click == false){
				document.getElementsByClassName("humans")[0].style.display = "none";
				document.getElementsByClassName("meal")[0].style.display = "none";
				document.getElementsByClassName("animals")[0].style.display = "none";
				document.getElementsByClassName("vehicles")[0].style.display = "none";
				document.getElementsByClassName("sports")[0].style.display = "block";
				click = true;
			}else{
				document.getElementsByClassName("humans")[0].style.display = "none";
				document.getElementsByClassName("meal")[0].style.display = "none";
				document.getElementsByClassName("animals")[0].style.display = "none";
				document.getElementsByClassName("vehicles")[0].style.display = "none";
				document.getElementsByClassName("sports")[0].style.display = "block";
				document.getElementsByClassName("electronix")[0].style.display = "block";
				document.getElementsByClassName("hearts")[0].style.display = "block";
				document.getElementsByClassName("nature")[0].style.display = "block";
		click = false;
			}
		}
		click = false;
		function electronix(){
			if(click == false){
				document.getElementsByClassName("humans")[0].style.display = "none";
				document.getElementsByClassName("meal")[0].style.display = "none";
				document.getElementsByClassName("animals")[0].style.display = "none";
				document.getElementsByClassName("vehicles")[0].style.display = "none";
				document.getElementsByClassName("sports")[0].style.display = "none";
				document.getElementsByClassName("electronix")[0].style.display = "block";
				click = true;
			}else{
				document.getElementsByClassName("humans")[0].style.display = "none";
				document.getElementsByClassName("meal")[0].style.display = "none";
				document.getElementsByClassName("animals")[0].style.display = "none";
				document.getElementsByClassName("vehicles")[0].style.display = "none";
				document.getElementsByClassName("sports")[0].style.display = "none";
				document.getElementsByClassName("electronix")[0].style.display = "block";
				document.getElementsByClassName("hearts")[0].style.display = "block";
				document.getElementsByClassName("nature")[0].style.display = "block";
		click = false;
			}
		}
		click = false;
		function hearts(){
			if(click == false){
				document.getElementsByClassName("humans")[0].style.display = "none";
				document.getElementsByClassName("meal")[0].style.display = "none";
				document.getElementsByClassName("animals")[0].style.display = "none";
				document.getElementsByClassName("vehicles")[0].style.display = "none";
				document.getElementsByClassName("sports")[0].style.display = "none";
				document.getElementsByClassName("electronix")[0].style.display = "none";
				document.getElementsByClassName("hearts")[0].style.display = "block";
				click = true;
			}else{
				document.getElementsByClassName("humans")[0].style.display = "none";
				document.getElementsByClassName("meal")[0].style.display = "none";
				document.getElementsByClassName("animals")[0].style.display = "none";
				document.getElementsByClassName("vehicles")[0].style.display = "none";
				document.getElementsByClassName("sports")[0].style.display = "none";
				document.getElementsByClassName("electronix")[0].style.display = "none";
				document.getElementsByClassName("hearts")[0].style.display = "block";
				document.getElementsByClassName("nature")[0].style.display = "block";
		click = false;
			}
		}
		click = false;
		function nature(){
			if(click == false){
				document.getElementsByClassName("humans")[0].style.display = "none";
				document.getElementsByClassName("meal")[0].style.display = "none";
				document.getElementsByClassName("animals")[0].style.display = "none";
				document.getElementsByClassName("vehicles")[0].style.display = "none";
				document.getElementsByClassName("sports")[0].style.display = "none";
				document.getElementsByClassName("electronix")[0].style.display = "none";
				document.getElementsByClassName("hearts")[0].style.display = "none";
				document.getElementsByClassName("nature")[0].style.display = "block";
				click = true;
			}else{
				document.getElementsByClassName("humans")[0].style.display = "none";
				document.getElementsByClassName("meal")[0].style.display = "none";
				document.getElementsByClassName("animals")[0].style.display = "none";
				document.getElementsByClassName("vehicles")[0].style.display = "none";
				document.getElementsByClassName("sports")[0].style.display = "none";
				document.getElementsByClassName("electronix")[0].style.display = "none";
				document.getElementsByClassName("hearts")[0].style.display = "none";
				document.getElementsByClassName("nature")[0].style.display = "block";
		click = false;
			}
		}