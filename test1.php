<html xmlns="http://www.w3.org/1999/xhtml"><head>
		  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Recipes</title>
    <meta name="keywords" content="Recipes">
    <meta name="description" content="Find great, healthy recipes for any food, meal or dietary requirement.">
    <meta property="og:image" content="https://a.ftscrt.com/static/images/og_fatsecret.png">
    <link rel="icon" href="/favicon.png" type="image/png">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/touch-icon-ipad-retina.png">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,900&amp;display=swap">
    <link rel="stylesheet" href="https://a.ftscrt.com/static/css/default_35.css" type="text/css">
    <link rel="stylesheet" href="https://a.ftscrt.com/static/css/recipes/collections_2.css" type="text/css">
    <script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script><script src="https://a.ftscrt.com/static/script/Chart-custom.js" type="text/javascript"></script>

  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #7fd858;
    color: #245365;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #7fd858;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: blue !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
      @media not all, (-webkit-transform-3d)
.carousel-inner>.item {
    /* -webkit-transition: -webkit-transform .6s ease-in-out; */
    -o-transition: -o-transform .6s ease-in-out;
    transition: -webkit-transform .6s ease-in-out;
    /* transition: transform .6s ease-in-out; */
    /* transition: transform .6s ease-in-out,-webkit-transform .6s ease-in-out,-o-transform .6s ease-in-out; */
    /* -webkit-backface-visibility: hidden; */
    backface-visibility: hidden;
    -webkit-perspective: 1000px;
    perspective: 1000px;
}
  </style>
	</head>
	<body data-new-gr-c-s-check-loaded="14.1008.0" data-gr-ext-installed="">
		<form method="post" action="./Default.aspx?pa=recsh" id="ctl00" style="margin:0px">
<div class="aspNetHidden">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="eJk6ndEMLv3SagJbYhGTPX/iHQSVcddIO48HnNe+vTyWB66AtHxdFz620VvUnv2qifPWfWuTqBrUWS3hWWqqu+9DaXfFE5Mn/2dDzSi2KDTlr4DkrKtaAiegpHuQx+2tCiETo0q2MQ39JQlf">
</div>


<nav class="navbar navbar-default navbar-fixed-top" width="1000px">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
       <a class="navbar-brand" href=""><img src="image/Capture2.PNG" alt="logo" style="width:135px ; height: 60px; padding-bottom: 10px; margin-top: -15px ; margin-left: -35px;"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="blog.html"><b>HOME</b></a></li>
        <li><a href="#intro"><b>FOOD</b></a></li>
      
       <li><a href="#intro"><b>FITNESS</b></a></li>
          <li><a href="#"><b>RECIPE</b></a></li>
          <li><a href="#"><b>MENU SUGGESTION</b></a></li>
           <li><a href="http://localhost/calo-calc/calo-calc/dang-nhap.php" target="_blank"><b>LOGIN</b></a>
        </li>
     
     
        <li>       
  
 </li>

      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Welcome Count Calo</h1> 
 <p>Web App for recommendation of calories and nutritional menu</p>
 
</div>

<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CA0B0334">
</div>
			



			<div class="mainContent">
				<div class="logoPanel">
					<div class="centerContent">
						<div class="centerInnerContent">
							<div class="logoContent">
								


							</div>
						</div>
					</div>
				</div>
		
				<div class="centerContent">
					<div class="centerInnerContent">
						


						
						<div id="content" class="mem">
							

