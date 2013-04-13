<?php
/**
 * NewsBlocks Demo
 * <http://newsblocks.simplepie.org>
 *
 * A simple demo that clones the main functionality of sites like PopURLs, 
 * TheWebList, Original Signal, MiniBoxs, and others. Development sponsored 
 * by Level 5 Studio <http://level5studio.com>. Go check them out!
 * 
 * This is a sample homepage that adds several feeds with various test 
 * configurations. There are lots of configuration options available that 
 * are documented at <http://newsblocks.simplepie.org>.
 * 
 * THIS IS NOT INTENDED TO BE A COMPREHENSIVE SOLUTION. THIS IS INTENDED 
 * AS A SOLID STARTING POINT FROM WHICH TO WRITE YOUR OWN CODE TO CUSTOMIZE 
 * IT HOWEVER YOU CHOOSE. IF YOU DON'T KNOW HTML, CSS, JAVASCRIPT, OR PHP, 
 * YOUR CUSTOMIZATION OPTIONS ARE LIMITED.
 *
 * @package NewsBlocks
 * @version 2.0
 * @author Ryan Parman
 * @link http://simplepie.org/wiki/tutorial/how_to_replicate_popurls NewsBlocks tutorial page.
 * @license http://www.opensource.org/licenses/bsd-license.php BSD License
 */


/****************************************************
 INCLUDE EXTERNAL LIBRARIES
****************************************************/
require_once('../php/simplepie.inc');
require_once('../php/newsblocks.inc.php');


/****************************************************
 SET HTTP HEADERS
****************************************************/
header('Content-type:text/html; charset=utf-8');


/****************************************************
 SET THE LOCALE
 Affects the language of datestamps for items. 
****************************************************/
setlocale(LC_TIME, 'tr_TR');
 
/****************************************************
 BEGIN HTML OUTPUT
****************************************************/ 
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Takipediyorum.com</title>
		<link rel="stylesheet" href="/css/newsblocks.css" type="text/css" media="screen" title="NewsBlocks" charset="utf-8" />
	</head>

	<body>
		<div id="site">

			<div id="navigation">
				<h1>Haber | Takipediyorum.com</h1>
				<p><a href="http://www.takipediyorum.com" title="Haber">Haber</a> | <a href="http://spor.takipediyorum.com" title="Spor">Spor</a> | <a href="http://sinema.takipediyorum.com" title="Sinema">Sinema</a> | <a href="http://teknoloji.takipediyorum.com" title="Teknoloji">Teknoloji</a> | <a href="http://yemek.takipediyorum.com" title="Yemek">Yemek</a> | <a href="http://pazarlama.takipediyorum.com" title="Pazarlama">Pazarlama</a></p>
			</div>

			<div id="content">

				<!-- FIRST 3-COLUMN SECTION -->
				<div class="container thirds">
					<div class="section">
						<?php echo newsblocks::listing('http://www.ntvmsnbc.com/id/3032091/device/rss/rss.xml'
						, array(
							'more'=>false,
							'more_fx'=>false,
							'items' => 5
						)); ?>
					</div>
					<div class="section">
						<?php echo newsblocks::listing('http://sondakika.haber7.com/sondakika.rss', array(
							'more'=>false,
							'more_fx'=>false,
							'items' => 5
						)); ?>
					</div>
					<div class="section">
						<?php echo newsblocks::listing('http://www.cnnturk.com/servisler/rss/anasayfa.rss', array(
							'more'=>false,
							'more_fx'=>false,
							'items' => 5
						)); ?>
					</div>
					<!--
					<div class="section">
						<?php echo newsblocks::listing('http://samanyoluhaber.com/sondakika.rss', array(
							'more'=>false,
							'more_fx'=>false,
							'items' => 5
						)); ?>
					</div>
					--> 
					<div class="section">
						<?php $haber= newsblocks::listing('http://www.zaman.com.tr/sondakika.rss', array(
							'more'=>false,
							'more_fx'=>false,
							'items' => 5
						));
							echo $haber;;
						?>
					</div>

					<div class="section">
						<?php echo newsblocks::listing('http://www.sabah.com.tr/rss/sondakika.xml', array(
							'more'=>false,
							'more_fx'=>false,
							'items' => 5
						)); ?>
					</div>
					<div class="section">
						<?php echo newsblocks::listing('http://rss.internethaber.com/last_min.xml', array(
							'more'=>false,
							'more_fx'=>false,
							'items' => 5
						)); ?>
					</div>
					<div class="section">
						<?php echo newsblocks::listing('http://rss.hurriyet.com.tr/rss.aspx?sectionId=1', array(
							'more'=>false,
							'more_fx'=>false,
							'items' => 5
						)); ?>
					</div>
					<div class="section">
						<?php echo newsblocks::listing('http://www.milliyet.com.tr/D/rss/rss/Rss_1.xml', array(
							'more'=>false,
							'more_fx'=>false,
							'items' => 5
						)); ?>
					</div>
					<div class="section">
						<?php echo newsblocks::listing('http://www.radikal.com.tr/d/rss/Rss.aspx?catID=0', array(
							'more'=>false,
							'more_fx'=>false,
							'items' => 5
						)); ?>
					</div>
					
					<div class="section">
						<?php echo newsblocks::listing('http://www.haberturk.com/haberturk.xml', array(
							'more'=>false,
							'more_fx'=>false,
							'items' => 5
						)); ?>
					</div>
					<div class="section">
						<?php echo newsblocks::listing('http://www.cumhuriyet.com.tr/?xl=rss', array(
							'more'=>false,
							'more_fx'=>false,
							'items' => 5
						)); ?>
					</div>
					<div class="section">
						<?php echo newsblocks::listing('http://www.ihlassondakika.com/rss.asp', array(
							'more'=>false,
							'more_fx'=>false,
							'items' => 5
						)); ?>
					</div>
					<div class="section">
						<?php echo newsblocks::listing('http://www.aktifhaber.com/rss/rss.xml', array(
							'more'=>false,
							'more_fx'=>false,
							'items' => 5
						)); ?>
					</div>
					<div class="section">
						<?php echo newsblocks::listing('http://www.etikhaber.com/index.php?option=com_frontpage&task=&id=&feed=RSS2.0&no_html=1', array(
							'more'=>false,
							'more_fx'=>false,
							'items' => 5
						)); ?>
					</div>
					<div class="section">
						<?php echo newsblocks::listing('http://trt.net.tr/rss/gundem.rss', array(
							'more'=>false,
							'more_fx'=>false,
							'items' => 5
						)); ?>
					</div>
					<div class="section">
						<?php echo newsblocks::listing('http://haber.mynet.com/RSSConverter.asp?type=flash', array(
							'more'=>false,
							'more_fx'=>false,
							'items' => 5
						)); ?>
					</div>
					<div class="section">
						<?php echo newsblocks::listing('http://www.nethaber.com/xml/rss.aspx?catId=0', array(
							'more'=>false,
							'more_fx'=>false,
							'items' => 5
						)); ?>
					</div>
					<div class="section">
						<?php echo newsblocks::listing('http://www.stargundem.com/feed/index.1.rss', array(
							'more'=>false,
							'more_fx'=>false,
							'items' => 5
						)); ?>
					</div>
				</div>
				<div class="hr" rel="hr"><hr /></div>


			</div>

			<div id="footer">
				Tasarım ve Yazılım: <a href="http://www.hmert.com" title="Hüseyin Mert">Hüseyin Mert</a>
			</div>

		</div>

		<script src="./scripts/newsblocks.js" type="text/javascript" charset="utf-8"></script>
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
