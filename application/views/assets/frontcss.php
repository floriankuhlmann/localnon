<?php header("Content-type: text/css; charset: UTF-8"); ?>
@import url(http://fonts.googleapis.com/css?family=Oxygen);
@import url(http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic);
@import url(http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic);

body {

	padding:20px 0px 0px 20px;
	margin:0px;
	font-family: 'Courier', serif;	
	background: url(<?php echo base_url();?>img/00_bg/local-non-bg-animated-rain.gif) fixed repeat;
	font-size:20px;	
	color:#fff;
}


.container {
	width:100%;
	padding-top:5em;
	background: /*url(<?php echo base_url();?>img/local_non_sign_big.png) fixed repeat*/;	
	color:#000;
}

.background {	
	background: url(<?php echo base_url();?>img/00_bg/local-non-bg-animated-rain.gif) fixed repeat;
	color:white;
	padding:0px 5px 0px 5px;
	/*text-shadow: 0px 0px 0px #000, 1px 1px 0px #333, 2px 2px 0px #666, 3px 3px 0px #999, 4px 4px 0px #AAA, 5px 5px 0px #CCC, 6px 6px 5px rgba(0, 0, 0, 0.8), 6px 6px 1px rgba(0, 0, 0, 0.5), 0px 0px 5px rgba(0, 0, 0, 0.2);*/
}

.border-left-open {
	padding-top:10px;
	padding-bottom:20px;
	border-right:1px solid #9dab83;
	border-top:1px solid #9dab83;
	border-bottom:1px solid #9dab83;	
}

.border-right-open {
	padding-top:10px;
	padding-bottom:20px;
	border-left:1px solid #9dab83;
	border-top:1px solid #9dab83;
	border-bottom:1px solid #9dab83;	
}

.margin-top-2-em {
	margin-top:2em;
}

.margin-top-5-em {
	margin-top:5em;
}

.margin-top-10-em {
	margin-top:10em;
}

.margin-bottom-2-em {
	margin-bottom:2em;
}

.margin-bottom-5-em {
	margin-bottom:5em;
}

.margin-bottom-10-em {
	margin-bottom:10em;
}



hr {
	margin-top:5em;
	padding-bottom:5em;
	margin-left:20%;
	margin-right:20%;
  	border: solid #9dab83;
  	  border-width: 3px 0 0;
}

#startgeochecking:hover 

.checkin {
	
	background-color:#a35518;
	
}

.checkin h1 {
	
	color:#fff;
	
}

h1,h2,h3,h4,h5,h6 {
	font-family: 'Oxygen', sans-serif;
	font-family: 'Karla', sans-serif;
	font-family: 'Libre Baskerville', serif;
	color:#a35518;
	
}

h1 {
	font-size:4em;	
	/*text-shadow: 6px 6px 5px rgba(0, 0, 0, 0.8), 6px 6px 1px rgba(0, 0, 0, 0.5), 0px 0px 5px rgba(0, 0, 0, 0.2);*/
}

p, ul {
	font-size:1.5em;
}

a {
	text-decoration:underline;
	color:#21221c;	
}

a:hover {
	color:#a35518;	
}


#startgeochecking {
	cursor:pointer;
	text-decoration:underline;	
}

/* Smartphones (portrait and landscape) ----------- */
@media only screen 
and (min-device-width : 320px) 
and (max-device-width : 480px) {
/* Styles */


}

/* Smartphones (landscape) ----------- */
@media only screen 
and (min-width : 321px) {
/* Styles */
	body {
		font-size:14px;	
	}

}

/* Smartphones (portrait) ----------- */
@media only screen 
and (max-width : 320px) {
/* Styles */

	body {
		font-size:12px;	
	}

}

/* iPads (portrait and landscape) ----------- */
@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) {
/* Styles */

}

/* iPads (landscape) ----------- */
@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) 
and (orientation : landscape) {
/* Styles */

body {
	font-size:16px;	
}
	h1 {
		font-size:3em;	
	}
}

/* iPads (portrait) ----------- */
@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) 
and (orientation : portrait) {
/* Styles */

body {
	font-size:16px;	
}
	h1 {
		font-size:2em;	
	}

}

/* Desktops and laptops ----------- */
@media only screen 
and (min-width : 1025px) {
/* Styles */

	body {
		font-size:18px;	
	}
	h1 {
		font-size:2em;	
	}
}


/* Desktops and laptops ----------- */
@media only screen 
and (min-width : 1224px) {
/* Styles */

	body {
		font-size:20px;	
	}
	h1 {
		font-size:2em;	
	}
}

/* Large screens ----------- */
@media only screen 
and (min-width : 1824px) {
/* Styles */
	body {
		font-size:22px;	
	}
	h1 {
		font-size:2em;	
	}
}

/* iPhone 4 ----------- */
@media
only screen and (-webkit-min-device-pixel-ratio : 1.5),
only screen and (min-device-pixel-ratio : 1.5) {
/* Styles */
}


