
var formatDate = function ( formatDate, formatString) {
	if(formatDate instanceof Date) {
		var months = new Array("January","February","March","April","May","June","July","August","September","October","November","December");
		var yyyy = formatDate.getFullYear();
		var yy = yyyy.toString().substring(2);
		var m = formatDate.getMonth();
		var mm = m < 10 ? "0" + m : m;
		var mmm = months[m];
		var d = formatDate.getDate();
		var dd = d < 10 ? "0" + d : d;
		var h = formatDate.getHours();
		var hh = h < 10 ? "0" + h : h;
		var n = formatDate.getMinutes();
		var nn = n < 10 ? "0" + n : n;
		var s = formatDate.getSeconds();
		var ss = s < 10 ? "0" + s : s;
		formatString = formatString.replace(/yyyy/i, yyyy);
		formatString = formatString.replace(/yy/i, yy);
		formatString = formatString.replace(/mmm/i, mmm);
		formatString = formatString.replace(/mm/i, mm);
		formatString = formatString.replace(/m/i, m);
		formatString = formatString.replace(/dd/i, dd);
		formatString = formatString.replace(/d/i, d);
		formatString = formatString.replace(/hh/i, hh);
		formatString = formatString.replace(/h/i, h);
		formatString = formatString.replace(/nn/i, nn);
		formatString = formatString.replace(/n/i, n);
		formatString = formatString.replace(/ss/i, ss);
		formatString = formatString.replace(/s/i, s);
		return formatString;
	} else {
		return "";
	}
}

if( !mayday ) var mayday = {
	tweetRefreshPeriod: 3 // minutes
}

$(document).ready(function() {
	// Function to get tweets from Twitter
	var getTweet = function() {
		var twitter_cache_url = '/application/cache/twitter_cache.tpl.php';
		// How many tweets that you want to get Twitter
		var refreshInterval = mayday.tweetRefreshPeriod*60*1000;
		// Make the request to Twitter and return a JSON object of tweets
		$.ajax( twitter_cache_url).done( function( data ) {
			// Remove the loading div when this function is first called
			$( '#tweets' ).fadeOut( 'slow' ).empty();
			$( '#tweets' ).append( data );
			// Fade in all tweets
			$( '#tweets' ).fadeIn( 'slow' );
			// Do it again in a bit
			setTimeout( getTweet, refreshInterval ); 
		});
	}
	setTimeout( getTweet, mayday.tweetRefreshPeriod*60*1000 ); 
});


