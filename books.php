<?php include("header.php"); ?>
<style>
/*  SECTIONS  */
.section h1{
    font-size: 34px;
}
.section p{
    font-size: 24px;
}
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}

/*  COLUMN SETUP  */
.col {
	display: block;
	float:left;
	margin: 1% 0 1% 4%;
}
.col:first-child { margin-left: 0; }

/*  GROUPING  */
.group:before,
.group:after { content:""; display:table; }
.group:after { clear:both;}
.group { zoom:1; /* For IE 6/7 */ }

/*  GRID OF TWO  */
.span_2_of_2 {
	width: 100%;
}
.span_1_of_2 {
	width: 48%;
}

/*  GO FULL WIDTH AT LESS THAN 480 PIXELS */

@media only screen and (max-width: 780px) {
	.col { 
		margin: 1% 0 1% 0%;
	}
}

@media only screen and (max-width: 780px) {
	.span_2_of_2, .span_1_of_2 { width: 100%; }
}
</style>
<br><br>
<main class="main-content">
		<div class="container">
			<h1>sak pase?<br>
            Reading and writing <br>are my most ultimate comfort,<br>
            so embarque and follow my journeys</h1>
            
            <div class="section group">
	<div class="col span_1_of_2 matchheight">
	<img src="img/The-30th-Glim-Cover.jpg" style="width:100%">
	</div>
                
	<div class="col span_1_of_2 matchheight">
	<h1><b>THE 30TH GLIM</b></h1>
        <p>In The 30th Glim, Jean Gustave really does capture a life. There were moments of humor, misery, and a seething anger that poured through the way frustration always does in life. In these poems, he outlines the senseless mistakes a person makes and the quiet triumphs of a job well done. All in all, a very personal and moving read.<br><br>Available: <img src="img/Barnes_and_Noble.png" style="height:25px">  &nbsp; &nbsp;<img src="img/Amazon_com_logo.png" style="width:30px"><br>Price: <b>$15 [paperback]</b>
        <br>ISBN-13:978-1522912033<br> </p>
        
      
        <button class="button" onclick="location.href='http://www.amazon.com/30th-Glim-entire-life-prose/dp/1522912037/ref=sr_1_1?ie=UTF8&qid=1459006576&sr=8-1&keywords=the+30th+glim'">Amazon</button>
        <button class="button" onclick="location.href='http://www.barnesandnoble.com/w/the-30th-glim-jean-edouard-gustave/1123593162?ean=9781522912033'">B&N</button>
	</div>
</div>
            
            <h1>More books</h1><hr>
            <div class="section group">
            <div class="col span_1_of_2">
            <img src="img/lost-title-jeaedouard.jpg" style="width:100%">
                <h2>Lost Title</h2>
            <p>
            58 pages<br/>
            Chapbook - Poetry<br/>
            Full Color<br/>
            2008<br>
            English<br>
            6 x 0.1 x 9<br>
            ISBN: 1607034328<br>
            Publish America
            </p>
            </div>
                
                <div class="col span_1_of_2">
            <img src="img/la-cour-blasee.jpg" style="width:100%">
                    <h2>La Cour Blasée</h2>
            <p>
            50 pages<br/>
            Hard Cover | Poetry<br/>
            Black and White<br/>
            2005<br>
            French<br>
            5 x 0.1 x 8<br>
            ISBN: N/A<br>
            Publisher: N/A
            </p>
            </div>
                </div>
            
             <hr>
            <p><b>Get in touch? </b>Want to grab a drink and chat? Would you like to work together?</p>
            <center><button class="button" href="#"><span>LET'S TALK</span></button></center>
            <br>
            <center><p><a href="https://www.instagram.com/explore/tags/iamjeanegustave/">#iamjeanegustave</a></p></center>
            <br><center><img src="img/Jean-logo.png" alt="Logo" width="50px"><br><br>&copy 2016</center><br><br>
    </div>
</main>

<script src="js/jquery.matchHeight-min.js"></script>

<script type="text/javascript">
jQuery(function($){
    $('.matchheight').matchHeight();
});
</script>
<?php include("footer.php"); ?>