
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
        <div class="NBBox NBMainBox">
          <div style="" class="topoutbox">
            <table class="generic">
              <tbody><tr valign="middle">
                <td width="*" class="center">
                  <div class="bottom">
                    <h1>Breakfast Recipes</h1>
                  </div>
                </td>
              </tr>
            </tbody></table>
          </div>
        </div>
          
<div class="NBBox NBMainBox NBRecBox">
  <div class="innerBox">
    <table class="generic" style="table-layout:fixed;">
      <colgroup>
        <col width="140">
        <col width="*">
        <col width="140">
      </colgroup>
      <tbody><tr valign="top">
        <td align="left">
        
          <div class="bigFeaturedImage">
            <a href="/recipes/torta-di-mele-(apple-cake)/Default.aspx">
              <img border="0" src="https://m.ftscrt.com/static/recipe/6dace30e-dbe9-482a-89c9-cf67e57d7c65.jpg" width="150">
            </a>
          </div>
        
        </td>
        <td class="center">
          <div class="topPart">
            <div>
              <h3 class="bigFeatured">Featured Recipe</h3>

              <h2 class="bigFeatured"><a href="/recipes/torta-di-mele-(apple-cake)/Default.aspx">Torta di Mele (Apple Cake)</a></h2>
            </div>
          </div>
          <div class="bigFeaturedDes">
            A great breakfast apple cake.
            <div class="allRatings">
              <img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/big-three-star.gif">
              <p>
                average rating</p>
            </div>
            
          </div>
        </td>
        
      </tr>
    </tbody></table>
  </div>
</div>

<table class="generic">
    
      <tbody><tr valign="top">

        <td width="50%" align="left">
          <table class="generic">
            <tbody><tr valign="top">
              <td width="87" align="left">  
                <div class="smFeaturedImage">

                
                  <a href="/recipes/fruit-smoothie/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/19429fe5-2673-4e58-a066-08e63ac36e0d_sq.jpg"></a>
                
                </div>
              </td>
              <td width="*" align="left">

                
              
                  <img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/big-four-star.gif" class="smRating">
                    
                
              
                <h2 class="featuredItems"><a href="/recipes/fruit-smoothie/Default.aspx">Fruit Smoothie</a></h2>
                <div>Low calorie version of a smoothie that will satisfy a sweet tooth without sending you into sugar shock. It's thick enough that it can be eaten as a sorbet.</div>

              </td>
            </tr>
          </tbody></table>  
        </td>
        <td width="50%" align="left">
          <table class="generic">
            <tbody><tr valign="top">
              <td width="87" align="left">                  
                <div class="smFeaturedImage">
                
                  <a href="/recipes/breakfast-frittata/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/40ad182c-3af7-4d6b-ab4a-f0a840be7c2e_sq.jpg"></a>
                
                </div>
              </td>
              <td width="*" align="left">
                
              
                  <img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/big-four-star.gif" class="smRating">
                    
                
                <h2 class="featuredItems"><a href="/recipes/breakfast-frittata/Default.aspx">Breakfast Frittata</a></h2>
                <div>A tasty low carb, vegetarian style breakfast treat that will have you licking your fingers and begging for more.</div>
              </td>
            </tr>
          </tbody></table>  
        </td> 
      </tr>
      <tr><td colspan="2"><hr></td></tr>
      <tr valign="top">

        <td width="50%" align="left">
          <table class="generic">
            <tbody><tr valign="top">
              <td width="87" align="left">  
                <div class="smFeaturedImage">

                
                  <a href="/recipes/zucchini-ricotta-frittata/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/f0a193d6-1ae6-46f3-ae03-91e7de755846_sq.jpg"></a>
                
                </div>
              </td>
              <td width="*" align="left">

                
              
                  <img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/big-four-star.gif" class="smRating">
                    
                
              
                <h2 class="featuredItems"><a href="/recipes/zucchini-ricotta-frittata/Default.aspx">Zucchini Ricotta Frittata</a></h2>
                <div>A delicious cheesy and veggie egg dish for breakfast or lunch.</div>

              </td>
            </tr>
          </tbody></table>  
        </td>
        <td width="50%" align="left">
          <table class="generic">
            <tbody><tr valign="top">
              <td width="87" align="left">                  
                <div class="smFeaturedImage">
                
                  <a href="/recipes/banana-pancakes/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/c139ba6f-9189-4d9d-93ab-afbe930ed2d1_sq.jpg"></a>
                
                </div>
              </td>
              <td width="*" align="left">
                
              
                  <img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/big-four-star.gif" class="smRating">
                    
                
                <h2 class="featuredItems"><a href="/recipes/banana-pancakes/Default.aspx">Banana Pancakes</a></h2>
                <div>Crowd pleasing banana pancakes are a fun twist on regular pancakes.</div>
              </td>
            </tr>
          </tbody></table>  
        </td> 
      </tr>
      
    

