<html lang="de" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">

        <title><?php echo $page->getTitle(); ?></title>
        <meta name="description" content="<?php echo $page->getDescription(); ?>" />
        <meta name="keywords" content="<?php echo $page->getKeywords(); ?>" />
        <meta name="author" content="<?php echo $page->getAuthor(); ?>" />

        <meta property="og:title" content="<?php echo $page->getSocialTitle(); ?>" />
        <meta property="og:type" content="<?php echo $page->getType(); ?>" />
        <meta property="og:url" content="<?php echo PAGE_URL.$page->getSlug(); ?>" />
        <meta property="og:image" content="<?php echo PAGE_URL.$page->getSocialImage(); ?>" />
        <meta property="og:description" content="<?php echo $page->getSocialDescription(); ?>" />
        <meta property="og:site_name" content="<?php echo $page->getSocialTitle(); ?>" />

        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="<?php echo $page->getSocialTitle(); ?>" />
        <meta name="twitter:description" content="<?php echo $page->getSocialDescription(); ?>" />
        <meta name="twitter:creator" content="@<?php echo $page->getAuthor(); ?>" />
        <meta name="twitter:image" content="<?php echo PAGE_URL.$page->getSocialImage(); ?>" />

    </head>

    <body>

        <?php echo $page->getContent(); ?>

        <br>
        <br>

        <pre>
            <?php print_r($page); ?>
        </pre>
    </body>
</html>