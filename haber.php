<?php
set_time_limit(30);
error_reporting(1);
include 'lib/simple_html_dom.php';
setlocale(LC_ALL, 'tr_TR.utf8'); 

$q = $_GET['q'];

$site['zaman']['title']= 'Zaman';
$site['zaman']['baseUrl']= 'http://www.zaman.com.tr/';
$site['zaman']['url']= 'http://www.zaman.com.tr/wap.do?method=getManset';
$site['zaman']['storyUrl']='.zaman_wap_normal';
$site['zaman']['storyTitle']='.zaman_wap_normal';
$site['zaman']['imagePath']='td img';


$site['haberturk']['title']= 'Habertürk';
$site['haberturk']['baseUrl']= 'http://m.haberturk.com/';
$site['haberturk']['url']= 'http://m.haberturk.com/icerikler.aspx?CID=1&limit=10';
$site['haberturk']['storyUrl']='.IcerikTeaser';
$site['haberturk']['storyTitle']='#flash-control li a';
$site['haberturk']['imagePath']='.IcerikResim img';


function parseSite($title,$baseUrl,$url,$storyUrl,$storyTitle,$imagePath){
    $site = Array();
    $site['title'] = $title; 
    $site['baseUrl'] = $baseUrl; 
    
    
    $site['stories']= Array();
    $i=0;
    $html = file_get_html($url);
    foreach($html->find($storyUrl) as $element) {
        $s_url= $baseUrl.$element->href;
        $s_url_encoded = parse_url($s_url);
        $s_title= ltrim($element->plaintext);
        $story = file_get_html($s_url);
        $site['stories'][$i]['storyUrl'] = $s_url;//$s_url_encoded['query'];
        $site['stories'][$i]['storyTitle'] = iconv("ISO-8859-9","UTF-8",$s_title);
        $k=0;
        foreach($story->find($imagePath) as $s_Picture){
            $storyPic[$k] = $s_Picture->src;
            //$site['stories'][$i]['storyPicture'][$k]=$s_Picture->src;
            $k++;
        }
        
        $site['stories'][$i]['storyPicture']=$storyPic[0];
        $i++;
    }
    return '<pre>'.print_r($site,true).'</pre>';
    //return json_encode($site);
}

echo parseSite($site[$q]['title'],$site[$q]['baseUrl'],$site[$q]['url'], $site[$q]['storyUrl'], $site[$q]['storyTitle'], $site[$q]['imagePath']);

