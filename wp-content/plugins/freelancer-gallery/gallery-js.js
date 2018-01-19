window.onload = function() {

    $('.freelancer-image')
            .each(function(i) {
                $(this).attr('id', 'freelancer-image__'+i)
                       .hide();
                
                this.onclick = function() {
                    $(this).animate({opacity: 0}, 200, function(){
                        $(this).hide();
                    });
                }
            });

    $('.freelancer-gallery__link')
            .each(function(i) {
                this.onclick = function() {
                    $('#freelancer-image__' + i)
                            .show()
                            .animate({opacity: 1}, 200);
                }
            });
}