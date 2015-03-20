<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/index-css1.css" />
		<link rel="stylesheet" type="text/css" href="css/index-css2.css" />
		<link rel="stylesheet" type="text/css" href="css/index-css3.css" />

	</head>
	<body class="main-container">
		<div id="container" class="container intro-effect-grid">
			<header class="header">
				<ul class="grid">
					<li><h2>Lost in thoughts</h2></li>
					<li><h2>Too busy</h2></li>
					<li><h2>Chilling Out</h2></li>
					<li><h2>Pondering</h2></li>
					<li><h2>Heart on paper</h2></li>
					<li><h2>Reflection</h2></li>
				</ul>
				<div class="bg-img"><img src="img/background.jpg" alt="Background Image"/></div>
				<div class="title">
					<nav class="pc-links">
						<a href="./index.php">Home</a> &nbsp;
						<a href="./register.php">Register</a> &nbsp;
						<a href="./login.php">Login</a> &nbsp;
						<a href="http://www.facebook.com/bitspoetry">Follow us</a>
					</nav>
					<h1>Picaption</h1>
					<p class="subline">Giving words to pictures</p>
					<p>by &#8212;<strong>Poetry Club</strong>  </p>
					
				</div>
			</header>
			<div class="fix_div">
			</div>
			<button class="trigger" data-info="Click to know more"><span>Trigger</span></button>
			<article class="content">
				<div>
					<p>Show off your creative streak - caption the given pictures in the form of couplets (two lines that rhyme), form a story line or theme to relate each to the previous, and take home a bagful of money! So are you up for the challenge?</p>
				</div>
				<div id="posterimg" align="left">
					<ol><strong>Rules:</strong><br/><br/>
						<li>Each picture is to be captioned in the form of a <strong>couplet</strong>, i.e., two lines that rhyme. </li>
						<li>Captions can be both, in Hindi as well as English.</li>
						<li>Entries must be original and strictly related to the given picture.</li>
						<li>Use of profanity will lead to disqualification of the participant.</li>
						<li>Look out for thumb images on the top of the game. They will enable you to move on to the next image.</li>
						<li>You can glimpse through all the images at a time.</li>
						<li>Entries can be changed by logging into your account.</li>
						<li>Entries will automatically be submitted on 28 March. No changes after that will be allowed.</li>
						<li>Participants will be judged on the basis of :</li>
						<ul>
						<li>originality,</li><li>wit,</li><li>humour,</li><li>relevance to the pic,</li><li>continuity among the couplets and </li><li>poetic quality of the couplets.</li>
						</ul>
						<li>Decision of the judges will be final and binding.</li>
						
						<br>
						<br>
						<p class="sample"><strong>A last year's entry:</strong></p>
						<img class="example" height="60%" width=60%" id ="img1" src="./img/1.jpg" alt="example 1"/><br/>
						<p class="cap">Nadi kinaare chala ye hobbs ke saath,<br/>Masti mein beet jaate iske raat din</p>
						<img class="example" height="60%" width=60%"  id ="img2" src="./img/2.jpg" alt="example 2"/><br/>
						<p class="cap">Nadi kinaare chala ye hobbs ke saath,<br/>dekho kya machli aati inke haath ???</p>
						<img class="example" height="60%" width=60%"  id ="img3" src="./img/3.jpg" alt="example 3"/><br/>
						<p class="cap">Jo laute nadi se to huyi ye karamat<br/>calvin ki lagti he mujhe ye shararat.</p>
						<img class="example" height="60%" width=60%"  id ="img4" src="./img/4.jpg" alt="example 3"/><br/>
						<p class="cap">Par jab dekha ek chote se jeev ko,<br/>calvin jaa lipta apne hobbs ko :)</p>
						<img class="example" height="60%" width=60%"  id ="img5" src="./img/5.jpg" alt="example 3"/><br/>
						<p class="cap">Khatam huya inka masti bhara safar,<br/>waqt  haiin aaram ka, karle do ghadhi bhar :</p>
						<p>Captioned by &#8212;<strong>Vidushi asati</strong>  </p>
					</ol>
				</div>
			</article>			
		</div>
		<script src="js/classie.js"></script>
		<script>
			(function() {
				var ie = (function(){
					var undef,rv = -1; // Return value assumes failure.
					var ua = window.navigator.userAgent;
					var msie = ua.indexOf('MSIE ');
					var trident = ua.indexOf('Trident/');

					if (msie > 0) {
						// IE 10 or older => return version number
						rv = parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
					} else if (trident > 0) {
						// IE 11 (or newer) => return version number
						var rvNum = ua.indexOf('rv:');
						rv = parseInt(ua.substring(rvNum + 3, ua.indexOf('.', rvNum)), 10);
					}

					return ((rv > -1) ? rv : undef);
				}());


				// disable/enable scroll (mousewheel and keys) from http://stackoverflow.com/a/4770179					
				// left: 37, up: 38, right: 39, down: 40,
				// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
				var keys = [32, 37, 38, 39, 40], wheelIter = 0;

				function preventDefault(e) {
					e = e || window.event;
					if (e.preventDefault)
					e.preventDefault();
					e.returnValue = false;  
				}

				function keydown(e) {
					for (var i = keys.length; i--;) {
						if (e.keyCode === keys[i]) {
							preventDefault(e);
							return;
						}
					}
				}

				function touchmove(e) {
					preventDefault(e);
				}

				function wheel(e) {
					// for IE 
					//if( ie ) {
						//preventDefault(e);
					//}
				}

				function disable_scroll() {
					window.onmousewheel = document.onmousewheel = wheel;
					document.onkeydown = keydown;
					document.body.ontouchmove = touchmove;
				}

				function enable_scroll() {
					window.onmousewheel = document.onmousewheel = document.onkeydown = document.body.ontouchmove = null;  
				}

				var docElem = window.document.documentElement,
					scrollVal,
					isRevealed, 
					noscroll, 
					isAnimating,
					container = document.getElementById( 'container' ),
					trigger = container.querySelector( 'button.trigger' );

				function scrollY() {
					return window.pageYOffset || docElem.scrollTop;
				}
				
				function scrollPage() {
					scrollVal = scrollY();
					
					if( noscroll && !ie ) {
						if( scrollVal < 0 ) return false;
						// keep it that way
						window.scrollTo( 0, 0 );
					}

					if( classie.has( container, 'notrans' ) ) {
						classie.remove( container, 'notrans' );
						return false;
					}

					if( isAnimating ) {
						return false;
					}
					
					if( scrollVal <= 0 && isRevealed ) {
						toggle(0);
					}
					else if( scrollVal > 0 && !isRevealed ){
						toggle(1);
					}
				}

				function toggle( reveal ) {
					isAnimating = true;
					
					if( reveal ) {
						classie.add( container, 'modify' );
					}
					else {
						noscroll = true;
						disable_scroll();
						classie.remove( container, 'modify' );
					}

					// simulating the end of the transition:
					setTimeout( function() {
						isRevealed = !isRevealed;
						isAnimating = false;
						if( reveal ) {
							noscroll = false;
							enable_scroll();
						}
					}, 1000 );
				}

				// refreshing the page...
				var pageScroll = scrollY();
				noscroll = pageScroll === 0;
				
				disable_scroll();
				
				if( pageScroll ) {
					isRevealed = true;
					classie.add( container, 'notrans' );
					classie.add( container, 'modify' );
				}
				
				window.addEventListener( 'scroll', scrollPage );
				trigger.addEventListener( 'click', function() { toggle( 'reveal' ); } );
			})();
		</script>
	</body>
</html>