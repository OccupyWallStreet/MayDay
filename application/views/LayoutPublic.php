<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="content-script-type" content="text/javascript" />
	<meta property="og:title" content="May Day 2012!" />
	<?$currentURL="http:/".latticeurl::site( $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"] );?>
	<?$pageMeta=(latticeview::initialObject()->pageMeta)? latticeview::initialObject()->pageMeta : "Millions of people throughout the world — workers, students, immigrants, professionals, houseworkers — employed and unemployed alike — will take to the streets to unite in a General Strike against a system that does not work for us. Don't go to work. Don't go to school. Don't shop. Take the streets!";?>
	<meta property="og:url" content="<?=$currentURL;?>">
	<meta property="og:description" content="<?=$pageMeta;?>" />
	<meta property="og:image" content="http://www.maydaynyc.org/application/resources/images/mayDayThumbnail.jpg" />
	<link rel="image_src" type="image/jpeg" href="http://www.maydaynyc.org/application/resources/images/mayDayThumbnail.jpg" />
	<link rel="icon" type="image/png" href="http://www.maydaynyc.org/application/resources/images/maydayfavicon.gif" />
		<title>May Day 2012 | <?=latticeview::initialObject()->title;?></title>
		<?=$stylesheet;?>
		<?=$javascript;?>
		
		
		<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>

		<script type='text/javascript'>
		    // Even if the post succeeds, jQuery thinks there was an error, so we use 'complete' instead of 'success'
		    // Either CiviCRM is doing something weird, or this is a function of our aliasing setup
			(function() {	
				var emailPattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);

				var isValidEmail = function(email) {
					return email && emailPattern.test(email);
				};

				var notify = function(message) {
					jQuery('#civi_email_result > span').html(message);
					jQuery('#civi_email_result').slideDown();

					setTimeout(function() {
						jQuery('#civi_email_result').slideUp();
					}, 3500);			
				};

				var complete = function(xhr, status) {
					notify('Thanks for signing up!');
				};

				var postToCivi = function(email) {
					var profileId = 39; // Direct Action Email Signup
					var groupId = 23; // Direct Action Email Updates

					var url = 'http://crm.occupywallstreet.net/civicrm/profile/create?gid=' + profileId + '&amp;reset=1';
					var data = {
						'postURL': '',
						'cancelURL': '',
						'add_to_group' : groupId,
						'email-Primary' : email,
						'_qf_default' : '',
						'_qf_Edit_next' : ''
					};

					jQuery.ajax({
						'url': url,
						'data': data, 
						'type': 'POST',            
						'complete': complete
					});
				}

				jQuery(function() {
					jQuery('#submit_email_to_civi').click(function() {
						var email = jQuery('#email_for_civi').val();				
						if (isValidEmail(email)) {
							postToCivi(email);
							jQuery('#email_for_civi').val('');
						}
						else {
							notify('Please enter a valid email address.');
						}
					})
				});
			})();
		</script>
		
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css' />

</head>
<body>

	<div id="newsletterbar">
	<div id='join_newsletter' class="container_12">
		<h5>Sign up here to be emailed timely info: </h5> 
	    <input id='email_for_civi' type='text' placeholder="Your E-mail" />
	    <input id='submit_email_to_civi' type='submit' value='Submit' style='font-size: 80%' />
	    <div id="civi_email_result"><span>&nbsp;</span></div>
	</div>
	</div>

	<div id="container" class="container_12 clearfix">
	<?if( latticeview::initialObject()->objecttype->objecttypename == 'subPage' ):?>
		<div class="header clearfix">
			<a href="homepage">
			<img id="headlineimage" class="fluidGridImage" src="application/resources/images/frontend_mayday2012headline.png" width="960" alt="MAY DAY 2012">
			<img id="subtitleimage" class="fluidGridImage" src="application/resources/images/frontend_subtitle.png" width="960" alt="Occupy Wall Street Stands in Solidarity With the Calls for a Day Without the 99%">
			</a>
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
