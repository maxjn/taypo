      <!-- single post meta start -->
      <div class="d-md-flex justify-content-between">
          <div class="d-flex align-items-center">
              <h6 class="mb-0 me-4"><?= esc_html_e('Share It', 'taypo') ?>:</h6>
              <div class="social-icons">
                  <ul class="list-inline mb-0">
                      <li class="list-inline-item">
                          <a class="border rounded px-2 py-1 text-dark" href="#">
                              <i class="bi bi-facebook"></i>
                          </a>
                      </li>
                      <li class="list-inline-item">
                          <a class="border rounded px-2 py-1 text-dark" href="#">
                              <i class="bi bi-dribbble"></i>
                          </a>
                      </li>
                      <li class="list-inline-item">
                          <a class="border rounded px-2 py-1 text-dark" href="#">
                              <i class="bi bi-instagram"></i>
                          </a>
                      </li>
                      <li class="list-inline-item">
                          <a class="border rounded px-2 py-1 text-dark" href="#">
                              <i class="bi bi-twitter"></i>
                          </a>
                      </li>
                      <li class="list-inline-item">
                          <a class="border rounded px-2 py-1 text-dark" href="#">
                              <i class="bi bi-linkedin"></i>
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
          <div class="d-flex align-items-center text-md-end mt-5 mt-md-0">
              <h6 class="mb-0 me-4"><?= esc_html_e('Tags', 'taypo') ?>: </h6>
              <?php
                get_template_part('templates\single\tag\tag-items', null, ['show' => 'post']);
                ?>
          </div>
      </div>
      <!-- single post meta end -->