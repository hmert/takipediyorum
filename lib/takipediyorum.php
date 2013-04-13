<?php

class takipediyorum {

    public function getFileContents($url) {
        $ctx = stream_context_create(array(
            'http' => array(
                'timeout' => 3
            )
          )
        );
        $return = file_get_contents($url, 0, $ctx);
        return $return;
    }
    
    public function netProxy($url,$title,$favicon){
	$type = (isset($type))? $type : 'feed';
	$rawUrl = $url;
	$url = "http://www.netvibes.com/proxy/ajaxProxy.php?url=$url&rss=1&type=json&callbackMode=function";
	$file = json_decode(file_get_contents($url));
	$feedContent='';
	$feedContent.='<ul class="feed-block">
	<li class="site">
	  <h2><a href="'.$rawUrl.'" target="_blank" class="snap_shots"><img src="'.$favicon.'" width="16" height="16" /> '.$title.'</a></h2>
	</li>';
	
	for($i=0;$i<5;$i++){
		$imgFeed = '';
		$ifeed = uniqid();
		$imgFeed ='';// ($file->items[$i]->thumb!='') ? '<img width="240" src="'.$file->items[$i]->thumb.'" />' : '';
		$feedContent.='<li class="hentry">
		  <h3 class="entry-title"><a href="'.$file->items[$i]->link.'" rel="#'.$ifeed.'-full" target="_blank">'.$file->items[$i]->title.'</a></h3>
		  <div id="'.$ifeed.'-full" class="full-post"><div class="published">'.$file->items[$i]->date.'</div><div class="entry-content"><div class="entry-bound">'.$imgFeed.$file->items[$i]->content.'</div></div></div>
		</li>';
		$ifeed = '';
	}
	$feedContent.='</ul>';
	return $feedContent;

    }

}

?>
