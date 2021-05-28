
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
                <div class="">
          
                    <br>
           
                   
                <br>
                
                <br>
       
                
<div style="width:100%">



  <div class="container-fluid bg-3 text-center"id="DDDL" >    
  <strong><h3 class="margin" style="font-size: 29px" ><b>WEIGHT LOSS</b></h3></strong>
  <p><em>Suggestion menu to weight loss!</em></p>
  <br>
  <div class="row">
    <div class="col-sm-4">
     
      <a href="detailmenu.php" target="_blank"><img src="/../../calo-calc/calo-calc/image/10.png" class="img-responsive margin" style="width:100%; height: 250px;" alt="Image"></a>
           <a href="detailmenu.php" target="_blank"   style="text-decoration: none !important;"><p style="text-align: left;  word-break: break-word;word-spacing: normal;word-wrap: break-word; color: #009580;font-size: 22px; padding-top: 12px; font-family: inherit;
    font-weight: 500;
    line-height: 1.1;">Suggest a healthy diet to lose weight in 7 effective days </p></a>
    
 
       <a href="detailmenu.php" target="_blank" ><button class="btn" ><b><p style="word-spacing: 2px; letter-spacing: 1px;font-family: Montserrat, sans-serif;padding-top: 5px;font-size: 13px;">View</p>  </b> </button></a>    </div>
     <div class="col-sm-4" id="chuacau"> 

      <a href="" target="_blank"><img src="/../../calo-calc/calo-calc/image/11.png" class="img-responsive margin" style="width:100%;height: 250px;" alt="Image"> </a>
              <a href="detailmenu.php" target="_blank"   style="text-decoration: none !important;"><p style="text-align: left;  word-break: break-word;word-spacing: normal;word-wrap: break-word; color: #009580;font-size: 22px; padding-top: 12px; font-family: inherit;
    font-weight: 500;
    line-height: 1.1;">7-Day, 1,200-Calorie Meal Plan </p></a>
 

         <a href="haa-z.html" target="_blank"><button class="btn" ><b><p style="word-spacing: 2px; letter-spacing: 1px;font-family: Montserrat, sans-serif;padding-top: 5px;font-size: 13px;">View</p>  </b> </button></a>
    </div>
    <div class="col-sm-4"> 
     
      <a href="stt.html" target="_blank"><img src="/../../calo-calc/calo-calc/image/2.png" class="img-responsive margin" style="width:100% ;height: 250px;" alt="Image"></a>
          <a href="stt.html" target="_blank" style="text-decoration: none !important;"><p style="text-align: left;  word-break: break-word;word-spacing: normal;word-wrap: break-word; color: #009580;font-size: 22px; padding-top: 12px; font-family: inherit;
    font-weight: 500;
    line-height: 1.1;">Weight loss meal plans </p></a>

        <a href="stt.html" target="_blank"> <button class="btn" ><b><p style="word-spacing: 2px; letter-spacing: 1px;font-family: Montserrat, sans-serif;padding-top: 5px;font-size: 13px;">View</p>  </b> </button></a>
    </div>
   
  </div>

