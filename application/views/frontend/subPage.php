<div class="content clearfix">

	<div class="grid_7">
		<?if($content['main']['intro'] != "" ):?><p class="intro"><?=$content['main']['intro'];?></p><?endif;?>
		<p class="blurb"><?=$content['main']['blurb'];?></p>
	</div>
	
	<div class="grid_4 push_1">

		<? if( count( $content['main']['Images'] ) > 0 ):  ?>
		<ul id="sidebarImages" >
		<?foreach($content['main']['Images'] as $ImagesItem):?>
		  <li>
		   <?if(file_exists($ImagesItem['image']->medium->fullpath)):?>
		    <img id="image" src="<?=latticeurl::site($ImagesItem['image']->medium->fullpath);?>" width="<?=$ImagesItem['image']->medium->width;?>" height="<?=$ImagesItem['image']->medium->height;?>" alt="<?=$ImagesItem['image']->medium->filename;?>" />
		   <?endif;?>
		  </li>
		<?endforeach;?>
		</ul>
		<?endif;?>

		<? if( count( $content['main']['resources'] ) > 0 ):  ?>
		<h4>Resources</h4>
		<ul id="resources"  >
		<?foreach($content['main']['resources'] as $resourcesItem):?>
			<li class="resourceLink"><a href="<?=$resourcesItem['linkurl'];?>" <?=($resourcesItem['openInNewWindow'])? "target='_blank'" : "";?>><?=$resourcesItem['linklabel'];?></a></li>
		<?endforeach;?>
		</ul>
		<?endif;?>

		<ul id="fundButton">
		<li class="resourceLink">
		<a href="https://www.wepay.com/donations/122288" target="_blank" ><img src="https://www.wepay.com/img/widgets/donate_with_wepay.png" alt="Donate with WePay" /></a>
		</li>
		</ul>
	</div>

</div>