<table class="generic">
	<tbody><tr valign="top">
		<td class="leftCell">
			<div class="leftCellContent">
				<div class="TopLevelHeader recipe">
					<h1>Recipes</h1>
					<div class="desc">Find great recipes for any meal, food or diet, rated and reviewed for you.</div>
					<br>
					
					<div style="padding:0px 15px">
						<table class="generic">
							<tbody><tr valign="top">
								<td rowspan="4" width="245">
									<div class="featurebox">
										<h2 id="featuredHeading">Featured Today</h2>
										<h3 class="bigFeatured"><a href="/recipes/collections/meal/dessert/Default.aspx">Dessert Recipes</a></h3>
										
											<div class="realimg"><a href="/recipes/chocolate-no-bake-cookies/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/a8331dcb-2b58-4d73-a3ba-ba2e6175e303.jpg" width="200"></a></div>
										
										<h2 style="margin-top:6px" class="bigFeatured"><a href="/recipes/chocolate-no-bake-cookies/Default.aspx">Chocolate No Bake Cookies</a></h2>
										<div class="bottomfeaturebox">
											Quick and easy yummy chocolate cookies that require no baking.
											
												<div class="ratingimage">
													<img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/big-four-star.gif">
												</div>
											
											<div align="right" class="smallText viewmore"><b><a href="/recipes/collections/meal/dessert/Default.aspx">view more dessert recipes </a></b></div>
										</div>
									</div>
								</td>
								<td valign="top">
								
									<table class="featureditem" cellpadding="0" cellspacing="0">
										<tbody><tr valign="top">
											<td width="87" align="left">
												<div class="itemratingimg">
													
														<a href="/recipes/double-chocolate-brownies/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/da0421f2-aa0f-4193-886e-ad03e3a8b760_sq.jpg"></a>
													
												</div>
											</td>
											<td align="left">
												<h2 class="bigFeatured"><a href="/recipes/double-chocolate-brownies/Default.aspx">Double Chocolate Brownies</a></h2>
												Moist fudgy and so yummy chocolate brownies.
												<br>
												
													<img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/three-star.gif"> 	
												
											</td>
										</tr>
									</tbody></table>
								
								</td>
							</tr>
							
								<tr valign="top">
									<td>
										<table class="featureditems" cellpadding="0" cellspacing="0">
											<tbody><tr valign="top">
												<td width="87" align="left">	
													<div class="itemratingimg">
														
															<a href="/recipes/banana-zucchini-carrot-bread/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/a37832cc-2542-4957-892a-16bdbb294403_sq.jpg"></a>										
														
													</div>
												</td>
												<td align="left" width="100%">
													<h2 class="bigFeatured"><a href="/recipes/banana-zucchini-carrot-bread/Default.aspx">Banana Zucchini Carrot Bread</a></h2>
													Classic banana bread (or muffins) with a twist. 
													<br>
													
														<img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/four-star.gif">
													
												</td>
											</tr>
										</tbody></table>
									</td>
								</tr>
								
								<tr valign="top">
									<td>
										<table class="featureditems" cellpadding="0" cellspacing="0">
											<tbody><tr valign="top">
												<td width="87" align="left">	
													<div class="itemratingimg">
														
															<a href="/recipes/cheese-blintz/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/d1e20607-875c-4dcd-83b0-b8671c52a120_sq.jpg"></a>										
														
													</div>
												</td>
												<td align="left" width="100%">
													<h2 class="bigFeatured"><a href="/recipes/cheese-blintz/Default.aspx">Cheese Blintz</a></h2>
													A low carb, high protein cheese blintz.
													<br>
													
														<img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/three-star.gif">
													
												</td>
											</tr>
										</tbody></table>
									</td>
								</tr>
								
								<tr valign="top">
									<td>
										<table class="featureditems" cellpadding="0" cellspacing="0">
											<tbody><tr valign="top">
												<td width="87" align="left">	
													<div class="itemratingimg">
														
															<a href="/recipes/flourless-chocolate-chip-cookies/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/cf9935da-5d77-4d63-b57f-262e49e22757_sq.jpg"></a>										
														
													</div>
												</td>
												<td align="left" width="100%">
													<h2 class="bigFeatured"><a href="/recipes/flourless-chocolate-chip-cookies/Default.aspx">Flourless Chocolate Chip Cookies</a></h2>
													A sweet treat for carb counters.
													<br>
													
														<img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/two-star.gif">
													
												</td>
											</tr>
										</tbody></table>
									</td>
								</tr>
									
						</tbody></table>
					</div>
				</div>
				<br>
				
				<br>
				<h2>Recently Popular Recipes</h2>
				
