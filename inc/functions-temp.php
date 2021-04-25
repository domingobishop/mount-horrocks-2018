<?php

function my_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    ' . __( "Welcome to the Members Area." ) . '
	<p>This shop is password protected. To view it please enter your password below:</p>
    <label for="' . $label . '">' . __( "Password:" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" /><input type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '" />
    </form>
	<p>Minimum order is 6 bottles and we will deliver within Australia <strong>freight free.</strong></p>
	<p><strong>You must be 18 years or older to enter the Mount Horrocks online shop. By clicking ‘Submit’ you are verifying this.</strong></p>
	<p>Having trouble logging in to purchase? Just phone us on (08) 8849 2243, or email <a href="mailto:sales@mounthorrocks.com">sales@mounthorrocks.com</a> and we can help.</p>
	<p>If not a member, join our <a href="http://www.mounthorrocks.com/contact/join-our-mailing-list/">mailing list</a></p>
    ';
    return $o;
}
add_filter( 'the_password_form', 'my_password_form' );
