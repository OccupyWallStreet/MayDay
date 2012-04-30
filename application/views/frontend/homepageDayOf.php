<div id="wrapper" class="container_12 clearfix">
	
	<p class="homeIntro"><?=$content['main']['intro'];?></p>
	<p class="secondaryIntro"><?=$content['main']['secondaryIntro'];?></p>

<ul id="dayOfEventList" class="clearfix">
<?foreach($content['main']['dayOfEventList'] as $key => $dayOfEventListItem):?>
  <li class="event grid_3" id="event-<?=$key+1;?>">
		<p class="time"><?=$dayOfEventListItem['timeStart'];?><?if($dayOfEventListItem['timeEnd'] ):?>&ndash;<?=$dayOfEventListItem['timeEnd'];?><?endif;?></p>
		<h3 class="headline">
			<?if($dayOfEventListItem['eventLink']->url):?>
			<a href="<?=$dayOfEventListItem['eventLink']->url;?>" target="_blank"><?=$dayOfEventListItem['headline'];?></a>
			<?else:?>
			<?=$dayOfEventListItem['headline'];?>
			<?endif;?>
		</h3>
		<?if($dayOfEventListItem['permitted']):?>
		<p class="permitted">Permitted</p>
		<?endif;?>
		<div class="eventInfo">
			<?$maplink="http://maps.google.com/maps?client=safari&rls=en&oe=UTF-8&um=1&ie=UTF-8&q=maps:+" . urlencode($dayOfEventListItem['location']) . "&fb=1&gl=us&hq=" . urlencode($dayOfEventListItem['location']) . "&hnear=0x89c24fa5d33f083b:0xc80b8f06e177fe62,New+York,+NY&sa=X&ei=zxecT_CNHKnt0gGau5zvDg&ved=0CAcQyBM"?>
			<a class="location" href="<?=$maplink;?>" target="_blank"><?=$dayOfEventListItem['location'];?></a>
		</div>
		<p class="blurb"><?=$dayOfEventListItem['blurb'];?></p>
		<p class="description away"><?=$dayOfEventListItem['description'];?></p>
	</li>
<?endforeach;?>
</ul>
<div class="clearfix">

	<div class="grid_8 alpha">
		<h4 class="tweetsIntro">Last 100 Tweets from OWSMayDay</h4>
		<div id="tweets" >	
			<?
					libxml_use_internal_errors(true);
						$cache_expire = 180; // 3 mins in seconds
						$username = 'owsmayday';
						$limit = 100;
						$feed_url = 'http://api.twitter.com/1/statuses/user_timeline.rss?screen_name='.$username.'&count='.$limit;
						$cache_file = 'application/cache/twitter_cache.tpl.php';

						if( file_exists($cache_file) ){
							$noo = time();
							$fileModDate = filemtime($cache_file);
							$nowTime = new DateTime();
							// if time elapsed less than 120 seconds then read the file.			
							if(  $noo - $fileModDate  > $cache_expire ){
								$feed_rss = simplexml_load_file( $feed_url );
								if( $feed_rss && $feed_rss->channel ){
									$rss_cache = "<ul>";
									foreach( $feed_rss->channel->item as $tweet ){
										$text = $tweet->description;
										$pubDate = date( 'F j, h:i A', strtotime( $tweet->pubDate ) );
										$rss_cache .= "<li><div>". $text . "</div><span class='date'>$pubDate</span></li>";
									}
									$rss_cache .= "</ul>";
								}
								$openCache = fopen( $cache_file, 'wb');
								fwrite( $openCache, $rss_cache );
								fclose($openCache);
							}

							echo "<!-- cache de twitter generado el ".date('Y-m-d h:i:s', filemtime($cache_file))." -->";
							$rss = file_get_contents($cache_file);
							echo $rss;

						}
			?>
			<a class="button" href=" https://twitter.com/#!/OWSMayDay">View All Tweets</a>
		</div>	
	</div>

	<?if( count( $content['main']['dayOfResources'] ) > 0 ):?>
	<div class="grid_4 omega homepage">
			<h4 class="resourcesheadline"><?=$content['main']['resourcesheadline'];?></h4>
			<ul id="resources" class="home" >
			<?foreach($content['main']['dayOfResources'] as $resourcesItem):?>
			  <li class="resourceLink">
					<a href="<?=$resourcesItem['linkurl'];?>" <?=($resourcesItem['openInNewWindow'])? "target='_blank'" : "";?>><?=$resourcesItem['linklabel'];?></a>
			  </li>
			<?endforeach;?>
			</ul>
			<div id="fundButton">
				<a href="https://www.wepay.com/donations/122288" target="_blank" ><img src="https://www.wepay.com/img/widgets/donate_with_wepay.png" width="240" height="40" alt="Donate" /></a>
			</div>
			<div id="radioPlayer">
			<script src="http://player.radiocdn.com/iframe.js?hash=faa5abff2d93be848f15c2c62adc3e743035a1fb-315-135"></script>

			</div>
	</div>
	<?endif;?>
</div>
<?/*
DO WE NEED THIS?
<ul id="dayOfContentBlocks">
<?foreach($content['main']['dayOfContentBlocks'] as $dayOfContentBlocksItem):?>
  <li class="contentBlock">
   <h2><?=$dayOfContentBlocksItem['title'];?></h2>

   <p class="headline"><?=$dayOfContentBlocksItem['headline'];?></p>

   <p class="content"><?=$dayOfContentBlocksItem['content'];?></p>

  </li>
<?endforeach;?>
</ul>
*/?>

</div>

