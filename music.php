<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="CSS/design.css">
</head>
<body>

	<h1>MUSIC PLAYER</h1>
<script type="text/javascript">
 $(document).ready(function(){
  $("#jquery_jplayer_1").jPlayer({
   ready: function () {
    $(this).jPlayer("setMedia", {
     m4a: "/media/mysound.mp4",
     oga: "/media/mysound.ogg"
    });
   },
   swfPath: "/js",
   supplied: "m4a, oga"
  });
 });
</script>
<div id="jquery_jplayer_1"></div>
<div id="jp_container_1">
 <a href="https://youtu.be/NZ-JgoftTTY" class="jp-play">Play</a>
 <a href="#" class="jp-pause">Pause</a>
</div>
</body>
</html>