</div>
<br><hr>  
 


  <div class="container-fluid bg-3 text-center" id="ATDN">    
  <strong><h3 class="margin" style="font-size: 29px"><b>WEIGHT GAIN </b></h3></strong>
 <p><em> Suggestion menu of weight gain</em></p>
  
  <div class="row">
    <div class="col-sm-4">
     
      <a href="atdn1.html" target="_blank"><img src="/../../calo-calc/calo-calc/image/12.jpg" class="img-responsive margin" style="width:110%; height: 250px;" alt="Image"></a>
         <a href="atdn1.html" target="_blank" style="text-decoration: none !important;"><p style="text-align: left;  word-break: break-word;word-spacing: normal;word-wrap: break-word; color: #009580;font-size: 22px; padding-top: 12px; font-family: inherit;
    font-weight: 500;
    line-height: 1.1;">Weight gain menu for skinny people in 7 days</p></a>
    
          <a href="atdn1.html" target="_blank"> <button class="btn" ><b><p style="word-spacing: 2px; letter-spacing: 1px;font-family: Montserrat, sans-serif;padding-top: 5px;font-size: 13px;">Đọc thêm</p>  </b> </button></a>
    </div>
     <div class="col-sm-4" id="chuacau"> 

      <a href="atdn.html" target="_blank"><img src="image/at1.jpg" class="img-responsive margin" style="width:100% ;height: 250px;" alt="Image"></a>
           <a href="atdn.html" target="_blank" style="text-decoration: none !important;"><p style="text-align: left;  word-break: break-word;word-spacing: normal;word-wrap: break-word; color: #009580;font-size: 22px; padding-top: 12px; font-family: inherit;
    font-weight: 500;
    line-height: 1.1;">12 đặc sản Đà Nẵng “nức tiếng” mang về làm quà </p></a>
     
          <a href="atdn.html" target="_blank"> <button class="btn" ><b><p style="word-spacing: 2px; letter-spacing: 1px;font-family: Montserrat, sans-serif;padding-top: 5px;font-size: 13px;">Đọc thêm</p>  </b> </button></a>
    </div>
    <div class="col-sm-4"> 
     
     <a href="atdn2.html" target="_blank"> <img src="image/miquangech.jpg" class="img-responsive margin" style="width:100%;height: 250px;" alt="Image"></a>
          <a href="atdn2.html" target="_blank" style="text-decoration: none !important;"><p style="text-align: left;  word-break: break-word;word-spacing: normal;word-wrap: break-word; color: #009580;font-size: 22px; padding-top: 12px; font-family: inherit;
    font-weight: 500;
    line-height: 1.1;">Xuýt Xoa Với 10 Món Ăn Không Thể Bỏ Qua Khi Đến Đà Nẵng
 </p></a>
  
          <a href="atdn2.html" target="_blank"> <button class="btn" ><b><p style="word-spacing: 2px; letter-spacing: 1px;font-family: Montserrat, sans-serif;padding-top: 5px;font-size: 13px;">Đọc thêm</p>  </b> </button></a>
    </div>
   
  </div>
  <div class="row">
    <div class="col-sm-4">
     
      <a href="atdn1.html" target="_blank"><img src="image/Banhxeo.jpg" class="img-responsive margin" style="width:110%; height: 250px;" alt="Image"></a>
         <a href="atdn1.html" target="_blank" style="text-decoration: none !important;"><p style="text-align: left;  word-break: break-word;word-spacing: normal;word-wrap: break-word; color: #009580;font-size: 22px; padding-top: 12px; font-family: inherit;
    font-weight: 500;
    line-height: 1.1;">Ăn gì ở Đà Nẵng: Review 10 quán ăn ngon nhất Đà Nẵng</p></a>
    
          <a href="atdn1.html" target="_blank"> <button class="btn" ><b><p style="word-spacing: 2px; letter-spacing: 1px;font-family: Montserrat, sans-serif;padding-top: 5px;font-size: 13px;">Đọc thêm</p>  </b> </button></a>
    </div>
     <div class="col-sm-4" id="chuacau"> 

      <a href="atdn.html" target="_blank"><img src="image/at1.jpg" class="img-responsive margin" style="width:100% ;height: 250px;" alt="Image"></a>
           <a href="atdn.html" target="_blank" style="text-decoration: none !important;"><p style="text-align: left;  word-break: break-word;word-spacing: normal;word-wrap: break-word; color: #009580;font-size: 22px; padding-top: 12px; font-family: inherit;
    font-weight: 500;
    line-height: 1.1;">12 đặc sản Đà Nẵng “nức tiếng” mang về làm quà </p></a>
     
          <a href="atdn.html" target="_blank"> <button class="btn" ><b><p style="word-spacing: 2px; letter-spacing: 1px;font-family: Montserrat, sans-serif;padding-top: 5px;font-size: 13px;">Đọc thêm</p>  </b> </button></a>
    </div>
    <div class="col-sm-4"> 
     
     <a href="atdn2.html" target="_blank"> <img src="image/miquangech.jpg" class="img-responsive margin" style="width:100%;height: 250px;" alt="Image"></a>
          <a href="atdn2.html" target="_blank" style="text-decoration: none !important;"><p style="text-align: left;  word-break: break-word;word-spacing: normal;word-wrap: break-word; color: #009580;font-size: 22px; padding-top: 12px; font-family: inherit;
    font-weight: 500;
    line-height: 1.1;">Xuýt Xoa Với 10 Món Ăn Không Thể Bỏ Qua Khi Đến Đà Nẵng
 </p></a>
  
          <a href="atdn2.html" target="_blank"> <button class="btn" ><b><p style="word-spacing: 2px; letter-spacing: 1px;font-family: Montserrat, sans-serif;padding-top: 5px;font-size: 13px;">Đọc thêm</p>  </b> </button></a>
    </div>
   
  </div>
