;(function(){
	var tabs = document.getElementsByClassName("JS_tab");

	for (var i = 0; i <= tabs.length-1 ; i++) {	
		tabs[i].querySelector(".JS_answer").style.display = 'none';
		tabs[i].onclick = function () {
			HideAllTabs(i);
			this.querySelector(".JS_arrow").style.transform = 'rotateZ(180deg)';
			this.querySelector(".JS_answer").style.display = 'block';
		}
	}

	function HideAllTabs(i){
		for (var i = 0; i <= tabs.length-1 ; i++) {
			tabs[i].querySelector(".JS_arrow").style.transform = 'rotateZ(0deg)';
			tabs[i].querySelector(".JS_answer").style.display = 'none';
		}
	};
}());







// ;(function(){
// 	var tabs = document.getElementsByClassName("JS_tab");

// 	for (var i = 0; i <= tabs.length-1 ; i++) {	
// 		tabs[i].querySelector(".JS_answer").style.display = 'none';
// 		tabs[i].onclick = function () {
// 			HideAllTabs(i);	
// 			this.querySelector(".JS_answer").style.display = 'block';
// 		}
// 	}

// 	function HideAllTabs(i){
// 		for (var i = 0; i <= tabs.length-1 ; i++) {
// 			tabs[i].querySelector(".JS_answer").style.display = 'none';
// 		}
// 	};
// }());