 <?php 
    require ("head.php");
  ?>
<body style="background-image: url(photos/Reports.jpg);">
	<div class="body">
<?php 
    require ("header.php");
?>
<div class="main-home">
	<div class="maine-home-titel"> <p>Contact us</p>
	</div>
	<div class="main-news mobi">
		<div  class="news1 news_mobi" class="shadow_markets" >
			<iframe style="padding: 5%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1241.8584834683334!2d-0.10897121584342828!3d51.50006119571861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604bb718c5637%3A0xe0430ea15b39646d!2sArboreal!5e0!3m2!1sru!2sua!4v1538254672398" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>

		</div>
		<div class="news2 news_mobi" class="shadow_markets">
			<p>
				AgriProfitTaken
			</p>
			<p>
				Plantation Place South			
			</p>
			<p>
				60 Great Tower Street 
			</p>
			<p>
				London EC3R 5AZ
			</p>
			<p>
				Tel: +44 (0)20 3207 5000
			</p>
			<p>

				Email: info@sucfin.comn
			</p>

			
		</div>
	</div>
	<div class="main-news mobi">
		<form action="contact_form.php" method="POST" style="background-color: rgba(13, 171, 254, 0.37); margin: 5% 0 auto 0;">		
				  <fieldset class="researches_form">
				  	<div class="news1 news_mobi" class="shadow_markets">
				  	<input id="txtFirstName" name="txtFirstName" type="text" class="form-control" placeholder="Your first name(s) *" required="">
				  	<input id="txtLastName" name="txtLastName" type="text" class="form-control user-error" placeholder="Your last name *" required="">
				  	<input id="email" name="email" type="email" class="form-control" placeholder="Your email address *" required="">
				  	<input id="txtTelephoneNumber" name="txtTelephoneNumber" type="tel" class="form-control" placeholder="Telephone number">
				  	<input id="txtCompany" name="txtCompany" type="text" class="form-control" placeholder="Your company name *" required="">
				  	<input id="txtNatureOfBusiness" name="txtNatureOfBusiness" type="text" class="form-control" placeholder="Nature of business">
				  	<input id="Country" name="Country" type="text" class="form-control" placeholder="Country">
			        </div>
		     <div class="news2 news_mobi" class="shadow_markets" align="left" margin="0">
				  	<textarea id="txtaNewEnquiry" name="txtaNewEnquiry" rows="8" class="researches_form_textarea" placeholder="Message" required="" aria-invalid="true"></textarea>
				  	</div>
				  </fieldset>
				  <p>
				  	<input type="submit" name="submit" value="Submit" class="researches_bott" 
				  	>
				  </p>
			 
			</form>
	</div>



<?php 
    require ("footer.php");
?>