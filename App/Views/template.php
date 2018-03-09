<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/App/Views/css/style.css"/>
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <title>Gear - V1.0</title>
    </head>
 
    <body>
         
        <?php 
	        if (isset($viewName)) { 
		        $path = viewsPath() . $viewName . '.php';

		         if (file_exists($path)) { 
		         	require_once $path;
		         } 
	     	} 
     	?>
 
    </body>
</html>