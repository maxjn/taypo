<div class="col-12 col-lg-5 ms-auto ps-lg-8">
    <div class="p-5 rounded-4 border border-light">
        <!-- Search Start -->
        <form class="border-bottom border-light pb-5 row mb-5">
            <input class="form-control me-2 col h-auto" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary col-auto" type="submit">
                <i class="bi bi-search"></i>
            </button>
        </form>
        <!-- Search End -->

        <!-- Categories  Start -->
        <div class="mb-5 border-bottom border-light pb-5">
            <h4 class="mb-3">Categories</h4>
            <ul class="list-unstyled">
                <li class="mb-3">
                    <a class="btn-link d-flex justify-content-between align-items-center" href="#">
                        All <span class="small bg-light-2 p-2 rounded text-dark">74</span>
                    </a>
                </li>
                <li class="mb-3">
                    <a class="btn-link d-flex justify-content-between align-items-center" href="#">
                        Arts and Entertainment <span class="small bg-light-2 p-2 rounded text-dark">23</span>
                    </a>
                </li>
                <li class="mb-3">
                    <a class="btn-link d-flex justify-content-between align-items-center" href="#">
                        Featured <span class="small bg-light-2 p-2 rounded text-dark">14</span>
                    </a>
                </li>
                <li class="mb-3">
                    <a class="btn-link d-flex justify-content-between align-items-center" href="#">
                        Daily news <span class="small bg-light-2 p-2 rounded text-dark">48</span>
                    </a>
                </li>
                <li>
                    <a class="btn-link d-flex justify-content-between align-items-center" href="#">
                        Blog Post <span class="small bg-light-2 p-2 rounded text-dark">32</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Categories  End -->

        <!-- Recent Post Start -->
        <div class="mb-5 border-bottom border-light pb-5">
            <h4 class="mb-3">Recent Stories</h4>
            <?php
            get_template_part('templates\card\blog\container\blog-list-small');
            ?>
        </div>
        <!-- Recent Post End -->

        <!-- Tags  Start -->
        <div>
            <h4 class="mb-3">Tags</h4>
            <div>
                <a class="btn-link rounded-4 d-inline-block py-2 px-3 bg-light-3 m-1" href="#">Agency</a>
                <a class="btn-link rounded-4 d-inline-block py-2 px-3 bg-light-3 m-1" href="#">Web
                    Design</a>
                <a class="btn-link rounded-4 d-inline-block py-2 px-3 bg-light-3 m-1" href="#">Saas</a>
                <a class="btn-link rounded-4 d-inline-block py-2 px-3 bg-light-3 m-1" href="#">Corporate</a>
                <a class="btn-link rounded-4 d-inline-block py-2 px-3 bg-light-3 m-1" href="#">Creative</a>
                <a class="btn-link rounded-4 d-inline-block py-2 px-3 bg-light-3 m-1" href="#">Software</a>
                <a class="btn-link rounded-4 d-inline-block py-2 px-3 bg-light-3 m-1" href="#">Landing</a>
                <a class="btn-link rounded-4 d-inline-block py-2 px-3 bg-light-3 m-1" href="#">Startup</a>
            </div>
        </div>
        <!-- Tags  End -->

    </div>
</div>