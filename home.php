<!Doctype html>
<html lang="en-gb" class="no-js">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Ostrya Labs</title>
	
	<meta name="description" content="Ostrya Labs PVT LTD is an IT services company working with a wide range of business domains, specialized in Ruby on Rails, Angular JS and Mobile[iOS and Android] technologies.">
	<meta name="author" content="">
	<meta name="keywords" content="Ostrya,Labs,Software,Development,Software Development,Ruby,Rails,Ruby on rails,ROR,E commerce,Android,IOS,.NET,ASP,Html,UI,CSS,AngularJS,Jscript,Java script,Services,Web,ERP,Product Development,End to end,Apps,Mobile,open source,Finance,Inventory management">
	
	 
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    
    <!-- **CSS - stylesheets** -->
	<link id="default-css" rel="stylesheet" href="style.css" type="text/css" media="all" />
	<link id="shortcodes-css" rel="stylesheet" href="shortcodes.css" type="text/css" media="all"/>
	<link id="skin-css" rel="stylesheet" href="skins/skyblue/style.css" type="text/css" media="all"/>
    <link id="layer-slider" rel="stylesheet"  href="css/layerslider.css" media="all" />
	
	<!-- **Additional - stylesheets** -->
	<link rel="stylesheet" href="responsive.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="css/meanmenu.css" type="text/css" media="all"/>
    
    <!-- **Font Awesome** -->
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
 
<script type="text/javascript">

var colour="#FFFFF0";
var sparkles=260;
var x=ox=400;
var y=oy=300;
var swide=800;
var shigh=600;
var sleft=sdown=0;
var tiny=new Array();
var star=new Array();
var starv=new Array();
var starx=new Array();
var stary=new Array();
var tinyx=new Array();
var tinyy=new Array();
var tinyv=new Array();

window.onload=function() { if (document.getElementById) {
  var i, rats, rlef, rdow;
  for (var i=0; i<sparkles; i++) {
    var rats=createDiv(3, 3);
    rats.style.visibility="hidden";
    document.body.appendChild(tiny[i]=rats);
    starv[i]=0;
    tinyv[i]=0;
    var rats=createDiv(5, 5);
    rats.style.backgroundColor="transparent";
    rats.style.visibility="hidden";
    var rlef=createDiv(1, 5);
    var rdow=createDiv(5, 1);
    rats.appendChild(rlef);
    rats.appendChild(rdow);
    rlef.style.top="2px";
    rlef.style.left="0px";
    rdow.style.top="0px";
    rdow.style.left="2px";
    document.body.appendChild(star[i]=rats);
  }
  set_width();
  sparkle();
}}

function sparkle() {
  var c;
  if (x!=ox || y!=oy) {
    ox=x;
    oy=y;
    for (c=0; c<sparkles; c++) if (!starv[c]) {
      star[c].style.left=(starx[c]=x)+"px";
      star[c].style.top=(stary[c]=y)+"px";
      star[c].style.clip="rect(0px, 5px, 5px, 0px)";
      star[c].style.visibility="visible";
      starv[c]=50;
      break;
    }
  }
  for (c=0; c<sparkles; c++) {
    if (starv[c]) update_star(c);
    if (tinyv[c]) update_tiny(c);
  }
  setTimeout("sparkle()", 40);
}

function update_star(i) {
  if (--starv[i]==25) star[i].style.clip="rect(1px, 4px, 4px, 1px)";
  if (starv[i]) {
    stary[i]+=1+Math.random()*3;
    if (stary[i]<shigh+sdown) {
      star[i].style.top=stary[i]+"px";
      starx[i]+=(i%5-2)/5;
      star[i].style.left=starx[i]+"px";
    }
    else {
      star[i].style.visibility="hidden";
      starv[i]=0;
      return;
    }
  }
  else {
    tinyv[i]=50;
    tiny[i].style.top=(tinyy[i]=stary[i])+"px";
    tiny[i].style.left=(tinyx[i]=starx[i])+"px";
    tiny[i].style.width="2px";
    tiny[i].style.height="2px";
    star[i].style.visibility="hidden";
    tiny[i].style.visibility="visible"
  }
}

function update_tiny(i) {
  if (--tinyv[i]==25) {
    tiny[i].style.width="1px";
    tiny[i].style.height="1px";
  }
  if (tinyv[i]) {
    tinyy[i]+=1+Math.random()*3;
    if (tinyy[i]<shigh+sdown) {
      tiny[i].style.top=tinyy[i]+"px";
      tinyx[i]+=(i%5-2)/5;
      tiny[i].style.left=tinyx[i]+"px";
    }
    else {
      tiny[i].style.visibility="hidden";
      tinyv[i]=0;
      return;
    }
  }
  else tiny[i].style.visibility="hidden";
}

