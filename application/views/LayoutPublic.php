<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="content-script-type" content="text/javascript" />
	<title>May Day 2012</title>
	<?=$stylesheet;?>
	<?=$javascript;?>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css' />
</head>
<body>
	<div id="container" class="container_12">
	<?if( latticeview::initialObject()->objecttype->objecttypename == 'subPage' ):?>
		<div class="header">
			<img id="headlineimage" class="fluidGridImage" src="application/resources/images/frontend_mayday2012headline.png" width="960" alt="MAY DAY 2012">
			<img id="subtitleimage" class="fluidGridImage" src="application/resources/images/frontend_subtitle.png" width="960" alt="Occupy Wall Street Stands in Solidarity With the Calls for a Day Without the 99%">
		</div>
		<?=Request::Factory('header/public')->execute()->body();?>
	<?else:?>
		<?=Request::Factory('header/public')->execute()->body();?>
	<?endif;?>

<?=$body;?>
<?=Request::Factory('footer/public')->execute()->body();?>
	</div>
</body>
</html>
