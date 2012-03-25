if( !lattice ) var lattice = {}
if( !lattice.ui ) lattice.ui = {};

lattice.ui.imgSizer = new Class({
	options : {
		scaleup : false,
		imgCache : [],
		spacerURL : "/lattice/lattice/resources/images/transparent.gif"
	},
	initialize: function( imgs ){
		this.imgs = imgs;
		this.imgs.each( function( img ){
			img.store( 'ogw', parseInt( img.get('width') ) );
			img.store( 'ogh', parseInt( img.get('height') ) );
			this.ieAlpha(img);
			img.setStyle( 'width', '100%' );
		}, this );
		window.addEvent( 'resize', this.onResize.bind( this ) );
		window.fireEvent( 'resize' );
	},

	onResize: function(){
		this.imgs.each( function( img ){
			var ogw, ogh, ratio;
			ogw = img.retrieve('ogw')
			ogh = img.retrieve('ogh')
			ratio = ogw/ogh;
			if( ratio > 1 && options.scaleup ) return;
			img.set('height', parseInt( ogh*ratio ) + 'px' );
		}, this );
	},
	
	ieAlpha : function(img) {
		if ( img.retrieve( 'oldSrc' ) ) img.set('src', img.retrieve( 'oldSrc' ) );
		var src = img.get( 'src' );
		img.style.width = img.offsetWidth + "px";
		img.style.height = img.offsetHeight + "px";
		img.setStyle( 'filter', "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + src + "', sizingMethod='scale')" );
		img.store( 'oldSrc', src );
		img.set( 'src', this.options.spacerURL );
	}

});

window.addEvent( 'domready', function(){
	if( Browser.ie && parseInt( Browser.version < 8 ) ){
		lattice.imageResizer = 	new lattice.ui.imgSizer( $$('.fluidGridImage') );
	}
	window.fireEvent( 'resize' );
});
