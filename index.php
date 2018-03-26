<?php
echo "<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css"><script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"><script>
    <title>
        PHP Demos
    </title>
</head>
<body>

<!-- Header start -->";
include 'templates/header/header.php';
echo "<!-- Header end -->";

echo "<!-- footer start -->";
include 'templates/footer/footer.php';
echo "<!-- footer end -->";


echo "
<div class="columns">
    <div class="columns is-half is-success">
        column
    </div>
</div>
";

echo "</body>
</html>";
?>




