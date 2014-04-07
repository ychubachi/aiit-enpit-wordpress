<?php
	if ( in_category( 'pdf' ) ) {
		get_template_part( 'content', 'pdf' );
	} else {
		get_template_part( 'content' );
	}
?>