<div style="width:100%">

	<table class="listtable" width="100%" cellpadding="0" cellspacing="0">
		
		<tbody><tr class="listrow">
			<td align="left" valign="top" width="50" class="borderBottom leftimages">
				
						
							<a href="/recipes/caramelized-brussels-sprouts/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/2afd1619-01c7-4abc-9a52-2aeffcef6c62_sq.jpg" width="50"></a>
						
				
			</td>
			<td class="borderBottom recipeSummary">
				<b><a href="/recipes/caramelized-brussels-sprouts/Default.aspx" class="prominent">
						
						Caramelized Brussels Sprouts </a></b>
				<br>
				<div class="smallText left">
					by member: <a href="/member/mrsjohnson0317">mrsjohnson0317</a>
				</div>
				<div class="topicsummary">
					Brussel sprout haters will be sure to change their mind after enjoying this fantastic dish.
				</div>
				<div class="smallText right">Per serve - Energy: 131kcal | Carb: 8.98g | Prot: 2.55g | Fat: 10.35g</div>
				
				<div style="float: left;" class="smallText">
					<img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/four-star.gif">
					&nbsp;&nbsp;
				</div>
				
			</td>
		</tr>
		
		<tr class="listrow">
			<td align="left" valign="top" width="50" class="borderBottom leftimages">
				
						
							<a href="/recipes/english-cottage-pie/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/091d5db1-17c1-4111-a5c7-4ca4a2af6540_sq.jpg" width="50"></a>
						
				
			</td>
			<td class="borderBottom recipeSummary">
				<b><a href="/recipes/english-cottage-pie/Default.aspx" class="prominent">
						
						English Cottage Pie </a></b>
				<br>
				<div class="smallText left">
					by member: <a href="/member/saswank80">saswank80</a>
				</div>
				<div class="topicsummary">
					A delicious, very traditional mince pie (beef) topped with mashed potato.
				</div>
				<div class="smallText right">Per serve - Energy: 287kcal | Carb: 24.58g | Prot: 22.15g | Fat: 11.12g</div>
				
				<div style="float: left;" class="smallText">
					<img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/four-star.gif">
					&nbsp;&nbsp;
				</div>
				
			</td>
		</tr>
		
		<tr class="listrow">
			<td align="left" valign="top" width="50" class="borderBottom leftimages">
				
						
							<a href="/recipes/chicken-marsala-ii/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/18c318e2-2e08-4660-9363-efe6f4b8a793_sq.jpg" width="50"></a>
						
				
			</td>
			<td class="borderBottom recipeSummary">
				<b><a href="/recipes/chicken-marsala-ii/Default.aspx" class="prominent">
						
						Chicken Marsala II </a></b>
				<br>
				<div class="smallText left">
					by member: <a href="/member/ImLuuvd">ImLuuvd</a>
				</div>
				<div class="topicsummary">
					A really healthy creamy chicken marsala.
				</div>
				<div class="smallText right">Per serve - Energy: 221kcal | Carb: 6.47g | Prot: 28.15g | Fat: 5.33g</div>
				
				<div style="float: left;" class="smallText">
					<img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/four-star.gif">
					&nbsp;&nbsp;
				</div>
				
			</td>
		</tr>
		
		<tr class="listrow">
			<td align="left" valign="top" width="50" class="borderBottom leftimages">
				
												
							<a href="/recipes/beef-stroganoff-ii/Default.aspx"><img src="https://a.ftscrt.com/static/images/box/recipe_default.jpg" width="51"></a>						
						
				
			</td>
			<td class="borderBottom recipeSummary">
				<b><a href="/recipes/beef-stroganoff-ii/Default.aspx" class="prominent">
						
						Beef Stroganoff II </a></b>
				<br>
				<div class="smallText left">
					by member: <a href="/member/copalmers">copalmers</a>
				</div>
				<div class="topicsummary">
					A better-than-boxed beef recipe that makes cooking from scratch easy.
				</div>
				<div class="smallText right">Per serve - Energy: 205kcal | Carb: 13.16g | Prot: 20.89g | Fat: 7.24g</div>
				
				<div style="float: left;" class="smallText">
					<img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/four-star.gif">
					&nbsp;&nbsp;
				</div>
				
			</td>
		</tr>
		
		<tr class="listrow">
			<td align="left" valign="top" width="50" class="borderBottom leftimages">
				
						
							<a href="/recipes/all-seed-crackers/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/88d2a086-d716-4a40-b380-69a6fb0d1677_sq.jpg" width="50"></a>
						
				
			</td>
			<td class="borderBottom recipeSummary">
				<b><a href="/recipes/all-seed-crackers/Default.aspx" class="prominent">
						
						All Seed Crackers </a></b>
				<br>
				<div class="smallText left">
					by member: <a href="/member/luvinlife09">luvinlife09</a>
				</div>
				<div class="topicsummary">
					These low carb crackers are amazing in that it's just seeds, water and spices.
				</div>
				<div class="smallText right">Per serve - Energy: 102kcal | Carb: 4.91g | Prot: 4.05g | Fat: 7.75g</div>
				
				<div style="float: left;" class="smallText">
					<img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/four-star.gif">
					&nbsp;&nbsp;
				</div>
				
			</td>
		</tr>
		
		<tr class="listrow">
			<td align="left" valign="top" width="50" class="borderBottom leftimages">
				
						
							<a href="/recipes/chicken-cordon-bleu/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/bf6c8957-c245-446c-a774-7cf991b9747d_sq.jpg" width="50"></a>
						
				
			</td>
			<td class="borderBottom recipeSummary">
				<b><a href="/recipes/chicken-cordon-bleu/Default.aspx" class="prominent">
						
						Chicken Cordon Bleu </a></b>
				<br>
				<div class="smallText left">
					by member: <a href="/member/Reina+Estrella">Reina Estrella</a>
				</div>
				<div class="topicsummary">
					A delightfully easy flavorful chicken dish that will surely become a favorite.
				</div>
				<div class="smallText right">Per serve - Energy: 601kcal | Carb: 4.39g | Prot: 81.23g | Fat: 26.67g</div>
				
				<div style="float: left;" class="smallText">
					<img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/four-star.gif">
					&nbsp;&nbsp;
				</div>
				
			</td>
		</tr>
		
		<tr class="listrow">
			<td align="left" valign="top" width="50" class="borderBottom leftimages">
				
						
							<a href="/recipes/asian-slaw/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/5687b0db-a14d-47e5-a2fe-f3f3dd954e87_sq.jpg" width="50"></a>
						
				
			</td>
			<td class="borderBottom recipeSummary">
				<b><a href="/recipes/asian-slaw/Default.aspx" class="prominent">
						
						Asian Slaw </a></b>
				<br>
				<div class="smallText left">
					by member: <a href="/member/noellehb">noellehb</a>
				</div>
				<div class="topicsummary">
					A spicy Asian coleslaw that's great for summer.
				</div>
				<div class="smallText right">Per serve - Energy: 64kcal | Carb: 7.37g | Prot: 1.22g | Fat: 3.80g</div>
				
				<div style="float: left;" class="smallText">
					<img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/four-star.gif">
					&nbsp;&nbsp;
				</div>
				
			</td>
		</tr>
		
		<tr class="listrow">
			<td align="left" valign="top" width="50" class="borderBottom leftimages">
				
												
							<a href="/recipes/low-carb-broccoli-cheese-soup/Default.aspx"><img src="https://a.ftscrt.com/static/images/box/recipe_default.jpg" width="51"></a>						
						
				
			</td>
			<td class="borderBottom recipeSummary">
				<b><a href="/recipes/low-carb-broccoli-cheese-soup/Default.aspx" class="prominent">
						
						Low Carb Broccoli Cheese Soup </a></b>
				<br>
				<div class="smallText left">
					by member: <a href="/member/Reina+Estrella">Reina Estrella</a>
				</div>
				<div class="topicsummary">
					A great low carb broccoli cheese soup that will definitely become a favorite.
				</div>
				<div class="smallText right">Per serve - Energy: 287kcal | Carb: 3.74g | Prot: 12.44g | Fat: 25.02g</div>
				
				<div style="float: left;" class="smallText">
					<img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/four-star.gif">
					&nbsp;&nbsp;
				</div>
				
			</td>
		</tr>
		
		<tr class="listrow">
			<td align="left" valign="top" width="50" class="borderBottom leftimages">
				
						
							<a href="/recipes/flax-bread/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/e9b36e69-99b1-49d1-b3bb-254dbcfaf9dd_sq.jpg" width="50"></a>
						
				
			</td>
			<td class="borderBottom recipeSummary">
				<b><a href="/recipes/flax-bread/Default.aspx" class="prominent">
						
						Flax Bread </a></b>
				<br>
				<div class="smallText left">
					by member: <a href="/member/Rusha">Rusha</a>
				</div>
				<div class="topicsummary">
					This easy microwaved 'bread' turns out perfect every time.
				</div>
				<div class="smallText right">Per serve - Energy: 171kcal | Carb: 5.96g | Prot: 5.84g | Fat: 14.47g</div>
				
				<div style="float: left;" class="smallText">
					<img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/three-star.gif">
					&nbsp;&nbsp;
				</div>
				
			</td>
		</tr>
		
		<tr class="listrow">
			<td align="left" valign="top" width="50" class="borderBottom leftimages">
				
												
							<a href="/recipes/taco-bake-/Default.aspx"><img src="https://a.ftscrt.com/static/images/box/recipe_default.jpg" width="51"></a>						
						
				
			</td>
			<td class="borderBottom recipeSummary">
				<b><a href="/recipes/taco-bake-/Default.aspx" class="prominent">
						
						Taco Bake </a></b>
				<br>
				<div class="smallText left">
					by member: <a href="/member/cjs_mama2000">cjs_mama2000</a>
				</div>
				<div class="topicsummary">
					An absolutely delicious bake the whole family will love that's low in points.
				</div>
				<div class="smallText right">Per serve - Energy: 170kcal | Carb: 25.45g | Prot: 11.15g | Fat: 2.95g</div>
				
				<div style="float: left;" class="smallText">
					<img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/three-star.gif">
					&nbsp;&nbsp;
				</div>
				
			</td>
		</tr>
		
		
	</tbody></table>