document.onmousemove=mouse;
function mouse(e) {
  set_scroll();
  y=(e)?e.pageY:event.y+sdown;
  x=(e)?e.pageX:event.x+sleft;
}

function set_scroll() {
  if (typeof(self.pageYOffset)=="number") {
    sdown=self.pageYOffset;
    sleft=self.pageXOffset;
  }
  else if (document.body.scrollTop || document.body.scrollLeft) {
    sdown=document.body.scrollTop;
    sleft=document.body.scrollLeft;
  }
  else if (document.documentElement && (document.documentElement.scrollTop || document.documentElement.scrollLeft)) {
    sleft=document.documentElement.scrollLeft;
	sdown=document.documentElement.scrollTop;
  }
  else {
    sdown=0;
    sleft=0;
  }
}

window.onresize=set_width;
function set_width() {
  if (typeof(self.innerWidth)=="number") {
    swide=self.innerWidth;
    shigh=self.innerHeight;
  }
  else if (document.documentElement && document.documentElement.clientWidth) {
    swide=document.documentElement.clientWidth;
    shigh=document.documentElement.clientHeight;
  }
  else if (document.body.clientWidth) {
    swide=document.body.clientWidth;
    shigh=document.body.clientHeight;
  }
}

function createDiv(height, width) {
  var div=document.createElement("div");
  div.style.position="absolute";
  div.style.height=height+"px";
  div.style.width=width+"px";
  div.style.overflow="hidden";
  div.style.backgroundColor=colour;
  return (div);
}
// ]]>
</script>

</head>

<body>

<div class="loader-wrapper">
	<div id="loader-image"></div>
