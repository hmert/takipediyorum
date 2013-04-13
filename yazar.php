<?php
$i=2;
if($i==2){
$url= 'http://takipediyorum.com/parser/?parser?paperCode=all&cache=yes';
}else{
$url= 'http://takipediyorum.com/parser/?parser?paperCode=aksamGazete&cache=yes';
}
$content = file_get_contents($url);
$array = json_decode($content);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Yazarlar</title>
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<style>
  article, aside, figure, footer, header, hgroup, 
  menu, nav, section { display: block; }
</style>
<link type="text/css" href="/yazar.css" rel="stylesheet" />
</head>
<body>

<?php
$out = '';
foreach ($array as $g) {
$out.='
<div class="gazete">
    <div class="gazeteTitle '.$g->paperCode.'"><img src="'.$g->faviconUrl.'" class="favicon" width="16" height="16" /> '.$g->paperName.'<a href="#">daralt / aç</a></div>
    <div class="gazeteYazarlar">';
	$s = $g->summaryList;
//$out.='<pre>'.print_r($s,true).'</pre>';
	foreach ($s as $y) {

     $out.='<div class="gazeteYazari"><a href="'.$y->link.'" target="_blank">';
$out.=' <img src="'.$y->image.'" class="yazarResmi"  width="96" />';
$out.='        <h3>'.$y->name.'</h3>
        <p>'.$y->columnHeader.'</p>';
$out.='</a>
      </div>';
}
$out.='
    </div>
  </div>
';
}
echo $out;
?>
</body>
</html>
