function setTextBlockHeight(){
	var  serviceBlocks = document.getElementsByClassName("JS_serviceBlock"); // получение масиива блоков-родителей

	for (var i = serviceBlocks.length - 1; i >= 0; i--) {	//для каждого блока родителя
		var  parrentBlock = document.getElementsByClassName("JS_serviceBlock"); // получение блока-родителя

		var parrentBlockHeight = getComputedStyle(parrentBlock[i]).height.slice(0, -2); // высота блока-родителя

		var imgMarginBottom = getComputedStyle(parrentBlock[i].querySelector('.imgWrapper')).marginBottom.slice(0, -2); // marginBottom img
		var imgHeight = getComputedStyle(parrentBlock[i].querySelector('.imgWrapper')).height.slice(0, -2); // высота img
		
		var titleMarginBottom = getComputedStyle(parrentBlock[i].querySelector(".title")).marginBottom.slice(0, -2); // marginBottom .title
		var titleHeight = getComputedStyle(parrentBlock[i].querySelector(".title")).height.slice(0, -2); // высота .title

		var textMarginBottom = getComputedStyle(parrentBlock[i].querySelector(".text")).marginBottom.slice(0, -2); // marginBottom .text
		var textHeight = getComputedStyle(parrentBlock[i].querySelector(".text")).height.slice(0, -2); // высота .text
		
		var btnHeight = getComputedStyle(parrentBlock[i].querySelector(".btn")).height.slice(0, -2); // высота .btn

		textBlockHeight = parrentBlock[i].querySelector(".text");
		textBlockHeight.style.height = parrentBlockHeight - imgHeight - imgMarginBottom - titleHeight - titleMarginBottom - textMarginBottom - btnHeight + "px";
	}
}

document.addEventListener("DOMContentLoaded", setTextBlockHeight); // при загрузке дом дерева выполнить функцию
window.onresize = setTextBlockHeight; // при изменении размеров страницы выполнять функцию


