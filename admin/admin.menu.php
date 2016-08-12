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

            jQuery('.legend img').click(function(){
                jQuery('.more-detail').css('left','-340px').toggle(500);
                jQuery('.more-detail').css('display','block').slideLeft(500);
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
                <li class="active"><a href="#tab1">Home</a></li>
                <li><a href="#tab2">About</a></li>
            </ul>

            <div class="tab-content">

                <div id="tab1" class="tab active">

                    every thing we need , goes here...
                </div>

                <div id="tab2" class="tab">

                    <div class="about-us">
                        <div class="description">
                            This plugin is free you can use it for ever. <br>
                            <b> Authors: </b> <a href="http://misaco.ir">MiSaCo. </a> <br>
                            <b> Version: </b> <?php echo wpfollow_Version; ?> <br>
                            <b>  This version is proudly dedicated to : </b> <?php echo wpfollow_CodeName ?> <br>

                        </div>
                        <div class="legend">
                            <img src="<?php echo wpfollow__PLUGIN_URL.'assets/img/eric_clapton.jpg' ?>" /> 

                            <span class="more-detail">
                                Eric Patrick Clapton, CBE, is an English rock and blues guitarist, singer, and songwriter. He is the only three-time inductee to the Rock and Roll Hall of Fame: once as a solo artist and separately as a member of the Yardbirds and Cream. Wikipedia... <br>
                                <br>

                                Spouse: Melia McEnery (m. 2002), Pattie Boyd (m. 1979–1988) <br>
                                Music groups: Cream, The Yardbirds (1963 – 1965), more <br>
                                Influenced by: Jimi Hendrix, B.B. King, Robert Johnson, Muddy Waters, Delaney Bramlett
                            </span>
                        </div>

                    </div>

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

