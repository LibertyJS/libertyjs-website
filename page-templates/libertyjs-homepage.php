<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>


<!-- <div class="ljs-header-cta__container">
	<div class="ljs-header-cta__countdown-container">
	</div>
	<div class="ljs-header-cta__cta-container">
		<p>
			<strong>It was fun, see you next year!</strong>
		</p>
	</div>
</div> -->

<div class="ljs-header__container-overlay">
	<div class="ljs-header__container">
		<div class="ljs-header__info-container">
			<img
				class="ljs-header__info-logo"
				src="<?php echo esc_url( get_stylesheet_directory_uri() . '/img/2018/ljs-primary-logo-white-yellow.png' ); ?>"
				alt="LibertyJS Logo">
			<div class="ljs-header__info-location">
				NOVEMBER 1-2 2018 - PHILADELPHIA, USA
			</div>
		</div>
	</div>
</div>
<div class="ljs-summary__container" id="about">
	<div class="ljs-summary__container-top">
		<div class="ljs-summary__blurb">
			<div class="ljs-summary__blurb-quote">
				This is the greatest conference about JS in the world
			</div>
			<div class="ljs-summary__blurb-name">
				Jonathan Belcher, JavaScript Electro Wizard
			</div>
			<div class="ljs-summary__blurb-location">
				LibertyJS Organizer
			</div>
		</div>
		<div class="ljs-summary__headline">
			<h1>TWO DAYS<br> GREAT WORKSHOPS<br> AWESOME SPEAKERS</h1>
		</div>
	</div>
	<div class="ljs-summary__summary">
		<p>
			<strong>The community-super-powered JavaScript tech conference</strong><br>
			<p>
				LibertyJS is held annually in Philadelphia. Join the local JavaScript
				developer community at this two-day multi-track conference of JavaScript
				sessions, workshops, and our after conference social.
			</p>
			<p>
				Organized by Philadelphia JavaScript Developers, the premier JavaScript
				user group with over 1000 members enthusiastic about JavaScript
				development, LibertyJS is the active nexus for the local Philadelphia
				JavaScript developer scene.</p>

				<p>
					Follow <a href="http://twitter.com/liberty_js">@liberty_js</a> to
					keep current with the event and schedule as it develops.
				</p>
		</p>
	</div>
</div>
<div class="ljs-lastyear__container" id="2016">
	<div class="ljs-lastyear__heading">
		<h2>#PREVIOUS YEARS</h2>
		<div class="ljs-lastyear__images">
			<img
				class="ljs-lastyear__image-large"
				src="<?php echo esc_url( get_stylesheet_directory_uri() . '/img/2016/ljs2016-lastyear-1.jpg ' ); ?>"
				alt="LibertyJS 2016">
			<img
				class="ljs-lastyear__image-small"
				src="<?php echo esc_url( get_stylesheet_directory_uri() . '/img/2016/ljs2016-lastyear-2.jpg ' ); ?>"
				alt="LibertyJS 2016">
			<img
				class="ljs-lastyear__image-small"
				src="<?php echo esc_url( get_stylesheet_directory_uri() . '/img/2016/ljs2016-lastyear-3.jpg ' ); ?>"
				alt="LibertyJS 2016">
			<img
				class="ljs-lastyear__image-small"
				src="<?php echo esc_url( get_stylesheet_directory_uri() . '/img/2016/ljs2016-lastyear-4.jpg ' ); ?>"
				alt="LibertyJS 2016">
		</div>
		<div class="ljs-lastyear__watch-container">

			<h3>
				LibertyJS has been held annually in Philadelhia since 2013.
				Take a look at the details of previous years!
			</h3>
			<a
				href="/previous-years/">
				PREVIOUS YEARS
			</a>
			<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
		</div>
	</div>
</div>
<div class="ljs-faq__container">
	<div class="ljs-faq__questions">
		<div class="ljs-faq__questions-column">
			<div class="ljs-faq__question">
				<h3>Who should come to LibertyJS?</h3>
				<p>
					Anyone who is interested in JavaScript. If you want to learn, play
					with, or work with JS
				</p>
			</div>
			<div class="ljs-faq__question">
				<h3>What's included with my ticket?</h3>
				<p>
					Two days of really amazing talks and workshops. Lunch is also provided!
				</p>
			</div>
			<div class="ljs-faq__question">
				<h3>How can we sponsor LibertyJS?</h3>
				<p>
					You can sponsor LibertyJS by going <a href="/sponsor">here</a>
				</p>
			</div>
		</div>
		<div class="ljs-faq__questions-column">
			<div class="ljs-faq__question">
				<h3>Does LibertyJS have a Code of Conduct?</h3>
				<p>
					Indeed we do. You can read the Code of Conduct in full on
					this
					<a href="/code-of-conduct/">page.</a>
				</p>
			</div>
			<div class="ljs-faq__question">
				<h3>Is this the best JavaScript conference in Philadelphia?</h3>
				<p>
					Yes!
				</p>
			</div>
			<div class="ljs-faq__question">
				<h3>How can I contact the organizers of LibertyJS?</h3>
				<p>
					<a href="mailto:libertyjsconf@gmail.com">Get in touch!</a>
				</p>
			</div>
		</div>
	</div>
	<div class="ljs-faq__blurb-container">
		<div class="ljs-faq__blurb" id="faqs">
			<h2>FAQ's</h2>
		</div>
	</div>
</div>
<div class="ljs-social__container">
	<div class="ljs-social__facebook">
		<a
			href="https://www.facebook.com/hashtag/libertyjs"
			target="_blank"
			title="LibertyJS Facebook">
			<i class="fa fa-facebook-official" aria-hidden="true"></i>
		</a>
	</div>
	<div class="ljs-social__twitter">
		<a
			href="https://twitter.com/liberty_js"
			target="_blank"
			title="LibertyJS Twitter">
			<i class="fa fa-twitter" aria-hidden="true"></i>
		</a>
	</div>
	<div class="ljs-social__instagram">
		<a
			href="https://www.instagram.com/explore/tags/libertyjs/"
			target="_blank"
			title="LibertyJS Instagram">
			<i class="fa fa-instagram" aria-hidden="true"></i>
		</a>
	</div>
</div>

<?php

get_footer();
