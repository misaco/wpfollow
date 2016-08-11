<?php 

// All show in admin panel make to this page






add_action('admin_menu', 'wpfollow_admin_menu');
function wpfollow_admin_menu() {
	add_menu_page(
		'WpFollow',
		'WpFollow',
		'manage_options',
		'wpfollow_setting',
		'wpfollow_setting'
		);
}

function wpfollow_setting() {
	if (!current_user_can('manage_options'))  {
		wp_die( __('You do not have sufficient permissions to access this page.') );
	}

	echo '<div class="wrap">';
	echo '<p> where the form would go if I actually had options.</p>';
	echo '</div>';
	?>
	<script type="text/javascript">
	jQuery(document).ready(function( $ ) {

			console.log('hello world');
		});

	</script>

	<?php
	echo '<div>hello world</div>';
}



add_action('admin_menu', 'wpfollowurls_submenu_page');
function wpfollowurls_submenu_page() {
    add_submenu_page(
        'wpfollow_setting',
        'wpfollowu urls',
        'wpfollowu urls',
        'manage_options',
        'wpfollow_settings',
        'wpfollow_submenu_page_callback' );
}



function wpfollow_submenu_page_callback(){
?>

    <script type="text/javascript">
        jQuery(document).ready(function($){
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.add_button'); //Add button selector
            var wrapper = $('.field_wrapper'); //Input field wrapper
            var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="remove-icon.png"/></a></div>'; //New input field html
            var x = 1; //Initial field counter is 1
            $(addButton).click(function(){ //Once add button is clicked
                if(x < maxField){ //Check maximum number of input fields
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); // Add field html
                }
            });
            $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });
    </script>

    <div class="field_wrapper">
        <div>
            <input type="text" name="field_name[]" value=""/>
            <a href="javascript:void(0);" class="add_button" title="Add field"><img src="add-icon.png"/></a>
        </div>
    </div>

<?php } ?>