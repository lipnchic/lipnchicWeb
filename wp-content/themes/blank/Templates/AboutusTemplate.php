<?php
	/* Template Name: Aboutus */
	get_header();
?>

<style type="text/css">
	.about{
	cursor: pointer;
	background-color: rgb(181,217,215);
	color: #FFFFFF;
	padding-top: 20px;
	padding-bottom: 30px;
}
.about h1 {
	padding: 10px 0;
	margin-bottom: 20px;
}
.about h2 {
	opacity: .8;
	color: rgb(173,148,92);
}
.about img{
	display: block;
	width: 80px;
	height: 80px;
	line-height: 100px;
	margin:auto;
	border-radius:50%;  
	font-size: 20px;
	color: black;
	border: 2px solid rgb(209,187,210);
}
.about span {
	display: block;
	width: 80px;
	height: 80px;
	line-height: 100px;
	margin:auto;
	border-radius:50%;  
	font-size: 20px;
	color: black;
	opacity: 0.7;
	border: 2px solid rgb(209,187,210);

	webkit-transition:all .5s ease;
 	moz-transition:all .5s ease;
 	os-transition:all .5s ease;
 	transition:all .5s ease;

}
.about-item:hover span{
	opacity: 1;	
	border: 2px solid rgb(209,187,210);
	font-size: 42px;
	-webkit-transform: scale(1.1,1.1) rotate(360deg) ;
	-moz-transform: scale(1.1,1.1) rotate(360deg) ;
	-o-transform: scale(1.1,1.1) rotate(360deg) ;
	transform: scale(1.1,1.1) rotate(360deg) ;
}
.about-item:hover h2{
	opacity: 1;
	-webkit-transform: scale(1.1,1.1)  ;
	-moz-transform: scale(1.1,1.1)  ;
	-o-transform: scale(1.1,1.1)  ;
	transform: scale(1.1,1.1) ;
}
.about .lead{
	color: black;
	font-size: 20px;
	font-weight: bold;
}
.center_div{
		background-color: rgb(58,59,58);
		-webkit-box-shadow:inset 0px 0px 0px 4px mintcream;"
		padding: 0;
		margin: 0;
		position: absolute;
		top: 28%;
		left: 40%;
		font-family: Edwardian Script ITC;
	}

</style>

<div class="center_div" style="width: 600px; height: 300px;">
 <section class="text-center about">
      <div class="container">
          <div class="col-md-6 about-item wow lightSpeedIn" data-wow-offset="200" >
            <span><img src="http://localhost/LipNChic/wp-content/uploads/2021/05/6e50801a96af2b4ef48072854cfd1917.jpg);"></span>
            <h2>Lip N Chic</h2>
            <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
            <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum </p>
            <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
          </div>
        
      </div>
    </section>
   </div>