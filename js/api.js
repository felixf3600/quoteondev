(function($) {
  $('#search-submit').on('click', function(event) {
    event.preventDefault();
    let $author = $('#author-field').val();
    let $url = $('#url-field').val();
    let $quote = $('#quote-field').val();
    let $book = $('#book-field').val();
    $('#response').html('');

    let $post = {
      title: $author,
      content: $quote,
      _qod_quote_source: $book,
      _qod_quote_source_url: $url,
      status: 'publish'
    };

    if ($author && $quote) {
      $.ajax({
        method: 'post',
        url: redVars.rest_url + 'wp/v2/posts/',
        data: $post,
        beforeSend: function(xhr) {
          xhr.setRequestHeader('X-WP-Nonce', redVars.wpapi_nonce);
        }
      }).done(function() {
        // variable response was in the brackets
        $('#response').append('<h2>success!!! Thanks for the quote!</h2>');
        $('#author-field').val('');
        $('#url-field').val('');
        $('#quote-field').val('');
        $('#book-field').val('');
      });
    } else {
      $('#response').append(
        '<h2>Opps! Please make sure you enter the author ad quote fields</h2>'
      );
    }
    console.log('oops');
  });

  $('#more-quotes-button').on('click', function(event) {
    event.preventDefault();
    $.ajax({
      method: 'get',
      url:
        redVars.rest_url +
        'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1',
      success: function(data) {
        let post = data.shift(); // The data is an array of posts. Grab the first one.
        $('#quote-content').html(post.content.rendered);
        if (post._qod_quote_source) {
          $('#quote-title').html(
            post.title.rendered +
              "<a id='quote-title' href='" +
              post._qod_quote_source_url +
              "'> , " +
              post._qod_quote_source +
              '</a>'
          );
        } else {
          $('#quote-title').html(post.title.rendered);
        }
      },
      cache: false
    });
  });
})(jQuery);
