var Tumblelog = {};

// Infinite Scroll
Tumblelog.Infinite = (function() {

  var _$window          = $(window);
  var _$posts           = $('#posts');
  var _trigger_post     = null;

  var _current_page     = {CurrentPage};
  var _total_pages      = {TotalPages};
  var _url              = document.location.href;
  var _infinite_timeout = null;
  var _is_loading       = false;
  var _posts_loaded     = false;

  function init() {
    set_trigger();
    enable_scroll();
  }

  function set_trigger () {
    var $all_posts = _$posts.find('li.post');

    if (!_posts_loaded) {
      _posts_loaded = $all_posts.length;
    }

    if (_posts_loaded >= 4) {
      _trigger_post = _$posts.find('li.post:eq(' + ($all_posts.length - 4) + ')').get(0);
    } else if (_posts_loaded >= 3) {
      _trigger_post = _$posts.find('li.post:eq(' + ($all_posts.length - 3) + ')').get(0);
    } else {
      _trigger_post = _$posts.find('li.post:last').get(0);
    }
  };

  function in_viewport (el) {
    if (el == null) return;
    var top = el.offsetTop;
    var height = el.offsetHeight;

    while (el.offsetParent) {
      el = el.offsetParent;
      top += el.offsetTop;
    }

    return (top < (window.pageYOffset + window.innerHeight));
  };

  function enable_scroll() {
    $('#footer .pagination').hide();
    _$window.scroll(function(){
      clearTimeout(_infinite_timeout);
      infinite_timeout = setTimeout(infinite_scroll, 100);
    });
  }

  function disable_scroll() {
    clearTimeout(_infinite_timeout);
    $(window).unbind('scroll');
  }

  function infinite_scroll() {
    if (_is_loading) return;

    if (in_viewport(_trigger_post)) {
      load_more_posts(); // w00t
    }
  };

  function load_more_posts() {
    if (_is_loading) return;
    _is_loading = true;

    // Build URL
    if (_url.charAt(_url.length - 1) != '/') _url += '/';
    if (_current_page === 1) _url += 'page/1';
    _current_page++;
    _url = _url.replace('page/' + (_current_page - 1), 'page/' + _current_page);

    // Fetch URL
    $.ajax({
      url: _url,
      dataType: 'html',
      success: function(data, textStatus, jqXHR) {
        var $new_posts   = $('#posts', data);
        _posts_loaded = $new_posts.find('li.post').length;

        // Insert new posts
        var new_posts_html = $new_posts.html();
        $('#posts').append(new_posts_html);

        // Eval scripts with the inline_embed class (HTML5 video)
        var reponse = jQuery(jqXHR.responseText);
        var reponseScript = reponse.filter('script');
        jQuery.each(reponseScript, function(idx, val) {
          if($(val).hasClass('inline_embed')) { eval(val.text); }
        });

        if ((_posts_loaded > 0) && (_current_page < _total_pages)) {
          set_trigger();
          _is_loading = false;
        } else {
          disable_scroll();
        }
      }
    });

  }

  return {
    init: init
  };

});

$(function() {
  if ( !($.browser.msie && (parseInt($.browser.version, 10) < 9) ) ) {
    var InfiniteScroll = new Tumblelog.Infinite;
    InfiniteScroll.init();
  }
});
