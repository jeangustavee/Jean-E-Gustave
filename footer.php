<main class="main-content">
		<div class="container">
            <hr>
            <br><br><br><br><br>
            <p>
				<b>At the moment, I'm not taking on perosnal projects.</b> However, <a href="mailto:jean.egustave@gmail.com">send me an email</a> or contact my agent <a href="http://topkreyol.com/jeanegustave">TopKreyol</a> if you would like to talk. Don't you think we could change the world?

			</p>
            <p><b>Get in touch? </b>Want to grab a drink and chat?</p>
            <center><a class="button" href="mailto:jean.egustave@gmail.com"><span>LET'S TALK</span></a></center>
            <br>
            <center><p><a href="https://www.instagram.com/explore/tags/iamjeanegustave/">#iamjeanegustave</a></p></center><br>
            <center><p style="color: white; font-size:1em;">Disclaimer: This web site and its content is protected under CC-Creative Commons License. The text, images, graphics and animation files that make up this site are all protected under the terms of the License.</p></center><br>
            <center><p>&copy 2007 - 2018</p></center>
			
		</div>
	</main>

<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
    
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