</tbody></table>
  
          <br>
          
<div style="width:100%">

  <table class="listtable" width="100%" cellpadding="0" cellspacing="0">
    
    <tbody><tr class="listrow">
      <td align="left" valign="top" width="50" class="borderBottom leftimages">
        
            
              <a href="/recipes/baked-oatmeal-cupcakes/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/03868873-10bc-4210-a284-dda0fabbf63f_sq.jpg" width="60"></a>
            
        
      </td>
      <td class="borderBottom recipeSummary">
        <b><a href="/recipes/baked-oatmeal-cupcakes/Default.aspx" class="prominent">
            
            Baked Oatmeal Cupcakes </a></b>
        <br>
      
        <div class="topicsummary" style="color: black ; font-size: 14px">
          Soft oatmeal cups for breakfast on the go.
        </div>
        <div class="smallText right" style="color: black ; font-size: 12px">Per serve - Energy: 125kcal | Carb: 18.21g | Prot: 2.37g | Fat: 5.45g</div>
        
        <div style="float: left;" class="smallText">
          <img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/five-star.gif">
          &nbsp;&nbsp;
        </div>
        
      </td>
    </tr>
    
    <tr class="listrow">
      <td align="left" valign="top" width="50" class="borderBottom leftimages">
        
            
              <a href="/recipes/banana-blast/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/6c450bb8-f38d-4bcb-87ea-a7b1faf7c51f_sq.jpg" width="60"></a>
            
        
      </td>
      <td class="borderBottom recipeSummary">
        <b><a href="/recipes/banana-blast/Default.aspx" class="prominent">
            
            Banana Blast </a></b>
        <br>
    
        <div class="topicsummary" style="color: black ; font-size: 14px">
          Protein banana smoothie.
        </div>
        <div class="smallText right" style="color: black ; font-size: 12px">Per serve - Energy: 199kcal | Carb: 32.09g | Prot: 14.61g | Fat: 2.09g</div>
        
        <div style="float: left;" class="smallText">
          <img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/five-star.gif">
          &nbsp;&nbsp;
        </div>
        
      </td>
    </tr>
    
    <tr class="listrow">
      <td align="left" valign="top" width="50" class="borderBottom leftimages">
        
            
              <a href="/recipes/banana-bread-v/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/b2c04a60-6860-4cb8-8cb0-711608ddb5c5_sq.jpg" width="60"></a>
            
        
      </td>
      <td class="borderBottom recipeSummary">
        <b><a href="/recipes/banana-bread-v/Default.aspx" class="prominent">
            
            Banana Bread V </a></b>
        <br>
     
        <div class="topicsummary" style="color: black ; font-size: 14px">
          A deliciously moist, easy-to-make banana bread that can accommodate paleo and gluten-free diets.
        </div>
        <div class="smallText right" style="color: black ; font-size: 12px">Per serve - Energy: 293kcal | Carb: 24.55g | Prot: 7.36g | Fat: 20.00g</div>
        
        <div style="float: left;" class="smallText">
          <img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/five-star.gif">
          &nbsp;&nbsp;
        </div>
        
      </td>
    </tr>
    
    <tr class="listrow">
      <td align="left" valign="top" width="50" class="borderBottom leftimages">
        
            
              <a href="/recipes/banana-muffins/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/9a6ed2cd-cc83-485e-8c40-061513131418_sq.jpg" width="50"></a>
            
        
      </td>
      <td class="borderBottom recipeSummary">
        <b><a href="/recipes/banana-muffins/Default.aspx" class="prominent">
            
            Banana Muffins </a></b>
        <br>
       
        <div class="topicsummary" style="color: black ; font-size: 14px">
          A banana muffin recipe ideal for a breakfast on the go or a snack.
        </div>
        <div class="smallText right" style="color: black ; font-size: 12px">Per serve - Energy: 187kcal | Carb: 36.44g | Prot: 5.65g | Fat: 3.05g</div>
        
        <div style="float: left;" class="smallText">
          <img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/five-star.gif">
          &nbsp;&nbsp;
        </div>
        
      </td>
    </tr>
    
    <tr class="listrow">
      <td align="left" valign="top" width="50" class="borderBottom leftimages">
        
            
              <a href="/recipes/banana-wheat-waffles/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/b3c63543-4ac5-45d4-b4bf-5ab340b5d8c7_sq.jpg" width="60"></a>
            
        
      </td>
      <td class="borderBottom recipeSummary">
        <b><a href="/recipes/banana-wheat-waffles/Default.aspx" class="prominent">
            
            Banana Wheat Waffles </a></b>
        <br>
      
        <div class="topicsummary" style="color: black ; font-size: 14px">
          Banana wheat waffles in a Belgian waffle maker.
        </div>
        <div class="smallText right" style="color: black ; font-size: 12px">Per serve - Energy: 290kcal | Carb: 53.79g | Prot: 12.68g | Fat: 3.86g</div>
        
        <div style="float: left;" class="smallText">
          <img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/five-star.gif">
          &nbsp;&nbsp;
        </div>
        
      </td>
    </tr>
    
    <tr class="listrow">
      <td align="left" valign="top" width="50" class="borderBottom leftimages">
        
            
              <a href="/recipes/banana-chocolate-breakfast-muffins/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/53859bf7-23f7-4b90-8483-d8022fa05bc2_sq.jpg" width="60"></a>
            
        
      </td>
      <td class="borderBottom recipeSummary">
        <b><a href="/recipes/banana-chocolate-breakfast-muffins/Default.aspx" class="prominent">
            
            Banana-Chocolate Breakfast Muffins </a></b>
        <br>
      
        <div class="topicsummary" style="color: black ; font-size: 14px">
          Vegan, gluten free and low in sugar.
        </div>
        <div class="smallText right" style="color: black ; font-size: 12px">Per serve - Energy: 80kcal | Carb: 15.19g | Prot: 1.86g | Fat: 2.25g</div>
        
        <div style="float: left;" class="smallText">
          <img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/five-star.gif">
          &nbsp;&nbsp;
        </div>
        
      </td>
    </tr>
  



    


    


    
  </tbody></table>

