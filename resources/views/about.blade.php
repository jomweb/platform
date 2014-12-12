@extends('layouts.app')

@section('content')
<!-- Title Bar / Srart
================================================== -->
<div class="page-title">
	<div class="container">

		<div class="twelve columns">
			<h1>About</h1>
		</div>

		<nav class="four columns">
			<ul class="breadcrumbs">
				<li><a href="{!! handles('app::/') !!}">Home</a></li>
				<li><i class="fa fa-angle-right"></i></li>
				<li>About </li>
			</ul>
		</nav>

	</div>
</div>
<!-- Title Bar / End
================================================== -->

<!-- About / Srart
================================================== -->
<section class="about">

	<div class="container">

		<!-- Images Slider -->
		<div class="eight columns">
			<div id="slider" class="swipe">
				<ul class="swipe-wrap">
					<li><img src="images/about-1.jpg" alt="" /></li>
					<li><img src="images/about-2.jpg" alt="" /></li>
					<li><img src="images/about-3.jpg" alt="" /></li>
				</ul>
				<div class="swipe-navi">
				  <div class="swipe-left" onclick="mySwipe.prev()"><i class="icon-chevron-left"></i></div>
				  <div class="swipe-right" onclick="mySwipe.next()"><i class="icon-chevron-right"></i></div>
				</div>
			</div>
		</div>

		<!-- About us text -->
		<div class="eight columns">
			<div class="meet-us">
				<h2>Meet Vena</h2>
				<p class="bigger"><strong>Partem corrumpit ut qui, mei at magna paulo! Nam brute audiam adipisci ei!
				Ates quaeque dignissim pri vero eos aliquam eam no, nobis moderatius. </strong> </p>

				<p class="bigger">Ut sit nisl consul ullamcorpers te, mel summo argu antum cu. Id civibus nominavi
				inciderint sea, sit hinc consequat cu, sea ut inani iusto putent quisque semper justo at risus.
				Mei id ferri feugait, eos intellegebat zril splendide has. Nam ultricies dolor eu velit varius scelerisque.
				Vestibulum in lacus in felis pretium feugiat non sed elit. Duis pretium, urna sed pellentesque tincidunt.</p>
			</div>
		</div>

	</div>


	<div class="fullwidth">
		<div class="container">

			<div class="one-third column">
				<h3>Our Mission</h3>
				<p>Partem corrumpit ut qui, mei at magna paulo! Nam brute audiam adipisci ei!
				Ates quaeque dignissim pri, vero aliquam eam no, nobis moderatius consequuntur ut est!
				Ut sit nisl consul ullamcorper, ne falli soleat neque massa imperdiet meliore sit an dicta posidonium mei,
				sea at recteque hendrerit evertitur.</p>
			</div>

			<div class="one-third column">
				<h3>Our Experiences</h3>
				<p>Nam ultricies dolor eu velit varius scelerisque. Vestibulum in lacus in felis pretium feugiat non sed elit.
				Duis pretium, urna sed pellentesque tincidunt, neque massa imperdiet nisi, sed cursus leo magna pretium elit.
				Proin bibendum ipsum a ante viverra lobortis. Phasellus id augue ligula, nec ultrices augue. </p>
			</div>

			<div class="one-third column">
				<h3>Our Disciplines</h3>
				<p>Nam ultricies dolor eu velit varius scelerisque. Vestibulum in lacus in felis pretium feugiat non sed elit.
				Duis pretium, urna sed pellentesque tincidunt, neque massa imperdiet nisi, sed cursus leo magna pretium elit.
				Proin bibendum ipsum a ante viverra lobortis. Phasellus id augue ligula, nec ultrices augue. </p>
			</div>

		</div>
	</div>


	<!-- Our Process -->
	<div class="container">

		<article class="our-process">
			<div class="sixteen columns">
				<h2>How We Work?</h2>
			</div>

			<div class="one-third column">
				<figure class="process">
					<img src="images/icons/search.png" alt="">
					<figcaption>
						<h5>1. Research</h5>
						<p>Vero aliquam eam no, nobis moderatius consequuntur ut est</p>
					</figcaption>
				</figure>
			</div>

			<div class="one-third column">
				<figure class="process">
					<img src="images/icons/tablet.png" alt="">
					<figcaption>
						<h5>2. Concept</h5>
						<p>Vero aliquam eam no, nobis moderatius consequuntur ut est</p>
					</figcaption>
				</figure>
			</div>

			<div class="one-third column">
				<figure class="process">
					<img src="images/icons/note.png" alt="">
					<figcaption>
						<h5>3. Design</h5>
						<p>Vero aliquam eam no, nobis moderatius consequuntur ut est</p>
					</figcaption>
				</figure>
			</div>

		</article>

	</div>


	<!-- Skills -->
	<div class="fullwidth">
		<div class="container">

			<div class="sixteen columns">
				<div id="skillzz">
				<h3>Our Skills</h3>
					<ul class="skills clearfix">
						<li>
							<div class="skill-bar">
								<div class="skill-bar-value" style="width: 70%;">
									<span class="skill-title">Web Design</span>
									<div class="dot" data-percentage="70"></div>
								</div>
							</div>
						</li>
						<li>
							<div class="skill-bar">
								<div class="skill-bar-value" style="width: 80%;">
									<span class="skill-title">HTML5/CSS3</span>
									<div class="dot" data-percentage="80"></div>
								</div>
							</div>
						</li>
						<li>
							<div class="skill-bar">
								<div class="skill-bar-value" style="width: 65%;">
									<span class="skill-title">JavaScript</span>
									<div class="dot" data-percentage="65"></div>
								</div>
							</div>
						</li>
						<li>
							<div class="skill-bar">
								<div class="skill-bar-value" style="width: 37%;">
									<span class="skill-title">PHP</span>
									<div class="dot" data-percentage="37"></div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>

		</div>
	</div>


	<!-- Our Team -->
	<div class="container">

		<div class="sixteen columns">
			<h3>Our Team</h3>
		</div>

		<div class="four columns">
			<figure class="team">
				<img src="images/john.jpg" alt="John Doe" title="CEO - Founder"/>
				<figcaption>
					<h4>John Doe</h4><span class="title">CEO/Founder</span>
					<p>Fugiat dapibus, tellus ac cursus risus commodo mollis es, mauris sit condim eser ntumsi nibh, justo vitaes amet.</p>
				</figcaption>
			</figure>
		</div>

		<div class="four columns">
			<figure class="team">
				<img src="images/alex.jpg" alt="John Doe" title="CEO - Founder"/>
				<figcaption>
					<h4>Alex Houghton</h4><span class="title">Graphic Designer</span>
					<p>Fugiat dapibus, tellus ac cursus risus commodo mollis es, mauris sit condim eser ntumsi nibh, justo vitaes amet.</p>
				</figcaption>
			</figure>
		</div>

		<div class="four columns">
			<figure class="team">
				<img src="images/tom.jpg" alt="John Doe" title="CEO - Founder"/>
				<figcaption>
					<h4>Tom Smith</h4><span class="title">Web Developer</span>
					<p>Fugiat dapibus, tellus ac cursus risus commodo mollis es, mauris sit condim eser ntumsi nibh, justo vitaes amet.</p>
				</figcaption>
			</figure>
		</div>

		<div class="four columns">
			<figure class="team">
				<img src="images/kate.jpg" alt="John Doe" title="CEO - Founder"/>
				<figcaption>
					<h4>Kate Jones</h4><span class="title">Art Director</span>
					<p>Fugiat dapibus, tellus ac cursus risus commodo mollis es, mauris sit condim eser ntumsi nibh, justo vitaes amet.</p>
				</figcaption>
			</figure>
		</div>

	</div>


</section>
<!-- About / End
================================================== -->
@stop
