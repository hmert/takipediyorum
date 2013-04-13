<?php
error_reporting(1);
//include 'lib/common.php';
function netProxy($a,$b,$c){ echo  $a.':'.$b.':'.$c.'<br>'; }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" charset="utf-8" />
    <link rel="stylesheet" href="jquery.qtip.min.css" type="text/css" media="screen" charset="utf-8" />
    <title>Takipediyorum.com | Haber</title>
</head>

<div id="wrapper">
  <div id="opener">
      <h1 id="pagetitle" class="din"> TAKİPEDİYORUM.COM | HABER</h1>
    </div>
  <div id="content">

    <div id="headlines" class="hfeed clearfix">
<div style="display:block;margin:10px;padding:10px; background-color: #FFCF01;">Sitemiz güncellemelerine devam edecek. İlk olarak <a href="#mansetler" style="color:red;">Gazete Manşetleri eklendi.</a></div>

				<?php netProxy('http://www.ntvmsnbc.com/id/24927681/device/rss/rss.xml','ntvmsnbc','http://www.ntvmsnbc.com/favicon.ico'); ?>
				<?php netProxy('http://sondakika.haber7.com/sondakika.rss','haber7','http://www.haber7.com/favicon.ico'); ?>
				<?php netProxy('http://www.cnnturk.com/servisler/rss/anasayfa.rss','cnnturk','http://www.cnnturk.com/favicon.ico'); ?>
				<div class="row-clear">&nbsp;</div>
				
				<?php netProxy('http://rss.internethaber.com/last_min.xml','internethaber','http://www.internethaber.com/favicon.ico'); ?>
				<?php netProxy('http://www.zaman.com.tr/sondakika.rss','zaman','http://medya.zaman.com.tr/pics/zaman.ico'); ?>
				<?php netProxy('http://podcast.samanyoluhaber.com/sondakika.rss','samanyoluhaber','http://www.samanyoluhaber.com/favicon.ico'); ?>
				<?php //netProxy('http://www.sabah.com.tr/rss/sondakika.xml'); ?>
				<div class="row-clear">&nbsp;</div>
				
				<?php netProxy('http://rss.hurriyet.com.tr/rss.aspx?sectionId=1','Hürriyet','http://www.hurriyet.com.tr/images/hurlogo.ico'); ?>
				<?php netProxy('http://www.milliyet.com.tr/D/rss/rss/Rss_1.xml','milliyet','http://www.milliyet.com.tr/favicon.ico'); ?>
				<?php netProxy('http://www.radikal.com.tr/d/rss/Rss_77.xml','radikal','http://www.radikal.com.tr/favicon.ico'); ?>
				<div class="row-clear">&nbsp;</div>
			
				<?php netProxy('http://www.taraf.com.tr/rss/','taraf','http://www.taraf.com.tr/favicon.ico'); ?>
				<?php netProxy('http://www.haberturk.com/haberturk.xml','haberturk','http://www.haberturk.com/favicon.ico'); ?>
				<?php netProxy('http://www.tgrthaber.com.tr/Rss/FirstPage.asp','tgrt haber','http://www.tgrthaber.com.tr/favicon.ico'); ?>
				<div class="row-clear">&nbsp;</div>
			
				<?php netProxy('http://www.cumhuriyet.com.tr/?xl=rss','cumhuriyet','http://www.cumhuriyet.com.tr/favicon.ico'); ?>
				<?php netProxy('feed://www.haberx.com/haberx.rss','HaberX','http://www.haberx.com/favicon.ico'); ?>
				<?php netProxy('http://www.haberaktuel.com/RSS/','haber aktuel','http://www.haberaktuel.com/favicon.ico'); ?>
				<div class="row-clear">&nbsp;</div>
			
				<?php netProxy('http://www.aktifhaber.com/rss/','Aktif Haber','http://www.aktifhaber.com/favicon.ico'); ?>
				<?php netProxy('http://trt.net.tr/rss/gundem.rss','trt','http://trt.net.tr/Sablonlar/trt.ico'); ?>
				<?php netProxy('http://haber.mynet.com/RSSConverter.asp?type=flash','Mynet','http://img3.mynet.com/myfav/mynet.ico'); ?>
				<div class="row-clear">&nbsp;</div>
			  </div>
			 <div class="row-clear">&nbsp;</div>
			<div id="mansetler">
			<!--
<ul id="scroller">
<?php
$gazeteler = Array('aksam','birgun','bugun','cumhuriyet','gunes','haberturk','hurriyet','milligazete','milliyet','posta','radikal','sabah','sozcu','star','takvim','taraf','turkiye','vakit','vatan','yeniasya','yenisafak','zaman');
for($i=0;$i<22;$i++){ ?>
<li><a href="http://gazete.netgazete.com/Gazete/<?php echo $gazeteler[$i]; ?>.jpg" target="_blank"><img src="http://gazete.netgazete.com/Gazete/<?php echo $gazeteler[$i]; ?>_kucuk.jpg" height="200"></a></li>
<?php } ?>
</ul>

<a href="http://gazete.netgazete.com/ShowAllPapers.aspx">Gazete manşetleri</a>
-->
</div>
		  </div>
		</div>
		<div id="footer" class="clearfix">
		  <p class="copyright">T.1.02 sürüm &copy; 2011 &middot; Hizmeti <a href="http://www.hmert.com/">Hüseyin Mert</a> sağlamakta.</p>
		  <p class="navigation"> <a href="http://www.takipediyorum.com/">hakkında</a> &middot; <a href="http://www.takipediyorum.com">iletişim</a></p>
</div>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="jquery.qtip.pack.js"></script>
		<script src="js/jquery.simplyscroll.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
$("#scroller").simplyScroll({
			autoMode: 'loop'
		});
			$('.entry-title a').qtip({
   content: {
      text:function(api){
	return $(this).parent().parent().find('.full-post').clone().html();
   },
position: {
      viewport: $('#headlines')
   },
              show: { 
                  event: 'mouseenter' 
              }
}
});
		});
		</script>
		<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
		try {
		var pageTracker = _gat._getTracker("UA-2457153-13");
		pageTracker._trackPageview();
		} catch(err) {}</script>
	</body>
</html>
