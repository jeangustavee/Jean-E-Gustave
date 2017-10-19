<?php include("header.php"); ?>

	<section class="hero">
        <div class="text">
	    <h1>Hi, I'm Jean</h1>
	    <h3>I'm a serial entrepreneur; co-founder of <a href="http://antean.agency" target="_blank">ANTEAN</a>, <a href="http://viiatours.com" target="_blank">ViiaTours</a> and <a href="http://sumocca.com" target="_blank">Sumocca</a>.  </h3>
	    <h5>Sign up so we can launch your company in less than 2 days</h5>
	     <form accept-charset="UTF-8" action="https://madmimi.com/signups/subscribe/168470" id="ema_signup_form" method="post" target="_blank">
      <div class="input">
        <input type="text" class="button" id="signup_email" name="signup[email]" placeholder="EMAIL"> 
        <input type="submit" class="button" id="webform_submit_button" value="SIGN UP">
      </div>
    </form>
	    </div>
	</section>

	<main class="main-content">
		<div class="container">
          
          <center><p>For this project, I will be collaborating with <a href="http://antean.agency" target="_blank">Antean</a>, <a href="http://sumocca.com" target="_blank">Sumocca</a> and <a href="http://invigor8.social" target="_blank">Invigor8</a> to launch 25 new companies before January 15, 2018. Are you ready?</p></center>
           
          <br><br><br> <br>
           <div id="thewill" class="tabcontent">
  <p>Where there's a will there's a way.</p>
</div>

<div id="savings" class="tabcontent">
  <p>Minimum $500 on your saving.</p>
</div>

<div id="availability" class="tabcontent">
  <p>30 Minutes of your time everyday.</p>
</div>

<div id="product" class="tabcontent">
  <p>Have a solid idea/product/service.</p>
</div>

<button class="tablink" onclick="openCity('thewill', this, '#616066')" id="defaultOpen">THE WILL</button>
<button class="tablink" onclick="openCity('savings', this, '#616066')">SAVINGS</button>
<button class="tablink" onclick="openCity('availability', this, '#616066')">TIME</button>
<button class="tablink" onclick="openCity('product', this, '#616066')">PRODUCTS</button> 
          
          
          <br><br><br> <br><br><br>
          
           <br><br><br> <hr><br><br>
            <div class="section group">
	<div class="col span_1_of_2 matchheight">
	<img src="img/launchfast-book-jeangustave.png" style="width:100%">
	</div>
                
	<div class="col span_1_of_2 matchheight">
	<h1><b>LAUNCH FAST: How we launched a company in 24 hours' challenge</b></h1>
        <p>Before the release date of my fifth book "LAUNCH FAST: How we launched a company in 24 hours" I want to help 25 aspiring entrepreneurs launch their business fast. If you think you got what it takes, join the movement and become your own boss today. </p>  
	</div>
</div>
            <br><br><br>
            
            <div id="square-launchfast">
                <h1>HONEST ANSWERS</h1>
            
            
             <button class="accordion">Why are you launching this challenge?</button>
<div class="panel">
  <p>Simply because I want to create enough buzz for my book and also to make sure that everything in the book is applicable to different type of businesses.</p>
</div>

<button class="accordion">How much will it cost me?</button>
<div class="panel">
  <p>It won't cost you a dime. I will only give you some of my time and knowledge to launch your company or accelerate the process.</p>
</div>

<button class="accordion">How long it'll really take me to launch my company?</button>
<div class="panel">
  <p>It will really take you less than 2 days if you put the effort in.</p>
</div> 

<button class="accordion">So you mean to tell me that in 2 days I can start selling my service or product?</button>
<div class="panel">
  <p>Believe it or not, YES.</p>
</div> 

<button class="accordion">What if it's not possible to launch my service/product/idea in 2 days?</button>
<div class="panel">
  <p>We will create momentum and enough noise so we can put potential clients/buyers on a waiting list. Once you launch, they will be in line waiting.</p>
</div> 

<button class="accordion">What method are you going to use? Is it a class, a group of people, a course...</button>
<div class="panel">
  <p>...it'll be a one-on-one video chat with real conversation and discussion. Fair enough?</p>
</div>

<button class="accordion">What's the catch?</button>
<div class="panel">
  <p>After our initial intake, you may voluntarily asked to take service from my supporters. It's if you want to. If you do, I'll refer other businesses to buy from you as well. It's totally up to you. No obligation.</p>
</div> 

<button class="accordion">How and where do I start?</button>
<div class="panel">
  <p>There a form below, just fill it out and I will contact you within 12 hours. Talk to you soon!</p>
</div> 
           
           </div>
            
            <br><br><br><br>
            
            <br><br><br>
            
            <h1>LAUNCH FAST HERE</h1>
            <p>Apply now </p>
            
            <!-- application submit status -->
        <?php if(!empty($statusMsg)){ ?>
            <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
        <?php } ?>
        <!-- end status -->
            <form action="" method="post">
  <div class="col-1">
      <label>
      
      <input name="name" placeholder="What is your name?" tabindex="1" required="" />
      </label>
  </div>
  <div class="col-1">
    <label>
      
      <input name="location" placeholder="Where are you located?" tabindex="2" required="" />
    </label>
  </div>
            <div class="col-1">
    <label>
      
      <input name="availability" placeholder="What day and time are you available?" tabindex="3" required="" />
    </label>
  </div>
  <div class="col-1">
    <label>
      <input name="hear" placeholder="How did you find out about us?" tabindex="4" />
    </label>
  </div>
  <div class="col-1">
    <label>
      <input name="phone" placeholder="What is your phone number?" tabindex="5" required="" />
    </label>
  </div>
  <div class="col-1">
      <label>
      <input name="email" placeholder="What is your email?" tabindex="6" required=""/>
      </label>
  </div>
  <div class="col-1">
    <label>
      <select name="saving" tabindex="7" >
        <option value="None">Your saving</option>
        <option value="500"> -$500 </option>
        <option value="500>">$500+</option>
        <option value="1000">$1000+</option>
        <option value="1500">$1500+</option>
        <option value="20000">$2000+</option>
        <option value="3000">$3000+</option>
      </select>
    </label>
  </div>
  
   <div class="col-1">
    <label>
      <select name="idea" tabindex="8" >
        <option value="None">Do you have an idea/product/service?</option>
        <option value="yes"> Yes </option>
        <option value="no">No</option>
      </select>
    </label>
  </div>
           
            <div class="col-1">
            <label>
                <textarea name="message" placeholder="Tell us about your idea/services/products here..." tabindex="9"></textarea>
                </label>
            </div>
            
            <div class="col-1">
    <label>
      <select name="logo" tabindex="10" >
        <option value="None">Do you have a logo?</option>
        <option value="yes"> Yes </option>
        <option value="no">No</option>
      </select>
    </label>
  </div>
                  
                  <div class="col-1">
    <label>
      <select name="website" tabindex="11" >
        <option value="None">Do you have a website?</option>
        <option value="yes"> Yes </option>
        <option value="no">No</option>
      </select>
    </label>
  </div>
                  
                   <div class="col-1">
    <label>
      <select name="social" tabindex="12">
        <option value="None">Do you have a business Instagram/Facebook account?</option>
        <option value="yes"> Yes </option>
        <option value="no">No</option>
      </select>
    </label>
  </div>
					  
  <div class="col-submit">
    <input type="submit" name="submit" value="Submit">
  </div>
</form>	
		</div>
	</main>

<?php include("footer.php"); ?>