</div>
<!-- **Wrapper** -->
<div class="wrapper"> 
	<div class="inner-wrapper">
    	
        <div id="header-wrapper" class="header-mean-wrapper">
	        <!-- **Header** -->
	        <header class="header">
	        	<div class="container">
	            
	                <!-- **Logo - End** -->
	                <div id="logo">
	                    <a href="index.html" title="Ostrya Labs"> <img src="images/logo.png" alt="logo"/> </a>
	                </div><!-- **Logo - End** -->
	                
	                <div id="menu-container">
	                    <!-- **Nav - Starts**-->
	                    <nav id="main-menu">
                            <ul class="group">
	                            <li class="current_page_item"><a href="#home">Home</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#team">Team</a></li>
                                <li><a href="#portfolio">Portfolio</a></li>
                                <li><a href="#blog">Blog</a></li> 
                                <li><a href="#contacts">Contact</a></li>
	                        </ul>
	                    </nav>
	                    <!-- **Nav - End**-->
	               </div>
	
	            </div>
	        </header><!-- **Header - End** -->
        </div>
       
        
           
        <!-- **Main - Starts** --> 
		<div id="main">
        	<section id="services">        
                <!-- **Full-width-section - Starts** -->       
                <div class="full-width-section">
                <div class="dt-sc-margin65"></div> 
                    <div class="container">
                        <h2 class="aligncenter">Our Services</h2>
                        <p class="middle-align">We offer a broad variety of services. The services we provide include...</p>	
                        <div class="dt-sc-hr-invisible-small"></div>
                        <div class="column dt-sc-one-third first">
                            <div class="dt-sc-ico-content type7">
                                <div class="icon animate" data-animation="fadeInRight" data-delay="100">
                                    <img src="images/admin1.png" alt="admin"/>
                                </div>
                                <h4> <a href="#"> Awesome Features </a> </h4>
                                <p>We provide the applications that are developed on latest technologies which gives many new features. </p>
                            </div>
                        </div>
                        
                        <div class="column dt-sc-one-third">
                            <div class="dt-sc-ico-content type7">
                                <div class="icon animate" data-animation="fadeInUp" data-delay="100">
                                    <img src="images/tablet-icon1.png" alt="tablet"/>
                                </div>
                                <h4> <a href="#"> 100% Responsive </a> </h4>
                                <p>We make the web application fully responsive so that it becomes easy to use your application on any screen resolution without any extra effort.</p>
                            </div>
                        </div>
                        
                        <div class="column dt-sc-one-third">
                            <div class="dt-sc-ico-content type7">
                                <div class="icon animate"  data-animation="fadeInLeft" data-delay="100">
                                    <img src="images/camera1.png" alt="plane"/>
                                </div>
                                <h4> <a href="#"> Media Support </a> </h4>
                                <p>We integrate media features such as jukebox, video player, online picture gallery etc with a  cool UI to your application</p>
                            </div>
                        </div>
                        <div class="dt-sc-margin30"></div>
                        <div class="column dt-sc-one-third first">
                            <div class="dt-sc-ico-content type7">
                                <div class="icon animate"  data-animation="fadeInRight" data-delay="100">
                                    <img src="images/power-gears1.png" alt="flag"/>
                                </div>
                                <h4> <a href="#"> Extremely Flexible </a> </h4>
                                <p>We make the application in the most innovative way, which is flexible to adapt new features. </p>
                            </div>
                        </div>
                        
                        <div class="column dt-sc-one-third">
                            <div class="dt-sc-ico-content type7">
                                <div class="icon animate" data-animation="fadeInUp" data-delay="100">
                                    <img src="images/battery.png" alt="flag"/>
                                </div>
                                <h4> <a href="#"> Light Weight </a> </h4>
                                <p>We make your application in light weight so that it becomes very easy and takes less time to get your application loaded.</p>
                            </div>
                        </div>
                        
                        <div class="column dt-sc-one-third">
                            <div class="dt-sc-ico-content type7">
                                <div class="icon animate" data-animation="fadeInLeft" data-delay="100">
                                    <img src="images/watch.png" alt="flag"/>
                                </div>
                                <h4> <a href="#"> Latest Design Trend </a> </h4>
                                <p>As user interface is the most important part in the application, we always set the latest design trend that gives end-user the most attractive look. </p>
                            </div>
                        </div>
                        <div class="dt-sc-margin30"></div>
                        <div class="column dt-sc-one-third first">
                            <div class="dt-sc-ico-content type7">
                                <div class="icon animate" data-animation="fadeInRight" data-delay="100">
                                    <img src="images/book-mark.png" alt="flag"/>
                                </div>
                                <h4> <a href="#"> Exclusive Documentation </a> </h4>
                                <p>We provide full documentation of the application as per the user requirement.  </p>
                            </div>
                        </div>
                        
                        <div class="column dt-sc-one-third">
                            <div class="dt-sc-ico-content type7">
                                <div class="icon animate" data-animation="fadeInUp" data-delay="100">
                                    <img src="images/speaker.png" alt="flag"/>
                                </div>
                                <h4> <a href="#"> Product Page </a> </h4>
                                <p>We make customised pages for your products in a creative way which will catch the eye of the customers. </p>
                            </div>
                        </div>
                        
                        <div class="column dt-sc-one-third">
                            <div class="dt-sc-ico-content type7">
                                <div class="icon animate" data-animation="fadeInLeft" data-delay="100">
                                    <img src="images/brush-bucket.png" alt="flag"/>
                                </div>
                                <h4> <a href="#"> Creative </a> </h4>
                                <p>We make your application as well as design in a creative way, which gives a great look and feel.</p>
                            </div>
                        </div>
                        
                    </div>
                <div class="dt-sc-hr-invisible"></div>
                </div><!-- **Full-width-section - Ends** -->
                
                <!-- **Full-width-section - Starts** -->   
                <div class="parallax full-width-section fullwidth-testimonial">
                    <div class="container">
                        <div class="dt-sc-testimonial-wrapper type2">
                            <ul class="dt-sc-testimonial-carousel">
                                <li> <div class="dt-sc-testimonial">
                                    <h5 style="text-shadow: 1px 1px 3px #000000">“Ostrya Labs did an excellent job in delivering an application on CBT in the required time frame and the results have been very good and satisfactory. The developers are very professional, prompt and cooperative. I would highly recommend them for any sort of Computer Application Development."</h5>
                                    <span style="text-shadow: 0.5px 0.5px 1px #000000">Mrs. T. Vamshi Mohana</span><br><span>Head, Department of Computer Science,</span><br><span>R.B.V.R.R. Women's College.</span>
                                    <div class="dt-sc-margin30"></div>
                                    <div class="author">
                                        <img src="images/vamshi.jpg" alt="image"/>
                                    </div>
                                </div> </li>
                                
                                <li> <div class="dt-sc-testimonial">
                                    <h5 style="text-shadow: 1px 1px 3px #000000">“Ostrya Labs is one of the best Ruby on Rails company you can find in Hyderabad. They helped in refining the requirements too. The team delivered the work to our satisfaction in all the engagements and we recommend them wholeheartedly."<br><br><br></h5>
                                    <span style="text-shadow: 0.5px 0.5px 1px #000000"> Mr. Santhosh Shukla </span><br><span>Director, F1Circle.</span>
                                    <div class="dt-sc-margin30"></div>
                                    <div class="author">
                                        <img src="images/santhosh.png" alt="image"/>
                                    </div>
                                </div> </li>
                                
                                <li> <div class="dt-sc-testimonial">
                                    <h5 style="text-shadow: 1px 1px 3px #000000">“My expectations from the workshop was merely to understand the Rails framework, and get over the initial pain that a developer goes through in the process of learning a new framework/technology himself. Arun is one of the thorough professionals and the in-depth knowledge of the topics showed during the workshop."<br></h5>
                                    <span style="text-shadow: 0.5px 0.5px 1px #000000"> Mr. Ritesh Gupta </span><br><span>Senior Technical Architect(Java),</span>
                                    <br><span>13 years experience in IT</span>
                                    <div class="dt-sc-margin30"></div>
                                    <div class="author">
                                        <img src="images/ritesh.jpg" alt="image"/>
                                    </div>
                                </div> </li>
                                <li> <div class="dt-sc-testimonial">
                                    <h5 style="text-shadow: 1px 1px 3px #000000">“Arun did a great job of covering Ruby on Rails and related technologies like cucumber, RSpec, github, etc. with a good mix of presentation and hands-on lab time! Highly recommended for anyone who wants to learn these technologies." <br><br><br></h5>
                                    <span style="text-shadow: 0.5px 0.5px 1px #000000"> Mr. Krishna Natarajan </span><br><span>27 years veteran in IT industry </span>
                                    <div class="dt-sc-margin30"></div>
                                    <div class="author">
                                        <img src="images/user.jpg" alt="image"/>
                                    </div>
                                </div> </li>
                                
                            </ul>
                            <div class="slider-controls">
                                <div class="pager">
                                    <a href="#"> <span> 1 </span> </a>
                                    <a href="#"> <span> 2 </span> </a>
                                    <a href="#"> <span> 3 </span> </a>
                                    <a href="#"> <span> 4 </span> </a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div><!-- **Full-width-section - Ends** -->
            </section> 
            
            <section id="team">
                <div class="full-width-section">
                    <div class="dt-sc-margin65"></div>
                    <div class="container">
                        <h2 class="aligncenter">Our Team</h2>
                        <p class="middle-align">Dedicated group of professionals determined to provide software solutions in the most innovative way. </p>	
                        <div class="dt-sc-hr-invisible-small" ></div>
                        
                        <div class="column dt-sc-one-fourth first" style="margin-left:13%">
                            <!-- **dt-sc-team - Starts** -->
                            <div class="dt-sc-team">
                                <div class="image"><img src="images/gopika.jpg" alt="Gopika"/></div>
                                <!-- **team-details - Starts** -->
                                <div class="team-details">
                                    <h6><a href="#">Gopika</a></h6>
                                    <p>Director & CEO</p>
                                </div> <!-- **team-details - Ends** -->
                                <!-- **dt-sc-social-icons - Starts** -->
                                <ul class="dt-sc-social-icons">
                                    <li> <a href="#" title=""> <span class="fa fa-twitter"></span>  </a> </li>
                                    <li> <a href="#" title=""> <span class="fa fa-facebook"></span>  </a> </li>
                                    <li> <a href="#" title=""> <span class="fa fa-behance"></span>  </a> </li>
                                    <li> <a href="#" title=""> <span class="fa fa-dribbble"></span>  </a> </li>
                                    <li> <a href="#" title=""> <span class="fa fa-linkedin"></span>  </a> </li>
                                </ul> <!-- **dt-sc-social-icons - Ends** -->
                            </div><!-- **dt-sc-team - Ends** -->
                        </div> <!-- **column - Ends** -->
                        <!-- **column - Starts** -->
                        <div class="column dt-sc-one-fourth">
                            <!-- **dt-sc-team - Starts** -->
                            <div class="dt-sc-team">
                                <div class="image"><img src="images/hari.jpg" alt="Hari"/></div>
                                <!-- **team-details - Starts** -->
                                <div class="team-details">
                                    <h6><a href="#">Srihari</a></h6>
                                    <p>Director & Marketing</p>
                                </div> <!-- **team-details - Ends** -->
                                <!-- **dt-sc-social-icons - Starts** -->
                                <ul class="dt-sc-social-icons">
                                    <li> <a href="#" title="twitter"> <span class="fa fa-twitter"></span>  </a> </li>
                                    <li> <a href="#" title="facebook"> <span class="fa fa-facebook"></span>  </a> </li>
                                    <li> <a href="#" title="behance"> <span class="fa fa-behance"></span>  </a> </li>
                                    <li> <a href="#" title="dribbble"> <span class="fa fa-dribbble"></span>  </a> </li>
                                    <li> <a href="#" title="linkedin"> <span class="fa fa-linkedin"></span>  </a> </li>
                                </ul> <!-- **dt-sc-social-icons - Ends** -->
                            </div><!-- **dt-sc-team - Ends** -->
                        </div> <!-- **column - Ends** -->
                        <!-- **column - Starts** -->
                        <div class="column dt-sc-one-fourth">
                            <!-- **dt-sc-team - Starts** -->
                            <div class="dt-sc-team">
                                <div class="image"><img src="images/arun.jpg" alt="Arun"/></div>
                                <!-- **team-details - Starts** -->
                                <div class="team-details">
                                    <h6><a href="#">Arun</a></h6>
                                    <p>Founder & Technical Advisor</p>
                                </div> <!-- **team-details - Ends** -->
                                <!-- **dt-sc-social-icons - Starts** -->
                                <ul class="dt-sc-social-icons">
                                    <li> <a href="#" title="twitter"> <span class="fa fa-twitter"></span>  </a> </li>
                                    <li> <a href="#" title="facebook"> <span class="fa fa-facebook"></span>  </a> </li>
                                    <li> <a href="#" title="behance"> <span class="fa fa-behance"></span>  </a> </li>
                                    <li> <a href="#" title="dribbble"> <span class="fa fa-dribbble"></span>  </a> </li>
                                    <li> <a href="#" title="linkedin"> <span class="fa fa-linkedin"></span>  </a> </li>
                                </ul> <!-- **dt-sc-social-icons - Ends** -->
                            </div><!-- **dt-sc-team - Ends** -->
                        </div> <!-- **column - Ends** -->
                        <!-- **column - Starts** -->
                        
                    </div>
                    <div class="dt-sc-margin30"></div>
                    <div class="hr-line"></div>
                </div>
                
            </section>
           
            <section id="portfolio">                
                <!-- **Full-width-section - Starts** -->
                <div class="full-width-section">
                    <div class="dt-sc-margin65"></div>
                    <div class="container">
                        <h2 class="aligncenter">Our Portfolio</h2>
                        <p class="middle-align">Check out our portfolio to get to know more about the type of projects we currently deal with. </p>	
                        <div class="dt-sc-hr-invisible-small"></div>
                        
                        <div class="dt-sc-hr-invisible-small"></div>
                    </div>
                    <!-- **portfolio-container - Starts** -->
                    <div class="portfolio-container  ">
                        <div class="portfolio dt-sc-one-fifth  column all-sort outdoors-sort fashion-sort">
                            <!-- **portfolio-thumb - Starts** -->
                            <div class="portfolio-thumb">
                                <figure>
                                    <img src="New folder/url.png"  alt="image"/>
                                    <div class="image-overlay">
                                        <a class="zoom" href="New folder/url.png" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
                                        <a class="link" href="portfolio-detail-v2.html"><span class="fa fa-link"></span></a>
                                        <div class="portfolio-content">
                                            <h5> <a href="portfolio-detail-v2.html"> Educational ERP </a> </h5>
                                            <span class="fa fa-sort-up"></span>
                                        </div>
                                    </div>
                                </figure>
                            </div> <!-- **portfolio-thumb - Ends** -->
                        </div>
                        
                        <div class="portfolio dt-sc-one-fifth column all-sort fashion-sort graphic-sort">
                            <!-- **portfolio-thumb - Starts** -->
                            <div class="portfolio-thumb">
                                <figure>
                                    <img src="New folder/property.jpg" alt="image"/>
                                    <div class="image-overlay">
                                        <a class="zoom" href="New folder/property.jpg" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
                                        <a class="link" href="portfolio-detail.html"><span class="fa fa-link"></span></a>
                                        <div class="portfolio-content">
                                            <h5> <a href="portfolio-detail.html"> Property Management </a> </h5>
                                            <span class="fa fa-sort-up"></span>
                                        </div>
                                    </div>
                                </figure>
                            </div> <!-- **portfolio-thumb - Ends** -->
                        </div>
                        
                        <div class="portfolio dt-sc-one-fifth  column all-sort fashion-sort photography-sort">
                            <!-- **portfolio-thumb - Starts** -->
                            <div class="portfolio-thumb">
                                <figure>
                                    <img src="New folder/examonline.jpg" alt="image"/>
                                    <div class="image-overlay">
                                        <a class="zoom" href="New folder/examonline.jpg" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
                                        <a class="link" href="portfolio-detail-v2.html"><span class="fa fa-link"></span></a>
                                        <div class="portfolio-content">
                                            <h5> <a href="portfolio-detail-v2.html"> Online Examination </a> </h5>
                                            <span class="fa fa-sort-up"></span>
                                        </div>
                                    </div>
                                </figure>
                            </div> <!-- **portfolio-thumb - Ends** -->
                        </div>
                        
                        <div class="portfolio dt-sc-one-fifth  column all-sort photography-sort outdoors-sort">
                            <!-- **portfolio-thumb - Starts** -->
                            <div class="portfolio-thumb">
                                <figure>
                                    <img src="New folder/examctrl.jpg" alt="image"/>
                                    <div class="image-overlay">
                                        <a class="zoom" href="New folder/examctrl.jpg" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
                                        <a class="link" href="portfolio-detail.html"><span class="fa fa-link"></span></a>
                                        <div class="portfolio-content">
                                            <h5> <a href="portfolio-detail.html"> Examination Controller </a> </h5>
                                            <span class="fa fa-sort-up"></span>
                                        </div>
                                    </div>
                                </figure>
                            </div> <!-- **portfolio-thumb - Ends** -->
                        </div>
                        
                        <div class="portfolio dt-sc-one-fifth  column all-sort fashion-sort outdoors-sort">
                            <!-- **portfolio-thumb - Starts** -->
                            <div class="portfolio-thumb">
                                <figure>
                                    <img src="New folder/Mediamkt.jpg" alt="image"/>
                                    <div class="image-overlay">
                                        <a class="zoom" href="New folder/mediamkt.jpg" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
                                        <a class="link" href="portfolio-detail-v2.html"><span class="fa fa-link"></span></a>
                                        <div class="portfolio-content">
                                            <h5> <a href="portfolio-detail-v2.html"> Online Social Marketing </a> </h5>
                                            <span class="fa fa-sort-up"></span>
                                        </div>
                                    </div>
                                </figure>
                            </div> <!-- **portfolio-thumb - Ends** -->
                        </div>
                        
                        <div class="portfolio dt-sc-one-fifth  column all-sort graphic-sort">
                            <!-- **portfolio-thumb - Starts** -->
                            <div class="portfolio-thumb">
                                <figure>
                                    <img src="New folder/commodity.jpg" alt="image"/>
                                    <div class="image-overlay">
                                        <a class="zoom" href="New folder/commodity.jpg" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
                                        <a class="link" href="portfolio-detail.html"><span class="fa fa-link"></span></a>
                                        <div class="portfolio-content">
                                            <h5> <a href="portfolio-detail.html"> Commodity Trading </a> </h5>
                                            <span class="fa fa-sort-up"></span>
                                        </div>
                                    </div>
                                </figure>
                            </div> <!-- **portfolio-thumb - Ends** -->
                        </div>
                        
                        <div class="portfolio dt-sc-one-fifth  column all-sort photography-sort graphic-sort">
                            <!-- **portfolio-thumb - Starts** -->
                            <div class="portfolio-thumb">
                                <figure>
                                    <img src="New folder/mobile.png" alt="image"/>
                                    <div class="image-overlay">
                                        <a class="zoom" href="New folder/mobile.png" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
                                        <a class="link" href="portfolio-detail-v2.html"><span class="fa fa-link"></span></a>
                                        <div class="portfolio-content">
                                            <h5> <a href="portfolio-detail-v2.html"> Mobile App Development </a> </h5>
                                            <span class="fa fa-sort-up"></span>
                                        </div>
                                    </div>
                                </figure>
                            </div> <!-- **portfolio-thumb - Ends** -->
                        </div>
                        
                        <div class="portfolio dt-sc-one-fifth  column all-sort graphic-sort">
                            <!-- **portfolio-thumb - Starts** -->
                            <div class="portfolio-thumb">
                                <figure>
                                    <img src="New folder/banking.jpg" alt="image"/>
                                    <div class="image-overlay">
                                        <a class="zoom" href="New folder/banking.jpg" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
                                        <a class="link" href="portfolio-detail.html"><span class="fa fa-link"></span></a>
                                        <div class="portfolio-content">
                                            <h5> <a href="portfolio-detail.html"> CORE BANKING SOLUTION </a> </h5>
                                            <span class="fa fa-sort-up"></span>
                                        </div>
                                    </div>
                                </figure>
                            </div> <!-- **portfolio-thumb - Ends** -->
                        </div>
                        
                        <div class="portfolio dt-sc-one-fifth  column all-sort outdoors-sort fashion-sort">
                            <!-- **portfolio-thumb - Starts** -->
                            <div class="portfolio-thumb">
                                <figure>
                                    <img src="New folder/payroll.jpg" alt="image"/>
                                    <div class="image-overlay">
                                        <a class="zoom" href="New folder/payroll.jpg" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
                                        <a class="link" href="portfolio-detail-v2.html"><span class="fa fa-link"></span></a>
                                        <div class="portfolio-content">
                                            <h5> <a href="portfolio-detail-v2.html"> Payroll Management </a> </h5>
                                            <span class="fa fa-sort-up"></span>
                                        </div>
                                    </div>
                                </figure>
                            </div> <!-- **portfolio-thumb - Ends** -->
                        </div>
                        
                        <div class="portfolio dt-sc-one-fifth  column all-sort fashion-sort graphic-sort">
                            <!-- **portfolio-thumb - Starts** -->
                            <div class="portfolio-thumb">
                                <figure>
                                    <img src="New folder/health.jpg" alt="image"/>
                                    <div class="image-overlay">
                                        <a class="zoom" href="New folder/health.jpg" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
                                        <a class="link" href="portfolio-detail.html"><span class="fa fa-link"></span></a>
                                        <div class="portfolio-content">
                                            <h5> <a href="portfolio-detail.html"> Health Care </a> </h5>
                                            <span class="fa fa-sort-up"></span>
                                        </div>
                                    </div>
                                </figure>
                            </div> <!-- **portfolio-thumb - Ends** -->
                        </div>
                        
                        
                         
                    </div> <!-- **portfolio-container - Ends** -->
                </div> <!-- **Full-width-section - Ends** -->
            </section>
            
            <section id="contacts">
                <!-- **Full-width-section - Starts** -->
                <div class="full-width-section">
                    <!--sdsd-->
                    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="1348" height="443" src="https://maps.google.com/maps?hl=en&q=Vindhya c4,IIIT campus,Gachibowli&ie=UTF8&t=roadmap&z=16&iwloc=B&output=embed"><div><small><a href="http://embedgooglemaps.com">by embedgooglemaps.com</a></small></div><div><small><a href="http://embedgooglemaps.com">embed google maps here</a></small></div></iframe>
                    <div class="dt-sc-margin50"></div>
                    <div class="container">
                        <div class="column dt-sc-three-fourth first animate" data-animation="fadeInRight" data-delay="100">
                            <div class="hr-title">
                                <h3>Give a Message</h3>
                                <div class="title-sep"> </div>
                            </div>
                            <form method="post" class="dt-sc-contact-form" action="php/send.php" name="frmcontact">
                                <div class="column dt-sc-one-third first">
                                    <p> <span> <input type="text" placeholder="Name*" name="txtname" value="" required /> </span> </p>
                                </div>
                                <div class="column dt-sc-one-third">
                                    <p> <span> <input type="email" placeholder="Email*" name="txtemail" value="" required /> </span> </p>
                                </div>
                                <div class="column dt-sc-one-third">
                                    <p> <span> <input type="text" placeholder="Phone" name="txtphone" value="" /> </span> </p>
                                </div>
                                <p> <textarea placeholder="Message*" name="txtmessage" required ></textarea> </p>
                                <p> <input type="submit" value="Send Message" name="submit" /> </p>
                            </form>
                            <div id="ajax_contact_msg"></div>
                        </div>
                        
                        <div class="column dt-sc-one-fourth animate" data-animation="fadeInLeft" data-delay="100">
                            <div class="hr-title">
                                <h3>Contact Info</h3>
                                <div class="title-sep"> </div>
                            </div>
                            <p class="dt-sc-contact-detail"> We are located at IIIT in Gachibowli. Send us an email, give us a call, or fill out our Project Brief if you're interested in getting started.  </p>
                            <!-- **dt-sc-contact-info - Starts** -->
                            <div class="dt-sc-contact-info">
                                <p> <i class="fa fa-location-arrow"></i> IIIT-H Campus,2nd Floor, Vindhya C4, Gachibowli, Hyderabad<br/> &ensp;&ensp;&ensp;India </p>
                                <p> <i class="fa fa-phone"></i> +91-(986)640-2306</p>
                                <p> <i class="fa fa-globe"></i> <a href="http://www.ostryalabs.com"> ostryalabs.com </a> </p>
                                <p> <i class="fa fa-envelope"></i> <a href="mailto:info@ostryalabs.com"> info@ostryalabs.com </a> </p>
                            </div> <!-- **dt-sc-contact-info - Ends** -->
                        </div>
                        <div class="dt-sc-margin70"></div>
                        <div class="column dt-sc-one-third first">
                        	<div class="dt-sc-contact-info type2">
                            	<div class="dt-sc-contact-detail">
                                    <h4> Contact us by Phone </h4>
                                    <p> Phone Timings: 0800-2000 hrs </p>
                                </div>
                                <div class="contact-icon">
                                	<span class="fa fa-phone"></span>
                                    <h4> +91-(986)640-2306 </h4>
                                </div>
                            </div>
                        </div>
                        <div class="column dt-sc-one-third">
                        	<div class="dt-sc-contact-info type2">
                            	<div class="dt-sc-contact-detail">
                                    <h4> Give your Feedback </h4>
                                    <p> Help us improve!	 </p>
                                </div>
                                <div class="contact-icon">
                                	<span class="fa fa-envelope-o"></span>
                                    <h4> <a href="#"> feedback@Ostryalabs.com </a> </h4>
                                </div>
                            </div>
                        </div>
                        <div class="column dt-sc-one-third">
                        	<div class="dt-sc-contact-info type2">
                            	<div class="dt-sc-contact-detail">
                                    <h4> Services and Support </h4>
                                    <p> Get your doubts cleared </p>
                                </div>
                                <div class="contact-icon">
                                	<span class="fa fa-headphones"></span>
                                    <h4> <a href="#"> Support Centre </a> </h4>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="dt-sc-margin50"></div>
                </div> <!-- **Full-width-section - Ends** -->
                
                <!-- **Full-width-section - Starts** -->
                <div class="full-width-section grey1"> 
                    <div class="dt-sc-hr-invisible"></div>
                    <div class="container">
                        <!-- **dt-sc-partner-carousel-wrapper - Starts** -->
                        <div class="dt-sc-partner-carousel-wrapper">
                            <ul class="dt-sc-partner-carousel">
                                <li><a href="#"><img src="New folder/client1.png" alt="SLDG"/></a></li>
                                <li><a href="#"><img src="New folder/client2.png" alt="Life Circle"/></a></li>
                                <li><a href="#"><img src="New folder/client4.png" alt="RBVRR college"/></a></li>
                                <li><a href="#"><img src="New folder/client3.png" alt="Pavan Traders"/></a></li>
                                <li><a href="#"><img src="New folder/client5.png" alt="HOCHTIEF"/></a></li>
                            </ul>
                        </div><!-- **dt-sc-partner-carousel-wrapper - Starts** -->
                    </div>
                    <div class="dt-sc-hr-invisible-small"></div>
                </div> <!-- **Full-width-section - Ends** -->	
			</section>
        </div><!-- **Main - Ends** --> 
        
        <!-- **Footer** -->
        <footer id="footer">
            <div class="footer-wrapper">
                <div class="container">
                	<div class="bottom-tweet">
                		<span class="fa fa-twitter"></span>
                    </div>
                   <div class="dt-sc-hr-invisible"></div>
                	<div class="tweets"></div>
                    <div class="dt-sc-margin70"></div>
                    <ul class="dt-sc-social-icons">
                        <li><a class="dt-sc-tooltip-top facebook" href='#' target="_blank" title="Facebook"> <i class="fa fa-facebook"></i> </a></li>
                        <li><a class="dt-sc-tooltip-top twitter" href='#' target="_blank" title="Twitter"> <i class="fa fa-twitter"></i> </a></li>
                        <li><a class="dt-sc-tooltip-top google-plus" href='#' target="_blank" title="Google-plus"> <i class="fa fa-google-plus"></i> </a></li>
                        <li><a class="dt-sc-tooltip-top pinterest" href='#' target="_blank" title="Pinterest"> <i class="fa fa-pinterest"></i> </a></li>
                        <li><a class="dt-sc-tooltip-top youtube" href='#' target="_blank" title="Youtube"> <i class="fa fa-youtube"></i> </a></li>
                    </ul>
                    <div class="dt-sc-hr-invisible"></div>
                </div>
            
                <div class="copyright">
                    <div class="container">
                        <p>Ostrya Labs © 2015 <a href="#">Ostrya Labs</a></p>
                        <ul class="footer-links">
                            <li><a href="index.html">Home</a>/</li>
                            <li><a href="about.html">About</a>/</li>
                            <li><a href="tabs-accordions.html">Pages</a>/</li>
                            <li><a href="blog.html">Blog</a>/</li>
                            <li><a href="portfolio-3-column-without-space.html">Portfolio</a>/</li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </footer> <!-- **Footer - End** -->
        
    </div><!-- **inner-wrapper - End** -->
    
