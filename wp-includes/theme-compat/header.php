<?php
/**
 * @package WordPress
 * @subpackage Theme_Compat
 * @deprecated 3.0.0
 *
 * This file is here for backward compatibility with old themes and will be removed in a future version.
 */
_deprecated_file(
	/* translators: %s: Template name. */
	sprintf( __( 'Theme without %s' ), basename( __FILE__ ) ),
	'3.0.0',
	null,
	/* translators: %s: Template name. */
	sprintf( __( 'Please include a %s template in your theme.' ), basename( __FILE__ ) )
);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link rel="profile" href="https://gmpg.org/xfn/11" />
<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />

<title><?php echo wp_get_document_title(); ?></title>

<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php if ( file_exists( get_stylesheet_directory() . '/images/kubrickbgwide.jpg' ) ) { ?>
<style type="text/css" media="screen">

	<?php
	// Checks to see whether it needs a sidebar.
	if ( empty( $withcomments ) && ! is_single() ) {
		?>
	#page { background: url("<?php bloginfo( 'stylesheet_directory' ); ?>/images/kubrickbg-<?php bloginfo( 'text_direction' ); ?>.jpg") repeat-y top; border: none; }
<?php } else { // No sidebar. ?>
	#page { background: url("<?php bloginfo( 'stylesheet_directory' ); ?>/images/kubrickbgwide.jpg") repeat-y top; border: none; }
<?php } ?>

</style>
<?php } ?>

<?php
if ( is_singular() ) {
	wp_enqueue_script( 'comment-reply' );}
?>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page">
<style>
	* {
	margin: 0;
	padding: 0;
	list-style-type: none;
}

.content{
	display: flex;
	width: 100%;
	height: 15vh;
	margin: auto;
	justify-content: space-between;
	text-align: center;
	transition-property: "height";
	transition-duration: .5s;
	transition-timing-function: ease-in-out;

}
li, a {
	padding: 1rem 2rem 1.15rem;
	text-transform: uppercase;
	cursor: pointer;
	color: white;
	min-width: 80px;
	margin: auto;
}

li:hover, a:hover {
  background-color: white;
  background-size: 100% 100%;
  color: #012B6A;
  animation: spring 300ms ease-out;
	font-weight: bold;
}
li:active {
  transform: translateY(4px);
}
a {
	text-decoration : none;
}
#header{
	position: fixed;
	z-index: 10;
	border-bottom: 1px solid #012B6A;
	width: 100%;
	background: #012B6A;
}

.change {
	height: 8vh;
	display: flex;
	width: 100%;
	margin: auto;
	justify-content: space-between;
	text-align: center;
	transition-property: "height";
	transition-duration: 0.5s;
	transition-timing-function: ease-in-out;
}

@keyframes spring {
  15% {
    -webkit-transform-origin: center center;
    -webkit-transform: scale(1.2, 1.1);
  }
  40% {
    -webkit-transform-origin: center center;
    -webkit-transform: scale(0.95, 0.95);
  }
  75% {
    -webkit-transform-origin: center center;
    -webkit-transform: scale(1.05, 1);
  }
  100% {
    -webkit-transform-origin: center center;
    -webkit-transform: scale(1, 1);
  }
}

</style>
<script>
	var posScroll = 0;

	window.addEventListener('scroll', function(e) {
		var container = document.getElementById("menu");
		if(window.scrollY > 90) {
			container.classList.remove("content");
			container.classList.add("change");
		} 
		else if (window.scrollY < 90) {
			container.classList.remove("change");
			container.classList.add("content");
		}
	});
</script>
<div id="header" role="banner">
	<!-- <div id="headerimg">
		<h1><a href="<?php echo home_url(); ?>/"><?php bloginfo( 'name' ); ?></a></h1>
		<div class="description"><?php bloginfo( 'description' ); ?></div>
	</div> -->
	<ul class="content" id="menu">
		<li><a href="<?php echo home_url(); ?>/">ACCUEIL</a></li>
		<li><a href="http://localhost/portfolio/rendez-vous">RENDEZ-VOUS</a></li>
		<li>TRAITEMENTS DENTAIRES</li>
		<li><a href="http://localhost/portfolio/actualites">News</a></li>
		<li>LE CABINET DENTAIRE</li>
		<li><a href="http://localhost/portfolio/contactez-nous">CONTACTEZ-NOUS</a></li>
	</ul>
</div>
<hr />
