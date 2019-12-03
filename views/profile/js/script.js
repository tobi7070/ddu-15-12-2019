$(function() {

    // Read insert
    $.get('profile/xhrGetInserts', function(o) {
        for (var i = 0; i < o.length; i++)
        {
            $('#listInserts').append('<div>' + o[i].text + '</div>' + '<a class="del" rel="' + o[i].id + '" href="#">Delete</a>');
        }

        // Delete insert
        $("#listInserts").on("click", ".del", function() {
            var delItem = $(this); 
            var id = $(this).attr('rel');
            delItem.parent().remove();
            $.post('profile/xhrRemoveInsert', {'id': id}, function(o) {
            }, 'json');
        });

    // Create insert
    }, 'json');
    $(document).on("submit", "#xhrInsert", function() {
        var url = $(this).attr('action');
        var data = $(this).serialize();
        $.post(url, data, function(o) {
            $('#listInserts').append('<div>' + o.text + '</div><a class="del" rel="' + o.id + '" href="#">Delete</a>');
        }, 'json');
        return false;
    });
});