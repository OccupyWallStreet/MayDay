<div class="content clearfix">

	<div class="grid_7 alpha clearfix">

		<h3><?=$content['main']['title'];?></h3>
		<p><?=$content['main']['intro'];?></p>
		<p><?=$content['main']['blurb'];?></p>


		<ul id="contentBlocks" class="clearfix">
			<?foreach($content['main']['contentBlocks'] as $contentBlocksItem):?>
  		<li class="contentBlock">
   			<h4><?=$contentBlocksItem['headline'];?></h4>
   			<p><?=$contentBlocksItem['content'];?></p>
  		</li>
			<?endforeach;?>
		</ul>

	</div>

	<div class="grid_4 push_1 omega clearfix">

		<ul id="fundButton">
		<li class="resourceLink">
		  <a href="https://www.wepay.com/donations/122288" target="_blank" ><img src="https://www.wepay.com/img/widgets/donate_with_wepay.png" alt="Donate" /></a>
		</li>
		</ul>

		<ul id="sidebarContentBlocks" >
			<?foreach($content['main']['sidebarContentBlocks'] as $sidebarContentBlocksItem):?>
  		<li class="contentBlock">
   			<h4><?=$sidebarContentBlocksItem['headline'];?></h4>
   			<p> <?=$sidebarContentBlocksItem['content'];?></p>
  		</li>
			<?endforeach;?>
		</ul>

		<h4><?=$content['main']['tweetsIntro'];?></h4>

		<div id="tweets" >	
			<ul>
			<?
			$feed_url = 'https://search.twitter.com/search.rss?q=%23maydaynycneeds';
			$xml = simplexml_load_file( $feed_url );
			if( $xml ){
				$i = 0;
				foreach( $xml->channel->item as $tweet ){
					$text = $tweet->description;
					$pubDate = substr( $tweet->pubDate, 0,16 );
					// preg_match($regex_pattern,urlToLink( $text ),$matches);
					echo "<li><span class='date'>$pubDate</span>" . $text . "</li>";
					$i++;
					if( $i > 80 ) break;
				}
			}
			?>
			</ul>
			<a class="button" href="feed:https://search.twitter.com/search.rss?q=%23maydaynycneeds">View all #MayDayNYCNeeds</a>
		</div>


		<? if( count( $content['main']['donateResources'] ) > 0 ):  ?>
		<h4>Resources</h4>
		<ul id="resources">
		<?foreach($content['main']['donateResources'] as $resourcesItem):?>
			<li class="resourceLink"><a href="<?=$resourcesItem['linkurl'];?>" <?=($resourcesItem['openInNewWindow'])? "target='_blank'" : "";?>><?=$resourcesItem['linklabel'];?></a></li>
		<?endforeach;?>
		</ul>
		<?endif;?>

	</div>

</div>