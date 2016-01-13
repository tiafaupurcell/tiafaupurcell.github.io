<section id="contact" class="section-margin bg-light-gray section-img">
	<div class="container animated fadeIn">
		<div class="row text-center">
			<h2>Send a Message</h2>
			<div class="p2">Send me some positive vibes and I'll send some back.</div>
		
			<div class="col-md-12">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" required data-validation-required-message="* Please enter your name" placeholder="Your full name? *">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" required data-validation-required-message="* Please enter your email address" placeholder="Your email address? *">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="phone" class="form-control" id="phone" placeholder="Your phone number?">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" id="message" required data-validation-required-message="* Please enter a message" placeholder="How can I help you? *"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>                            
                            <button type="submit" class="btn btn-xl col-lg-12 col-xs-12">Send Positive Vibes</button>
                        </div>
                    </div>
                </form>
            </div>
		</div>
	</div>
</section>