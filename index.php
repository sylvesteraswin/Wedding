<?php
	if(isset($_SERVER['HTTP_USER_AGENT'])){
    $agent = $_SERVER['HTTP_USER_AGENT'];
	}
	//echo $agent;
	
	if(preg_match('/.*?Mobile/i',$agent)){
    //echo "<br />Mobile User";
    // process here for firefox browser
    header('Location: http://www.alovesm.com/mobile');
    exit;
	}else{
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>A ♥ M - Save the Date!!!</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link type="image/vnd.microsoft.icon" href="favicon.ico" rel="icon">

  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="css/style.css">
  <!-- end CSS-->
  <link rel="stylesheet" href="css/animate-custom-min.css">

  <script src="js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>
	<div id="circles" class="hidden"></div>
	<div id="loader">
		<div id="load">
			Loading...
		</div>
	</div>
	<div id="remove"></div>
	<div id="contact">
		<img alt="Close" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAuElEQVQoU6WT4QqEIBCE9/2fzSISwUCiJxDrt7DdJ3hUh/cjF2Lb2ZlZNRP9xLquOo6jxhj1X9CHB58QXuZ51mEYNITQNACnDw8+OsEJwBhTHuec7vuuOeciIlODVw58dILjsizfBqD3Xo/jKGIyNXjlwEcnEFJKPwSWyETy0xh+2XNradM0qbW25NaW5HooOG7bdhNUI/A6scZNTODMxKuYGvwZ/ZO79vz6tLu+c9cN67rbNN7+VSfFsDnZ37n8hgAAAABJRU5ErkJggg==" />
		<h1>Contact Us</h1>
		<p>Whether you just want to chat, or you have questions about the ceremony, use the information below to get a hold of us.</p>
		<p>We'd love to hear from you. As excited as we are about the wedding date, we are also looking forward to spend it with our friend and family. Don't hesitate to call or e-mail us about anything. While e-mail or facebook is the easiest way to get a hold of me.</p>
		<ul class="thanks">
			<li class="tIns head">Sylvester Aswin</li>
			<li class="tIns">saswin4u(at)gmail.com</li>
			<li class="tIns">+91-9008-122455</li>
			<li class="tIns head">Monashree Jayarajan</li>
			<li class="tIns">monashree.j(at)gmail.com</li>
		</ul>
	</div>
  <div id="container">
  	<div id="fb-root"></div>
    <header>
			<img src="img/logo.png" title="Mona and Aswin" />
			<p class="subnote"><span class="ins">Save the date :</span> February 19th, 2012 <span class="contact"><img class="animated" alt="Contact Us" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAACzElEQVR42s2VTU8TQRjHZ3f7Yqy2oLQKF44FY0z1QAssKQ22zXCBBoJpiF9Av4pfwJMYjcFEi6G00Fa21QNpfEFaElBXPagH9aJGU8wu3XFm2VmHCmZIODjJk2fnmc3zm/8zbwLYp81ns1eCwZ6rDod0dCcisMPtkigeJx/6tv5Ofa1eHx2F1/bKI+wVvDM7exYmk3Wv10vGEf1PEExH+3a8sbWFCsWSPJEaX+ECFEsPx2LD0Qc0IfaCpmlgfj4LHA4HGh8fIyEbgHB78vRZuj8SvssFWFaUy0OyfJMALAhgFOyKkWYYBiCAgf4IH2Ahl4e9PcG8qqrA6XQil8slYA+wN/vYBKIEG/HA5/OhWn09LQ8O8AFwiVJdXZ2Z2tqaDSDJLaNAE0TAgUAAbb58xQ9YVsrTJ9rbblWrVQIAdPbUGDWm7+7uBuqbt+kheZAPoJTL08c8ntuVSgWwM7USmn1GCQgGg+j9h4/8gKVCIdXm82VKpRJZULvWFsTss4BQKIQ+ff7CD8gu5KC/42SuWCzau4aYKIpAkiTAwMwShcNh8PXb9wMD8kQB2eMCPRAImY70MchUQiDRaBQ1Gr/Sssy5yHspoAALYseJqng8jq+MJv8uYhUA60qgiakiVhkGoKaB/mMAyUXHDhOQswB/1b61JRIJsN00DrCLsgswEPCbCvBFhtj/9lNwMABWEPB35MkuQjtTP3xA5+lTOUVR/lka2mKxGNC0bf5zQK7r+MWRPD1Y4M/DYirAe19oiaPnqy/4F3lxcQnGYsN5tiTkW9d1sIWfR4/HI2AIe8JRrbaejkT6+AD37mdGRiEstTxcu050a7z86PEETCbmuAATk5PuS1NTKxDCC+zbS9cZtDz6+IndnMvM9c3M3PjJBcAN32HO8729Z865j7i9uO/CJhnNpkgGRUkysGti03DZfmxubNQ1TV9FyNBbE/0GuSWqKHB17ngAAAAASUVORK5CYII=" /></span></p>
    </header>
    <div id="main" role="main">
  	<div id="likeBtn">
				<div class="fb-like" data-href="http://www.alovesm.com/?wedding" data-send="true" data-layout="box_count" data-width="100" data-show-faces="false" data-font="verdana"></div>
			</div>
			<div id="content">
				<ul class="menu">
					<li class="photos animated current" id="photos">
							Photos
					</li>
					<li class=" about animated" id="about">
							About Us
					</li>
					<li class=" wed animated" id="wed">
							About Our Wedding
					</li>
					<li class=" wish animated" id="wish">
							Your Wishes
					</li>
				</ul>
				
				<div id="wrapper">
					
					<div id="photos" class="animated">
						<!--div class="comingsoon">
							Gallery Coming Soon.
						</div--><!-- comingsoon -->
						<div id="galleria">
							
							<?php
								include_once('connect.php');
							?>
							<?php
								$db_handle = mysql_connect($server, $username, $password) or die('Error : ' . mysql_error());
								$db_found = mysql_select_db($database, $db_handle) or die('Error : ' . mysql_error());
								
								if ($db_found){
									$query = "SELECT iname FROM photoAlbum";
									$result = mysql_query($query) or die("SELECT Error: ".mysql_error());
									
									$num_rows = mysql_num_rows($result);
									
									while ($get_info = mysql_fetch_row($result)){
										foreach ($get_info as $field){
							?>
										<a href="image.php?i=<?php echo $field; ?>&f=l">
											<img title="alovesm" 
													 alt="alovesm"
													 src="image.php?i=<?php echo $field; ?>&f=t" />
										</a>	
							<?php
										}
									}
									
								}
								
								mysql_close($link);
							?>
							
						</div>
					</div><!-- photos -->
					
					<div id="about" class="topBod animated">
						
						<div id="sylPro_container">
							<div class="customScrollBox">
								<div class="container">
									<div class="content">
										<h1>About Sylvester</h1>
										<img src="img/spacer.gif" alt="Sylvester" title="Sylvester" width="366" height="121" />
										<p>Born and brought up in Coimbatore. I have completed my Engineering in Electrical & Electronics from Karunya University, Coimbatore</p>
										<p>I am currently working for Akamai Technologies, Bangalore as a Associate Consultant.</p>
										<p><b>I Enjoy: </b>music, movies, web design/development, usability, user experience, browsing the internet, reading about technology, gadgets and hanging out with friends</p>
										<p>
											<b>Connect to me:</b>
											<span class="soc">
												<a class="mail" href="mailto:saswin4u@yahoo.com">saswin4u@yahoo.com</a>
												<a class="linkedin" href="http://in.linkedin.com/pub/sylvester-aswin/b/7b3/893">http://in.linkedin.com/pub/sylvester-aswin/b/7b3/893</a>
												<a class="gplus" href="https://plus.google.com/u/0/107109620198759203500/posts">https://plus.google.com/u/0/107109620198759203500/posts</a>
												<a class="fb" href="http://www.facebook.com/sylvester.aswin">http://www.facebook.com/sylvester.aswin</a>
											</span>
										</p>
									</div><!-- content -->
								</div><!-- container -->
								<div class="dragger_container">
									<div class="dragger"></div>
								</div><!-- dragger_container -->
							</div><!-- customScrollBar -->
						</div><!-- mcs_container -->
						
						<div id="monPro_container">
							<div class="customScrollBox">
								<div class="container">
									<div class="content">
										<h1>About Monashree</h1>
										<img src="img/spacer.gif" alt="Monashree" title="Monashree" width="366" height="121" />
										<p>Born and brought up in Bangalore. I have completed my Bachelors degree in Commerce from Mount Carmel College, Bangalore</p>
										<p>I am currently working for IndigGo Airlines, Bangalore as a Lead Cabin Crew.</p>
										<p><b>I Enjoy: </b>music, sleeping, shopping of course, eating, fast motor bike riding</p>
										<p>
											<b>Connect to me:</b>
											<span class="soc">
												<a class="fb" href="http://www.facebook.com/profile.php?id=1019805728">http://www.facebook.com/profile.php?id=1019805728</a>
											</span>
										</p>
									</div><!-- content -->
								</div><!-- container -->
								<div class="dragger_container">
									<div class="dragger"></div>
								</div><!-- dragger_container -->
							</div><!-- customScrollBar -->
						</div><!-- mcs_container -->
						<div class="clearfix"></div>
					</div><!-- about -->
					
					<div id="wed" class="topBod animated">
						<div id="engGa_container">
							<div class="customScrollBox">
								<div class="container">
									<div class="content">
										<h1>The Engagement</h1>
										<img src="img/spacer.gif" alt="Engagement" title="Engagement" width="366" height="121" />
										<p><b>How we met : </b>It was after one pains-taking day at work when <a href="http://www.facebook.com/profile.php?id=100000101844434">Mohammed Thameen</a> asked to come along with him all the way across the city for <a href="http://www.facebook.com/profile.php?id=100001193872092">Karpum's</a> fairwell party. With so much of regret and hesitation I rode the bugger all the way to her house. As soon I reached <a href="http://www.facebook.com/ahana.nanda">Ahana Nanda</a> came running to me and asked me if I wanted to meet the most beautiful girl I have ever seen. When I told her that I am too tired for that, she walked out of the room and sat in the hall. I was awestruck by looking at her and in a flash she took my breathe away. And that was the second I decided this was the girl I was waiting for all my life.</p>
										<p>Over the next few weeks of working together we became best friends. And I couldn't wait for the day when I can pop the words to her. So after meticulous planning with <a href="http://www.facebook.com/ahana.nanda">Ahana Nanda</a> and <a href="http://www.facebook.com/profile.php?id=100000101844434">Mohammed Thameen</a>, we set out to Madhur Coffee Day to tell <a href="http://www.facebook.com/profile.php?id=1019805728">Monashree Jayarajan</a> about what I feel about her. After a long drive, couple of shots of caffeine, and considerable patience on her part, I finally worked up the nerve to tell her.</p>
										<p>Since that day, she has made every day of the last one years of our lives. I couldn't imagine spending the rest of my life without her.</p>
										<p><b>Thanks To : </b>It wouldn't it fare on my part if I didn't mention these people below who made this day possible.</p>
										<ul class="thanks">
											<li class="tIns"><a href="http://www.facebook.com/chuichui.kashung">Chuichui Kashung</a></li>
											<li class="tIns"><a href="http://www.facebook.com/profile.php?id=647558281">Wish Zimik</a></li>
											<li class="tIns"><a href="http://www.facebook.com/ahana.nanda">Ahana Nanda</a></li>
											<li class="tIns"><a href="http://www.facebook.com/profile.php?id=100001193872092">Karpum Pegu</a></li>
											<li class="tIns"><a href="http://www.facebook.com/profile.php?id=100000101844434">Mohammed Thameen</a></li>
											<li class="tIns"><a href="http://www.facebook.com/profile.php?id=846119309">Farzana Rehman</a></li>
											<li class="tIns"><a href="http://www.facebook.com/ashvitha.shetty">Ashvitha Ashok Shetty</a></li>
											<li class="tIns"><a href="http://www.facebook.com/ojsamson">Oscar James</a></li>
											<li class="tIns"><a href="http://www.facebook.com/VinayrAradhya">Vinay Aradhya</a></li>
											<li class="tIns"><a href="http://www.facebook.com/dreamer0n">Dominic Richards</a></li>
										</ul>
										<p>
											<b>Date : </b>
											<span class="date">
												<i class="element orangeGra">0</i>
												<i class="element orangeGra">9</i>
												<i class="element sep greyGra">/</i>
												<i class="element orangeGra">1</i>
												<i class="element orangeGra">0</i>
												<i class="element sep greyGra">/</i>
												<i class="element orangeGra">1</i>
												<i class="element orangeGra">1</i>
											</span>
											<span class="dateN">October 9th, 2011</span>
										</p>
										<p><b>Venue : </b>
										<strong>Holy Cross Centre Sisters Hostel</strong><br />
										28, Millton Street, Near Don Bosco Provincial House,<br />
										Cooke Town, Near ITC Bus Stop,<br />
										Bangalore-560005</p>
									</div><!-- content -->
								</div><!-- container -->
								<div class="dragger_container">
									<div class="dragger"></div>
								</div><!-- dragger_container -->
							</div><!-- customScrollBar -->
						</div><!-- mcs_container -->
						
						<div id="wedIng_container">
							<div class="customScrollBox">
								<div class="container">
									<div class="content">
										<h1>Our Wedding</h1>
										<p class="splP greyGra">
											<img src="img/spacer.gif" alt="Wedding" title="Wedding" width="150" height="121" style="float: left; margin-top: 5px; margin-right: 20px;" />
											<b class="spl clearfix">Our Wedding Ceremony will be held at <strong>Sacred Heart Church</strong>, Bangalore, Karnataka.</b></p>
										<p>
											<b>Date : </b>
											<span class="date">
												<i class="element orangeGra">1</i>
												<i class="element orangeGra">9</i>
												<i class="element sep greyGra">/</i>
												<i class="element orangeGra">0</i>
												<i class="element orangeGra">2</i>
												<i class="element sep greyGra">/</i>
												<i class="element orangeGra">1</i>
												<i class="element orangeGra">2</i>
											</span>
											<span class="dateN wed">February 19th, 2012</span>
										</p>
										<p>The ceremony will begin at 3:00 PM sharp. Please arrive 15-20 minutes early to allow time for seating and parking. We have decided to have a traditional ceremony which should last around 1 hour. We would be taking our wedding photographs after the ceremony and encourage all of our guests to proceed to the reception.</p>
										<p>
											<b>The Wedding Party : </b>
											We are honored and delighted to have some of our best(est) of friends from over the years to be part of this special day in our lives. We can't thank them enough for being there to support us.
										</p>
										<ul class="thanks">
											<li class="tIns head">Bride's Maids</li>
											<li class="tIns">Wish Zimik</li>
											<li class="tIns">Farzana Rehman</li>
											<li class="tIns">Ashvitha Ashok Shetty</li>
											<li class="tIns">Kavya Jeyaprakash</li>
											<li class="tIns">Ahana Nanda</li>
											<li class="tIns head">Groomsmen</li>
											<li class="tIns">Chuichui Kashung</li>
											<li class="tIns">Oscar James</li>
											<li class="tIns">Mohammed Thameen</li>
											<li class="tIns">Ranjith Coapullai</li>
											<li class="tIns">Vinay Aradhya</li>
										</ul>
										<p>
											<b>Driving Directions : </b>
											<a href="http://bit.ly/ABATGQ" target="_blank" title="Driving Direction to Sacred Heart Church, Bangalore">Sacred Heart Church<br /></a>
											Richmond Town, Near Life Style, <br />
											Bengaluru, Karnataka
										</p>
										<p>
											<b>Wedding Reception : </b>
											Join us after the wedding ceremony to celebrate. The reception will be held at the <strong>St. Marks Cathedral</strong>, 1 M.G. Road, Bangalore.
										</p>
										<p>The reception will be immediately following the wedding ceremony, and should begin around 6:30 PM. We will be providing refreshers and dinner later in the day. We hope to see everyone there to celebrate with us.</p>
										<p><b>Driving Directions : </b>
											<a href="http://bit.ly/xkwj7a" target="_blank" title="Driving Directions to St. Mark's Cathedral, Bangalore">St. Mark's Cathedral<br /></a>
											1 M.G. Road, Behind Hard Rock Cafe,
											Bengaluru, Karnataka</p>
									</div><!-- content -->
								</div><!-- container -->
								<div class="dragger_container">
									<div class="dragger"></div>
								</div><!-- dragger_container -->
							</div><!-- customScrollBar -->
						</div><!-- mcs_container -->
						
						<div class="clearfix"></div>
					</div>
					
					<div id="wish" class="topBod animated">
						<ul class="tabs">
							<li class="orangeGra tLi" data-href="fb">FB</li>
							<li class="greyGra tLi" data-href="an">AN</li>
						</ul>
						<div id="anNote">
							If you dont want to use your Facebook. Please click here for a custom message.
							<i class="arrUp uiPosition"></i>
						</div>
						<div id="fb">
							<div id="fbWisCon_container">
									<div class="customScrollBox">
										<div class="container">
											<div class="content">
												<div class="fb-comments" data-href="http://alovesm.com/?wedding" data-num-posts="5" data-width="820"></div>
											</div><!-- content -->
										</div><!-- container -->
										<div class="dragger_container">
											<div class="dragger"></div>
										</div><!-- dragger_container -->
									</div><!-- customScrollBar -->
								</div><!-- mcs_container -->
						</div>
						<div id="an">
							<div class="left">
								<div id="wisCon_container">
									<div class="customScrollBox">
										<div class="container">
											<div class="content">
												<div id="listDivLoad"><img src="img/classic-loader.gif" /></div>
												<div id="listDiv">
												</div>
											</div><!-- content -->
										</div><!-- container -->
										<div class="dragger_container">
											<div class="dragger"></div>
										</div><!-- dragger_container -->
									</div><!-- customScrollBar -->
								</div><!-- mcs_container -->
							</div>
							<div class="right">
								<h1>Send Wish</h1>
								<form method="post" action="index.html" id="wishform">
									<p><label for="name">Enter your name</label><input type="text" tabindex="0" name="name" class="required" id="s_name" /></p>
									<p><label for="email">Enter your e-mail</label><input type="text" tabindex="0" name="email" class="required email" id="s_email" /></p>
									<p><label for="msg">Enter your message</label><textarea rows="5" cols="32" name="msg" id="msg" class="required"></textarea></p>
										<p><span class="subSpa orangeGra" ><input type="submit" value="Send Message" name="submit"/></span><span class="rloader hidden">Sending Message..</span></p>
								</form>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					
				</div>
				
			</div>
    </div>
    <footer>
			&copy; Copyright reserved. Designed from Insipirations.
			<div class="hidden" id="fHid"></div>
    </footer>
  </div> <!--! end of #container -->
	
	<?php 
  	$url = 'https://www.google.com/jsapi';
  	$a = get_headers($url, 1);
  	$res = substr($a[0], 9, 3);
  	
  	if($res == '404') {
  ?>
  		<script src="js/libs/jquery-1.7.1.min.js"></script>
  		<script src="js/libs/jquery-ui-1.8.16.min.js"></script>
  		<script src="js/libs/jquery.validate.min.js"></script>
  <?php
  	}else{
  ?>
  		<script type="text/javascript" src="http://www.google.com/jsapi"></script>
  		<script type="text/javascript">
  			google.load("jquery", "1.7.1");
			  google.load("jqueryui", "1.8.16");
  		</script>
  		<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
  <?php
  	}
  ?>


  <!-- scripts concatenated and minified via ant build script-->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <script src="js/mylibs/jquery.easing.1.3.min.js"></script>
  <script src="js/mylibs/jquery.mousewheel.min.js"></script>
  <script src="js/mylibs/galleria-1.2.6.min.js"></script>
  <script src="js/mylibs/galleria.history.min.js"></script>
  <script src="js/mylibs/jquery.mCustomScrollbar.min.js"></script>
  <!-- end scripts-->
  
  
  <script>
	Galleria.loadTheme('js/mylibs/galleria.classic.min.js');
	// Initialize Galleria
	$('#galleria').galleria({
		showInfo:false,
		imageCrop: 'width',
		showCounter:true
	});
  </script>
  <script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-28725532-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>

  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
 
</body>
</html>


<?php
	}
?>