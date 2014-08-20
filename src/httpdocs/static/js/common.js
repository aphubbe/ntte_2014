$(function() {
    $('#ntte header ul.header_right-lang-menu li.header_right-lang-menu-item a').click(function(e){
        e.preventDefault();
        $.removeCookie('ntte_lang');
        $.cookie(
            'ntte_lang',
            $(this).attr('data-lang'),
            {
                path: '/',
                domain: '.' + window.location.host.replace(/^[a-z0-9.-]*?[.]{0,1}([a-z0-9-]*?.[a-z.]{2,7})$/i,'$1')
        });
        window.location = $(this).attr('href');       
    });
});