<?php

echo "<!-- Demo data start -->";
    include 'templates/demo_data/data.php';
echo "<!-- Demo data end -->";

echo "<html>".
     "<head>".
     "   <meta name='viewport' content='width=device-width, initial-scale=1'>".
     "   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css'/>".
     "   <link rel='stylesheet' href='static/css/demo.css'/>".
     "   <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>".
     "   <script defer src='https://use.fontawesome.com/releases/v5.0.6/js/all.js'></script>".
     "   <title>".
            $demos->title.
     "   </title>".
     "</head>".
     "<body>";

echo "<!-- Header start -->";
    include 'templates/header/header.php';
echo "<!-- Header end -->";

echo "<!-- body start -->";
    include 'templates/body/body.php';
echo "<!-- body end -->";

echo "<!-- footer start -->";
    include 'templates/footer/footer.php';
echo "<!-- footer end -->";

echo "</body>".
     "<script>".
     "    $('#close').bind('click', function(){".
     "        $('#modal').css('display', 'none');".
     " });".
     " </script>".
     " </html>";
?>




