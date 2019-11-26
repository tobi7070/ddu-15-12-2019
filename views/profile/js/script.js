$(function() {
    $('#randomInsert').submit(function() {

        var url = $(this).attr('action');
        var data = $(this).serialize();

        $.post(url, data, function(o) {
            alert("You submitted data");
        });

        console.log(url, data);

        return false;
    });
});