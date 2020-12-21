<?php 
include_once '../../inc/config.inc.php';
include_once '../../inc/mysql.inc.php';
include_once '../../inc/tool.inc.php';
$style=<<<A
<style>
body,div,ul,ol,li,dl,dt,dd,h1,h2,h3,h4,h5,h6,form,input,textarea,p {
	margin:0px;
	padding:0px;
	font-size:13px;
	font-family:Tahoma;
}
ul {
	list-style:none;
}
img,a img {
	border:none;
}
a {
	text-decoration:none;
}
a:hover {
	text-decoration:underline;
}
.notice {
	background: none repeat scroll 0 0 #fff;
    border:1px solid #e4e4e4;
    color: #666;
    margin:10px 0;
    padding:20px;
    text-align:center;
}
.notice .pic {
	width:16px;
	height:16px;
	display:inline-block;
	vertical-align:middle;
}
.notice .ok {
	background:url(../../style/small.png) -40px -20px no-repeat;
}
.notice .error {
	background:url(../../style/small.png) -20px -40px no-repeat;
}
.notice .attention {
	background:url(../../style/small.png) 0 -60px no-repeat;
}
.notice .ask {
	background:url(../../style/small.png) -60px 0px no-repeat;
}
</style>
A;
echo $style;
  skip('../../home/start.php','attention','您还未登录，请回原页面登录');
?>