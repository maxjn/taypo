  <!-- Recent Post Start -->
  <div class="mb-5 border-bottom border-light pb-5">
      <h4 class="mb-3"><?= esc_html_e('Recent Stories', 'taypo') ?></h4>
      <?php
        get_template_part('templates\card\blog\container\blog-list-small');
        ?>
  </div>
  <!-- Recent Post End -->