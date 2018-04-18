
$(document).ready(function()
{
    let category = "all";
    // Pagination portion
    let count = 10;

    function loadMore() {
        console.log("More loaded " + count);

        $.ajax({

            url: 'paginate?page=' + count + "&category=" + category,
            dataType: "json",
            success: function (data) {
                data=data.data;
                count = count + 10;
                $.each(data, function (index, value) {
                    template=populate(value);
                    $('#data-div').append(template);
                });
                $('#loader').hide();

            },
        });

        $(window).bind('scroll', bindScroll);
    }

    function bindScroll() {
        if ($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
            $(window).unbind('scroll');
            loadMore();
        }
    }

    $(window).scroll(bindScroll);


// Category filtering

    $('.pp-filter-button').on('click', function (e) {
        // remove btn-primary from all buttons first
        $('.pp-filter-button').removeClass('btn-primary');
        $('.pp-filter-button').addClass('btn-outline-primary');
        $('#loader').show();
        // add btn-primary to active button
        let button = $(this);
        button.removeClass('btn-outline-primary');
        button.addClass('btn-primary');
        category=button.data("filter");
        filterItems(button.data("filter"));
        count=10;
        e.preventDefault();
    })

});




function filterItems(filter) {
    $.ajax({
        url: 'getByCategory',
        type: 'GET',
        data: {
            'category': filter
        },
        dataType: 'json',
        success: function (data) {
            $(".alert-warning").hide();
            let content = data.data;
            $('#data-div').html('');
            $.each(content, function (i, item) {
                template=populate(item);
                $('#data-div').hide().append(template).fadeIn(400);
            });


        },
        error: function (request, error) {
            $(".alert-warning").show();
            $('#loader').hide();
            $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;


        }
    });

}


function populate(item)
{
    console.log(item)
    let template='';
    template='  <div class="col-lg-3 col-md-6 mb-4">\n' +
        '                <div class="card">\n' +
        '                    <img class="card-img-top" height="200px" src=' + item.imageUrl + ' alt="">\n' +
        '                    <h5 class="card-title" style="padding: 10px;font-size: 1rem;  overflow: hidden; text-overflow: ellipsis;white-space: nowrap; overflow: hidden;  text-overflow: ellipsis;">' + item.title + '</h5>\n' +
        '\n' +
        '                    <div class="card-footer">\n' +
        '                        <a href="detail?id='+item._id+'" class="btn btn-primary">More!</a>\n' +
        '                    </div>\n' +
        '                </div>\n' +
        '            </div>';

return template;
}