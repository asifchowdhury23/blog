<aside class="sidebar-wrapper">
    <div class="iconmenu">
        <div class="nav-toggle-box">
            <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
        </div>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboards">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-dashboards" type="button"><i class="bi bi-house-door-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Settings">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#settings" type="button"><i class="bi bi-gear"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Blog">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#blog" type="button"><i class="bi bi-book-fill"></i></button>
            </li>

        </ul>
    </div>
    <div class="textmenu">
        <div class="brand-logo">
            <img src="{{asset('adminAsset')}}/assets/images/brand-logo-2.png" width="140" alt=""/>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="pills-dashboards">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Dashboards</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="index.html" class="list-group-item"><i class="bi bi-cart-plus"></i>e-Commerce</a>
                    <a href="index2.html" class="list-group-item"><i class="bi bi-wallet"></i>Sales</a>
                    <a href="index3.html" class="list-group-item"><i class="bi bi-bar-chart-line"></i>Analytics</a>
                    <a href="index4.html" class="list-group-item"><i class="bi bi-archive"></i>Project Management</a>
                    <a href="index5.html" class="list-group-item"><i class="bi bi-cast"></i>CMS Dashboard</a>
                </div>
            </div>
            <div class="tab-pane fade" id="settings">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Settings</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{route('category')}}" class="list-group-item"><i class="bi bi-envelope"></i>Category</a>
                    <a href="{{route('sub.category')}}" class="list-group-item"><i class="bi bi-envelope"></i>Sub Category</a>
                    <a href="{{route('author')}}" class="list-group-item"><i class="bi bi-chat-left-text"></i>Author</a>
                </div>
            </div>
            <div class="tab-pane fade" id="blog">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Blog</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{route('add.blog')}}" class="list-group-item"><i class="bi bi-envelope"></i>Add Blog</a>
                    <a href="{{route('manage.blog')}}" class="list-group-item"><i class="bi bi-chat-left-text"></i>Manage Blog</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-widgets">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Widgets</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="widgets-static-widgets.html" class="list-group-item"><i class="bi bi-box"></i>Static Widgets</a>
                    <a href="widgets-data-widgets.html" class="list-group-item"><i class="bi bi-bar-chart"></i>Data Widgets</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-ecommerce">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">eCommerce</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="ecommerce-products-list.html" class="list-group-item"><i class="bi bi-box-seam"></i>Products List</a>
                    <a href="ecommerce-products-grid.html" class="list-group-item"><i class="bi bi-box-seam"></i>Products Grid</a>
                    <a href="ecommerce-products-categories.html" class="list-group-item"><i class="bi bi-card-text"></i>Products Categories</a>
                    <a href="ecommerce-orders.html" class="list-group-item"><i class="bi bi-plus-square"></i>Orders</a>
                    <a href="ecommerce-orders-detail.html" class="list-group-item"><i class="bi bi-handbag"></i>Orders Detail</a>
                    <a href="ecommerce-add-new-product.html" class="list-group-item"><i class="bi bi-handbag"></i>Add New Product</a>
                    <a href="ecommerce-add-new-product-2.html" class="list-group-item"><i class="bi bi-handbag"></i>Add New Product 2</a>
                    <a href="ecommerce-transactions.html" class="list-group-item"><i class="bi bi-handbag"></i>Transactions</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-components">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Components</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="component-alerts.html" class="list-group-item"><i class="bi bi-bell"></i>Alerts</a>
                    <a href="component-accordions.html" class="list-group-item"><i class="bi bi-arrows-collapse"></i>Accordions</a>
                    <a href="component-badges.html" class="list-group-item"><i class="bi bi-badge-8k"></i>Badges</a>
                    <a href="component-buttons.html" class="list-group-item"><i class="bi bi-menu-button"></i>Buttons</a>
                    <a href="component-cards.html" class="list-group-item"><i class="bi bi-card-list"></i>Cards</a>
                    <a href="component-carousels.html" class="list-group-item"><i class="bi bi-card-image"></i>Carousels</a>
                    <a href="component-list-groups.html" class="list-group-item"><i class="bi bi-list-ol"></i>List Groups</a>
                    <a href="component-media-object.html" class="list-group-item"><i class="bi bi-collection"></i>Media Objects</a>
                    <a href="component-modals.html" class="list-group-item"><i class="bi bi-binoculars"></i>Modals</a>
                    <a href="component-navs-tabs.html" class="list-group-item"><i class="bi bi-segmented-nav"></i>Navs & Tabs</a>
                    <a href="component-navbar.html" class="list-group-item"><i class="bi bi-list"></i>Navbars</a>
                    <a href="component-paginations.html" class="list-group-item"><i class="bi bi-arrow-down-up"></i>Pagination</a>
                    <a href="component-popovers-tooltips.html" class="list-group-item"><i class="bi bi-droplet"></i>Popovers & Tooltips</a>
                    <a href="component-progress-bars.html" class="list-group-item"><i class="bi bi-eject"></i>Progress</a>
                    <a href="component-spinners.html" class="list-group-item"><i class="bi bi-gear-wide"></i>Spinners</a>
                    <a href="component-notifications.html" class="list-group-item"><i class="bi bi-app-indicator"></i>Notifications</a>
                    <a href="component-avtars-chips.html" class="list-group-item"><i class="bi bi-person-badge"></i>Avatrs & Chips</a>
                    <a href="component-typography.html" class="list-group-item"><i class="bi bi-person-badge"></i>Typography</a>
                </div>
            </div>

        </div>
    </div>
</aside>
