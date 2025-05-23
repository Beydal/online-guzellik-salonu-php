<header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                     
                        <div class="navbar-brand-box text-center">
                            <a href="./" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="../resimler/<?=$ayar['favicon']?>" alt="logo-sm-dark" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="../resimler/<?=$ayar['logo']?>" alt="logo-dark" height="24">
                                </span>
                            </a>

                            <a href="./" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="../resimler/<?=$ayar['favicon']?>" alt="logo-sm-light" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="../resimler/<?=$ayar['footer_logo']?>" alt="logo-light" height="24">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="ri-menu-2-line align-middle"></i>
                        </button>

                        
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-search-line"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
                    
                                <form class="p-3">
                                    <div class="mb-3 m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ...">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="ri-search-line"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                       

                        

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="ri-fullscreen-line"></i>
                            </button>
                        </div>

                        

                        <div class="dropdown d-inline-block user-dropdown">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="../resimler/<?=$ayar['favicon']?>"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1"><?=$ayar['site_title']?></span>
                               
                            </button>
                            
                        </div>

                      

                    </div>
                </div>
            </header>