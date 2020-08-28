$('#sidebarCollapse').on('click', function () {
    console.log('clique');
    $('#sidebar').toggleClass('active');

    console.log('padding =' + $('#content').css('padding-left'));

    if($('#content').css('padding-left') === '0' || $('#content').css('padding-left') === '0px'){
        $('#content').css('padding-left', '300px');
    } else {
        $('#content').css('padding-left', '0');
    }
});

$(window).resize(function(){
    redimensionar();
});

onload = function(){
    redimensionar();
};

function redimensionar(){
    console.log("redimensionar");

    if($(window).width() <= 991){
        $('#content').css('padding-left', '0');
    } else {
        $('#content').css('padding-left', '300px');
    }
}



