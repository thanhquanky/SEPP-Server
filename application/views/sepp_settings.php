
<!doctype html5>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Simply.js Settings</title>
<link href="/favicon.ico" rel="icon" />
<link href="//cdn.jsdelivr.net/foundation/4.0.2/css/foundation.css" rel="stylesheet" />
<link href="/styles/base.css" rel="stylesheet" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<!--
<script src="//cdn.jsdelivr.net/foundation/4.0.2/js/vendor/custom.modernizr.js"></script>
<script src="//cdn.jsdelivr.net/foundation/4.0.2/js/foundation.min.js"></script>
-->
<script src="//cdn.jsdelivr.net/sugar/1.3.9/sugar.min.js"></script>
</head>
<body>

  <div class="row">
    <div class="small-12 columns">
      <h2>Simply.js Settings</h2>
    </div>
  </div>
  <section>
    <div class="row">
      <div class="small-12 columns">
        <label for="UUID"><h2>UUID</h2></label>
        <input type="text" id="UUID"/>
        <ul class="action">
          <li><a id="save-button" class="next">Save</a></li>
        </ul>
      </div>
    </div>
  </section>

<script>
$(function() {
  var setOptions = function() {
    var options = window.location.hash;
    if (!options) {
      return {};
    }
    var options = JSON.parse(decodeURIComponent(options.substr(1)));
    if (!options) {
      return {};
    }
    $('#script-url').val(options.scriptUrl ? options.scriptUrl : 'http://meiguro.com/simplyjs/demo.js');
    return options;
  };

  var getOptions = function() {
    var options = {};
    options.scriptUrl = 'https://raw.githubusercontent.com/thanhquanky/SEPP/master/app.js';
    options.uuid = $('#uuid').val();
    return options;
  };

  $('#save-button').on('click', function() {
    document.location = 'pebblejs://close#' + encodeURIComponent(JSON.stringify(getOptions()));
    console.log(document.location);
  });

  setOptions();
});
</script>
</body>
</html>
