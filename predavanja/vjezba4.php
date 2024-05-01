<?php
    print '
    <!DOCTYPE HTML>
    <html lang="hr">
        <head>
            <title>pwa</title>
            <meta http-equiv="content-type" content="text/html; charset=UTF-8">
            <meta name="description" content="">
            <meta name="keywords" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        </head>
    <body>';
	$_a=$_POST['a'];
	$_b=$_POST['b'];
	$c=(3*$_a-$_b)/2;
	print '
        <p> a='.$_a .'</p>
        <p>b='.$_b .'</p>
        <p>c=(3*'.$_a.'-'.$_b.')/2='.$c .'</p>
</body>
</html>';
?>