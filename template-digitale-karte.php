<?php
/*
 * Template Name: Eis Five Digitale Karte
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js ef-digitale-karte">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="ef-content-container">
		<?php
        while ( have_posts() ) {
            the_post();
            $the_content = apply_filters( 'the_content', get_the_content() );
            echo $the_content;

        }
		?>
</div>
<?php wp_footer(); ?>

</body>
</html>