<?php require_once "../includes/header.php"; ?>
    <div class="container">
        <div class="card mt-3 p-2">
            <div class="row w-100">
                <div class="col-3">
                    <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="menu-tab" data-toggle="pill" href="#menu"
                           role="tab" aria-controls="menu" aria-selected="true">
                            <i class="fa fa-utensils"></i> Menu</a>
                        <a class="nav-link" id="contact-tab" data-toggle="pill" href="#contact"
                           role="tab" aria-controls="contact" aria-selected="false">
                            <i class="fa fa-phone"></i> Contact</a>
                        <a class="nav-link" id="users-tab" data-toggle="pill" href="#users"
                           role="tab" aria-controls="users" aria-selected="false">
                            <i class="fa fa-users"></i> Users</a>
                        <a class="nav-link" id="settings-tab" data-toggle="pill" href="#settings"
                           role="tab" aria-controls="settings" aria-selected="false">
                            <i class="fa fa-cogs"></i> Settings</a>
                    </div>
                </div>
                <div class="col-9 ">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="menu" role="tabpanel"
                             aria-labelledby="menu-tab">
                            <nav class="nav nav-pills nav-justified">
                                <a class="nav-item nav-link active" href="#categories" data-toggle="pill"
                                   role="tab" aria-controls="settings" aria-selected="true">Categories</a>
                                <a class="nav-item nav-link" href="#products" data-toggle="pill"
                                   role="tab" aria-controls="settings" aria-selected="false">Products</a>
                                <a class="nav-item nav-link" href="#purchases" data-toggle="pill"
                                   role="tab" aria-controls="settings" aria-selected="false">Orders</a>
                            </nav>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="categories" role="tabpanel"
                                     aria-labelledby="categories-tab">
                                    <div class="d-flex align-items-end  flex-column">
                                        <button type="button" class="btn btn-success btn-sm" id="btn_cat">
                                            <i class="fa fa-plus"></i> Category
                                        </button>
                                    </div>
                                    <div class="clearfix mt-2"></div>
                                    <div class="table-responsive">
                                        <table id="categories_table" class="table table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th class="text-right">Edit</th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="products" role="tabpanel"
                                     aria-labelledby="products-tab">
                                </div>
                                <div class="tab-pane fade" id="purchases" role="tabpanel"
                                     aria-labelledby="purchases-tab">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel"
                             aria-labelledby="contact-tab">
                            ...
                        </div>
                        <div class="tab-pane fade" id="users" role="tabpanel"
                             aria-labelledby="users-tab">
                            ...
                        </div>
                        <div class="tab-pane fade" id="settings" role="tabpanel"
                             aria-labelledby="settings-tab">
                            ...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require_once "../includes/footer.php"; ?>