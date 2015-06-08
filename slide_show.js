var cap = function(id) {
	return document.getElementById(id);
}

window.onload = function() {
	var listNode = cap("image_list");
	var captionNode = cap("caption");
	var imageNode = cap("image");

	var links = listNode.getElementsByTagName("a");

	// Process image links
	var i, linkNode, image;
	var imageCache = [];
	for (i = 0; i < links.length; i++) {
		linkNode = links[i];

		// Preload image and copy title properties
		image = new Image();
		image.src = linkNode.getAttribute("href");
		image.title = linkNode.getAttribute("title");
		imageCache.push(image);
	}

	// Start slide show
	var imageCounter = 0;
	var timer = setInterval(function() {
		imageCounter = (imageCounter + 1) % imageCache.length;
		image = imageCache[imageCounter];
		imageNode.src = image.src;
		captionNode.firstChild.nodeValue = image.title;
	}, 2000);
}

$(document).ready(function() {
	cap("#caption").toggle(function() {
	}, function() {
		cap("#caption").css({
			"color" : "purple"
		});
	}, function() {
		cap("#caption").css({
			"color" : "red"
		});
	}, function() {
		cap("#caption").css({
			"color" : "blue"
		});
	}, function() {
		cap("#caption").css({
			"color" : "orange"
		});
	});
});