</div>

				<div align="right" class="smallText"><b><a href="/Default.aspx?pa=rs">view more recipes</a></b></div>
			</div>
		</td>
		<td class="rightCell">
			<div class="rightCellContent">
				<div class="noPrint">
					
<script language="javascript">
	function ctl08__ctrl_0_kitchenSearchDowned(evt){
		if(evt.keyCode == 13){
			ctl08__ctrl_0_kitchenSearch();
			return false;
		}
		return true;
	}
	function ctl08__ctrl_0_kitchenSearch(){
		var url = '';
		if(document.getElementById('ctl08__ctrl_0food').checked)
			url = '/calories-nutrition/search?q=';
		else if(document.getElementById('ctl08__ctrl_0meals').checked)
			url = '/calories-nutrition/meals?q=';
		else
			url = '/Default.aspx?pa=rs&recipe=';
			
		var exp = document.getElementById('ctl08__ctrl_0keywords').value;
		if(exp == 'Enter search') exp = '';
		window.location.href = url + escape(exp);
	}
	function ctl08__ctrl_0_OnClick(el){
		if(el.style.color != '#000000' && el.style.color != 'rgb(0, 0, 0)'){
			el.value='';
			el.style.color='#000000';
		}
		else
		{
			if(navigator.userAgent.indexOf('Chrome') != -1 || navigator.userAgent.indexOf('Apple') != -1)
				el.select();
		}
	}
	function ctl08__ctrl_0_OnFocus(el){
		if(el.style.color == '#000000' || el.style.color == 'rgb(0, 0, 0)'){
			if(!(navigator.userAgent.indexOf('Chrome') != -1 || navigator.userAgent.indexOf('Apple') != -1))
				el.select();
		}
	}
	function ctl08__ctrl_0_OnBlur(el){
		if(el.value==''){
			el.value='Enter search';
			el.style.color='#BFC3C2';
		}
	}
