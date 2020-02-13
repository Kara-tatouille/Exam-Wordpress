<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title><?php the_title() ?></title>
    <?php wp_head(); ?>

</head>
<body class="d-flex flex-column h-100">
<?php require_once 'include/nav.php'; ?>

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
    <div class="container-fluid">
        <div class="row home-header">
            <div class="col-12">
                <h1 class="mt-5"><?php the_title() ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php
                    the_post();
                    the_content();
                ?>
            </div>
        </div>
    </div>
</main>

<footer class="footer mt-auto py-3">
    <div class="container">
        <span class="text-muted">Copyright IT-Akademy 2020</span>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>