</div>
<br><hr>
  <div class="container-fluid bg-3 text-center" id="HDNB">    
  <strong><h3 class="margin" style="font-size: 29px" id="act"><b> WEIGHT MAINTENANCE </b></h3></strong>
  <p><em>Khám phá những hoạt động nổi bật, thú vị tại Đà Nẵng</em></p>
  
  <div class="row">
    <div class="col-sm-4">
     
      <a href="phdn.html" target="_blank"><img src="image/LehoiphaohoaĐN.jpg" class="img-responsive margin" style="width:110%; height: 250px;" alt="Image"></a>
   <a href="phdn.html" target="_blank" style="text-decoration: none !important;"><p style="text-align: left;  word-break: break-word;word-spacing: normal;word-wrap: break-word; color: #009580;font-size: 22px; padding-top: 12px; font-family: inherit;
    font-weight: 500;
    line-height: 1.1;">Tất tần tật những thông tin cần biết về lễ hội pháo hoa Đà Nẵng 2018 </p></a>
  
         <a href="phdn.html" target="_blank"> <button class="btn" ><b><p style="word-spacing: 2px; letter-spacing: 1px;font-family: Montserrat, sans-serif;padding-top: 5px;font-size: 13px;">Đọc thêm</p>  </b> </button></a>
    </div>
     <div class="col-sm-4" id="chuacau"> 

      <a href="kkc.html" target="_blank"><img src="image/LehoikhinhkhicauĐN.jpg" class="img-responsive margin" style="width:100%; height: 250px;" alt="Image"></a>
          <a  href="kkc.html" target="_blank" style="text-decoration: none !important;"><p style="text-align: left;  word-break: break-word;word-spacing: normal;word-wrap: break-word; color: #009580;font-size: 22px; padding-top: 12px; font-family: inherit;
    font-weight: 500;
    line-height: 1.1;">Festival khinh khí cầu Đà Nẵng - Điểm đến hot nhất mùa hè này </p></a>
    
          <a href="kkc.html" target="_blank"><button class="btn" ><b><p style="word-spacing: 2px; letter-spacing: 1px;font-family: Montserrat, sans-serif;padding-top: 5px;font-size: 13px;">Đọc thêm</p>  </b> </button></a>
    </div>
    <div class="col-sm-4"> 
     
      <a href="dhmh.html" target="_blank"><img src="image/danang.jpg" class="img-responsive margin" style="width:100%; height: 250px;" alt="Image"></a>
          <a a href="dhmh.html" target="_blank" style="text-decoration: none !important;"><p style="text-align: left;  word-break: break-word;word-spacing: normal;word-wrap: break-word; color: #009580;font-size: 22px; padding-top: 12px; font-family: inherit;
    font-weight: 500;
    line-height: 1.1;">Những Hoạt Động Nổi Bật Tại Đà Nẵng – Điểm Hẹn Mùa Hè 2019 </p></a>
   
          <a  href="dhmh.html" target="_blank"><button class="btn" ><b><p style="word-spacing: 2px; letter-spacing: 1px;font-family: Montserrat, sans-serif;padding-top: 5px;font-size: 13px;">Đọc thêm</p>  </b> </button></a>
    </div>
   
  </div>
