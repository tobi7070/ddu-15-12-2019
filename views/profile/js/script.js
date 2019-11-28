$(function() {
    $.get('profile/xhrGetInserts', function(o) {
        for (var i = 0; i < o.length; i++)
        {
            $('#listInserts').append('<li>' + o[i].text + '</li>');
        }
    }, 'json');

    $('#xhrInsert').submit(function() {
        var url = $(this).attr('action');
        var data = $(this).serialize();

        $.post(url, data, function(o) {
            alert("You submitted data");
        });

        return false;
    });
});