</div>

       
        
        
      </div>
    </td>
    <td class="rightCell">
      <div class="rightCellContent">
        <div class="noPrint">


          <br>
          
<div class="dottedBox main solid icons" style="padding:5px">
  
  <div class="hr">&nbsp;</div>
  <div class="selectable" onclick="onFSBoxItemClick(this)">
    <span class="recipes_bm">&nbsp;</span><a href="/recipes/Default.aspx" onclick="return false">Recipes</a>
  </div>
  
  <div class="hr">&nbsp;</div>
  <div class="topHeader">Meal Types</div>
  
  <div class="selectable" >
    <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="Recipe1.php" >Appetizer</a></div>
  </div>
  
 
  <div class="selected">
    <div style="padding-left:0px"><span class="recipes_b">&nbsp;</span><a href="Recipe 2.php">Breakfast</a></div>
  </div>
  
  
  <div class="selectable" onclick="onFSBoxItemClick(this)">
    <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="Recipe.php" >Dessert</a></div>
  </div>
  
 
  <div class="selectable" onclick="onFSBoxItemClick(this)">
    <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/meal/lunch/Default.aspx" onclick="return false">Lunch</a></div>
  </div>
  
 
  
  <div class="hr">&nbsp;</div>
  <div class="topHeader">Foods &amp; Ingredients</div>
  
 
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
    <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/diabetic/Default.aspx" onclick="return false">Diabetic</a></div>
  </div>
  
  <div class="selectable" onclick="onFSBoxItemClick(this)">
    <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/gluten-free/Default.aspx" onclick="return false">Gluten Free</a></div>
  </div>
  
  
  <div class="selectable" onclick="onFSBoxItemClick(this)">
    <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/low-calorie/Default.aspx" onclick="return false">Low Calorie</a></div>
  </div>
  
  <div class="selectable" onclick="onFSBoxItemClick(this)">
    <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/low-carb/Default.aspx" onclick="return false">Low Carb</a></div>
  </div>

  
  <div class="selectable" onclick="onFSBoxItemClick(this)">
    <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/low-fat/Default.aspx" onclick="return false">Low Fat</a></div>
  </div>
  
 
  
</div>

          <br>


         
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
 
<p>Other Recipe</p>
    <table class="listtable" width="100%" cellpadding="0" cellspacing="0" float="left" text-align="left">
       
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr  class="listrow">
                <td align="left" valign="top" width="80" class="borderBottom leftimages" >
                    <?php if (isset($user['extension'])): ?>
                        <img style="width: 70px; height: 70px;" src="<?php echo "recipes/images/${user['id']}.${user['extension']}" ?>" alt="">
                    <?php endif; ?>
                </td>
    
                   
                <td class="borderBottom recipeSummary" >
             
                      <b><a href="/recipes/caramelized-brussels-sprouts/Default.aspx" class="prominent">    <?php echo $user['name'] ?>
            
            </a></b>      
<a href="viewrecipe1.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-info">View</a>
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













  

  <!-- Modal -->
  