</div>
  

 <div class="container-fluid bg-3 text-center" id="HDNB">    
  <strong><h3 class="margin" style="font-size: 29px" id="act"><b> EAT SALTY </b></h3></strong>
  <p><em>Khám phá những hoạt động nổi bật, thú vị tại Đà Nẵng</em></p>
  
  <div class="row">
    <div class="col-sm-4">
     
      <a href="phdn.html" target="_blank"><img src="image/LehoiphaohoaĐN.jpg" class="img-responsive margin" style="width:110%; height: 250px;" alt="Image"></a>
   <a href="phdn.html" target="_blank" style="text-decoration: none !important;"><p style="text-align: left;  word-break: break-word;word-spacing: normal;word-wrap: break-word; color: #009580;font-size: 22px; padding-top: 12px; font-family: inherit;
    font-weight: 500;
    line-height: 1.1;">Tất tần tật những thông tin cần biết về lễ hội pháo hoa Đà Nẵng 2018 </p></a>
  
         <a href="phdn.html" target="_blank"> <button class="btn" ><b><p style="word-spacing: 2px; letter-spacing: 1px;font-family: Montserrat, sans-serif;padding-top: 5px;font-size: 13px;">Đọc thêm</p>  </b> </button></a>
    </div>
     <div class="col-sm-4" id="chuacau"> 

      <a href="kkc.html" target="_blank"><img src="image/LehoikhinhkhicauĐN.jpg" class="img-responsive margin" style="width:100%; height: 250px;" alt="Image"></a>
          <a  href="kkc.html" target="_blank" style="text-decoration: none !important;"><p style="text-align: left;  word-break: break-word;word-spacing: normal;word-wrap: break-word; color: #009580;font-size: 22px; padding-top: 12px; font-family: inherit;
    font-weight: 500;
    line-height: 1.1;">Festival khinh khí cầu Đà Nẵng - Điểm đến hot nhất mùa hè này </p></a>
    
          <a href="kkc.html" target="_blank"><button class="btn" ><b><p style="word-spacing: 2px; letter-spacing: 1px;font-family: Montserrat, sans-serif;padding-top: 5px;font-size: 13px;">Đọc thêm</p>  </b> </button></a>
    </div>
    <div class="col-sm-4"> 
     
      <a href="dhmh.html" target="_blank"><img src="image/danang.jpg" class="img-responsive margin" style="width:100%; height: 250px;" alt="Image"></a>
          <a a href="dhmh.html" target="_blank" style="text-decoration: none !important;"><p style="text-align: left;  word-break: break-word;word-spacing: normal;word-wrap: break-word; color: #009580;font-size: 22px; padding-top: 12px; font-family: inherit;
    font-weight: 500;
    line-height: 1.1;">Những Hoạt Động Nổi Bật Tại Đà Nẵng – Điểm Hẹn Mùa Hè 2019 </p></a>
   
          <a  href="dhmh.html" target="_blank"><button class="btn" ><b><p style="word-spacing: 2px; letter-spacing: 1px;font-family: Montserrat, sans-serif;padding-top: 5px;font-size: 13px;">Đọc thêm</p>  </b> </button></a>
    </div>
   
  </div>
</div>

