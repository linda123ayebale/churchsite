<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
	<title>Dominion City</title>
	<meta charset="utf-8">
	<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="stylesheet" href="assets/css/main.css">
	<style>
		#me{
			text-align: center;
		}
	#values {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 50px; /* Adjust margin-top as needed */
	 width: 2000px; 
	 
	/* height: 300px;  */
}

#values .content {
    max-width: 200%; /* Adjust max-width as needed */
    text-align: center;
	background-image: url(images/dcbg.jpg);
	align-items: center;
	border-radius: 30px;

}
#values h3{
	color: white;
}
        #slide{
            position:relative;
			background:#071094;
			color:#fff;
			width:70px;
			height:60px;
			padding:auto;
			display: block;
			margin: 10px 0;
			display:flex;
			justify-content:center;
			align-items:center;
			transition:0.5s;
			box-shadow:0 20px 25px #0690fd44;
			border-radius: 30px;
            /* border-top-right-radius: 30px; */
			overflow: hidden;
			text-decoration: none;
			text-transform: capitalize;
			letter-spacing: 0.1em;


        }
		#slide:hover{
			width: 578px;
			transition-delay: 0.5s;
		}
		#slide::before{
			content: "";
			position: absolute;
			right: 25px;
			width: 12px;
			height: 12px;
			border-top: 3px solid white;
			border-right: 3px solid white;
			/* border-radius: 10px; */
			transform:rotate(45deg);
		}
		#slide:hover::before{
			transform: rotate(45deg) translate(50px, -50px);
		}
		#slide::after{
			content: "";
			position: absolute;
			left: -50px;
			width: 12px;
			border-top: 3px solid #fff;
			border-right: 3px solid #fff;
			transform:rotate(45deg) translate(-50px, 50px);
		}
		#slide:hover::after{
			transform: rotate(45deg) translate(50px, -50px);
			transition-delay: 1s; 
		}
		#slide span{
			visibility: hidden;
			opacity: 0;
			white-space: nowrap;
			transition: 0.5s;
			transform: translate(-30px);

		}
		#slide:hover span{
			visibility: visible;
			opacity: 1;
			transition-delay: 0.75s;
			transform: translateY(10px);
		}


    </style>


</head>

