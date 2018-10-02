 <?php 
    require ("head.php");
  ?>
<body style="background-image: url(photos/Reports.jpg);">
	<div class="body">
<?php 
    require ("header.php");
?>
<div class="main-home">
	<div class="maine-home-titel"> <p>Subscribe to Reports</p>
	</div>
	<p>Please complete the form to receive AgriProfitTaking research and market commentary.</p>
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
			        	<p>I wish to subscribe to the following reports:
			        	</p>
			        	<label><input id="SpecialMonthlyReports" name="SpecialMonthlyReports" type="checkbox" value="1"> Special Monthly Reports</label>
			        	<label><input id="SpecialMonthlyReports" name="SpecialMonthlyReports" type="checkbox" value="1"> Special Monthly Reports</label>
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






