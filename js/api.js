(function($) {
  $('#close-comments').on('click', function(event) {
    event.preventDefault();
    $.ajax({
      method: 'post',
      url: redVars.rest_url + 'wp/v2/posts/' + redVars.post_id,
      data: {
        comment_status: 'closed'
      },
      beforeSend: function(xhr) {
        xhr.setRequestHeader('X-WP-Nonce', redVars.wpapi_nonce);
      }
    }).done(function() {
      // variable response was in the brackets
      alert('Success! Comments are closed for this post.');
    });
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
