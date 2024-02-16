<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Justin Clark Ong">
		<meta name="description" content="What does the cow say?">
		<title>&#128004;&#128172;</title>
		<link href="favicon.ico" rel=icon>
	</head>
	<body>
		<textarea placeholder="Moo!" id="input"></textarea>
		<input onclick="cow.say()" id="say" type="button" value="Say"/>
<pre style="margin: auto;">
 ______
&lt; <span id="output"></span> &gt;
 ------
        \   ^__^
         \  (oo)\_______
            (__)\       )\/\
                ||----w |
                ||     ||
</pre>
		<script type="module">
			import {cow} from "./js/cowsay.js";
			cow.say();
		</script>
		<script type="text/javascript">
		</script>
	</body>
</html>
