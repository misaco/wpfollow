<?php 

// All show in admin panel make to this page






add_action('admin_menu', 'wpfollow_admin_menu');
function wpfollow_admin_menu() {
	add_menu_page(
		'wpfollow',
		'wpfollow',
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







    <div class="mother-of-base">


        <div class="header-of-wpfollow"> 

            <div class="right">
               <?php echo __('Welcome To ','wpfollow'); ?> wpfollow
           </div>

           <div class="left">
            <div>    
               <?php echo __('Version','wpfollow'); ?>  <?php echo wpfollow_Version; ?>
           </div>
       </div>
   </div>
   <div class="tabs">
    <ul class="tab-links">
        <li class="active"><a href="#tab0">0</a></li>
        <li><a href="#tab1"><?php echo __('Home' ,'wpfollow'); ?></a></li>
        <li><a href="#tab2"><?php echo  __('About' ,'wpfollow') ?></a></li>
    </ul>

    <div class="tab-content">
        <div id='tab0' class="tab active">
            <form>
                <div class="social-list">

                    <ul class="title-bar"> 
                        <li>Name</li>
                        <li>icon</li>
                        <li>link</li>            
                    </ul>

                    <ul class="social-bar">
                        <li>
                            <ul class="social-bar-add">
                                <li>
                                    <input type="text" placeholder="Name">
                                </li>
                                <li>
                                    <img src="" alt="social-icon" />
                                </li>
                                <li>
                                    <input type="text" placeholder="Link">
                                </li>
                            </ul>
                            <div class="remove-element"><a href="javascript:void(0)">Remove</a></div>
                        </li>
                    </ul>
                    <div class="add-new-element"><a href="javascript:void(0);" >Add new </a></div>

                </div>
                <div>
                    <?php submit_button(); ?>
                </div>
            </form>
        </div>
        <div id="tab1" class="tab">

            every thing we need , goes here...
        </div>

        <div id="tab2" class="tab">

            <div class="about-us">
                <div class="description">
                   <?php echo __('This plugin is free you can use it for ever.','wpfollow'); ?> <br>
                   <b><?php echo __('Authors','wpfollow'); ?>: </b> <a href="http://misaco.ir">MiSaCo. </a> <br>
                   <b><?php echo __(' Version','wpfollow'); ?>: </b> <?php echo wpfollow_Version; ?> <br>
                   <b><?php echo __('This version is proudly dedicated to','wpfollow'); ?>:</b> <?php echo wpfollow_CodeName ?> <br>

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
   <?php echo __('Created With','wpfollow'); ?> &#10084; <?php echo __('By','wpfollow'); ?> <a href="http://misaco.ir">MiSaCo. </a>
</div>


</div>




<?php

}