<div class="container-fluid bg-3 text-center" id="HDNB">    
  <strong><h3 class="margin" style="font-size: 29px" id="act"><b> HEALTHY EATING </b></h3></strong>
  <p><em>Khám phá những hoạt động nổi bật, thú vị tại Đà Nẵng</em></p>
  
  <div class="row">
    <div class="col-sm-4">
     
      <a href="phdn.html" target="_blank"><img src="image/LehoiphaohoaĐN.jpg" class="img-responsive margin" style="width:110%; height: 250px;" alt="Image"></a>
   <a href="phdn.html" target="_blank" style="text-decoration: none !important;"><p style="text-align: left;  word-break: break-word;word-spacing: normal;word-wrap: break-word; color: #009580;font-size: 22px; padding-top: 12px; font-family: inherit;
    font-weight: 500;
    line-height: 1.1;">Tất tần tật những thông tin cần biết về lễ hội pháo hoa Đà Nẵng 2018 </p></a>
  
         <a href="phdn.html" target="_blank"> <button class="btn" ><b><p style="word-spacing: 2px; letter-spacing: 1px;font-family: Montserrat, sans-serif;padding-top: 5px;font-size: 13px;">Đọc thêm</p>  </b> </button></a>
    </div>
     <div class="col-sm-4" id="chuacau"> 

      <a href="kkc.html" target="_blank"><img src="image/LehoikhinhkhicauĐN.jpg" class="img-responsive margin" style="width:100%; height: 250px;" alt="Image"></a>
          <a  href="kkc.html" target="_blank" style="text-decoration: none !important;"><p style="text-align: left;  word-break: break-word;word-spacing: normal;word-wrap: break-word; color: #009580;font-size: 22px; padding-top: 12px; font-family: inherit;
    font-weight: 500;
    line-height: 1.1;">Festival khinh khí cầu Đà Nẵng - Điểm đến hot nhất mùa hè này </p></a>
    
          <a href="kkc.html" target="_blank"><button class="btn" ><b><p style="word-spacing: 2px; letter-spacing: 1px;font-family: Montserrat, sans-serif;padding-top: 5px;font-size: 13px;">Đọc thêm</p>  </b> </button></a>
    </div>
    <div class="col-sm-4"> 
     
      <a href="dhmh.html" target="_blank"><img src="image/danang.jpg" class="img-responsive margin" style="width:100%; height: 250px;" alt="Image"></a>
          <a a href="dhmh.html" target="_blank" style="text-decoration: none !important;"><p style="text-align: left;  word-break: break-word;word-spacing: normal;word-wrap: break-word; color: #009580;font-size: 22px; padding-top: 12px; font-family: inherit;
    font-weight: 500;
    line-height: 1.1;">Những Hoạt Động Nổi Bật Tại Đà Nẵng – Điểm Hẹn Mùa Hè 2019 </p></a>
   
          <a  href="dhmh.html" target="_blank"><button class="btn" ><b><p style="word-spacing: 2px; letter-spacing: 1px;font-family: Montserrat, sans-serif;padding-top: 5px;font-size: 13px;">Đọc thêm</p>  </b> </button></a>
    </div>
   
  </div>
</div>
<div class="container-fluid bg-3 text-center" id="HDNB">    
  <strong><h3 class="margin" style="font-size: 29px" id="act"><b> VEGETARIAN  </b></h3></strong>
  <p><em>Khám phá những hoạt động nổi bật, thú vị tại Đà Nẵng</em></p>
  
  <div class="row">
    <div class="col-sm-4">
     
      <a href="phdn.html" target="_blank"><img src="image/LehoiphaohoaĐN.jpg" class="img-responsive margin" style="width:110%; height: 250px;" alt="Image"></a>
   <a href="phdn.html" target="_blank" style="text-decoration: none !important;"><p style="text-align: left;  word-break: break-word;word-spacing: normal;word-wrap: break-word; color: #009580;font-size: 22px; padding-top: 12px; font-family: inherit;
    font-weight: 500;
    line-height: 1.1;">Tất tần tật những thông tin cần biết về lễ hội pháo hoa Đà Nẵng 2018 </p></a>
  
         <a href="phdn.html" target="_blank"> <button class="btn" ><b><p style="word-spacing: 2px; letter-spacing: 1px;font-family: Montserrat, sans-serif;padding-top: 5px;font-size: 13px;">Đọc thêm</p>  </b> </button></a>
    </div>
     <div class="col-sm-4" id="chuacau"> 

      <a href="kkc.html" target="_blank"><img src="image/LehoikhinhkhicauĐN.jpg" class="img-responsive margin" style="width:100%; height: 250px;" alt="Image"></a>
          <a  href="kkc.html" target="_blank" style="text-decoration: none !important;"><p style="text-align: left;  word-break: break-word;word-spacing: normal;word-wrap: break-word; color: #009580;font-size: 22px; padding-top: 12px; font-family: inherit;
    font-weight: 500;
    line-height: 1.1;">Festival khinh khí cầu Đà Nẵng - Điểm đến hot nhất mùa hè này </p></a>
    
          <a href="kkc.html" target="_blank"><button class="btn" ><b><p style="word-spacing: 2px; letter-spacing: 1px;font-family: Montserrat, sans-serif;padding-top: 5px;font-size: 13px;">Đọc thêm</p>  </b> </button></a>
    </div>
    <div class="col-sm-4"> 
     
      <a href="dhmh.html" target="_blank"><img src="image/danang.jpg" class="img-responsive margin" style="width:100%; height: 250px;" alt="Image"></a>
          <a a href="dhmh.html" target="_blank" style="text-decoration: none !important;"><p style="text-align: left;  word-break: break-word;word-spacing: normal;word-wrap: break-word; color: #009580;font-size: 22px; padding-top: 12px; font-family: inherit;
    font-weight: 500;
    line-height: 1.1;">Những Hoạt Động Nổi Bật Tại Đà Nẵng – Điểm Hẹn Mùa Hè 2019 </p></a>
   
          <a  href="dhmh.html" target="_blank"><button class="btn" ><b><p style="word-spacing: 2px; letter-spacing: 1px;font-family: Montserrat, sans-serif;padding-top: 5px;font-size: 13px;">Đọc thêm</p>  </b> </button></a>
    </div>
   
  </div>
