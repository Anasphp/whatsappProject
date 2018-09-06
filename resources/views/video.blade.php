<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
<meta name="mobile-web-app-capable" content="yes">
<meta id="theme-color" name="theme-color" content="#fff">
<base target="_blank">
<title>Video Recording</title>
<link rel="stylesheet" href="{{ asset('/video/css/main.css') }}" />
<style>
a#downloadLink {
	display: block;
	margin: 0 0 1em 0;
	min-height: 1.2em;
}
p#data {
	min-height: 6em;
}
</style>
</head>
<body>
<div id="container">
<div style = "text-align:center;">
	<h1>Video Recorder</h1>
	<video controls autoplay></video><br>
	<button id="rec" onclick="onBtnRecordClicked()">Record</button>
	<button id="pauseRes"   onclick="onPauseResumeClicked()" disabled>Pause</button>
	<button id="stop"  onclick="onBtnStopClicked()" disabled>Stop</button>
 </div>
<a id="downloadLink" download="mediarecorder.webm" name="mediarecorder.webm" href></a>
<p id="data"></p>
<script src="{{ asset('/video/js/main.js') }}"></script>
</div>
</body>
</html>
