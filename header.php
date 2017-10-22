<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo get_bloginfo( 'name' ); ?></title>    
    <?php wp_head(); ?>
</head>
<body >
    <!-- header.php: topo geral-->
    <nav>
        <ul>
            <?php wp_list_pages( '&title_li=' ); ?>
        </ul>
    </nav>
    <header>
        <h1 class="blog-title"><?php echo get_bloginfo( 'name' ); ?></h1>
        <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
    </header>