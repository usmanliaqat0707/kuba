<div id="kt_app_sidebar" class="app-sidebar  flex-column mt-lg-4 ps-2 pe-2 ps-lg-7 pe-lg-4 " data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">

    <div class="app-sidebar-logo flex-shrink-0 d-none d-md-flex flex-center align-items-center" id="kt_app_sidebar_logo">
        <!--begin::Logo-->
        <a href="index.php">
            <img alt="Logo" src="assets/media/logos/demo55.png" class="h-25px d-none d-sm-inline app-sidebar-logo-default theme-light-show" />
            <img alt="Logo" src="assets/media/logos/demo55-dark.png" class="h-25px theme-dark-show" />
        </a>
        <!--end::Logo-->


        <!--begin::Aside toggle-->
        <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
            <div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_aside_mobile_toggle">
                <i class="ki-outline ki-abstract-14 fs-1"></i>
            </div>
        </div>
        <!--end::Aside toggle-->
    </div>

    <!--begin::sidebar menu-->
    <div class="app-sidebar-menu flex-column-fluid">
        <!--begin::Menu wrapper-->
        <div id="kt_app_sidebar_menu_wrapper" class="hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">
            <!--begin::Menu-->
            <div class="menu menu-column menu-rounded menu-sub-indention fw-bold px-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                <!--begin:Menu item-->
                <div class="menu-item here show"><!--begin:Menu link--><a class="menu-link" href="index.php" title="Dashboard" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span class="menu-icon"><span class="fa-solid fa-house"></span></span><span class="menu-title">Dashboard</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--begin::Footer-->
    <div class="app-sidebar-footer d-flex align-items-center px-8 pb-10" id="kt_app_sidebar_footer">
        <!--begin::User-->
        <div class="">
            <!--begin::User info-->
            <div class="d-flex align-items-center" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-overflow="true" data-kt-menu-placement="top-start">
                <div class="d-flex flex-center cursor-pointer symbol symbol-circle symbol-40px">
                    <img src="assets/media/logos/favicon.png" alt="image" />
                </div>

                <!--begin::Name-->
                <div class="d-flex flex-column align-items-start justify-content-center ms-3">
                    <span class="text-gray-500  fs-8 fw-semibold">Hello</span>
                    <a href="#" class="text-gray-800 fs-7 fw-bold text-hover-primary"><?php echo $user->getEmail(); ?> User</a>
                </div>
                <!--end::Name-->
            </div>
            <!--end::User info-->

            <!--begin::User account menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                <!--begin::Menu item-->
                <div class="menu-item px-5">
                    <a href="logout.php" class="menu-link px-5">
                        Sign Out
                    </a>
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::User account menu-->
        </div>
        <!--end::User-->
    </div>
    <!--end::Footer-->
</div>

<div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">

    <div id="kt_app_sidebar" class="app-sidebar  flex-column mt-lg-4 ps-2 pe-2 ps-lg-7 pe-lg-4 " data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">

        <div class="app-sidebar-logo flex-shrink-0 d-none d-md-flex flex-center align-items-center" id="kt_app_sidebar_logo">
            <!--begin::Logo-->
            <a href="index.php">
                <img alt="Logo" src="assets/media/logos/demo55.png" class="h-25px d-none d-sm-inline app-sidebar-logo-default theme-light-show" />
                <img alt="Logo" src="assets/media/logos/demo55-dark.png" class="h-25px theme-dark-show" />
            </a>
            <!--end::Logo-->


            <!--begin::Aside toggle-->
            <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
                <div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_aside_mobile_toggle">
                    <i class="ki-outline ki-abstract-14 fs-1"></i>
                </div>
            </div>
            <!--end::Aside toggle-->
        </div>

        <!--begin::sidebar menu-->
        <div class="app-sidebar-menu flex-column-fluid">
            <!--begin::Menu wrapper-->
            <div id="kt_app_sidebar_menu_wrapper" class="hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">
                <!--begin::Menu-->
                <div class="menu menu-column menu-rounded menu-sub-indention fw-bold px-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                    <!--begin:Menu item-->
                    <div class="menu-item here show"><!--begin:Menu link--><a class="menu-link" href="index.php" title="Dashboard" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span class="menu-icon"><span class="fa-solid fa-house"></span></span><span class="menu-title">Dashboard</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Menu wrapper-->
        </div>
        <!--begin::Footer-->
        <div class="app-sidebar-footer d-flex align-items-center px-8 pb-10" id="kt_app_sidebar_footer">
            <!--begin::User-->
            <div class="">
                <!--begin::User info-->
                <div class="d-flex align-items-center" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-overflow="true" data-kt-menu-placement="top-start">
                    <div class="d-flex flex-center cursor-pointer symbol symbol-circle symbol-40px">
                        <img src="assets/media/logos/favicon.png" alt="image" />
                    </div>

                    <!--begin::Name-->
                    <div class="d-flex flex-column align-items-start justify-content-center ms-3">
                        <span class="text-gray-500  fs-8 fw-semibold">Hello</span>
                        <a href="#" class="text-gray-800 fs-7 fw-bold text-hover-primary"><?php echo $user->getEmail(); ?></a>
                    </div>
                    <!--end::Name-->
                </div>
                <!--end::User info-->

                <!--begin::User account menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                        <a href="logout.php" class="menu-link px-5">
                            Sign Out
                        </a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::User account menu-->
            </div>
            <!--end::User-->
        </div>
        <!--end::Footer-->
    </div>