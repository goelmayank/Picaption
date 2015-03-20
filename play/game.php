<?php
session_start();
 require "connection.php";
    if(!isset($_SESSION['user_id']))
    {
         header("Location: ../login.php");
		 exit;
    }
	else{
          
       if((isset($_SESSION['user_id'])&& !empty($_SESSION['user_id'])))
       {
       	

	 	if(isset($_POST['formsubmitted1']))

  {$user = $_SESSION['user_id'];

	$caption1=$_POST['area1'];
  
  $q="UPDATE `captions` SET `caption1`='$caption1' WHERE `email`='$user'";
//$q="INSERT INTO  captions(caption1) VALUES('$caption1')";
$pdo->exec($q);
	}


 	if(isset($_POST['formsubmitted2']))

  {$user = $_SESSION['user_id'];

	$caption2=$_POST['area2'];
  
  $q="UPDATE `captions` SET `caption2`='$caption2' WHERE `email`='$user'";
//$q="INSERT INTO  captions(caption1) VALUES('$caption1')";
$pdo->exec($q);
	}


 	if(isset($_POST['formsubmitted3']))

  {$user = $_SESSION['user_id'];

	$caption3=$_POST['area3'];
  
  $q="UPDATE `captions` SET `caption3`='$caption3' WHERE `email`='$user'";
//$q="INSERT INTO  captions(caption1) VALUES('$caption1')";
$pdo->exec($q);
	}


 	if(isset($_POST['formsubmitted4']))

  {$user = $_SESSION['user_id'];

	$caption4=$_POST['area4'];
  
  $q="UPDATE `captions` SET `caption4`='$caption4' WHERE `email`='$user'";
//$q="INSERT INTO  captions(caption1) VALUES('$caption1')";
$pdo->exec($q);
	}

	       	if(isset($_POST['formsubmitted5']))

  {$user = $_SESSION['user_id'];

	$caption5=$_POST['area5'];
  
  $q="UPDATE `captions` SET `caption5`='$caption5' WHERE `email`='$user'";
//$q="INSERT INTO  captions(caption1) VALUES('$caption1')";
$pdo->exec($q);
	}



		}
	}
		?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Picaption</title>
    <script type="text/javascript" src="js/classie.js"></script>
    <script type="text/javascript" src="js/modernizr.custom.js"></script>
    
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/layout-multi.css" />
	<link rel="stylesheet" type="text/css" href="css/button.css" />