<body class="is-preload">

	<!-- Header -->
	<header id="header"><a class="logo" href="index.html">Dominion City</a>
		<nav><a href="#menu">Menu</a>
		</nav>
	</header><!-- Nav -->
	<nav id="menu">
		<ul class="links">
			<li><a href="index.html">Home</a></li>
			<li><a href="programs.html">Programs</a></li>
			<li><a href="growth.html">Grow Spiritually</a></li>
			<li><a href="give.html">Give</a></li>
		</ul>
	</nav><!-- Banner -->
	<section id="banner">
		<div class="inner">
			<h1>Welcome To Dominion City Uganda</h1>
			<p style="color: #fff;">Raising leaders that Transform society<br>
				
		</div>
		<video autoplay loop muted playsinline src="images/banner.mp4"></video>
	</section><!-- Highlights -->
	<section class="wrapper">
		<div class="inner">

		@php
		
		Illuminate\Support\Facades\Log::info($leaders);
		@endphp
			
			
			<header class="special">
				<h2 style="color: #fff;">WHO WE ARE </h2>
				
				<p style="margin-bottom: 100px;">At Dominion City Kampala Uganda, we are more than just a church;
					we are a dynamic community of believers located in the heart of Makerere,
					at Dominion City Complex off sir Apollo Kaggwa road near Makerere Business Institute(MBI),
					with a global reach as part of Dominion City International.
					Our primary mission is to raise leaders who can transform society.
					With a rich mosaic of culture and faith, we come together to worship, learn,
					and support one another on our spiritual journeys.Our vibrant services,inspirational teachings,
					and commitment to community make Dominion City MBI a place of growth, empowerment and positive
					change.Join us and discover a welcoming home for your spiritual and leadership journey.</p>

					<h2 style="color: #fff;">OUR LEADERSHIP </h2>

					<div style="display: flex; align-items: flex-start; margin-top: 80px;">
						<div style="flex: 1;">
							<p>
							{{ $leaders[0]->about }}
							</p>
						</div>
						<div style="margin-left: 20px; ">
							<img src="{{ asset('storage/' . $leaders[0]->image) }}" alt="" width="380" height="300" style="display: inline-block;border-radius: 30px;">
							<div class="credit" style="margin-top:30px; border-top: 1px solid white; padding-top: 10px; text-align: center;">
								<p style="font-weight: bold; font-style: italic; margin: 0;">{{ $leaders[0]->name }}</p>
								<p style="font-style: italic; margin: 0;">{{ $leaders[0]->position }}</p>
							</div>
						</div>	
					</div>



						<div style="display: flex; align-items: flex-start;margin-top: 30px; border-radius: 30px; margin-top: 100px;">
							<div style="margin-right: 20px;">
								<img src="{{ asset('storage/' . $leaders[1]->image) }}" alt="" width="380" height="350" style="display: inline-block; border-radius: 30px;">
								<div class="credit" style="margin-top: 30px; border-top: 1px solid white; padding-top: 10px; text-align: center;">
									<p style="font-weight: bold; font-style: italic; margin: 0;">{{ $leaders[1]->name }}</p>
									<p style="font-style: italic; margin: 0;">{{ $leaders[1]->position}}</p>
								</div>
							</div>
							<div style="flex: 1;">
								<p>
								{{ $leaders[1]->about}}
								</p>
							</div>
						</div>
						
				</div>
				<header class="special">
					<h2 style="color: #fff;">OUR MISSION </h2>
					<p>Raising leaders that transform society</p>
				</header>
				<header class="special" id="me">
					<h2 style="color: #fff;">Our values</h2>
						<div class="testimonials" id="values">
						<section>
							<div class="content" >
								<header>
									
								</header>
								<a href="#" id="slide">
									<span>Strong Quest for The Presence of God.</span>
								</a>
								
									<a href="#" id="slide">
										<span>Strong Passion for The Wisdom of God.</span>
									</a>
									<a href="#" id="slide">
										<span>Uncompromising Stand For Excellence and Quality.
										</span>
									</a>
									<a href="#" id="slide">
										<span>Strong Passion for Souls.
										</span>
									</a>
									<a href="#" id="slide">
										<span>Strong Passion for Integrity and Righteousness.
										</span>
									</a>
									<a href="#" id="slide">
										<span>High Premium for Healthy Relationships.
	
										</span>
									</a>
									<a href="#" id="slide">
										<span>Strong Passion for Purpose and Destiny.
	
										</span>
									</a>
							
								</div>
						</section>
				</div>
				</header>
		
			</div>
			</header>
			


			
		</div>
	</section><!-- CTA -->
	<section id="cta" class="wrapper">
		<div class="inner">
			<h2 style="color: #fff;">SUNDAY SERVICES</h2>
			<p>Our Sunday services at Dominion City MBI are a cornerstone of our spiritual journey, offering two
				distinct opportunities for worship
				and fellowship. Our morning service, which begins at 7 am and concludes at 9:30 am, provides an intimate
				and reflective atmosphere
				to kickstart your day with devotion and inspiration. For those seeking a more vibrant and dynamic
				worship experience, our afternoon
				service starts at 10 am and wraps up at 1 pm, filled with uplifting music, powerful sermons, and a
				strong sense of community.
				Whichever service you choose to attend, you'll find a welcoming congregation ready to embrace you in the
				spirit of faith and unity.
				Join us on Sunday and embark on a day of spiritual growth and connection.</p>
		</div>
	</section>
	</section><!-- CTA -->
	<section id="cta" class="wrapper">
		<div class="inner">
			<h2 style="color: #fff;">WEDNESDAY MID WEEK SERVICES</h2>
			<p>Our Wednesday midweek service, commencing at 6 pm every Wednesday, offers a midweek spiritual recharge.
				It's a sacred pause in the midst
				of the week's hustle and bustle, providing an opportunity for deeper reflection, prayer, and renewal.
				Join us for this meaningful
				gathering, as we come together to strengthen our faith, connect with fellow believers, and receive
				spiritual guidance to navigate
				life's challenges. Whether you're seeking solace or seeking growth, our midweek service is a beacon of
				light in the middle of the week,
				guiding you towards a closer walk with God.</p>
		</div>
	</section>

	</section><!-- CTA -->
	<section id="cta" class="wrapper">
		<div class="inner">
			<h2 style="color: #fff;">Friday prayer MEETINGS</h2>
			<p>Our Friday prayer services, starting at 6 pm, are sacred moments of collective spirituality. Here, we
				gather to pray together, not only strengthening
				our bond as a faith community but also deepening our connection with God. It's a time to learn and
				empower our spiritual selves through the act of
				prayer, discovering the transformative power of faith and communion with the Divine. Join us on Fridays
				to nurture your spiritual journey and
				experience the profound impact of prayer in your life.</p>
		</div>
	</section>

	
	
	<!-- Footer -->
	<footer id="footer">
		<div class="inner">
			<div class="content">
				<section>
					<h3>Contact Us</h3>
					<p>Feel free to contact us on our social media platforms</p>
				</section>
				<section>
					<h4>Sem turpis amet semper</h4>
					<ul class="alt">
						<li><a href="#">@dominioncityuganda</a></li>
						<li><a href="#">dominioncityuganda</a></li>
						<li><a href="#">dominioncityuganda</a></li>
						<li><a href="#">dominioncityuganda</a></li>
					</ul>
				</section>
				<section>
					<h4>Magna sed ipsum</h4>
					<ul class="plain">
						<li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
						<li><a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
						<li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
						<li><a href="#"><i class="icon fa-tiktok">&nbsp;</i>TikTok</a></li>
					</ul>
				</section>
			</div>
		</div>
	</footer>
	<div id="copyright " class="copyright">
		Design by <a href="https://dc.co/">ARMLAK</a>.
	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
</body>

</html>