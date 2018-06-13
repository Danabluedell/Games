$( document ).ready(function() {

    var
        degress=0,
        timer=setInterval(function () {

            degress++;
            $('body').css('background-image', 'url('+degress+'"http://saint-epondyle.net/blog/wp-content/uploads/2012/12/Batman-Arkham_City_Batman-Harley.jpg")')
        }, 6000/360);
});