<?php 
$link = 'http://php.net/';
$var= 'PHP Tutorial';
$description= 'Free Web tutorials';
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="description" content="<?php echo $description ?>">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <H3><?php echo $var ?> </H3>
    <p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.</p>
    <p>Go to the <a href="<?php echo $link ?>">PHP Tutorial.</a></p>
</body>
</html> 