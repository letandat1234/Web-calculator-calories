
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

     



<div class="centerContent">
          <div class="centerInnerContent">
            


            
            <div id="content" class="mem">
              
<style>
  .smallText .memberImage{vertical-align:middle}
  #content .NBRecBox h2{ color:#999;margin-bottom:2px;text-transform:none;font-size:15px }
  #content .NBBox h3{ text-transform:none;font-size:15px;margin-top:8px; }
  ul.plain{ margin:0px;padding:0px;list-style:none;list-image:none; }
  ol.noind{ margin-top:0px;margin-left:11px;padding-left:10px;}
  div.analysis .list tr.header td{ padding:2px;background-color:#BACFE6;color:#FFF!important;font-weight:bold;text-transform:capitalize;font-size:11px;}
  div.servings{ padding: 10px;margin-top:30px;font-size:14px;line-height:15px;width:140px;}
  div.servings b{ color: #666; }
  div.imgFrame{ border:1px solid #EBF9FC;background-color:#EBF9FC }
  div.imgAdd{margin:5px 0px 3px 5px;}
</style>
<article id="Contents">
    <div class="container">
        <div class="row">
            <div id="Main" class="col-sm-8">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="block-detail">
                            <div class="block-detail-time"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">November 29, 2019</font></font></div>
                            <h2 class="block-detail-ttl"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Suggest a healthy diet to lose weight in 7 effective days</font></font></h2>
                            <h3 class="block-detail-description"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">To lose weight fast but still ensure health. </font><font style="vertical-align: inherit;">You need to have a clear plan, detail your calorie intake and especially know how to choose healthy food sources. </font><font style="vertical-align: inherit;">If you do not know where to start, you can refer to the healthy weight loss menu 7 days later.</font></font></h3>
                        </div>
                        <!-- block-detail -->

                        <div class="block-detail-content">
                         
<p><span style="font-size: 20px;"><strong><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 / How many calories do you need to lose weight a day?</font></font></strong></strong></span></p>
<p><span style="font-weight: 400; font-size: 16px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Each person will have different caloric needs based on their basal metabolic rate as well as the frequency of activity and exercise. </font><font style="vertical-align: inherit;">In particular, the amount of calories depends on the sex, often the average caloric content of women will be lower than men.&nbsp;</font></font></span></p>

<p><span style="font-weight: 400; font-size: 16px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">It is recommended that women aged 19-52 need between 1800 and 2000 calories per day (young women need more than older women. Meanwhile, men 19-51 years need between 2,200 and 2,4,000 calories per day. In order to lose weight, besides exercise, the body needs to cut down on calories, for example, women should maintain a diet below 2000 calories per day. Sudden calorie intake requires a specific, step-by-step schedule.First of all, you need to make the following basic changes:</font></font></span></p>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400; font-size: 16px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gradually replace white rice with oats and brown rice</font></font></span></li>
<li style="font-weight: 400;"><span style="font-weight: 400; font-size: 16px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cut back on unhealthy foods (carbonated drinks, sweets, greasy foods)</font></font></span></li>
<li style="font-weight: 400;"><span style="font-weight: 400; font-size: 16px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Drink a lot of water&nbsp;</font></font></span></li>
<li style="font-weight: 400;"><span style="font-weight: 400; font-size: 16px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Enhance green vegetables, low-sugar fruits</font></font></span></li>
<li style="font-weight: 400;"><span style="font-weight: 400; font-size: 16px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Get enough sleep, exercise regularly&nbsp;</font></font></span></li>
</ul>
<p><span style="font-size: 20px;"><strong><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2 / Suggest a healthy diet for 7 days</font></font></strong></strong></span></p>
<p><span style="font-weight: 400; font-size: 16px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">After your body adapts to the above changes, you will need to have a healthy weight loss menu that is suitable, maybe 1 week, 1 month or 3 months. </font><font style="vertical-align: inherit;">Note that when planning, you should try to have a variety of foods to avoid boredom. </font><font style="vertical-align: inherit;">Below is a healthy diet in 7 days recommended menu, women can refer to.</font></font></span></p>
<p><span style="font-size: 16px;"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Healthy diet for weight loss day 1:</font></font></strong></span></p>
<p><span style="font-weight: 400; font-size: 16px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Morning:&nbsp;</font></font></span></p>
<ul>
<li style="font-weight: 400;"><em><span style="font-size: 16px;"><span style="font-weight: 400;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¾ cup </font></font></span><strong><a href="https://www.organica.vn/ngu-coc-dau-va-hat/yen-mach-can-mong-huu-co"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">rolled oats 218 calories</font></font></a></strong></span></em></li>
<li style="font-weight: 400;"><em><span style="font-weight: 400; font-size: 16px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 banana 105 calories</font></font></span></em></li>
<li style="font-weight: 400;"><em><span style="font-weight: 400; font-size: 16px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 cup of skim milk 86 calories</font></font></span></em>&nbsp;</li>
</ul>
<p style="text-align: center;"><span class="tceditor-image"><img src="https://y5kbp0ifnvobj.vcdn.cloud/uploads/filecloud/2019/November/29/4461-334511575019523-1575019523.png" alt="" width="600" height="464"></span><span style="font-weight: 400; font-size: 16px;"><span class="tceditor-image"><span class="tceditor-image"><span class="tceditor-image">&nbsp;</span></span></span></span></p>
<p><span style="font-weight: 400; font-size: 16px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lunch: Sandwich with:</font></font></span></p>
<ul>
<li style="font-weight: 400;"><em><span style="font-size: 16px;"><span style="font-weight: 400;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">112g </font></font></span><a href="https://www.organica.vn/thit-va-thuy-hai-san/uc-ga-ta-phan-rang"><span style="font-weight: 400;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">chicken breast 165 calories</font></font></span></a></span></em></li>
<li style="font-weight: 400;"><em><span style="font-size: 16px;"><span style="font-weight: 400;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 slice </font></font></span><a href="https://www.organica.vn/san-pham-che-bien/banh-mi-que-hat-bi-ngo-huu-co-haubis-280g"><span style="font-weight: 400;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">of grain bread 65 calories</font></font></span></a></span></em></li>

</ul>
<p style="text-align: center;"><span style="font-size: 16px;"><span style="font-weight: 400;"><img src="https://y5kbp0ifnvobj.vcdn.cloud/uploads/filecloud/2019/November/29/4457-983071575019523-1575019523.png" alt="" width="604" height="595"></span></span></p>
<p><span style="font-weight: 400; font-size: 16px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Evening: Salmon / tuna served with mashed potatoes 291 caloreis, cauliflower 192 calories</font></font></span></p>
<p style="text-align: center;"><span style="font-weight: 400; font-size: 16px;"><img src="https://y5kbp0ifnvobj.vcdn.cloud/uploads/filecloud/2019/November/29/4462-377931575019523-1575019523.png" alt="" width="600" height="525"></span></p>
<p><span style="font-size: 16px;"><strong>Healthy diet for weight loss day 2:
&nbsp;</strong></span></p>
<p><span style="font-weight: 400; font-size: 16px;">Morning: Banana butter smoothie 199 calories + 2 boiled eggs 156 calories</span></p>
<p style="text-align: center;"><span style="font-weight: 400; font-size: 16px;"><img src="https://y5kbp0ifnvobj.vcdn.cloud/uploads/filecloud/2019/November/29/4459-603211575019523-1575019523.png" alt="" width="583" height="369"></span></p>
<p><span style="font-weight: 400; font-size: 16px;">Lunch: Vegetable Soup 169 calories</span></p>
<p style="text-align: center;"><span style="font-weight: 400; font-size: 16px;"><span class="tceditor-image"><img src="https://y5kbp0ifnvobj.vcdn.cloud/uploads/filecloud/2019/November/29/4460-160371575019523-1575019523.png" alt="" width="600" height="551"></span></span></p>
<p><span style="font-weight: 400; font-size: 16px;">
Evening: Grilled chicken breast with onion sauce served with spinach 355 calories</span></p>
<p style="text-align: center;">&nbsp;<span class="tceditor-image"><img src="https://y5kbp0ifnvobj.vcdn.cloud/uploads/filecloud/2019/November/29/4463-629151575019523-1575019523.png" alt="" width="606" height="483"></span></p>
<p><span style="font-size: 16px;"><strong>Healthy diet for weight loss 3 days:</strong></span></p>
<p><span style="font-weight: 400; font-size: 16px;">Morning: Oats 121 calories + unsweetened milk served with green apple 145 calories</span></p>
<p style="text-align: center;"><span style="font-weight: 400; font-size: 16px;"><span class="tceditor-image"><img src="https://y5kbp0ifnvobj.vcdn.cloud/uploads/filecloud/2019/November/29/4464-927821575020055-1575020055.png" alt="" width="600" height="508"></span></span></p>
<p><span style="font-weight: 400; font-size: 16px;">Lunch: Grilled chicken breast with almonds 145 calories + unsweetened yogurt 111 calories</span></p>
<p style="text-align: center;"><span style="font-weight: 400; font-size: 16px;"><span class="tceditor-image"><img src="https://y5kbp0ifnvobj.vcdn.cloud/uploads/filecloud/2019/November/29/4465-546861575020095-1575020095.png" alt="" width="600" height="638"></span></span></p>
<p><span style="font-weight: 400; font-size: 16px;">
Evening: Steamed shrimp (112g) 245 calories + 1 grilled potato  131 calories + unsweetened yogurt 89 calories</span></p>

<p><span style="font-size: 16px;"><strong>Healthy diet for weight loss day 4:
&nbsp;</strong></span></p>
<p><span style="font-weight: 400; font-size: 16px;">Morning: Corn grain bread 198 calories</span></p>
<p style="text-align: center;"><span style="font-weight: 400; font-size: 16px;"><span class="tceditor-image"><img src="https://y5kbp0ifnvobj.vcdn.cloud/uploads/filecloud/2019/November/29/4466-365911575020568-1575020568.png" alt="" width="532" height="437"></span></span></p>
<p><span style="font-weight: 400; font-size: 16px;">Lunch: roast beef 123 calories </span></p>
<p style="text-align: center;"><span style="font-weight: 400; font-size: 16px;"><span class="tceditor-image"><img src="https://y5kbp0ifnvobj.vcdn.cloud/uploads/filecloud/2019/November/29/4467-116831575021046-1575021046.png" alt="" width="600" height="464"></span></span></p>
<p><span style="font-weight: 400; font-size: 16px;">Evening: Salmon pan 245 calories</span></p>
<p style="text-align: center;"><span style="font-weight: 400; font-size: 16px;"><span class="tceditor-image"><img src="https://y5kbp0ifnvobj.vcdn.cloud/uploads/filecloud/2019/November/29/4468-216221575021082-1575021082.png" alt="" width="596" height="508"></span></span></p>

<p><span style="font-size: 16px;"><strong>Healthy diet for weight loss day 5:&nbsp;</strong></span></p>
<p><span style="font-weight: 400; font-size: 16px;">Morning: Whole oats 379 calories  + unsweetened milk 40 calories </span></p>
<p style="text-align: center;"><span style="font-weight: 400; font-size: 16px;"><span class="tceditor-image"><img src="https://y5kbp0ifnvobj.vcdn.cloud/uploads/filecloud/2019/November/29/4469-365301575021545-1575021545.png" alt="" width="600" height="399"></span></span></p>
<p><span style="font-weight: 400; font-size: 16px;">Lunch: Stir-fried noodles with beef 125 calories + strawberries served with yogurt 121 calories</span></p>
<p style="text-align: center;"><span style="font-weight: 400; font-size: 16px;"><span class="tceditor-image"><img src="https://y5kbp0ifnvobj.vcdn.cloud/uploads/filecloud/2019/November/29/4470-297411575021579-1575021579.png" alt="" width="599" height="388"></span></span></p>
<p><span style="font-size: 16px;"><span style="font-weight: 400;">Evening: Rice </span><span style="color: #0000ff;"><a style="color: #0000ff;" href="https://www.organica.vn/ngu-coc-dau-va-hat/gao-lut-huu-co-2kg"><span style="font-weight: 400;">brown rice 150 calories</span></a></span><span style="font-weight: 400;"> 1 boiled egg 79 calories </span></span></p>
<p style="text-align: center;"><span class="tceditor-image"><img src="https://y5kbp0ifnvobj.vcdn.cloud/uploads/filecloud/2019/November/25/4389-637191574662606-1574662606.png" alt="" width="596" height="684"></span>&nbsp;</p>
<p><span style="font-size: 16px;"><strong>Healthy diet for weight loss for day 6:</strong></span></p>
<p><span style="font-weight: 400; font-size: 16px;">Morning: 1 fried egg 90 calories +  1 seed bread 134 calories </span></p>
<p><span style="font-weight: 400; font-size: 16px;">Lunch: 1 boiled sweet potato 114 calories + brown rice 111 calories  </span></p>
<p style="text-align: center;"><span style="font-weight: 400; font-size: 16px;"><img src="https://y5kbp0ifnvobj.vcdn.cloud/uploads/filecloud/2019/November/29/4473-692881575021933-1575021933.png" alt="" width="574" height="425"></span></p>
<p><span style="font-weight: 400; font-size: 16px;">  Evening: 1 cup of avocado smoothie 245 calories + 1 salad 9 calories</span></p>
<p style="text-align: center;"><span style="font-weight: 400; font-size: 16px;"><span class="tceditor-image"><img src="https://y5kbp0ifnvobj.vcdn.cloud/uploads/filecloud/2019/November/29/4472-619971575021874-1575021874.png" alt="" width="601" height="426"></span></span></p>
<p style="text-align: center;">&nbsp;</p>
<p><span style="font-size: 16px;"><strong>Healthy diet for weight loss for day 7:</strong></span></p>
<p><span style="font-weight: 400; font-size: 16px;">Breakfast:  2 boiled eggs 156 calories + 1 green vegetables 23 calories</span></p>
<p style="text-align: center;"><span style="font-weight: 400; font-size: 16px;"><span class="tceditor-image"><img src="https://y5kbp0ifnvobj.vcdn.cloud/uploads/filecloud/2019/November/29/4477-165931575022746-1575022746.png" alt="" width="600" height="631"></span></span></p>
<p><span style="font-weight: 400; font-size: 16px;">Lunch: Fried eggs 90 calories +  classic cotton 109 calories </span></p>
<p style="text-align: center;"><span style="font-weight: 400; font-size: 16px;"><span class="tceditor-image"><img src="https://y5kbp0ifnvobj.vcdn.cloud/uploads/filecloud/2019/November/29/4476-746051575022675-1575022675.png" alt="" width="599" height="599"></span></span></p>
<p><span style="font-size: 16px;"><span style="font-weight: 400;">Evening: Salad </span><a href="https://www.organica.vn/thit-va-thuy-hai-san/than-ca-ngu"><span style="font-weight: 400;">tuna 187 calories</span></a></span></p>
<p style="text-align: center;"><span style="font-size: 16px;"><span style="font-weight: 400;"><span class="tceditor-image"><img src="https://y5kbp0ifnvobj.vcdn.cloud/uploads/filecloud/2019/November/29/4475-504401575022641-1575022641.png" alt="" width="603" height="379"></span></span></span></p>



                        <!-- block-detail-content -->

                  
                        <!-- block-detail-social -->

                                            </div>
                </div>
            </div>
            <!-- Main -->

   
        </div>
    </div>
</article>




<br><br>

<hr>

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
  

