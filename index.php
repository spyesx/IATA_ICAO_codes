<?php

	$JSONdatas = file_get_contents('datas/city_airport_codes.json');
	$ARRAYdatas = json_decode($JSONdatas);

?><!DOCTYPE html>
<html prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#" class="no-js" lang="en">
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>IATA &amp; ICAO Codes</title>
        <meta name="description" content="A simple list of IATA and ICAO codes for <?php echo count($ARRAYdatas); ?> airports">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<meta property="og:title" content="IATA &amp; ICAO Codes" />
		<meta property="og:description" content="A simple list of IATA and ICAO codes for <?php echo count($ARRAYdatas); ?> airports" />
		<meta property="og:image" content="http://spyesx.fr/travels/assets/img/nicolas_bages_nepal_anapurnas.jpg" />
		<meta property="og:url" content="http://spyesx.fr/travels/iata_icao_codes/" />
		<meta property="og:type" content="website" />
		<meta property="og:site_name" content="Nico's travels" />



        <link rel="stylesheet" href="css/vendor/normalize.css">
        <link rel="stylesheet" href="css/vendor/foundation.css">
        <link rel="stylesheet" href="css/vendor/jquery.dataTables.css">
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
				<div data-alert class="alert-box radius">
					<strong><?php echo count($ARRAYdatas); ?></strong> airports are referenced in this list.<br />
					Loading and rendering might be a bit long depending on your browser.
				</div>
				<div id="alert-loading" data-alert class="alert-box info radius">
					Loading...
				</div>
			</div>
		</div>

        <div class="row">
			<div class="large-12 columns">
				<table id="datas">
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
				foreach($ARRAYdatas as $key => $airport)
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

        <script src="js/vendor/foundation.min.js"></script>
		<script src="js/vendor/jquery.dataTables.js"></script>
		<script src="js/vendor/jquery.dataTables.foundation.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
		<script>
		$(document).foundation();
		</script>

		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-4005134-2']);
		  _gaq.push(['_trackPageview']);
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
    </body>
</html>
