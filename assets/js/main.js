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
            jQuery( ".social-bar" ).sortable();
            jQuery( ".social-bar" ).disableSelection();



            // Made to add new elemet and also can remove element
            var newelement = '<li><ul class="social-bar-add"><li><input type="text" placeholder="Name"></li><li><img src="" alt="social-icon" /></li><li><input type="text" placeholder="Link"></li></ul><div class="remove-element"><a href="javascript:void(0)">remove</a></div></li>';

            jQuery('.add-new-element a').click(function(){
                jQuery('.social-bar').append(newelement);

            });



/*            jQuery('.remove-element a').click(function(event) {
                event.preventDefault();
                console.log('heloo');
                jQuery(this).parent().remove();
            });*/
        });