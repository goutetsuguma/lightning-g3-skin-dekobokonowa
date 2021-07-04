<?php
// bodyクラスを追加
add_filter(
    'body_class',
    function ( $classes ) {
        return array_merge( $classes, array( 'ltg3-s-dekobokonowa' ) );
    }
);

//bbPress
add_filter('bp_email_use_wp_mail', function () {
    return true;
});


//bbPressのメールアドレス任意化
function bbp_no_email( $mail ) {
	return 'no_email@example.com';
}
add_filter( 'bbp_pre_anonymous_post_author_email', 'bbp_no_email' );