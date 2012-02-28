<div id="wrapper" class="container_12">

	<div id="poster" class="grid_12">

		<?if(is_object($content['main']['file'])):?>
		 <img id="graphic" class="fluidGridImage" src="<?=latticeurl::site($content['main']['file']->frontend->fullpath);?>" width="<?=$content['main']['file']->frontend->width;?>" alt="<?=$content['main']['calltoaction'];?>" />
		<?endif;?>

		<div id="content">

			<h1>
				<?if(is_object($content['main']['headlineimage'])):?>
				 <img id="headlineimage" class="fluidGridImage" src="<?=latticeurl::site($content['main']['headlineimage']->frontend->fullpath);?>" width="<?=$content['main']['headlineimage']->frontend->width;?>" alt="<?=$content['main']['headline'];?>" />
				<?endif;?>
			</h1>

			<h2>
				<?if(is_object($content['main']['subtitleimage'])):?>
				 <img id="subtitleimage" class="fluidGridImage" src="<?=latticeurl::site($content['main']['subtitleimage']->frontend->fullpath);?>" width="<?=$content['main']['subtitleimage']->frontend->width;?>" alt="<?=$content['main']['subtitle'];?>" />
				<?endif;?>
			</h2>

			<h3 id="calltoaction"> <?=$content['main']['calltoaction'];?></h3>

		</div>

	</div>

	<div class="footer" class="grid_12">

		<div id="bodycopy" class="grid_7">
			<h4 class="planningCommitteeHeadline"> <?=$content['main']['planningCommitteeHeadline'];?></h4>
			<p class="planningComitteeBodyCopy title"> <?=$content['main']['planningComitteeBodyCopy title'];?></p>
			<h4 class="organizingStructureHeadline"> <?=$content['main']['organizingStructureHeadline'];?></h4>
			<p class="organizingStructureBodyCopy title"> <?=$content['main']['organizingStructureBodyCopy title'];?></p>
		</div>

		<div class="grid_4 push_1">
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