</script>


					<br>
					
<div class="fs_advert">
<div class="advertising">

<div id="div-gpt-ad-Local_Default_ATF_Right_300x250" style="height:250px; width:300px;">
<script type="text/javascript">
  googletag.cmd.push(function() { googletag.display('div-gpt-ad-Local_Default_ATF_Right_300x250'); });
</script>
</div>

</div>
</div>
					
<div class="dottedBox main solid icons" style="padding:5px">
	<h2><span style="line-height:30px;padding-left:15px">Browse Recipes Deeper</span></h2>
	<div class="hr">&nbsp;</div>
	<div class="selected">
		<span class="recipes_b">&nbsp;</span><a href="/recipes/Default.aspx" onclick="return false">Recipes</a>
	</div>
	
	<div class="hr">&nbsp;</div>
	<div class="topHeader">Meal Types</div>
	
	<div class="selectable" onclick="onFSBoxItemClick(this)">
		<div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/meal/appetizer/Default.aspx" onclick="return false">Appetizer</a></div>
	</div>

	
	<div class="selectable" onclick="onFSBoxItemClick(this)">
		<div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/meal/breakfast/Default.aspx" onclick="return false">Breakfast</a></div>
	</div>
	
	<div class="selectable" onclick="onFSBoxItemClick(this)">
		<div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/meal/dessert/Default.aspx" onclick="return false">Dessert</a></div>
	</div>
	

	
	<div class="selectable" onclick="onFSBoxItemClick(this)">
		<div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/meal/lunch/Default.aspx" onclick="return false">Lunch</a></div>
	</div>
	


	
	
	<div class="hr">&nbsp;</div>
	<div class="topHeader">Foods &amp; Ingredients</div>
	
	<div class="selectable" onclick="onFSBoxItemClick(this)">
		<div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/ingredients/dairy/Default.aspx" onclick="return false">Dairy</a></div>
	</div>
	
	<div class="selectable" onclick="onFSBoxItemClick(this)">
		<div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/ingredients/fruit/Default.aspx" onclick="return false">Fruit</a></div>
	</div>
	
	<div class="selectable" onclick="onFSBoxItemClick(this)">
		<div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/ingredients/grain/Default.aspx" onclick="return false">Grain</a></div>
	</div>
	
	<div class="selectable" onclick="onFSBoxItemClick(this)">
		<div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/ingredients/herbs-spices-and-sauces/Default.aspx" onclick="return false">Herbs, Spices and Sauces</a></div>
	</div>
	
	<div class="selectable" onclick="onFSBoxItemClick(this)">
		<div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/ingredients/meat/Default.aspx" onclick="return false">Meat</a></div>
	</div>
	
	<div class="selectable" onclick="onFSBoxItemClick(this)">
		<div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/ingredients/seafood/Default.aspx" onclick="return false">Seafood</a></div>
	</div>
	
	<div class="selectable" onclick="onFSBoxItemClick(this)">
		<div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/ingredients/vegetable/Default.aspx" onclick="return false">Vegetable</a></div>
	</div>
	
	<div class="hr">&nbsp;</div>
	<div class="topHeader">Diet &amp; Nutrition</div>
	
	<div class="selectable" onclick="onFSBoxItemClick(this)">
		<div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/dairy-free/Default.aspx" onclick="return false">Dairy Free</a></div>
	</div>
	
	<div class="selectable" onclick="onFSBoxItemClick(this)">
		<div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/diabetic/Default.aspx" onclick="return false">Diabetic</a></div>
	</div>
	
	<div class="selectable" onclick="onFSBoxItemClick(this)">
		<div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/gluten-free/Default.aspx" onclick="return false">Gluten Free</a></div>
	</div>
	
	<div class="selectable" onclick="onFSBoxItemClick(this)">
		<div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/high-fiber/Default.aspx" onclick="return false">High Fiber</a></div>
	</div>
	
	<div class="selectable" onclick="onFSBoxItemClick(this)">
		<div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/high-protein/Default.aspx" onclick="return false">High Protein</a></div>
	</div>
	
	<div class="selectable" onclick="onFSBoxItemClick(this)">
		<div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/low-calorie/Default.aspx" onclick="return false">Low Calorie</a></div>
	</div>
	
	<div class="selectable" onclick="onFSBoxItemClick(this)">
		<div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/low-carb/Default.aspx" onclick="return false">Low Carb</a></div>
	</div>
	
	<div class="selectable" onclick="onFSBoxItemClick(this)">
		<div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/low-cholesterol/Default.aspx" onclick="return false">Low Cholesterol</a></div>
	</div>
	
	<div class="selectable" onclick="onFSBoxItemClick(this)">
		<div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/low-fat/Default.aspx" onclick="return false">Low Fat</a></div>
	</div>
	
	<div class="selectable" onclick="onFSBoxItemClick(this)">
		<div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/low-gi/Default.aspx" onclick="return false">Low GI</a></div>
	</div>
	
	<div class="selectable" onclick="onFSBoxItemClick(this)">
		<div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/low-sodium/Default.aspx" onclick="return false">Low Sodium</a></div>
	</div>
	
	<div class="selectable" onclick="onFSBoxItemClick(this)">
		<div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/low-sugar/Default.aspx" onclick="return false">Low Sugar</a></div>
	</div>
	
	<div class="selectable" onclick="onFSBoxItemClick(this)">
		<div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/sugar-free/Default.aspx" onclick="return false">Sugar Free</a></div>
	</div>
	
	<div class="selectable" onclick="onFSBoxItemClick(this)">
		<div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/weight-watchers-points/Default.aspx" onclick="return false">Weight Watchers Points</a></div>
	</div>
	
