<?php 

// All show in admin panel make to this page



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
    <li><a href="#tab0">0</a></li>
    <li class="active"><a href="#tab1">1</a></li>
    <li><a href="#tab1"><?php echo __('Home' ,'wpfollow'); ?></a></li>
    <li><a href="#tab2"><?php echo  __('About' ,'wpfollow') ?></a></li>
  </ul>

  <?php 

  $database = new wpfollow_database();
  if (isset($_POST['submit'])) {

    if (isset($_POST['proccess'])) {
      $proccess = $_POST['proccess'];
    }

    if ($proccess == 'add_new') {

      if (isset($_POST['name'])) {
        $name = $_POST['name'];
      }
      if (isset($_POST['link'])) {
        $link = $_POST['link'];
      }
      if (isset($_POST['image'])) {
        $image = $_POST['image'];
      }

      $database->add_new_social($name,$link,$image);
    }
    elseif ($proccess == 'show_social') {

      $ids = array();

      // $id , $position ,$state

      // how many reapet loop to slice array 
      $count = (count($_POST) - 2) / 3 ; 

      // start position for slice
      $bb = 0; 

      //slice array 
      for ($i=0; $i < $count ; $i++) { 
       $ids[] = array_slice($_POST , $bb , 3 );
       $bb = $bb + 3; 
     }


     $arrsocial = array();
     for ($i=0; $i < $count ; $i++) { 

       foreach ($ids[$i] as $key) {
         $arrsocial[] = $key;
       }
       $database->change_data($arrsocial);
       unset($arrsocial);
     } 

   }


 }




 ?>

 <div class="tab-content">
  <div id='tab0' class="tab">
    <form action="" method="POST">
      <div class="social-list">

        <ul class="title-bar"> 
          <li><?php echo __('Name' , 'wpfollow'); ?></li>
          <li><?php echo __('Link' , 'wpfollow'); ?></li>            
          <li><?php echo __('Icon' , 'wpfollow'); ?></li>
        </ul>

        <ul class="social-bar">
          <?php
          $getdata =  $database->get_all_social();
          foreach ($getdata as $key):
           ?>
         <li>
          <ul class="social-bar-add">
            <input type="hidden" value="<?php echo $key->id; ?>" />
            <li>
              <input  type="text" name="name" value="<?php echo $key->name; ?>" placeholder="Name">
            </li>
            <li>

              <input type="text" name="image"  value="<?php echo $key->url; ?>" placeholder="Image"   />
            </li>
            <li>
              <img  src="<?php echo $key->image; ?>"/>
            </li> 
          </ul>
          <div class="remove-element"><a href="javascript:void(0)">Remove</a></div>
        </li>
      <?php  endforeach; ?>
    </ul>
    <div class="upload-btn">
     <input id="upload-button" type="button" class="button" value="Upload Image" />
   </div>
   <div class="add-new-element"><a href="javascript:void(0);" >Add new </a></div>

 </div>
 <div>

  <input type="hidden" name="proccess" value="add_new" />

  <?php submit_button(); ?>
</div>
</form>
</div>





<!-- Begin Second Tab -->
<div id='tab1' class="tab active">
  <form method="POST" action="">
    <div class="select-position">
      <div class="position">
        <div>how many social you want to show:</div>
        <?php 
        $get_social_added = $database->get_social_with_state('1');
        ?>
        <ul>
          <?php foreach ($get_social_added as $key):  ?>
          <li social_id="<?php echo $key->id; ?>">
            <img src="<?php echo $key->image; ?>">
            <input class="social_id" type="hidden" value="<?php echo $key->id; ?>" name="id_<?php echo $key->id; ?>" />
            <input class="social_position" type="hidden" value="<?php echo $key->position; ?>" name="position_<?php echo $key->id; ?>" />
            <input class="social_state" type="hidden" value="<?php echo $key->state; ?>" name="state_<?php echo $key->id; ?>" />

          </li>
        <?php endforeach; ?>
      </ul>
    </div>

    <div class="select">
     <div>   Box add social exists </div>
     <?php 
     $get_social_added = $database->get_social_with_state('0');
     ?>
     <ul>
      <?php foreach ($get_social_added as $key):  ?>
      <li social_id="<?php echo $key->id; ?>">
        <img src="<?php echo $key->image; ?>">
        <input class="social_id" type="hidden" value="<?php echo $key->id; ?>" name="id_<?php echo $key->id; ?>" />
        <input class="social_position" type="hidden" value="<?php echo $key->position; ?>" name="position_<?php echo $key->id; ?>" />
        <input class="social_state" type="hidden" value="<?php echo $key->state; ?>" name="state_<?php echo $key->id; ?>" />
      </li>
    <?php endforeach; ?>


  </ul>
</div>

<input type="hidden" name="proccess" value="show_social"/>
<?php submit_button(); ?>

</div>

</form>
</div>
<!-- End Second Tab -->




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
 <?php echo __('Created With','wpfollow'); ?> <span class="love"> &#10084; </span> <?php echo __('By','wpfollow'); ?> <a href="http://misaco.ir">MiSaCo. </a>
</div>


</div>




<?php

}

