<!-- Databases
        Create database connection 
-->

<!-- Anything having to do with header
        Cookies
        Sessions
        GET/POST 
-->

<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/create.css">

</head>

<body>
    <!-- Include header -->
    <?php include("header.php");?>
    
    <!-- Title bar -->                
    <div id="create-header">
        <h3>Create your own guide</h3>
    </div>    
    
    <!-- Main content (form on left, preview on right) -->                
    <div class="container">
        <div id="create-panel"><?php include("php/createform.php");?></div>
        <div id="preview-panel"><?php include("php/createpreview.php");?></div>
    </div>
        
    <div id="footer"></div>
    <?php include("footer.php");?>

</body>
</html>