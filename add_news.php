 <?php 
    require ("head.php");
  ?>
<body style="background-image: url(photos/Reports.jpg);">
	<div class="body">
<?php 
    require ("header.php");
?>
<div class="main-home">
	<div class="maine-home-titel"> <p>Add news</p>
	</div>
	<div class="backgmainbor">
	  	<form action="add_news_form.php" method="POST" style="background-color: rgba(13, 171, 254, 0.37); margin: 5% 0 auto 0;">		
				  <fieldset class="researches_form">
				  	<input id="title" name="title" type="text" class="form-control" placeholder="title" required="">
				  	<input id="cat" name="cat" type="cat" class="form-control" placeholder="cat" required="">	

				  	<textarea id="textmini" name="textmini" rows="10" class="researches_form_textarea" placeholder="textmini" required="" aria-invalid="true"></textarea>
				  	<textarea id="text" name="text" rows="28" class="researches_form_textarea" placeholder="text" required="" aria-invalid="true"></textarea>

				  </fieldset>
				  <p>
				  	<input type="submit" name="submit" value="Add news" class="researches_bott" 
				  	>
				  </p>
			 
		</form>
	</div>

<?php 
    require ("footer.php");
?>