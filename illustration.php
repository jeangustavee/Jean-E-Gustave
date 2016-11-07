<?php include("header.php"); ?>
<script src="js/masonry.pkgd.js"></script>
<script src="js/imagesloaded.pkgd.js"></script>

<style>
* { box-sizing: border-box; }

/* force scrollbar */
html { overflow-y: scroll; }

body { font-family: sans-serif; }

/* ---- grid ---- */

.grid {
  background: #c6c9d0;
}

/* clear fix */
.grid:after {
  content: '';
  display: block;
  clear: both;
}

/* ---- .grid-item ---- */

.grid-sizer,
.grid-item {
  width: 33.333%;
}

.grid-item {
  float: left;
}

.grid-item img {
  display: block;
  max-width: 100%;
}

</style>

<div class="grid">
  <div class="grid-sizer"></div>
  <div class="grid-item">
    <img src="img/illustrations/wine_time.png" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/Converse.png" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/Look_likes_home.png" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/Rabbelle.png" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/Penetration.png" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/oh_life.png" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/Espionage-01.png" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/bye_summer-01.png" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/manipulation.png" />
  </div>
     <div class="grid-sizer"></div>
  <div class="grid-item">
    <img src="img/illustrations/aba.png" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/Belle.png" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/Bon_weekend.png" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/Cooling_off.png" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/Desired_Gum-01.png" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/Envious.png" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/Illusion-01.png" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/kcuf.png" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/Less_for_more.png" />
  </div>
     <div class="grid-sizer"></div>
  <div class="grid-item">
    <img src="img/illustrations/simplicity.png" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/sorgenelas.png" />
  </div>
</div>
<br><br><br>

<main class="main-content">
    <div class="container">
<p>
				<b>What’s next?</b> If you would like to work with me or would like to collaborate, <a href="">send me an email</a> or contact my agent <a href="http://topkreyol.com/jeanegustave">TopKreyol</a>. Don't you think we could change the world?.

			</p>

            <hr>
            <p><b>Get in touch? </b>Want to grab a drink and chat? Would you like to work together?</p>
            <center><button class="button" href="#"><span>LET'S TALK</span></button></center>
            <br>
            <center><p><a href="https://www.instagram.com/explore/tags/iamjeanegustave/">#iamjeanegustave</a></p></center>
            <br><center><img src="img/Jean-logo.png" alt="Logo" width="50px"><br><br>&copy 2016</center><br><br>
			
    </div>
</main>



<script>
// external js: masonry.pkgd.js, imagesloaded.pkgd.js

// init Isotope
var grid = document.querySelector('.grid');

var msnry = new Masonry( grid, {
  itemSelector: '.grid-item',
  columnWidth: '.grid-sizer',
  percentPosition: true
});

imagesLoaded( grid ).on( 'progress', function() {
  // layout Masonry after each image loads
  msnry.layout();
});
 
</script>

<?php include("footer.php"); ?>

