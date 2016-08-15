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
                /* jQuery('.more-detail').css('display','block').toggle(500);*/
            });



            // Made posible to draggble and move element 
            jQuery( ".position ul" ).sortable();
            jQuery( ".position ul" ).disableSelection();



            // Made posible to add new elemet and also can remove element
            var newelement = '<li><ul class="social-bar-add"><li><input type="text" name="name" placeholder="Name"></li><li><input type="text" name="link" placeholder="Link"></li><li><input  id="image-url" name="image" type="text" value="" placeholder="Image" /></li></ul><div class="remove-element"><a href="javascript:void(0)">Remove</a></div></li>';

            jQuery('.add-new-element a').click(function(){
                jQuery('.social-bar').append(newelement);
                jQuery('.upload-btn').css('display','block');

            });



/*            jQuery('.remove-element a').click(function(event) {
                event.preventDefault();
                console.log('heloo');
                jQuery(this).parent().remove();
            });*/



    // make add property to social items in list , social_id , social_position , social_state
    jQuery('.position ul li').mouseout(function(){
        var count = jQuery('.position ul li').length; 
        for (var i = 0 ; i < count; i++) {
            jQuery('.position ul li').eq(i).find('.social_position').attr('value',i);
            jQuery('.position ul li').eq(i).find('.social_state').attr('value' ,1);
        }                       
    });
    

            // Made Possible to add social to list show
            jQuery('.select ul li').click(function(){

                jQuery(this).slideUp(500, function(){
                    jQuery(this).appendTo('.position ul');
                    jQuery(this).slideDown(500);
                });



            });

            function heartbeat() {
        setTimeout(function(){                //start setTimeout
            jQuery('.love img').toggleClass('beat');    //add or remove class .beat
            heartbeat();                      //and call the function again
        },500);                               //every half second
    }
    heartbeat(); 









    // Made possible use mediauploader 
    jQuery(document).ready(function($){

      var mediaUploader;

      jQuery('#upload-button').click(function(e) {
        e.preventDefault();
    // If the uploader object has already been created, reopen the dialog
    if (mediaUploader) {
      mediaUploader.open();
      return;
  }
    // Extend the wp.media object
    mediaUploader = wp.media.frames.file_frame = wp.media({
      title: 'Choose Image',
      button: {
          text: 'Choose Image'
      }, multiple: false });

    // When a file is selected, grab the URL and set it as the text field's value
    mediaUploader.on('select', function() {
      attachment = mediaUploader.state().get('selection').first().toJSON();
      $('#image-url').val(attachment.url);
  });
    // Open the uploader dialog
    mediaUploader.open();
});

  });






});

