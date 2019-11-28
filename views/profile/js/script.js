$(function() {
    $.get('profile/xhrGetInserts', function(o) {
        for (var i = 0; i < o.length; i++)
        {
            $('#listInserts').append('<li>' + o[i].text + '</li>' + '<a class="del" rel="' + o[i].id + '" href="#">Delete<a/></li>');
        }
        $('#listInserts').on('click', '.del', function() {
        //$('.del').click(function() {
            delItem = $(this); 
            var id = $(this).attr('rel');
            $.post('profile/xhrRemoveInsert', {'id': id}, function(o) {
                delItem.parent().remove();
            }, 'json');
        });
    }, 'json');

    $('#xhrInsert').submit(function() {
        var url = $(this).attr('action');
        var data = $(this).serialize();

        $.post(url, data, function(o) {
            $('#listInserts').append('<li>' + o.text + '<a class="del" rel="' + o.id + '" href="#">Delete<a/></li>');
        });

        return false;
    });

});