</div><!-- **Wrapper - End** -->
        
	<!-- **jQuery** -->  
	<script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="js/jquery-migrate.min.js"></script> 
	
    <script src="js/preloader.js" type="text/javascript"></script>
    <script src="js/pace.min.js" type="text/javascript"></script>
    
    <script src="js/jquery.tabs.min.js"></script>
    <script src="js/jquery.tipTip.minified.js"></script>
	
	<script src="js/jquery-easing-1.3.js" type="text/javascript"></script>
    
    <script src="js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>
    
	<script src="js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
    <script src="js/jquery.inview.js" type="text/javascript"></script>
	
	<script src="js/jquery.nav.js" type="text/javascript"></script>
	
	<script src="js/jquery.jcarousel.min.js" type="text/javascript"></script>
    
    <script src="js/jquery.donutchart.js" type="text/javascript"></script>
	
	<script src="js/jquery.isotope.min.js" type="text/javascript"></script>
	<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
	
	<script src="js/masonry.pkgd.min.js" type="text/javascript"></script>
    
    <script src="js/jquery.smartresize.js" type="text/javascript"></script>
	
	<script src="js/responsive-nav.js" type="text/javascript"></script>
	<script src="js/jquery.meanmenu.min.js" type="text/javascript"></script>
    <script src="js/jquery.scrollTo.js" type="text/javascript"></script>
	
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="js/jquery.gmap.min.js"></script>
    
	<!-- **Sticky Nav** -->
	<script src="js/jquery.sticky.js" type="text/javascript"></script>

	<!-- **To Top** -->
	<script src="js/jquery.ui.totop.min.js" type="text/javascript"></script>
	
	<script type="text/javascript" src="js/twitter/jquery.tweet.min.js"></script>
	
    <script src="js/jquery.viewport.js" type="text/javascript"></script> 
    <script src="js/twitter/jquery.tweet.min.js" type="text/javascript"></script>
	
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	
	<script src="js/retina.js" type="text/javascript"></script>
	
	<script src="js/jquery.nicescroll.min.js" type="text/javascript"></script>
    
	<script src="js/custom.js" type="text/javascript"></script>       
<!--<script type="text/javascript" src="flakes.js"></script>-->
        
</body>
</html>