</div>

<div class="container-fluid bg-3 text-center" id="HDNB">    
  <strong><h3 class="margin" style="font-size: 29px" id="act"><b> OTHER SUGGESTION</b></h3></strong>
  <p><em>Khám phá những hoạt động nổi bật, thú vị tại Đà Nẵng</em></p>
  
  <div class="row">
    <div class="col-sm-4">
     
      <a href="phdn.html" target="_blank"><img src="image/LehoiphaohoaĐN.jpg" class="img-responsive margin" style="width:110%; height: 250px;" alt="Image"></a>
   <a href="phdn.html" target="_blank" style="text-decoration: none !important;"><p style="text-align: left;  word-break: break-word;word-spacing: normal;word-wrap: break-word; color: #009580;font-size: 22px; padding-top: 12px; font-family: inherit;
    font-weight: 500;
    line-height: 1.1;">Tất tần tật những thông tin cần biết về lễ hội pháo hoa Đà Nẵng 2018 </p></a>
  
         <a href="phdn.html" target="_blank"> <button class="btn" ><b><p style="word-spacing: 2px; letter-spacing: 1px;font-family: Montserrat, sans-serif;padding-top: 5px;font-size: 13px;">Đọc thêm</p>  </b> </button></a>
    </div>
     <div class="col-sm-4" id="chuacau"> 

      <a href="kkc.html" target="_blank"><img src="image/LehoikhinhkhicauĐN.jpg" class="img-responsive margin" style="width:100%; height: 250px;" alt="Image"></a>
          <a  href="kkc.html" target="_blank" style="text-decoration: none !important;"><p style="text-align: left;  word-break: break-word;word-spacing: normal;word-wrap: break-word; color: #009580;font-size: 22px; padding-top: 12px; font-family: inherit;
    font-weight: 500;
    line-height: 1.1;">Festival khinh khí cầu Đà Nẵng - Điểm đến hot nhất mùa hè này </p></a>
    
          <a href="kkc.html" target="_blank"><button class="btn" ><b><p style="word-spacing: 2px; letter-spacing: 1px;font-family: Montserrat, sans-serif;padding-top: 5px;font-size: 13px;">Đọc thêm</p>  </b> </button></a>
    </div>
    <div class="col-sm-4"> 
     
      <a href="dhmh.html" target="_blank"><img src="image/danang.jpg" class="img-responsive margin" style="width:100%; height: 250px;" alt="Image"></a>
          <a a href="dhmh.html" target="_blank" style="text-decoration: none !important;"><p style="text-align: left;  word-break: break-word;word-spacing: normal;word-wrap: break-word; color: #009580;font-size: 22px; padding-top: 12px; font-family: inherit;
    font-weight: 500;
    line-height: 1.1;">Những Hoạt Động Nổi Bật Tại Đà Nẵng – Điểm Hẹn Mùa Hè 2019 </p></a>
   
          <a  href="dhmh.html" target="_blank"><button class="btn" ><b><p style="word-spacing: 2px; letter-spacing: 1px;font-family: Montserrat, sans-serif;padding-top: 5px;font-size: 13px;">Đọc thêm</p>  </b> </button></a>
    </div>
   
  </div>
