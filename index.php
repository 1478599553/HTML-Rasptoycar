<!DOCTYPE html> 
<html>
<head>

<metacharset="utf-8">
<style>
body
{
	background-color:#b0c4de;
}
</style>

</head> 
<script src="jquery-3.5.1.js"></script>
<body> 

<script type="text/javascript" language=JavaScript charset="UTF-8">
      document.onkeydown=function(event){
            var e = event || window.event || arguments.callee.caller.arguments[0];
            if(e && e.keyCode==87){ // 按 w
                window.location.href="writer^.php";
              }
            if(e && e.keyCode==65){ // 按 a
                 window.location.href="writer<.php";
               }
            if(e && e.keyCode==83){ // 按 s
                 window.location.href="writerv.php";
            }
	    if(e && e.keyCode==68){ // 按 d
                 window.location.href="writer>.php";
            }
        };
</script>

<style>
.center
{
	text-align:center;
}
.left {
    float: left;
    width: 300px;
    padding: 10px;
}
.right {
    float: right;
    width: 300px;
    padding: 10px;
}
.buttom {
    text-align:center;
    width: 300px;
    padding: 10px;
}
</style>

<div class="center">
<iframe src="http://127.0.0.1:8081"width="650"height="480">
</iframe>
</div>

<div class="center">
<a href="writer^.php"><button>^</button></a> <!写入1>
</div>

<div class="left">
<a href="writer<.php"><button><</button></a> <!写入2>
</div>

<div class="right">
<a href="writer>.php"><button>></button></a> <!写入3>
</div>

<div class="center">
<a href="writerv.php"><button>v</button></a> <!写入4>
</div>

</body> 
</html>
