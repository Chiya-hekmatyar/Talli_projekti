<head>
    <title><?= $title; ?></title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="site.css">
    <?php if (isset($css)) echo "<link rel='stylesheet' href='$css'>"; ?>
    
    <script defer src="scripts.js"></script>
    <?php if (isset($js)) echo "<script defer src='$js'></script>"; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>