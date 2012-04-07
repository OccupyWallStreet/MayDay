<div id="wrapper" class="container_12 clearfix">

	<div id="poster" class="grid_12 clearfix">

		<?if(is_object($content['main']['file'])):?>
		 <img id="graphic" class="fluidGridImage" src="<?=latticeurl::site($content['main']['file']->frontend->fullpath);?>" width="<?=$content['main']['file']->frontend->width;?>" alt="<?=strip_tags($content['main']['calltoaction']);?>" />
		<?endif;?>

		<div id="content" class="clearfix">

			<!-- away class is for searchbots and screen reader users -->
			<h1 class="away"><?=$content['main']['headline'];?>" /></h1>
			<!-- away class is for searchbots and screen reader users -->
			<h2 class="away"><?=$content['main']['subtitle'];?>" /></h2>
			<h3 id="calltoaction" class="away"> <?=$content['main']['calltoaction'];?></h3>

		</div>

	</div>

	<div class="grid_12 clearfix">

		<div id="bodycopy" class="grid_7 clearfix">
			<h4 class="planningCommitteeHeadline"> <?=$content['main']['planningCommitteeHeadline'];?></h4>
			<div class="planningComitteeBodyCopy title"> <?=$content['main']['planningComitteeBodyCopy title'];?></div>
			<h4 class="organizingStructureHeadline"> <?=$content['main']['organizingStructureHeadline'];?></h4>
			<div class="organizingStructureBodyCopy title"> <?=$content['main']['organizingStructureBodyCopy title'];?></div>
		</div>

		<div class="grid_4 push_1 clearfix">
			<h4 class="resourcesheadline"> <?=$content['main']['resourcesheadline'];?></h4>
			<ul id="resources" >
			<?foreach($content['main']['resources'] as $resourcesItem):?>
			  <li class="resourceLink">
					<a href="<?=$resourcesItem['linkurl'];?>" target="_blank"><?=$resourcesItem['linklabel'];?></a>
			  </li>
			<?endforeach;?>
			</ul>
		</div>

	</div>

</div>
