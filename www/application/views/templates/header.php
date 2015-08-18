<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>CodeeIgniter Test Page</title>



	<!-- 합쳐지고 최소화된 최신 CSS -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">



	<style type="text/css">
  *{ color: #f92672 ;}
	p{   color: #f8f8f2; }
	body { background-color: #272822;}
	.code{}
	.annotation{ font-size: 10px; color:#75715e; line-height: 0.3em  }
	.annotation2{  color:#75715e;   }
	.tag1{ color:#f92672 ; } /*red*/
	.tag2{color: #c8db74; }  /*yel*/
	.tag3{color: #66d9ef; } /*blue*/
	.tag4{color: #a6e22e;}  /*green*/
  h1{color: #a6e22e;}
	/*.footer{ position: absolute; bottom: 0; }*/


	.typed-cursor{
	    opacity: 1;
	    -webkit-animation: blink 0.7s infinite;
	    -moz-animation: blink 0.7s infinite;
	    animation: blink 0.7s infinite;
	}
	@keyframes blink{
	    0% { opacity:1; }
	    50% { opacity:0; }
	    100% { opacity:1; }
	}
	@-webkit-keyframes blink{
	    0% { opacity:1; }
	    50% { opacity:0; }
	    100% { opacity:1; }
	}
	@-moz-keyframes blink{
	    0% { opacity:1; }
	    50% { opacity:0; }
	    100% { opacity:1; }
	}


  /*.container{     margin-top: 40px; text-align: center;;}*/
  .top_40{ margin-top: 40px; text-align: center; }
	</style>

    <!-- Bootstrap core JavaScript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>


	    <script type="text/javascript">
            // hide URL field on the iPhone/iPod touch
            function hideUrlBar() {
                
                if (window.pageYOffset==0) {
                    window.scrollTo(0, 1);
                    // repeat every second for slow rendering pages
                    setTimeout(function() { hideUrlBar(); }, 3000);
                
                }
                
            }
        </script>
 </head>
 <?php 

     
    $request_uri = explode("/",$_SERVER['PATH_INFO']);

	
	$navbar1 = '';
	$navbar2 = '';
	$navbar3 = '';
	
	switch ($request_uri[1]) {
	      case 'Main':
	      $navbar1 = "active";
	    break;
	      case 'Community':
	      $navbar2 = "open";
	    break;
	      case 'Contact':
	      $navbar3 = "active";
	    break;
	  
	  default:
	    break;
	
	}

 ?>  
<body  role="document" >
<!-- <body  role="document" oncontextmenu="return false;" ondragstart="return false;" onselectstart="return false;" onload="hideUrlBar();"> -->
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Test Page</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="<?=$navbar1?>"><a href="/Main">Home</a></li>
            
            <li class="dropdown ">
              <a href="/banking" class="dropdown-toggle <?=$navbar2?>" data-toggle="dropdown" role="button" aria-expanded="false">Community <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/board/">Commnity</a></li>

                <li class="divider"></li>
                <li class="dropdown-header">Member</li>
                <li><a href="/member">Login</a></li>
                <li><a href="/member/join">Join</a></li>
                <li><a href="/member/logout">Logout</a></li>
              </ul>
            </li>

            <li class="<?=$navbar3?>" ><a href="/Contact">Contact</a></li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

