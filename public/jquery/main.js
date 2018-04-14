
$(document).ready(function()
{
    let category = "all";
    // Pagination portion
    let count = 10;

    function loadMore() {
        console.log("More loaded" + category);

        $.ajax({

            url: '/categoryscroll?page=' + count + "&cat=" + "{{category}}",
            dataType: "json",
            success: function (data) {
                String.prototype.trunc = String.prototype.trunc ||
                    function (n) {
                        return (this.length > n) ? this.substr(0, n - 1) + '&hellip;' : this;
                    };
                data = JSON.parse(data);
                count = count + 20;
                $.each(data, function (index, value) {

                });
                $('#loading').hide();
            }
        });

        $(window).bind('scroll', bindScroll);
    }

    function bindScroll() {
        if ($(window).scrollTop() + $(window).height() > $(document).height() - 1500) {
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

        // add btn-primary to active button
        let button = $(this);
        button.removeClass('btn-outline-primary');
        button.addClass('btn-primary');
        category=button.data("filter");
        filterItems(button.data("filter"));
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

        }
    });

}


function populate(item)
{
    let template='  <div class="col-lg-3 col-md-6 mb-4">\n' +
        '                <div class="card">\n' +
        '                    <img class="card-img-top" height="200px" src=' + item.imageUrl + ' alt="">\n' +
        '                    <h4 class="card-title" style="padding-top: 10px">' + item.title + '</h4>\n' +
        '\n' +
        '                    <div class="card-footer">\n' +
        '                        <a href="#" class="btn btn-primary">More!</a>\n' +
        '                    </div>\n' +
        '                </div>\n' +
        '            </div>';

return template;
}