var value1 = 1;
;(function(){
	var btnCloseMenu = document.querySelector(".JS_BtnCloseLeftMenu");
	var btnShowMenu = document.querySelector(".JS_BtnShowLeftMenu");
	var LeftMenu = document.querySelector(".JS_LeftMenu");
	var DarkBk = document.querySelector(".JS_DarkBk");

	var value = 1;

	function ShowHideMenu() {
		if(value == 0){
			DarkBk.style.display = 'block';
			setTimeout(function(){
				DarkBk.style.backgroundColor = 'rgba(0,0,0,.55)';
				LeftMenu.style.left = "0px";
			}, 0);
			value = 1;
		} else {
			LeftMenu.style.left = "-300px";
			DarkBk.style.backgroundColor = 'rgba(0,0,0,.0)';
			setTimeout(function(){
				DarkBk.style.display = 'none';
			}, 500);
			value = 0;
		}
	}

	ShowHideMenu();

	btnCloseMenu.onclick = ShowHideMenu;
	btnShowMenu.onclick = ShowHideMenu;
}());