</div>
</div>

                
            </div>
        </td>
        <td class="rightCell">
            <div class="rightCellContent">
                <div class="noPrint">
                    



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
    <h2><span style="line-height:30px;padding-left:15px">Browse Suggestion Menu</span></h2>
    <div class="hr">&nbsp;</div>
    <div class="selected">
        <span class="recipes_b">&nbsp;</span><a href="/recipes/Default.aspx" onclick="return false">Suggestion Menu</a>
    </div>
    
    <div class="hr">&nbsp;</div>
    <div class="topHeader">Purpose Types</div>
    
    <div class="selectable" onclick="onFSBoxItemClick(this)">
        <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/meal/appetizer/Default.aspx" onclick="return false">Weight loss</a></div>
    </div>

    
    <div class="selectable" onclick="onFSBoxItemClick(this)">
        <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/meal/breakfast/Default.aspx" onclick="return false">Weight gain</a></div>
    </div>
    
    <div class="selectable" onclick="onFSBoxItemClick(this)">
        <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/meal/dessert/Default.aspx" onclick="return false">Weight Miantain</a></div>
    </div>
    
   
    <div class="hr">&nbsp;</div>
    <div class="topHeader">Type people eat</div>
    
    <div class="selectable" onclick="onFSBoxItemClick(this)">
        <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/ingredients/dairy/Default.aspx" onclick="return false">Eat salty</a></div>
    </div>
    
    <div class="selectable" onclick="onFSBoxItemClick(this)">
        <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/ingredients/fruit/Default.aspx" onclick="return false">Healthy eating</a></div>
    </div>
    
    <div class="selectable" onclick="onFSBoxItemClick(this)">
        <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/ingredients/grain/Default.aspx" onclick="return false">Vegetarian</a></div>
    </div>
    
    <div class="selectable" onclick="onFSBoxItemClick(this)">
        <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/ingredients/herbs-spices-and-sauces/Default.aspx" onclick="return false">Diet</a></div>
    </div>
    
    <div class="selectable" onclick="onFSBoxItemClick(this)">
        <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/ingredients/meat/Default.aspx" onclick="return false">Eat without glucose</a></div>
    </div>
    
    <div class="selectable" onclick="onFSBoxItemClick(this)">
        <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/ingredients/seafood/Default.aspx" onclick="return false">Eat follow religion</a></div>
    </div>
    
  
    <div class="hr">&nbsp;</div>
    <div class="topHeader">Other type</div>
    
    <div class="selectable" onclick="onFSBoxItemClick(this)">
        <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/dairy-free/Default.aspx" onclick="return false">People with diabetes</a></div>
    </div>
    
    <div class="selectable" onclick="onFSBoxItemClick(this)">
        <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/diabetic/Default.aspx" onclick="return false">Pregnant women</a></div>
    </div>
    
    <div class="selectable" onclick="onFSBoxItemClick(this)">
        <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/gluten-free/Default.aspx" onclick="return false">Children</a></div>
    </div>
    
    <div class="selectable" onclick="onFSBoxItemClick(this)">
        <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/high-fiber/Default.aspx" onclick="return false">Malnourished people</a></div>
    </div>
    
    <div class="selectable" onclick="onFSBoxItemClick(this)">
        <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/high-protein/Default.aspx" onclick="return false">0bese people</a></div>
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
require 'menu/menu.php';

$users = getUsers();

?>


<div class="content-wrapper" style="min-height: 365px; padding-left: 15px;">
   

    <table class="table">
     
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
               

            <p></p>       
                <td ><?php echo $user['name'] ?></td>
                <td ><?php echo $user['time'] ?></td>
               <td ><?php echo $user['type'] ?></td>


                <td>
                    <a href="viewmenu.php?id= <?php echo $user['id'] ?>" class="btn btn-sm btn-outline-info">View</a>
                 
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
  

