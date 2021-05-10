<?php
	/* Template Name: Contact */
	get_header();
?>
<div class="icons" style="position: absolute; left: 8%; top: 80%;">
	<img src="http://localhost/LipNChic/wp-content/uploads/2021/05/ig.png" alt="Logo" style="width:100px;">
	<img src="http://localhost/LipNChic/wp-content/uploads/2021/05/fb.png" alt="Logo" style="width:100px;">
	<img src="http://localhost/LipNChic/wp-content/uploads/2021/05/twitter.png" alt="Logo" style="width:100px;">
</div>

<div class="center_div">
	<div class="container" style="width: 850px; height: 420px;">
	    <div style="background-color: rgb(181,217,215); margin: 5px;">
	    	<h1 class="text-center" style="color: black;">Get in touch with us!</h1></div>
	<div class="row">
		<div class="col-md-6">
		    <div class="text-center">
		    	<p style="font-size: 25px;"><b>If you got any concerns,</b></p>
				<p style="font-size: 25px;"><b>please do not hesitate to send us message.</b></p>
			</div>
		</div>
		<div class="col-md-6">
			<img src="http://localhost/LipNChic/wp-content/uploads/2021/05/phone.png" alt="Logo" style="width:30px; padding-top: 8px;">
			<label style="padding-left: 20px;">+63 911 234 5678</label>
			<br>
			<img src="http://localhost/LipNChic/wp-content/uploads/2021/05/mess.png" alt="Logo" style="width:30px; padding-top: 5px;">
			<label style="padding-left: 20px;">+63 911 234 5678</label>
		</div>
	</div>   

	    <div class="row">
	        <div class="col-md-6">
	            <form class="my-form" >
	                <div class="form-group">
	                	<br>
	                    <input type="email" class="form-control" id="form-name" placeholder="Name" >
	                    <input type="email" class="form-control" id="form-email" placeholder="Email Address">
	                    <input type="text" class="form-control" id="form-subject" placeholder="Subject">
	                    <textarea class="form-control" id="form-message" placeholder="Message"></textarea>
	                </div>
	                <div style="padding-left: 160px;"><button class="btn btn-secondary" type="submit" >Contact Us</button></div>
	            </form>
	        </div>
	        <div class="col-md-6">
	            <div id="googlemap" style="width:100%; height:230px; "></div>
	        </div>
	        <br />
	    </div>
	</div>
</div>

<style>
	.center_div{
		background-color: rgb(58,59,58);
		-webkit-box-shadow:inset 0px 0px 0px 4px mintcream;"
		padding: 0;
		margin: 0;
		position: absolute;
		top: 28%;
		left: 35%;
		font-family: Edwardian Script ITC;
		color: mintcream
	}
	.my-form input{
		width: 400px;
	}
	.my-form textarea{
		width: 400px;
	}
    .my-form {
        color: #305896;
    }
    .my-form .btn-default {
        background-color: #305896;
        color: #fff;
        border-radius: 0;
    }
    .my-form .btn-default:hover {
        background-color: #4498C6;
        color: #fff;
    }
    .my-form .form-control {
        border-radius: 0;
    }
</style>

<script src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
    jQuery(function ($) {
        // Google Maps setup
        var googlemap = new google.maps.Map(
            document.getElementById('googlemap'),
            {
                center: new google.maps.LatLng(44.5403, -78.5463),
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
        );
    });
</script>