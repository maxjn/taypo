      <?php
        $post_link = get_the_permalink();
        $post_title = get_the_title();
        ?>
      <!-- single post meta start -->
      <div class="d-md-flex justify-content-between">
          <div class="d-flex align-items-center">
              <h6 class="mb-0 me-4"><?= esc_html_e('Share It', 'taypo') ?>:</h6>
              <div class="social-icons">
                  <ul class="list-inline mb-0">
                      <li class="list-inline-item">
                          <a class="border rounded px-2 py-1 text-dark"
                              href="https://www.facebook.com/sharer/sharer.php?u=<?= $post_link ?>">
                              <i class="bi bi-facebook"></i>
                          </a>
                      </li>
                      <li class="list-inline-item">
                          <a class="border rounded px-2 py-1 text-dark"
                              href="https://web.whatsapp.com/send?text=<?= $post_link ?>">
                              <i class="bi bi-whatsapp"></i>
                          </a>
                      </li>
                      <li class="list-inline-item">
                          <a class="border rounded px-2 py-1 text-dark"
                              href="https://telegram.me/share/url?url=<?= $post_link ?>">
                              <i class="bi bi-telegram"></i>
                          </a>
                      </li>
                      <li class="list-inline-item">
                          <a class="border rounded px-2 py-1 text-dark"
                              href="https://twitter.com/intent/tweet?url=<?= $post_link ?>/&text=<?= $post_title  ?>">
                              <i class="bi bi-twitter"></i>
                          </a>
                      </li>
                      <li class="list-inline-item">
                          <a class="border rounded px-2 py-1 text-dark"
                              href="https://www.linkedin.com/sharing/share-offsite/?url=<?= $post_link ?>">
                              <i class="bi bi-linkedin"></i>
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
          <div class="d-flex align-items-center text-md-end mt-5 mt-md-0">
              <?php
                if (!get_the_tags() == null) { ?>
              <h6 class="mb-0 me-4"><?= esc_html_e('Tags', 'taypo') ?>: </h6>
              <?php
                }
                get_template_part('templates\single\tag\tag-items', null, ['show' => 'post']);
                ?>
          </div>
      </div>
      <!-- single post meta end -->