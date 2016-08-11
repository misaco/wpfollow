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

    ?>




    <script>
        jQuery(document).ready(function() {
            jQuery('.tabs .tab-links a').on('click', function(e)  {
                var currentAttrValue = jQuery(this).attr('href');

        // Show/Hide Tabs
                jQuery('.tabs ' + currentAttrValue).show().siblings().slideUp(400);
                jQuery('.tabs' + currentAttrValue).delay(400).slideDown(400);

        // Change/remove current tab to active
                jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

                e.preventDefault();
            });
        });
    </script>



<div class="mother-of-base">


    <div class="header-of-wpfollow"> 

        <div class="right">
            Welcome To wpfollow
        </div>

        <div class="left">
            <div>    
                Version <?php echo wpfollow_Version; ?>
            </div>
        </div>
    </div>
    <div class="tabs">
        <ul class="tab-links">
            <li class="active"><a href="#tab1">Tab #1</a></li>
            <li><a href="#tab2">Tab #2</a></li>
            <li><a href="#tab3">Tab #3</a></li>
            <li><a href="#tab4">Tab #4</a></li>
        </ul>

        <div class="tab-content">
            <div id="tab1" class="tab active">
                <p>Tab #1 content goes here!</p>
                <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis.</p>
            </div>

            <div id="tab2" class="tab">
                <p>Tab #2 content goes here!</p>
                <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis. In hac habitasse platea dictumst. Ut euismod tempus hendrerit. Morbi ut adipiscing nisi. Etiam rutrum sodales gravida! Aliquam tellus orci, iaculis vel.</p>
            </div>

            <div id="tab3" class="tab">
                <p>Tab #3 content goes here!</p>
                <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum ri.</p>
            </div>

            <div id="tab4" class="tab">
                <p>Tab #4 content goes here!</p>
                <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis. In hac habitasse platea dictumst. Ut euismod tempus hendrerit. Morbi ut adipiscing nisi. Etiam rutrum sodales gravida! Aliquam tellus orci, iaculis vel.</p>
            </div>
        </div>
    </div>
    <div class="copyright">
        Created With &#10084; By <a href="http://misaco.ir">MiSaCo. </a>
    </div>





</div>




















<script type="text/javascript">
    jQuery(document).ready(function($){
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.add_button'); //Add button selector
            var wrapper = $('.field_wrapper'); //Input field wrapper
            var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="/assets/img/remove-icon.png"/></a></div>'; //New input field html
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



<?php

}

