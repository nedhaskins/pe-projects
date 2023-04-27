<header>
	<inner-column>
		<svg-wrapper class='road-icon'>
			<?php include('./images/winding-road.php'); ?>
		</svg-wrapper>

		<h1 class='title'>Highways of Virginia</h1>
		
		<button class='toggle menu-icon'>
				<?php include('./images/menu-icon.php'); ?>
		</button>
		
		<nav class="site-menu">
			<ul>
				<li><a href='?'>Home Page</a></li>
				<li><a href='?page=route-list'>Route List</a></li>
				<li><a href='?page=create'>Create a new route</a></li>
			</ul>
			<button class="toggle small-screen">Close</button>
		</nav>
	</inner-column>
</header>

<script>

	var body = document.querySelector('body');
	// console.log('test');

	// set up a "listener" that will 
	// listen for "clicks" (and taps) on the whole page!
	document.addEventListener('click', function(event) {

	  if ( event.target.matches('.toggle') ) {
	    body.classList.toggle('small-menu-open');
	    console.log('SVG clicked');
	  }

	  // if ( event.target.matches('a') ) {
	  //   alert(`I'm a link for ${event.target.textContent}`);
	  // }

	});

</script>