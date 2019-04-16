/**
 * uniformimages - v1.0.3 - 2018-04-25
 * https://github.com/chigozieorunta/uniformimages
 *
 * Copyright (c) 2018 Chigozie Orunta
 * Licensed MIT <https://github.com/chigozieorunta/uniformimages/blob/master/LICENSE>
**/

(function($) {	
    $(document).ready(function() {
        $('.unim, .unim-square, .unim-circle, .unim-portrait, .unim-landscape, .unim-diamond').each(function(index, element) {
            //Get variables...
            var dynamicDiv = '';
            var source = $(this).attr("src");
            var height = $(this).attr("height");
            var divClass = $(this).attr("class");
    
            //Conditionals...
            if(parseInt(height) > 0) {
                dynamicDiv = '<div class="'+divClass+' unim-height" style="height: '+height+'px;">';
            } else {
                dynamicDiv = '<div class="'+divClass+'">'; 
            }
    
            //Add Image URL
            if(divClass != 'unim-diamond') {
                dynamicDiv += '<div class="unim-placeholder">';
                dynamicDiv += '<div>';
                dynamicDiv += '<div class="unim-icon"></div>';
                dynamicDiv += '</div>';
                dynamicDiv += '</div>';
                dynamicDiv += '<div class="unim-img" style="background-image: url('+source+');"></div>';
                dynamicDiv += '</div>';
            } else {
                dynamicDiv += '<div class="unim-diamond-container">';   
                dynamicDiv += '<div class="unim-diamond-placeholder">';
                dynamicDiv += '<div><div>';
                dynamicDiv += '<div class="unim-icon"></div>';
                dynamicDiv += '</div></div>';
                dynamicDiv += '</div>';
                dynamicDiv += '<div class="unim-diamond-img" style="background-image: url('+source+');"></div>';
                dynamicDiv += '</div>';
                dynamicDiv += '</div>';
            }
    
            //ReplaceWith dynamicDivTag
            $(this).replaceWith(dynamicDiv);
        });
    })    
})( jQuery );