<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css">
<script type="text/javascript"src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<title>Test Job</title>
</head>
<body>
	<span id='revenue_amount_error'> </span>
<div class="botle-form">
<div class="botle-formtop">
  <input type="number" name="revenue_amount" id="revenue_amount" placeholder="Enter Amount"> 
  <button type="button" id="add_amount">Add Amount</button>
  </div>
 <div class="botle-formdet">
<label> Added Revenue <strong class='total_revenue_amount'>1234</strong></label>
<label> Pending Revenue  <strong class='total_pending_amount'>1234</strong></label>
<label> Maximum Revenue  <strong class='maximum_revenue'>1234</strong></label>
</div>
</div>


  <div class="botlecan">
    <div class="botles">
      <div class="botlebox">
        <img src="<?php echo base_url(); ?>/images/spriteempty.png" alt="sprite"/>
        <div class="filbotle"></div>
      </div>
      <div class="botlebox">
        <img src="<?php echo base_url(); ?>images/spriteempty.png" alt="sprite"/>
        <div class="filbotle"></div>
      </div>
      <div class="botlebox">
        <img src="<?php echo base_url(); ?>/images/spriteempty.png" alt="sprite"/>
        <div class="filbotle"></div>
      </div>
      <div class="botlebox">
        <img src="<?php echo base_url(); ?>/images/spriteempty.png" alt="sprite"/>
        <div class="filbotle"></div>
      </div>
      <div class="botlebox">
        <img src="<?php echo base_url(); ?>/images/spriteempty.png" alt="sprite"/>
        <div class="filbotle"></div>
      </div>
      <div class="botlebox">
        <img src="<?php echo base_url(); ?>/images/spriteempty.png" alt="sprite"/>
        <div class="filbotle"></div>
      </div>
    </div>
  </div>
 
</body>
<script>
	
	let revenue_amount = 2000000;
	let max_revenue_amount = 12000000;
	let start_amount = 0;
	let number_of_bottle = 0;
	let total = 0;
	$('.maximum_revenue').html(max_revenue_amount);
	$('.total_revenue_amount').html(start_amount);
	$('.total_pending_amount').html(max_revenue_amount-start_amount);
  $(document).ready(function(){
  		$("#add_amount").click(function(){
  			var amount = $('#revenue_amount').val();
  			
  			if(amount =='' || amount < 1000 || amount > 1000000 ){
  				$('#revenue_amount_error').addClass('error').html('Please check the field');
  			}
  			else if(start_amount > max_revenue_amount){
  				$("#add_amount").attr("disabled", true);
  				$("#revenue_amount_error").addClass('error').html('Revenue amount complete');
  			}
  			else {
  				$('#revenue_amount_error').removeClass('error').html('');
  				start_amount = parseInt(start_amount)+parseInt(amount);
  				total = parseInt(total)+parseInt(amount);
  			}
  			
			$('.total_revenue_amount').html(total);
			$('.total_pending_amount').html(max_revenue_amount-total);
  			let extendAmount = start_amount - revenue_amount;
  			if(extendAmount >= 0){
  				start_amount = extendAmount;
  				$('.filbotle').eq(number_of_bottle).css("height",'100%');
  				number_of_bottle = number_of_bottle+1;

  			}
  			var percentage = start_amount * 100 / revenue_amount;
  			$('.filbotle').eq(number_of_bottle).css("height",percentage+'%');
  			if(number_of_bottle > 5){
  				$("#add_amount").attr("disabled", true);
  				$("#revenue_amount_error").addClass('error').html('Revenue amount complete');
  			}
  			
		});
  		

   });
</script>
</html>