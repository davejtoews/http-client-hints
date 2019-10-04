<!doctype html>
<title>HTTP Client Hints</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
html { font: 300 100%/1.5 "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; }
body { /*margin: 0 auto; max-width: 40em; padding: 0 .5em;*/ }
img { max-width: 100%; }
</style>
<?php if (!isset($_COOKIE['CH'])) print(
	'<script>'.
	'document.cookie="'.
		'CH='.
			'dh="+screen.height+",'.
			'dpr="+(window.devicePixelRatio||1)+",'.
			'dw="+screen.width+",'.
			'vw="+window.innerWidth+",' .
			't="+("ontouchstart"in window||"msMaxTouchPoints"in navigator)+"'.
		';'.
		'expires=Fri, 31 Dec 9999 23:59:59 GMT;'.
		'path=/"'.
	'</script>'
); ?>

<h1>Client Hints</h1>

<p><img src="image/kitten.jpg" alt="Kitten" id="image"></p>

<p>
	This device received a <span id="resolution"></span> image.
</p>

<script>
window.onload = function () {
	var
	image = document.getElementById('image'),
	resolution = document.getElementById('resolution');

	resolution.appendChild(document.createTextNode(image.naturalWidth + 'x' + image.naturalHeight));
};
</script>