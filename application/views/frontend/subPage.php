<div class="content clearfix">

	<div class="grid_7">
		<p class="intro"> <?=$content['main']['intro'];?></p>
		<p class="blurb"> <?=$content['main']['blurb'];?></p>
	</div>
	
	<div class="grid_4 push_1">

		<? if( count( $content['main']['Images'] ) > 0 ):  ?>
		<ul id="sidebarImages" >
		<?foreach($content['main']['Images'] as $ImagesItem):?>
		  <li>
		   <?if(is_object($ImagesItem['image'])):?>
		    <img id="image" src="<?=latticeurl::site($ImagesItem['image']->medium->fullpath);?>" width="<?=$ImagesItem['image']->medium->width;?>" height="<?=$ImagesItem['image']->medium->height;?>" alt="<?=$ImagesItem['image']->medium->filename;?>" />
		   <?endif;?>
		  </li>
		<?endforeach;?>
		</ul>
		<?endif;?>

		<? if( count( $content['main']['resources'] ) > 0 ):  ?>
		<ul id="resources"  >
		<?foreach($content['main']['resources'] as $resourcesItem):?>
			<li class="resourceLink"><a href="<?=$resourcesItem['linkurl'];?>" target="_blank" ><?=$resourcesItem['linklabel'];?></a></li>
		<?endforeach;?>
		</ul>
		<?endif;?>

	</div>

</div>