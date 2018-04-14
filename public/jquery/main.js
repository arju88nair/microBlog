$('.pp-filter-button').on('click', function (e) {
    // remove btn-primary from all buttons first
    $('.pp-filter-button').removeClass('btn-primary');
    $('.pp-filter-button').addClass('btn-outline-primary');

    // add btn-primary to active button
    var button = $(this);
    button.removeClass('btn-outline-primary');
    button.addClass('btn-primary');
    filterItems(button.data("filter"));
    e.preventDefault();
})

function filterItems(filter) {
    $.ajax({
        url: 'getByCategory',
        type: 'GET',
        data: {
            'category': filter
        },
        dataType: 'json',
        success: function (data) {
            let content = data.data;
            $('#data-div').html('');
            $.each(content, function (i, item) {
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
                $('#data-div').hide().append(template).fadeIn(400);
            });

            },
        error: function (request, error) {
            // alert("Request: " + JSON.stringify(request));
        }
    });

}

