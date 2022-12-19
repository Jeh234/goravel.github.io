<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion" id="sidenavAccordion" style="background:#003366;">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="../index.php" style="color:white;">
                                <div class="sb-nav-link-icon" ><i class="fas fa-tachometer-alt"></i></div>
                                Goravel
                            </a>
                            <a class="nav-link" href="index.php" style="color:white;">
                                <div class="sb-nav-link-icon" ><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="display_register_users.php"style="color:white;">
                                <div class="sb-nav-link-icon" ><i class="fas fa-users"></i></div>
                                Registered Users
                            </a>
                            <div class="sb-sidenav-menu-heading" style="color:white;">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <!--<div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Category
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="add_category.php">Add Category</a>
                                    <a class="nav-link" href="view_category.php">View Category</a>
                                </nav>
                            </div>-->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePosts" aria-expanded="false" aria-controls="collapsePosts" style="color:white;">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Posts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePosts" aria-labelledby="Posts" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="add_post.php" style="color:white;">Add Post</a>
                                    <a class="nav-link" href="view_post.php" style="color:white;">View Post</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages" style="color:white;">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Blog
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <div class="collapse" id="collapsePosts" aria-labelledby="Posts" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                </nav>
                            </div>
                                    <a class="nav-link" href="add_blog.php" style="color:white;">
                                        Add Blog
                                    </a>
                                    <a class="nav-link" href="view_blog.php"style="color:white;">
                                        View Blog
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    </div>
                                </nav>
                            </div>
                            <!--<a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>-->
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"></div>
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer"style="color:white;">
                        <div class="small" >Logged in as:</div><i class="fas fa-user"></i>
                        Admin
                    </div>
                    <form action="../accManagement/logoutcode.php" method="POST">
                    <button type="submit" name="logout_btn" class="dropdown-item"style="color:black;" ><i class="fas fa-sign-out" style="color:black;"></i>Logout</button>
                </form>
                </nav>
            </div>