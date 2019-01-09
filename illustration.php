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

<div class="top-page">
    <h2>Killing me <br>softly</h2>
    <p>last updated - january 2019</p>
</div>

<div class="grid">
  <div class="grid-sizer"></div>
  <div class="grid-item">
    <img src="img/illustrations/wine_time.png" alt="Lady drinking wine illustration by Jean Edouard Gustave" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/Converse.png" alt="Converse illustration by Jean Edouard Gustave" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/Look_likes_home.png" alt="Home illustration by Jean Gustave" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/Rabbelle.png" alt="woman minimal illustration by Jean Edouard Gustave" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/Penetration.png" alt="woman having sex illustration by Jean Edouard Gustave" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/oh_life.png" alt="beautiful illustration by Jean Edouard Gustave" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/Espionage-01.png" alt="espionage illustration by Jean Gustave" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/bye_summer-01.png" alt="man surfing illustration by Jean Gustave" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/manipulation.png" alt="back people manipulation by Jean Edouard GUstave" />
  </div>
     <div class="grid-sizer"></div>
  <div class="grid-item">
    <img src="img/illustrations/aba.png" alt="Haiti map by Jean Edouard Gustave" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/Belle.png" alt="bella illustration by Jean Edouard Gustave" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/Bon_weekend.png" alt=" Weekend illustration by Jean Edouard Gustave"  />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/Cooling_off.png" alt=" illustration by Jean Edouard Gustave" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/Desired_Gum-01.png" alt="woman eating chiwing gum illustration by Jean Edouard Gustave" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/Envious.png" alt="peaceful illustration by Jean Edouard Gustave" />
  </div>
    <div class="grid-item">
    <img src="img/illustrations/sex-eat-web.png" alt="woman eating banana illustration by Jean Edouard Gustave" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/Illusion-01.png" alt="abstract illustration by Jean Edouard Gustave" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/kcuf.png" alt="fuck you illustration by Jean Edouard Gustave" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/Less_for_more.png" alt="minimalist illustration by Jean Edouard Gustave" />
  </div>
     <div class="grid-sizer"></div>
  <div class="grid-item">
    <img src="img/illustrations/simplicity.png" alt="man walking illustration by Jean Edouard Gustave" />
  </div>
  <div class="grid-item">
    <img src="img/illustrations/sorgenelas.png" alt="slavery illustration by Jean Edouard Gustave" />
  </div>
</div>
<br><br><br>



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

