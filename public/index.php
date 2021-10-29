<?php
$title = 'IndieWeb Events';
$year = 2021;
$url = 'https://2021.indieweb.org/';
$summary = 'Upcoming IndieWebCamp events';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <title><?= $title ?> <?= $year ?></title>

  <link rel="webmention" href="/webmention.php">

  <link rel="stylesheet" type="text/css" href="/semantic/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/icomoon/style.css">
  <link rel="stylesheet" type="text/css" href="/assets/styles.css?2">
  <link rel="stylesheet" href="/assets/leaflet/leaflet.css" />
  <script src="/assets/jquery-2.2.0.min.js"></script>
  <script src="/semantic/semantic.min.js"></script>
  <script src="/assets/leaflet/leaflet.js"></script>

  <meta property="og:url" content="<?= $url ?>">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= $title ?> - <?= $year ?>">
  <meta property="og:description" content="<?= htmlspecialchars($summary) ?>">
</head>
<body>

  <div class="ui vertical stripe segment orange-bkg">
    <div class="ui text container">
      <div style="font-size: 2em; text-align: center; color: white" class="carrot-white">
        IndieWebCamps in <?= $year ?>
      </div>
    </div>
  </div>


<!-- Page Contents -->
<div class="pusher">
  <div class="ui vertical stripe segment h-feed" id="events">
    <div class="ui text container">

    
      <!--

      <h2 style="margin-top:6em;">Past Events</h2>


      -->


      <div class="h-event vevent">
        <h3 class="ui header p-name summary">
          <a class="u-url url" href="/dusseldorf">IndieWebCamp Düsseldorf</a>
        </h3>
        <p>
          <span class="p-location location">Düsseldorf</span><br />
          <time class="dt-start dtstart" datetime="2021-11-11">November 11, 2020</time>
        </p>
      </div>


      


      <div style="margin-top: 100px;">
        <p>See all 2021 events at <a href="https://events.indieweb.org/2021">events.indieweb.org/2021</a></p>
      </div>

    </div>
  </div>

  <div class="ui vertical stripe segment orange-bkg" id="social-media-section">
    <div class="ui text container">
      <div style="font-size: 2em; text-align: center;" class="carrot-white">
        #indiewebcamp
      </div>
      <div style="font-size: 4em; text-align: center;" class="social-media-icons">
        <a href="https://indieweb.org"><i class="ui attach icon"></i></a>
        <a href="https://twitter.com/indiewebcamp"><i class="ui twitter icon"></i></a>
        <a href="https://www.facebook.com/indiewebcamp/"><i class="ui facebook icon"></i></a>
      </div>
    </div>
  </div>

</div>

<?php include(__DIR__.'/../templates/analytics.php') ?>

</body>
</html>
