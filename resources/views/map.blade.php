<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Commit Map</title>
        
        @include('meta.opengraph')
        @include('meta.twitter')
        
        <!-- Styles -->
        <link href="css/styles.css" rel="stylesheet" type="text/css" media="screen" />
        
        <!-- JS Libs -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://js.pusher.com/3.2/pusher.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDL9rMpMRA4DP12hC-h2-3RnpkIGkmQtQI"></script>
        
        <script>
            var pusher = new Pusher('9b94e447196cb304b5e3', {
                cluster: 'eu',
                encrypted: true
            });

            var channel = pusher.subscribe('commit-channel');
            channel.bind('App\\Events\\CommitEvent', function(data) {
                App.Map.addInfoWindow(data.lat, data.lng, data.message)
            });
        </script>
    </head>
    <body>
        <a href="https://github.com/MartinBlackburn/commit-map">
            <img style="position: absolute; top: 0; right: 0; border: 0; z-index: 100;" src="https://camo.githubusercontent.com/38ef81f8aca64bb9a64448d0d70f1308ef5341ab/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" />
        </a>
        
        @include('instructions')
        
        <div class='map'></div>
        
        <!-- JS -->
        <script src="js/map.js" type="text/javascript"></script>
        <script src="js/instructions.js" type="text/javascript"></script>
    </body>
</html>
