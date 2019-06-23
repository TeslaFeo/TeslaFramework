<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $title; ?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php if ($description) { ?>
<meta name="description" content="<?php echo $description; ?>" />
<?php } ?>
<?php foreach ($styles as $style) { ?>
<link rel="stylesheet" href="<?php echo $style; ?>">
<?php } ?>
</head>
<body class="min-vh-100 bg-light">
<header id="header">
    <nav class="navbar bg-dark text-light shadow-sm">
        <div class="container">
            <span class="TF_Logo">Tesla<span style="color: #02BADC;">Feo</span></span>
        </div>
    </nav>
</header>
