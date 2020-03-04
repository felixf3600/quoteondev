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
