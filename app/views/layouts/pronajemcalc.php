<!doctype html>
<html lang="cz">
<head>
    <?=$this->getMeta(); ?>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="/">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/<?= $result['calcType']?>calc.css">
    <link rel="stylesheet" type="text/css" href="css/includes.css">
    <link rel="stylesheet" type="text/css" href="css/calc.css">
    <link rel="stylesheet" media="print"  href="css/print.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600&display=swap" rel="stylesheet">

</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YCG6EDPVZF"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-YCG6EDPVZF');
</script>
<body>

<?= $contentHeader?>

<div class="button-bar">
    <div class="button-bar-inner">
        <a class="button-bar-link" href="/applications/<?= $result['calcType']; ?>-calc-pdf?id=<?= $result['id'] ;?>">Download</a>
        <a class="button-bar-link" href="/applications/<?= $result['calcType']; ?>-form-edit?id=<?= $result['id'] ;?>">Upravit</a>
        <a class="button-bar-link" href="#" id="print-button">Vytisknout</a>
        <a class="button-bar-link" href="/applications/<?= $result['calcType']; ?>-form" id="home-button">Nový</a>
    </div>
</div>

<div class="content container">
    <?= $content; ?>
</div>



<?= $contentFooter ?>

<script src="js/calc.js"></script>
</body>
</html>
