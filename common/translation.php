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

<ul class="switch-locale">
  <li><a href="#" data-locale="en">En</a></li>
  <li><a href="#" data-locale="pt">Pt</a></li>
</ul>

<style media="screen">
  .switch-locale {
    position: fixed;
    z-index: 200;
    bottom: 30px;
    right: 30px;
    background-color: white;
    list-style: none;
    padding: 1em;
    margin: 0;
  }
</style>
