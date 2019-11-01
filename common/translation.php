<script type="text/javascript">
  var set_locale_to = function(locale) {
  if (locale)
    $.i18n().locale = locale;
  };

  jQuery(function() {

    $.i18n().load( {
      'en': 'i18n/en.json',
      'pt': 'i18n/pt.json'
    } ).done(function() {
      set_locale_to(url('?locale'));
      History.Adapter.bind(window, 'statechange', function(){
        set_locale_to(url('?locale'));
      });
      $('.switch-locale').on('click', 'a', function(e) {
        e.preventDefault();
        History.pushState(null, null, "?locale=" + $(this).data('locale'));
      });
    });

  });

</script>
