<?php get_header(); ?>

<div class="hero-section">
	<div class="hero-content" data-ix="slide-to-right">
	  <h1 class="header logo">Company Logo</h1>
	  <h1 class="hero-header main-header">Heading</h1>
	  <p class="paragraph-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere
	    <br>
	    <br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p><a class="button w-button" href="#">Call to action</a><a class="button-2 w-button" href="#">Contact us now</a>
	</div>
	<div class="contact-us">
	  <div class="form-wrapper w-form" data-ix="slide-in-left">
	    <form class="form" data-name="Email Form" id="email-form" name="email-form">
	      <h3 class="heading">Get in touch</h3>
	      <input class="text-field w-input" data-name="Name" id="name" maxlength="256" name="name" placeholder="Your name" type="text">
	      <input class="w-input" data-name="Email" id="email" maxlength="256" name="email" placeholder="Email address" required="required" type="email">
	      <textarea class="w-input" id="field" maxlength="5000" name="field" placeholder="Tell us your problems...."></textarea>
	      <input class="submit-button w-button" data-wait="Please wait..." type="submit" value="SEND EMAIL">
	    </form>
	    <div class="w-form-done">
	      <div>Thank you! Your submission has been received!</div>
	    </div>
	    <div class="w-form-fail">
	      <div>Oops! Something went wrong while submitting the form</div>
	    </div>
	  </div>
	</div>
	</div>
	<div class="call-to-action">
	<h2 class="header tagline" data-ix="slide-to-right-on-scroll">We offer the best ideas for success</h2><img class="image" data-ix="fade-in" src="<?php echo get_template_directory_uri() ?>/images/raphael_gear-small_simple-black_128x128.png" width="46">
	<h1 class="header" data-ix="slide-in-left-2on-scroll">Our Services</h1>
	<div class="service-wrap">
	  <div class="service-1 service-box" data-ix="slide-to-right-on-scroll"><img class="service-image" src="<?php echo get_template_directory_uri() ?>/images/raphael_gear-small_simple-black_128x128.png" width="72">
	    <h1 class="heading-5">Heading</h1>
	    <p class="paragraph-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
	  </div>
	  <div class="service-box" data-ix="fade-in"><img class="service-image" src="<?php echo get_template_directory_uri() ?>/images/raphael_gear-small_simple-black_128x128.png" width="72">
	    <h1 class="heading-5">Heading</h1>
	    <p class="paragraph-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
	  </div>
	  <div class="service-3 service-box" data-ix="slide-in-left-2on-scroll"><img class="service-image" src="<?php echo get_template_directory_uri() ?>/images/raphael_gear-small_simple-black_128x128.png" width="72">
	    <h1 class="heading-5">Heading</h1>
	    <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
	  </div>
	</div>
	</div>


<?php get_footer(); ?>