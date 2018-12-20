var loading = $('.loading');

    function load_more(page){
        $.ajax(
            {
                url: location.protocol + '/' + 'loadmore',
                type: "post",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {page : page},
                beforeSend: function()
                {
                    loading.show();
                },
            })
            .done(function(data)
            {
                if(data.length == 0){
                    loading.html("Không có thêm bài viết!");
                    loading.removeClass('loading');
                    loading.addClass('mt-4');
                    more = false;
                    return;
                }
                loading.hide();
                $("#results").append(data);
            })
            .fail(function(jqXHR, ajaxOptions, thrownError)
            {
                alert('No response from server');
            });
    }

    var page = 1;
    var more = true;
    load_more(page);

    $(window).scroll(function() {
        if(more) {
            if ($(window).scrollTop() + $(window).height() >= $(document).height() ) {
                page++;
                load_more(page);
            }
        }
    });

