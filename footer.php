<div class="footer">
		<div class="container">
            <p>
				<b>At the moment, I'm not accepting freelance work.</b> However, <a href="mailto:jean.egustave@gmail.com">send me an email</a> if you would like to get coffee (I drink tea) or talk. so don’t hesitate to get in touch.
			</p>
            <p><b>Get in touch? </b></p>
            <a class="button" href="mailto:jean.egustave@gmail.com"><span>LET'S TALK</span></a>
            <br>
            <p><a href="https://www.instagram.com/explore/tags/iamjeanegustave/">#iamjeanegustave</a></p><br>
            <p class="disclaimer">Disclaimer: This web site and its content is protected under CC-Creative Commons License. The text, images, graphics and animation files that make up this site are all protected under the terms of the License.</p><br>
            <p>&copy 2007 - 2019<br>Made in Haiti</p>
			
		</div>
</div>

<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> 
<script src="js/scrolling.js"></script> <!-- Resource jQuery -->
    
    <script>
			(function() {
	
				function init() {
					var speed = 250,
						easing = mina.easeinout;

					[].slice.call ( document.querySelectorAll( '#grid > a' ) ).forEach( function( el ) {
						var s = Snap( el.querySelector( 'svg' ) ), path = s.select( 'path' ),
							pathConfig = {
								from : path.attr( 'd' ),
								to : el.getAttribute( 'data-path-hover' )
							};

						el.addEventListener( 'mouseenter', function() {
							path.animate( { 'path' : pathConfig.to }, speed, easing );
						} );

						el.addEventListener( 'mouseleave', function() {
							path.animate( { 'path' : pathConfig.from }, speed, easing );
						} );
					} );
				}

				init();

			})();
		</script>
</body>
</html>