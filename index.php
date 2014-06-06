<?php

	$JSONdatas = file_get_contents('datas/city_airport_codes.json');
	$ARRAYdatas = json_decode($JSONdatas);

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/vendor/normalize.css">
        <link rel="stylesheet" href="css/vendor/foundation.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="row">
			<div class="large-8 columns">
				<h1>IATA &amp; ICAO Codes</h1>
			</div>
			<div class="large-2 columns valign-middle">
				<a href="https://github.com/spyesx/IATA_ICAO_codes">Fork on Github</a>
			</div>
			<div class="large-2 columns valign-middle">
				<a href="http://spyesx.fr/travels">Nicolas Bages</a>
			</div>
        </div>

         <div class="row">
			<div class="large-12 columns">
				<div data-alert class="alert-box info radius">
					<strong><?php echo count($ARRAYdatas); ?></strong> airports are referenced in this list.<br />
					Loading and rendering might be a bit long depending on your browser.
				</div>
			</div>
		</div>

        <div class="row">
			<div class="large-12 columns">
				<table>
					<thead>
						<tr>
							<th width="200">IATA Codes</th>
							<th width="200">ICAO Codes</th>
							<th width="200">Airport Names</th>
							<th>Locations</th>
							<th width="150">Cities</th>
							<th width="150">Countries</th>
						</tr>
					</thead>
					<tbody>
			<?php
				$rows = '';
				foreach($ARRAYdatas as $airport)
				{
					$rows .= '
					<tr>
						<td>'.$airport->iata_code.'</td>
						<td>'.$airport->icao_code.'</td>
						<td>'.$airport->airport_name.'</td>
						<td>'.$airport->complete_location.'</td>
						<td>'.$airport->city.'</td>
						<td>'.$airport->country.'</td>
					</tr>
					';
				}
				echo $rows;
			?>
					</tbody>
				</table>
			</div>
		</div>




        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/vendor/foundation/foundation.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

		<script>
		$(document).foundation();
		</script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
