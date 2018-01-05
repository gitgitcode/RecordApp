<!DOCTYPE html>
<html>
<head>
	<script src="./source/jquery_3.2.js"></script> 
	<title>recod</title>
</head>
	
<body>
	<div id="recod" style="background: red;width: 90px;height: 90px">
		start
	</div>
</body>

<script type="text/javascript">

$('#recod').click(function(){
	navigator.getUserMedia  = navigator.getUserMedia ||
                          navigator.webkitGetUserMedia ||
                          navigator.mozGetUserMedia ||
                          navigator.msGetUserMedia;

if (navigator.getUserMedia) {
    // 支持
    alert(99)
} else {
    // 不支持
     alert(88)
}
})


</script>
</html>
