<style>
body {
	background-color: lightgoldenrodyellow;
	padding: 40px;
}

p,li{
	color: dimgray;
}


.menu {
	display: none;
	/* not a best practice - but fine for this example - (at this time) */
}


/* We're changing the class on a larger parent scope vs. just the menu... because we may need to style many things on the page differently in this state (menu "open" state) */

body.menu-open {
	/* */
}

body.menu-open .menu { /* how the menu should behave _visually_ (when open) */
	display: block; /* show it! (not "none") */
	/* */
	position: fixed; /* cover the whole screen */
	top: 0;
	left: 0;
	width: 100%;
	height: 100vh;
	/* */
	display: flex; /* positioning its items */
	flex-direction: column;
	justify-content: center;
	align-items: center;
	/* */
	background-color: var(--pe-cyan);
}

	
</style>



<body>

<button rel='toggle'>Toggle menu</button>

<nav class='menu'>
	<a href='#'>Thing one</a>
	<a href='#'>Thing two</a>
	<a href='#'>Thing three</a>

	<button rel='toggle'>Close menu</button>
</nav>
	<h2></h2>
</body>






<script src="for-each.js"></script>