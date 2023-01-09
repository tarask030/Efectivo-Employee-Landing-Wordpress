function filters(form){

    $('.ajax-loader').addClass('is-active');

    $.ajax({
        type : "post",
        dataType : "json",
        url : myAjax.ajaxurl,
        data : {
            action: "filters",
            form: form,
        },
        success: function(response) {
            $('.realizations-list').html(response.list);
            $('.ajax-loader').removeClass('is-active');
        },
    });
}


$(document).ready(function() {
    $('.select2').select2({
        minimumResultsForSearch: -1,
        dropdownPosition: 'below',
    });

    $(".select2").on('select2:select select2:unselect', function (e) {
        var form = $('.filters').serialize();
        filters(form);
        return false;
     });

});