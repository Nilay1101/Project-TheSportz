<html>
    <head>
		<title>Coach-Profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/coach.css" rel="stylesheet">
        <link href="css/header.css" rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
            
    </head>
	
	<script>
$('.SeeMore2').click(function(){
		var $this = $(this);
		$this.toggleClass('SeeMore2');
		if($this.hasClass('SeeMore2')){
			$this.text('See More');			
		} else {
			$this.text('See Less');
		}
	});
	</script>
	
    <body>
        <header class="header">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="40">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="images/S6.png"></a>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse">
                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">City <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Pune</a></li>
                            <li><a href="#">Chennai</a></li>
                            <li><a href="#">Banglore</a></li>
                            <li><a href="#">Delhi</a></li>
                            <li><a href="#">Mumbai</a></li>
                        </ul>
                    </li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Login / Signup</a></li>
                </ul>
            </div>
        </nav>
            <ol class="breadcrumb" style="margin-top: 140px;margin-bottom: -130px;">
            <li><a href="index.html" >Home</a></li>
            <li><a href="result.html">Result</a></li>
            <li><a href="academy-profile.html">Academy</a></li>
            <li><a href="tournament.html">Tournament</a></li>
            <li><a href="venue.html">Venue</a></li>
            <li><a href="user-profile.html">User-Profile</a></li>
            <li><a href="teams.html">Teams</a></li>
        </ol>
        </header><br>
        <div class="start"></div>
        
        <div class="container-fluid">
            <div class="jumbotron profile-jumbo">
                <div class="row">
                    <div class="col-md-3">
                        <img src="images/academy-img.jpg" class="img-rounded">
                    </div>
                    <div class="col-md-9 info">
                        <div class="head">Name :</div><br>
						<div class="head">Gender :</div><br>
						<div class="head">Sport :</div><br>
                        <div class="head">Address :</div><br>
                        <div class="head">Contact :</div><br>
						<div class="head">Website :</div><br>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div style="margin-right:-25px; margin-left:30px"class="col-md-3">
                    <div class="jumbotron box">
                        <div class="text-center">
                            <h2>Experience</h2>
                        </div>
                    </div>
					 <div style="margin-top:-20px"class="jumbotron box">
                        <div class="text-center">
                            <h2>Fees</h2>
                        </div>
                    </div>
                </div>
                <div style="margin-right:-25px"class="col-md-6">
                    <div class="jumbotron box">
                        <div class="text-center">
                            <h2>About</h2>
                        </div>
                    </div>
                    <div style="margin-top:-20px"class="jumbotron box">
                        <div class="text-center">
                            <h2>Achievements</h2>
                        </div>
                    </div>
					 <div style="margin-top:-20px"class="jumbotron box">
                        <div class="text-center">
                            <h2>Reputed Players from Coach</h2>
                        </div>
                    </div>
					 <div style="margin-top:-20px"class="jumbotron box">
                        <div class="text-center">
                            <h2>Academies Working</h2>
                        </div>
                    </div>
					<div style="margin-top:-20px;"class=" ">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img class="image-responsive"src="images/img1.jpg">
                            </div>
                            <div class="item">
                                <img class="image-responsive"src="images/img2.jpg" >
                            </div>
                            <div class="item ">
                                <img class="image-responsive"src="images/img3.jpg" >
                            </div>
                            <div class="item">
                                <img class="image-responsive"src="images/img4.jpg" >
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true">
                            </span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    </div>
					
					<div style="margin-top:10px;"class="container-fluid text-left">
                    <div class="jumbotron box0">
					<div>
                        <h2>Comments and Reviews</h2>
						<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
    <blockquote>1. Adorable. The location's prefect </blockquote>
	<blockquote>2. The services lack quality</blockquote>
    </div>
    <div id="collapseTwo" class="accordion-body collapse">
      <div class="accordion-inner">
 <blockquote>3. Good all together</blockquote>
 <blockquote>4. Luky to be here</blockquote>
 <blockquote>5. A venue we can talk of</blockquote>
      </div>
    </div>
    <button class="SeeMore2" data-toggle="collapse" href="#collapseTwo">Read More</button>
  </div>

</div>
					</div>
                </div>
            </div>
					
				</div>
                <div class="col-md-3">
                    <div>
                       <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="300" height="150" src="https://maps.google.com/maps?hl=en&q=Akhnoor , Jammu and Kashmir&ie=UTF8&t=satellite&z=6&iwloc=B&output=embed"><div><small><a href="http://embedgooglemaps.com">embedgooglemaps.com</a></small></div><div><small><a href="http://premiumlinkgenerator.com/keep2share-cc">keep2share premium link generator</a></small></div></iframe>
                    </div>
					<div style="margin-top:10px"class="jumbotron box">
                        <div class="text-center">
						<h2>Coaches Nearby</h2>
						</div>
						</div>
                </div>
            </div>
        </div>
        <br>
        <br><br>
        <footer>
            <div class="container-fluid">
                <ul class="list-inline text-center text-muted">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Site Map</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>
            </div>
        </footer>
    </body>
</html>