</head>
	<body>
		<svg class="hidden">
			<g id="icon-grid">
				<rect x="32.5" y="5.5" width="22" height="22"/>
				<rect x="4.5" y="5.5" width="22" height="22"/>
				<rect x="32.5" y="33.5" width="22" height="22"/>
				<rect x="4.5" y="33.5" width="22" height="22"/>
			</g>
			<g id="icon-cross">
				<line x1="4.5" y1="55.5" x2="54.953" y2="5.046"/>
				<line x1="54.953" y1="55.5" x2="4.5" y2="5.047"/>
			</g>
		</svg>
		<nav class="thumb-nav">
			<a data-container="container-1" class="thumb-nav__item" href="#"><img src="img/thumbs/1.jpg" alt="Img1" width="50" height="50" /></a>
			<a data-container="container-2" class="thumb-nav__item" href="#"><img src="img/thumbs/2.jpg" alt="Img2" width="50" height="50" /></a>
			<a data-container="container-3" class="thumb-nav__item" href="#"><img src="img/thumbs/3.jpg" alt="Img3" width="50" height="50" /></a>
			<a data-container="container-4" class="thumb-nav__item" href="#"><img src="img/thumbs/4.jpg" alt="Img4" width="50" height="50" /></a>
			<a data-container="container-5" class="thumb-nav__item" href="#"><img src="img/thumbs/5.jpg" alt="Img5" width="50" height="50" /></a>
			
		</nav>
		<div id="container-1" class="container">
			
			<header class="intro">
				<img class="intro__image" src="img/1.jpg" alt="Image1"/>
				<div class="intro__content">
					<div class="intro__subtitle">
						<form class="captionForm" id="form1" method="post" action="game.php">
							<textarea id ='text' name="area1" rows="2" cols="100" value="..."></textarea>
							 <input type="hidden" name="formsubmitted1" value="TRUE" />
							<input type="submit" name="submit1" class="captify" value="Caption!"/>
						</form>
						<button class="trigger">
							<svg width="100%" height="100%" viewBox="0 0 60 60" preserveAspectRatio="none">
								<use class="icon icon--grid" xlink:href="#icon-grid" />
								<use class="icon icon--cross" xlink:href="#icon-cross" />
							</svg>
							<span>Toggle content</span>
						</button>
					</div>
				</div>
			</header>
			<section class="items-wrap">
				<a href="#" class="item">
					<img class="item__image"src="img/1.jpg" alt="1"/>
					<h2 class="item__title">Pic 1</h2>
				</a>
				<a href="#" class="item">
					<img class="item__image"src="img/2.jpg" alt="2"/>
					<h2 class="item__title">Pic2</h2>
				</a>
				<a href="#" class="item">
					<img class="item__image"src="img/3.jpg" alt="3"/>
					<h2 class="item__title">Pic3</h2>
				</a>
				<a href="#" class="item">
					<img class="item__image"src="img/4.jpg" alt="4"/>
					<h2 class="item__title">Pic4</h2>
				</a>
				<a href="#" class="item">
					<img class="item__image"src="img/5.jpg" alt="5"/>
					<h2 class="item__title">Pic5</h2>
				</a>
			</section>
		</div>
		
		<div id="container-2" class="container">
			
			<header class="intro">
				<img class="intro__image" src="img/2.jpg" alt="Image1"/>
				<div class="intro__content">
					<div class="intro__subtitle">
						<form class="captionForm" id="form2" method="post" action="game.php">
							<textarea id ='text' name="area2" rows="2" cols="100" value="..."></textarea>
								<input type="hidden" name="formsubmitted2" value="TRUE" />
							<input type="submit" name="submit2" class="captify" value="Caption!"/>
						</form>
						<button class="trigger">
							<svg width="100%" height="100%" viewBox="0 0 60 60" preserveAspectRatio="none">
								<use class="icon icon--grid" xlink:href="#icon-grid" />
								<use class="icon icon--cross" xlink:href="#icon-cross" />
							</svg>
							<span>Toggle content</span>
						</button>
					</div>
				</div>
			</header>
			<section class="items-wrap">
				<a href="#" class="item">
					<img class="item__image"src="img/1.jpg" alt="1"/>
					<h2 class="item__title">Pic 1</h2>
				</a>
				<a href="#" class="item">
					<img class="item__image"src="img/2.jpg" alt="2"/>
					<h2 class="item__title">Pic2</h2>
				</a>
				<a href="#" class="item">
					<img class="item__image"src="img/3.jpg" alt="3"/>
					<h2 class="item__title">Pic3</h2>
				</a>
				<a href="#" class="item">
					<img class="item__image"src="img/4.jpg" alt="4"/>
					<h2 class="item__title">Pic4</h2>
				</a>
				<a href="#" class="item">
					<img class="item__image"src="img/5.jpg" alt="5"/>
					<h2 class="item__title">Pic5</h2>
				</a>
			</section>
		</div>
		<div id="container-3" class="container">
			
			<header class="intro">
				<img class="intro__image" src="img/3.jpg" alt="Image1"/>
				<div class="intro__content">
					<div class="intro__subtitle">
						<form class="captionForm" id="form3" method="post" action="game.php">
							<textarea id ='text' name="area3" rows="2" cols="100" value="..."></textarea>
							<input type="hidden" name="formsubmitted3" value="TRUE" />
							<input type="submit" name="submit3" class="captify" value="Caption!"/>
						</form>
						<button class="trigger">
							<svg width="100%" height="100%" viewBox="0 0 60 60" preserveAspectRatio="none">
								<use class="icon icon--grid" xlink:href="#icon-grid" />
								<use class="icon icon--cross" xlink:href="#icon-cross" />
							</svg>
							<span>Toggle content</span>
						</button>
					</div>
				</div>
			</header>
			<section class="items-wrap">
				<a href="#" class="item">
					<img class="item__image"src="img/1.jpg" alt="1"/>
					<h2 class="item__title">Pic 1</h2>
				</a>
				<a href="#" class="item">
					<img class="item__image"src="img/2.jpg" alt="2"/>
					<h2 class="item__title">Pic2</h2>
				</a>
				<a href="#" class="item">
					<img class="item__image"src="img/3.jpg" alt="3"/>
					<h2 class="item__title">Pic3</h2>
				</a>
				<a href="#" class="item">
					<img class="item__image"src="img/4.jpg" alt="4"/>
					<h2 class="item__title">Pic4</h2>
				</a>
				<a href="#" class="item">
					<img class="item__image"src="img/5.jpg" alt="5"/>
					<h2 class="item__title">Pic5</h2>
				</a>
			</section>
		</div>
		
		<div id="container-4" class="container">
			
			<header class="intro">
				<img class="intro__image" src="img/4.jpg" alt="Image1"/>
				<div class="intro__content">
					<div class="intro__subtitle">
						<form class="captionForm" id="form4" method="post" action="game.php">
							<textarea id ='text' name="area4" rows="2" cols="100" value="..."></textarea>
							<input type="hidden" name="formsubmitted4" value="TRUE" />
							<input type="submit" name="submit4" class="captify" value="Caption!"/>
						</form>
						<button class="trigger">
							<svg width="100%" height="100%" viewBox="0 0 60 60" preserveAspectRatio="none">
								<use class="icon icon--grid" xlink:href="#icon-grid" />
								<use class="icon icon--cross" xlink:href="#icon-cross" />
							</svg>
							<span>Toggle content</span>
						</button>
					</div>
				</div>
			</header>
			<section class="items-wrap">
				<a href="#" class="item">
					<img class="item__image"src="img/1.jpg" alt="1"/>
					<h2 class="item__title">Pic 1</h2>
				</a>
				<a href="#" class="item">
					<img class="item__image"src="img/2.jpg" alt="2"/>
					<h2 class="item__title">Pic2</h2>
				</a>
				<a href="#" class="item">
					<img class="item__image"src="img/3.jpg" alt="3"/>
					<h2 class="item__title">Pic3</h2>
				</a>
				<a href="#" class="item">
					<img class="item__image"src="img/4.jpg" alt="4"/>
					<h2 class="item__title">Pic4</h2>
				</a>
				<a href="#" class="item">
					<img class="item__image"src="img/5.jpg" alt="5"/>
					<h2 class="item__title">Pic5</h2>
				</a>
			</section>
		</div>
		
		<div id="container-5" class="container">
			
			<header class="intro">
				<img class="intro__image" src="img/5.jpg" alt="Image1"/>
				<div class="intro__content">
					<div class="intro__subtitle">
						<form class="captionForm" id="form5" method="post" action="game.php">
							<textarea id ='text' name="area5" rows="2" cols="100" value="..."></textarea>
							<input type="hidden" name="formsubmitted5" value="TRUE" />
							<input type="submit" name="submit5" class="captify" value="Caption!"/>
						</form>
						<button class="trigger">
							<svg width="100%" height="100%" viewBox="0 0 60 60" preserveAspectRatio="none">
								<use class="icon icon--grid" xlink:href="#icon-grid" />
								<use class="icon icon--cross" xlink:href="#icon-cross" />
							</svg>
							<span>Toggle content</span>
						</button>
						<form class="captionForm" id="form5" method="post" action="logout.php">
							<input type="submit" name="final_submit" class="exit-btn exit-btn-2" value="Logout!"/>
						</form>
					</div>
				</div>
			</header>
			<section class="items-wrap">
				<a href="#" class="item">
					<img class="item__image"src="img/1.jpg" alt="1"/>
					<h2 class="item__title">Pic 1</h2>
				</a>
				<a href="#" class="item">
					<img class="item__image"src="img/2.jpg" alt="2"/>
					<h2 class="item__title">Pic2</h2>
				</a>
				<a href="#" class="item">
					<img class="item__image"src="img/3.jpg" alt="3"/>
					<h2 class="item__title">Pic3</h2>
				</a>
				<a href="#" class="item">
					<img class="item__image"src="img/4.jpg" alt="4"/>
					<h2 class="item__title">Pic4</h2>
				</a>
				<a href="#" class="item">
					<img class="item__image"src="img/5.jpg" alt="5"/>
					<h2 class="item__title">Pic5</h2>
				</a>
			</section>
		</div>
		
		<script src="js/classie.js"></script>
		<script>
			(function() {
				var support = { animations : Modernizr.cssanimations },
					animEndEventNames = { 'WebkitAnimation' : 'webkitAnimationEnd', 'OAnimation' : 'oAnimationEnd', 'msAnimation' : 'MSAnimationEnd', 'animation' : 'animationend' },
					animEndEventName = animEndEventNames[ Modernizr.prefixed( 'animation' ) ],
					onEndAnimation = function( el, callback ) {
						var onEndCallbackFn = function( ev ) {
							if( support.animations ) {
								if( ev.target != this ) return;
								this.removeEventListener( animEndEventName, onEndCallbackFn );
							}
							if( callback && typeof callback === 'function' ) { callback.call(); }
						};
						if( support.animations ) {
							el.addEventListener( animEndEventName, onEndCallbackFn );
						}
						else {
							onEndCallbackFn();
						}
					};

				var containers = [].slice.call( document.querySelectorAll( '.container' ) ),
					containersCount = containers.length,
					nav = document.querySelector( 'nav.thumb-nav' ),
					pageTriggers = [].slice.call( nav.children ),
					isAnimating = false, current = 0;

				function init() {
					resetScroll();
					// disable scrolling
					window.addEventListener( 'scroll', noscroll );
					// set current page trigger
					classie.add( pageTriggers[ current ], 'thumb-nav__item--current' );
					// set current container
					classie.add( containers[ current ], 'container--current' );
					// initialize events
					initEvents();
					$('#text').autosize();
				}

				function initEvents() {
					// slideshow navigation
					pageTriggers.forEach( function( pageTrigger ) {
						pageTrigger.addEventListener( 'click', function( ev ) {
							ev.preventDefault();
							navigate( this );
						} );
					} );

					// open each container's content area when clicking on the respective trigger button
					containers.forEach( function( container ) {
						container.querySelector( 'button.trigger' ).addEventListener( 'click', function() {
							toggleContent( container, this );
						} );
					} );

					// keyboard navigation events
					document.addEventListener( 'keydown', function( ev ) {
						var keyCode = ev.keyCode || ev.which,
							isContainerOpen = containers[ current ].getAttribute( 'data-open' ) == 'open';

						switch (keyCode) {
							// left key
							case 37:
								if( current > 0 && !isContainerOpen ) {
									navigate( pageTriggers[ current - 1 ] );
								}
								break;
							// right key
							case 39:
								if( current < containersCount - 1 && !isContainerOpen ) {
									navigate( pageTriggers[ current + 1 ] );
								}
								break;
						}
					} );
				}

				function navigate( pageTrigger ) {
					var oldcurrent = current,
						newcurrent = pageTriggers.indexOf( pageTrigger );

					if( isAnimating || oldcurrent === newcurrent ) return;
					isAnimating = true;

					// reset scroll
					allowScroll();
					resetScroll();
					preventScroll();

					var currentPageTrigger = pageTriggers[ current ],
						nextContainer = document.getElementById( pageTrigger.getAttribute( 'data-container' ) ),
						currentContainer = containers[ current ],
						dir = newcurrent > oldcurrent ? 'left' : 'right';

					classie.remove( currentPageTrigger, 'thumb-nav__item--current' );
					classie.add( pageTrigger, 'thumb-nav__item--current' );

					// update current
					current = newcurrent;

					// add animation classes
					classie.add( nextContainer, dir === 'left' ? 'container--animInRight' : 'container--animInLeft' );
					classie.add( currentContainer, dir === 'left' ? 'container--animOutLeft' : 'container--animOutRight' );

					onEndAnimation( currentContainer, function() {
						// clear animation classes
						classie.remove( currentContainer, dir === 'left' ? 'container--animOutLeft' : 'container--animOutRight' );
						classie.remove( nextContainer, dir === 'left' ? 'container--animInRight' : 'container--animInLeft' );

						// clear current class / set current class
						classie.remove( currentContainer, 'container--current' );
						classie.add( nextContainer, 'container--current' );

						isAnimating = false;
					} );
				}

				// show content section
				function toggleContent( container, trigger ) {
					if( classie.has( container, 'container--open' ) ) {
						classie.remove( container, 'container--open' );
						classie.remove( trigger, 'trigger--active' );
						classie.remove( nav, 'thumb-nav--hide' );
						container.setAttribute( 'data-open', '' );
						preventScroll();
					}
					else {
						classie.add( container, 'container--open' );
						classie.add( trigger, 'trigger--active' );
						classie.add( nav, 'thumb-nav--hide' );
						container.setAttribute( 'data-open', 'open' );
						allowScroll();
					}
				}

				// scroll functions
				function resetScroll() { document.body.scrollTop = document.documentElement.scrollTop = 0; }
				function preventScroll() { window.addEventListener( 'scroll', noscroll ); }
				function allowScroll() { window.removeEventListener( 'scroll', noscroll ); }
				function noscroll() { 
					window.scrollTo( 0, 0 ); 
				}
				init();
				[].slice.call( document.querySelectorAll('.items-wrap a') ).forEach( function(el) { el.onclick = function() { return false; } } );
			})();
		</script>
	</body>
</html>