<?php
// require_once "lib/core.php";



?>
<!DOCTYPE html>
<html lang="zxx">
	
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
        <title>Cyber Flow</title>	
        
		
        <!-- Custom CSS -->
        <link href="assets/css/styles.css" rel="stylesheet">
		
		<!-- Custom Color Option -->
		<link href="assets/css/colors.css" rel="stylesheet">
        <link rel="icon" href="assets/img/1.png" type="image/icon type" style="border-radius:50%">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/ font-awesome.min.css">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="components/bootstrap/dist/js/bootstrap.js"></script>
        <style type="text/css" rel="stylesheet">
            .main-wrapper{
                overflow-x:hidden;
            }
             #subscribe{
                margin-left:4rem;
                margin-right: 4rem ;
                margin-top:1rem;
                font-weight:550
            }
            #psubs{
                margin:8rem;
                margin-top:1rem;
                margin-bottom:1rem;
            }
            #revPrev:hover,#revNext:hover{background-color: #4CAF70; color:white}
            #revPre:hover,#revNex:hover{background-color: #4CAF70; color:white}
            #subsbutton
            {
                width:120%;
                border-bottom-left-radius:100px ;
                border-bottom-right-radius:100px ;
                border-top-right-radius:100px ;
                border-top-left-radius:100px ;
            }
            #subsbar
            {
                border-bottom-left-radius:100px ;
                border-bottom-right-radius:100px ;
                border-top-right-radius:100px ;
                border-top-left-radius:100px ;
            }
            #formsgroup
            {
                padding-left:10px;
            }
            .underline-small{
                color:#4CAF70;
                display:inline-block;
                position:relative;
                margin-bottom:25px
                
            }
            
            .underline-small::after{
                content:'';
                height:4px;
                width:40%;
                background:#4CAF70;
                position:absolute;
                left:calc(40% - 10%);
                bottom:-5px;

                
            }
            #whyus{ margin-left:30vw}
            .login{ background-color:#E9F3F0}
            .prevAndnext
            {
                height:30%;
                border-bottom-left-radius:300px ;
                border-bottom-right-radius:300px ;
                border-top-right-radius:300px ;
                border-top-left-radius:300px ;
                align-self: flex-end;
            }
            #contactCol{
                margin-left:50px;
            }
            #talk{padding-right:40px;    }
            #submitContact{width:30%; 
                 border-bottom-left-radius:300px ;
                border-bottom-right-radius:300px ;
                border-top-right-radius:300px ;
                border-top-left-radius:300px ;}
            .whatWeDo{                    transition: width 8s;}
            #icons{margin-top:20px}
            .whatWeDo:hover {
                  
                    width:101%;
                }

               

            .log{ margin-top:2vh;margin-left:1vw}
            .explore:hover{background-color:#4CAF70;
                height:40% !important;
                 }
                 .explore:hover h5{color:white;}
                 .explore:hover h6{color:white;}
                 #email:hover{color:#4CAF70!important}
                .login{margin-top:3px}
                .white:hover{color:white}
                .white{margin-top:10px;}
            .slider-image{
                width:100%;
            }
            #getstarted{
                border-bottom-left-radius:300px ;
                border-bottom-right-radius:300px ;
                border-top-right-radius:300px ;
                border-top-left-radius:300px ;
             }
             .atag:hover,.socialLinks:hover{color:#4CAF70  !important;}
             /* a:link{color:#4CAF70 !important} */
             .atagexplore:hover{text-decoration:underline;color:#4CAF70 !important}
             a .atagexplore:link{text-decoration:none;color:#4CAF70 !important}
             .bi-arrow-right{margin-top:1px !important;}
            .imageOver{
                position:relative;
                width:60px;
                height:60px;
                bottom:40px;
                right:400px;
                color:#FFF;
                border-radius:25px;
                text-align:center;
            }
            .motto{ margin:7px;}
            .info{color:#888888;margin-top:15px;font-weight:400}
            .logoOnphone{display:none}
            .logButton{height:20%  !important}
            #revNex,#revPre{height:100%}
            @media only screen and (max-width: 600px) {
                .cn-info-detail{margin-bottom:25px}
                #icons{margin-top:5px}
                #submitContact{width:50%}
            #contactCol{
                margin-left:5px;
            }
            #talk{padding-right:10px;}
                .logoOnphone{display:block}
                #getstarted,#video{
                    width:100%;
                    align-self:center;
             }
             #video{padding-left:0;
                width:95%;}
             .img{
                 height:99.9%;
                 width:99.9%;
             }
             .footin2{
                 width:50%;
             }
             .upperimg{ position:relative; top:25px;}
             .cyberflow{ position:relative;top:-44px;left:58px}
             .topbutton{
                 width:50%;
             }

                .start{
                    margin:10px;
                }
                
                #whyus{ margin-left:5px}
                .log{ margin-top:5px;margin-left:15px}
                .login{ background-color:#fff}

            .slider-image{
                width:30%;
            }
            
                .prevAndnext
            {
                height:100%;
                border-bottom-left-radius:300px ;
                border-bottom-right-radius:300px ;
                border-top-right-radius:300px ;
                border-top-left-radius:300px ;
            }
                  #iamfoot {
                margin-left:20px !important;
                }
                #subscribe{
                    margin-left:1rem !important;
                    margin-right: 1rem !important;
                }
                #psubs{
                margin:2rem;
                margin-top:1rem;
                margin-bottom:1rem;

                }
                #subsbutton
                {
                    width:70%;
                    border-bottom-left-radius:25px ;
                    border-bottom-right-radius:25px ;
                    border-top-right-radius:25px ;
                    border-top-left-radius:25px ;
                }
                #subsbar
                {
                    margin-left:1rem;
                    margin-right:1rem;
                }
                #subsbar
                {
                    border-bottom-left-radius:25px ;
                    border-bottom-right-radius:25px ;
                    border-top-right-radius:25px ;
                    border-top-left-radius:25px ;
                }
                #formsgroup
                {
                    padding-left:13px;
                    padding-right:13px;
                }
            }

      
        </style>
    </head>
	
    <body class="blue-skin" >
	
		 <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div id="preloader"><div class="preloader"><span></span></div></div>
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper" style="overflow-x:hidden;">
		
          