<html>
    <head>
        <style type="text/css">
body{
    width:100%;
    text-align:center;
}
img{
    border:0;
}
#main{
    margin: 15px auto;
    background:white;
    overflow: auto;
	width: 100%;
}
#header{
    background:white;
    margin-bottom:15px;
}
#mainbody{
    background: white;
    width:100%;
	display:none;
}
#footer{
    background:white;
}
#v{
    width:320px;
    height:240px;
}
#qr-canvas{
    display:none;
}
#qrfile{
    width:320px;
    height:240px;
}
#mp1{
    text-align:center;
    font-size:35px;
}
#imghelp{
    position:relative;
    left:0px;
    top:-160px;
    z-index:100;
    font:18px arial,sans-serif;
    background:#f0f0f0;
	margin-left:35px;
	margin-right:35px;
	padding-top:10px;
	padding-bottom:10px;
	border-radius:20px;
}
.selector{
    margin:0;
    padding:0;
    cursor:pointer;
    margin-bottom:-5px;
}
#outdiv
{
    width:320px;
    height:240px;
	border: solid;
	border-width: 3px 3px 3px 3px;
}
#result{
    border: solid;
	border-width: 1px 1px 1px 1px;
	padding:20px;
	width:70%;
}

ul{
    margin-bottom:0;
    margin-right:40px;
}
li{
    display:inline;
    padding-right: 0.5em;
    padding-left: 0.5em;
    font-weight: bold;
    border-right: 1px solid #333333;
}
li a{
    text-decoration: none;
    color: black;
}

#footer a{
	color: black;
}
.tsel{
    padding:0;
}

</style>
        <script type="text/javascript" src="llqrcode.js"></script>
        <script type="text/javascript" src="plusone.js"></script>
        <script type="text/javascript" src="jquery1111.min.js"></script>
        <script type="text/javascript" src="webqr.js"></script>
        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24451557-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    </head>
    <body>
        <table class="table table-bordered table-condensed table-hover table-responsive table-striped">
                                             <tr>
                                                 <td colspan="2"><center>
                                                    <img class="selector" id="qrimg" src="cam/cam.png" onclick="setimg()"/>
                                                <div id="outdiv">
                                                </div></center>
                                            <input type="text" name="rslt" id="result" onfocus="loadchk1()" />
                                            </td>
    </tr></table>
    </body>
</html>