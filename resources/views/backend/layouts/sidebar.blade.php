<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('banners.index') }}">
                <i class="icon-image menu-icon"></i>
                <span class="menu-title">Banner Management</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#category-management" aria-expanded="false"
               aria-controls="category-management">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Category Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="category-management">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="#">All Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/dropdowns.html">Add New Category</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#products-management" aria-expanded="false"
               aria-controls="products-management">
                <i class="icon-briefcase menu-icon"></i>
                <span class="menu-title">Products Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="products-management">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="#">All Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/dropdowns.html">Add New Product</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#carts-management" aria-expanded="false"
               aria-controls="carts-management">
                <i class="icon-bag menu-icon"></i>
                <span class="menu-title">Carts Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="carts-management">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="#">All Carts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/dropdowns.html">Add New Cart</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#order-management" aria-expanded="false"
               aria-controls="order-management">
                <i class="icon-box menu-icon"></i>
                <span class="menu-title">Order Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="order-management">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="#">All Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/dropdowns.html">Add New Order</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#post-category" aria-expanded="false"
               aria-controls="post-category">
                <i class="icon-tag menu-icon"></i>
                <span class="menu-title">Post Category</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="post-category">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="#">All Banner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/dropdowns.html">Add New Banner</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#post-tag" aria-expanded="false"
               aria-controls="post-tag">
                <i class="icon-book menu-icon"></i>
                <span class="menu-title">Post Tag</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="post-tag">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="#">All Banner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/dropdowns.html">Add New Banner</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#post-management" aria-expanded="false"
               aria-controls="post-management">
                <i class="icon-open menu-icon"></i>
                <span class="menu-title">Post Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="post-management">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="#">All Banner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/dropdowns.html">Add New Banner</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#review-management" aria-expanded="false"
               aria-controls="review-management">
                <i class="icon-mail menu-icon"></i>
                <span class="menu-title">Review Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="review-management">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="#">All Banner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Add New Banner</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Settings</span>
            </a>
        </li>
    </ul>
</nav>