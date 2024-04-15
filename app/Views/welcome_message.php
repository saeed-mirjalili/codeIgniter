<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
</head>
<body>

<h4>
    data
</h4>

<?php
    foreach ($abilities as $abc){
        $name = $abc['ability']['name'];
        $url = $abc['ability']['url'];
        echo '<pre>'.$name.' <a href="'.$url.'">link</a></pre>' ;
    }
?>


</body>
</html>