</div>

					



					


				</div>
			</div>
		</td>
	</tr>
</tbody></table>

						</div>
					</div>
				</div>
			</div>



<?php
require 'recipes/recipe.php';

$users = getUsers();

?>



<div class="container" style="">
 

    <table class="listtable" width="100%" cellpadding="0" cellspacing="0" float="center" text-align="center">
       
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr tr class="listrow">
                <td align="left" valign="top" width="50" class="borderBottom leftimages">
                    <?php if (isset($user['extension'])): ?>
                        <img style="width: 50px; height: 50px;" src="<?php echo "recipes/images/${user['id']}.${user['extension']}" ?>" alt="">
                    <?php endif; ?>
                </td>
<br>    <hr>    
                   
                <td class="borderBottom recipeSummary">
             
                      <b><a href="/recipes/caramelized-brussels-sprouts/Default.aspx" class="prominent">    <?php echo $user['name'] ?>
            
            </a></b>      
<a href="viewrecipe.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-info">View</a>
  </td>
            

            </tr>
        <?php endforeach;; ?>
        </tbody>
    </table>

</div>
















			<div class="footerPanel" align="right">
				

<div class="middlePanel">
    <div class="social">
        <a target="blank" href="">
            <img src="https://a.ftscrt.com/static/images/social/but_social_facebook.svg" width="40">
        </a>
        <a target="blank" href="">
            <img src="https://a.ftscrt.com/static/images/social/but_social_instagram.svg" width="40">
        </a>
        <a target="blank" href="">
            <img src="https://a.ftscrt.com/static/images/social/but_social_twitter.svg" width="40">
        </a>
    </div>
    <div class="top">
        <a href="/">food list</a>
        <a href="">brand list</a>
        <a target="blank" href="">platform</a>
        <a target="blank" href="">professional</a>
        <a href="/">contact</a>
    </div>
    <div class="bottom">
        <a href="/">find people</a>
        <span class="sep">|</span>
        <a href="/">faq</a>
        <span class="sep">|</span>
        <a target="blank" href="">blog</a>
        <span class="sep">|</span>
        <a href="/">terms</a>
        <span class="sep">|</span>
        <a href="/">privacy</a>
        <span class="sep">|</span>
        <a href="">report abuse</a>
    </div>
</div>
<div class="bottomPanel">
    <div class="centerContent">
        <div class="centerInnerContent">
            <span> 2021 CountCalo. All rights reserved.</span>
            <span>VIETNAM</span>

        </div>
    </div>
</div>
			</div>
		</form>
		
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-716779-1']);
		_gaq.push(['_setCustomVar', 1, 'member-name', 'datle123', 1]);
		_gaq.push(['_trackPageview']);

		(function () {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>

	
</body></html>