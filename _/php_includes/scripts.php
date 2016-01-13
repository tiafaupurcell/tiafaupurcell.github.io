<!-- jQuery -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Bootstrap Core JS -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- Third Party JS -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="js/contact_me.js"></script>

<!-- Custom JS -->
<script type="text/javascript" src="js/scripts.js"></script>

<!-- clock time from http://www.ricocheting.com/code/javascript/html-generator/date-time-clock -->
<script type="text/javascript">

	function GetClock(){
	d = new Date();
	nhour  = d.getHours();
	nmin   = d.getMinutes();
	     if(nhour ==  0) {ap = " AM";nhour = 12;} 
	else if(nhour <= 11) {ap = " AM";} 
	else if(nhour == 12) {ap = " PM";} 
	else if(nhour >= 13) {ap = " PM";nhour -= 12;}

	if(nmin <= 9) {nmin = "0" +nmin;}


	document.getElementById('clockbox').innerHTML=""+nhour+":"+nmin+ap+"";
	setTimeout("GetClock()", 1000);
	}
	window.onload=GetClock;

</script>

<!-- Google Analytics -->
<script>

	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-44209755-1', 'auto');
	ga('send', 'pageview');

</script>