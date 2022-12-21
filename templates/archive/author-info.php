<?php
$author_id = get_the_author_meta('ID');
?>

<div class="author-biography container shadow rounded-4 border-0  p-lg-5 p-3 my-5 mt-10 h6 font-w-4">
    <header class="biography-header d-flex align-items-center justify-content-center">
        <h4 class="author-name btn-link rounded-4 d-inline-block py-2 px-3 bg-light-3"><a class="author-email"
                href="mailto:<?php the_author_meta('user_email') ?>"><?php the_author() ?></a></h4>
        <img alt="Image" src="<?= get_avatar_url($author_id, ['size' => '100'])  ?>"
            class="img-fluid rounded-circle px-5">
        <div class="posts-till-now">
            <span class="post-count text-primary"><?= count_user_posts($author_id)  ?></span>
            <span class="describtion text-dark"><?php esc_html_e('Posts till today', 'taypo'); ?></span>
        </div>
    </header>
    <p class="author-description pt-5"> <?php the_author_meta('description') ?></p>
</div>