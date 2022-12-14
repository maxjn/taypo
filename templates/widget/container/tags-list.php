 <!-- Tags  Start -->
 <div>
     <h4 class="mb-3"><?= esc_html_e('Tags', 'taypo') ?></h4>
     <?php
        get_template_part('templates\single\tag\tag-items', null, ['show' => 'all']);
        ?>
 </div>
 <!-- Tags  End -->