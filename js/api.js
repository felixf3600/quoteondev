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
})(jQuery);

(function($) {
  $('#more-quotes-button').on('click', function(event) {
    event.preventDefault();
    $.ajax({
      method: 'get',
      url:
        redVars.rest_url +
        'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1',
      success: function(data) {
        let post = data.shift(); // The data is an array of posts. Grab the first one.
        console.log(post.content);
        $('#quote-content').html(post.content);
        $('#quote-title').text(post.title);

        // If the Source is available, use it. Otherwise hide it.
        if (
          typeof post.custom_meta !== 'undefined' &&
          typeof post.custom_meta.Source !== 'undefined'
        ) {
          $('#quote-source').html('Source:' + post.custom_meta.Source);
        } else {
          $('#quote-source').text('');
        }
      },
      cache: false
    }).done();
  });
})(jQuery);
