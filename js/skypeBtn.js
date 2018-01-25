;(function(){	
	var skypeBtn = document.getElementsByClassName("skypeBtn");
	for (var i = skypeBtn.length - 1; i >= 0; i--) {
		skypeBtn[i].onclick = function(){
				document.querySelector(".skypeBtnFromSkype").click();
		}
	}
}());
