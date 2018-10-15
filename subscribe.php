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
	<div class="backgmainbor">
		<p style="padding: 0;
	 margin: 0;">Please complete the form to receive AgriProfitTaking research and market commentary.</p>
		<div class="main-news mobi">
		         <form action="subscribe_form.php" method="POST" style="background-color: rgba(13, 171, 254, 0.37);">		
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
			       <div class="news2 news_mobi" class="shadow_markets">
			       	    <p>I wish to subscribe to the following reports:
			        	</p>
			       	    <div class="subscribe_point">
			       	    	<div class="subscribe_pointL" align="left">
			       	    		<p>Wekly Reports</p>
			       	    		<label class="subscribelabelabel"><input id="DairyWeekly" name="DairyWeekly" type="checkbox" style="width: 12px; height: 12"> Dairy</label><br>
			       	    		<label class="subscribelabelabel"><input id="SugarWeekly" name="SugarWeekly" type="checkbox" style="width: 12px; height: 12"> Sugar</label><br>
			       	    		<label class="subscribelabelabel"><input id="GrainWeekly" name="GrainWeekly" type="checkbox" style="width: 12px; height: 12"> Grain</label><br>
			       	    		<label class="subscribelabelabel"><input id="OilWeekly" name="OilWeekly" type="checkbox" style="width: 12px; height: 12"> Oil</label><br>
			       	    		
			       	    	</div>
			       	    	<div class="subscribe_pointR" align="left">
			       	    		<p>Monthly Reports</p>
			       	    		<label class="subscribelabelabel"><input id="DairyMonthly" name="DairyMonthly" type="checkbox" style="width: 12px; height: 12"> Dairy</label><br>
			       	    		<label class="subscribelabelabel"><input id="SugarMonthly" name="SugarMonthly" type="checkbox" style="width: 12px; height: 12"> Sugar</label><br>
			       	    		<label class="subscribelabelabel"><input id="GrainMonthly" name="GrainMonthly" type="checkbox" style="width: 12px; height: 12"> Grain</label><br>
			       	    		<label class="subscribelabelabel"><input id="OilMonthly" name="OilMonthly" type="checkbox" style="width: 12px; height: 12"> Oil</label><br>

			       	    	</div>
			       	    </div> 	
			        </div>
				 </fieldset>
				 <p>
				  	<input type="submit" name="submit" value="Submit" class="researches_bott" 
				  	>
				 </p>
			</form>
		</div>
	</div>

<?php 
    require ("footer.php");
?>






