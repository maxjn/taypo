<!-- Public Sidebar Start -->
<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasNavbar">
        <!-- close btn start -->
        <div class="offcanvas-header">
            <button type="button" class="btn-close bg-transparent fs-1 ms-auto" data-bs-dismiss="offcanvas"
                aria-label="Close">
                <i class="bi bi-x-octagon"></i>
            </button>
        </div>
        <!-- close btn end -->

        <div class="offcanvas-body px-md-10 px-4 py-8">

            <?php
            dynamic_sidebar('sidebar-2');
            ?>

        </div>
    </div>
</nav>
<!-- Public Sidebar End -->