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


    <style type="text/css">


        @fonts
        @font-face{
          font-family: 'lato';
          font-style: normal;
          src:url('/assets/fonts/Lato-Light.ttf')format('truetype');;
      }

      /*----- Tabs -----*/
      .tabs {
        width:100%;
        display:inline-block;
    }

    /*----- Tab Links -----*/
    /* Clearfix */
    .tab-links:after {
        display:block;
        clear:both;
        content:'';
    }
    .tabs ul {
        margin: 0;
    }

    .tab-links li {
        margin: 0px 4px 0px 0px;
        float: left;
        list-style: none;
    }

    .tab-links a {
        padding: 9px 15px;
        display: inline-block;
        font-size: 16px;
        font-weight: 600;
        color: #4c4c4c;
        transition: all linear 0.15s;
        text-decoration: none;
        background-color: rgba(96, 125, 139, 0.28);
    }
    .tab-links a:active {
        border:none;
        border-color: red; 
    }

    .tab-links li:nth-child(1) a {
        border-radius: 10px 0px 0px 0px;
    }
    .tab-links a:hover {
        background:#a7cce5;
        text-decoration:none;
    }

    li.active a, li.active a:hover {
        background:#fff;
        color:#4c4c4c;
    }

    /*----- Content of Tabs -----*/
    .tab-content {
        padding: 15px;
        background: #fff;
        border-radius: 0px 0px 10px 0px;
    }

    .tab {
        display:none;
    }

    .tab.active {
        display:block;
    }

    .mother-of-base {
        width: 92%;
        font-family: lato;
    }

    .header-of-wpfollow {
        background-color: white;
        padding: 20px 0px 0px;
        display: inline-block;
        width: 100%;
    }

    .header-of-wpfollow .right {
        float: left;
        width: 33%;
        font-size: 23px;
        font-family: monospace;
        padding: 9px 40px 0px;
    }

    .header-of-wpfollow .left {
        float: right;
        width: 20%;
        padding: 30px 20px 0px;
        text-align: right;
    }

    .copyright {
        text-align: center;
        background-color: rgba(255, 255, 255, 0.55);
        text-shadow: 0px 0px 1px rgba(0, 0, 0, 0.15);
        margin: 6px auto;
        width: 100%;
        padding: 5px 0px 2px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.11);
        border: none;
        transition: 1s cubic-bezier(0, 1.39, 0.5, -0.65);
    }
    .copyright a {
        text-decoration: none;
        color: inherit;
    }
    .copyright:hover {
        background-color: #FFFFFF;
        transition: 1s cubic-bezier(0, 1.38, 0.5, -0.65);
        color: #3C4054;
        font-weight: bold;
        border-radius: 0px;
        width: 72%;
        margin: 0px auto;
    }

</style>



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
 jQuery(document).ready(function( $ ) {

   console.log('hello world');
});

</script>

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

