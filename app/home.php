<?php
require_once 'templates/header.php';
require_once 'templates/menu.php';
?>
<div class="app-main flex-column flex-row-fluid " id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">

        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar  pt-2 pt-lg-10 ">

            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container  container-fluid d-flex align-items-stretch ">
                <!--begin::Toolbar wrapper-->
                <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">

                    <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">
                            Dashboard
                        </h1>
                        <!--end::Title-->

                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="index.html" class="text-muted text-hover-primary">
                                    Dashboard </a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                Status </li>
                            <!--end::Item-->

                        </ul>
                        <!--end::Breadcrumb-->
                    </div>

                </div>

            </div>

        </div>

        <div id="kt_app_content" class="app-content  flex-column-fluid ">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container  container-fluid ">
                <div class="card mb-6 mb-xl-9">
                    <div class="card-body pt-9 pb-0">
                        <!--begin::Details-->
                        <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
                            <!--begin::Image-->
                            <div class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
                                <img class="mw-50px mw-lg-100px" src="assets/media/svg/brand-logos/volicity-9.png" alt="image">
                            </div>
                            <!--end::Image-->

                            <!--begin::Wrapper-->
                            <div class="flex-grow-1">
                                <!--begin::Head-->
                                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                    <!--begin::Details-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Status-->
                                        <div class="d-flex align-items-center mb-1">
                                            <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bold me-3">Account Status</a>
                                            <span class="badge badge-light-success me-auto">Active</span>
                                        </div>
                                        <!--end::Status-->

                                        <!--begin::Description-->
                                        <div class="d-flex flex-wrap fw-semibold mb-4 fs-5 text-gray-500">
                                            #1 Tool to get started with Web Apps any Kind &amp; size
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Actions-->
                                    <div class="d-flex mb-4">
                                        <a href="#" class="btn btn-sm btn-bg-light btn-active-color-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add User</a>

                                        <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Target</a>

                                        <!--begin::Menu-->
                                        <div class="me-0">
                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <i class="ki-solid ki-dots-horizontal fs-2x"></i> </button>

                                            <!--begin::Menu 3-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                                <!--begin::Heading-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                        Payments
                                                    </div>
                                                </div>
                                                <!--end::Heading-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Create Invoice
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link flex-stack px-3">
                                                        Create Payment

                                                        <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a target name for future usage and reference" data-bs-original-title="Specify a target name for future usage and reference" data-kt-initialized="1">
                                                            <i class="ki-outline ki-information fs-6"></i> </span>
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Generate Bill
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">Subscription</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>

                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                Plans
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                Billing
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                Statements
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu separator-->
                                                        <div class="separator my-2"></div>
                                                        <!--end::Menu separator-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content px-3">
                                                                <!--begin::Switch-->
                                                                <label class="form-check form-switch form-check-custom form-check-solid">
                                                                    <!--begin::Input-->
                                                                    <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                                                                    <!--end::Input-->

                                                                    <!--end::Label-->
                                                                    <span class="form-check-label text-muted fs-6">
                                                                        Recuring
                                                                    </span>
                                                                    <!--end::Label-->
                                                                </label>
                                                                <!--end::Switch-->
                                                            </div>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3 my-1">
                                                    <a href="#" class="menu-link px-3">
                                                        Settings
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 3-->
                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Head-->

                                <!--begin::Info-->
                                <div class="d-flex flex-wrap justify-content-start">
                                    <!--begin::Stats-->
                                    <div class="d-flex flex-wrap">
                                        <!--begin::Stat-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <div class="fs-4 fw-bold next-payment-date">29 Jan, 2024</div>
                                            </div>
                                            <!--end::Number-->

                                            <!--begin::Label-->
                                            <div class="fw-semibold fs-6 text-gray-500">Next Billing Date</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->

                                        <!--begin::Stat-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <i class="fa fa-user fs-3 text-danger me-2"></i>
                                                <div class="fs-4 fw-bold counted total-users-count" data-kt-countup="true" data-kt-initialized="1">75</div>
                                            </div>
                                            <!--end::Number-->

                                            <!--begin::Label-->
                                            <div class="fw-semibold fs-6 text-gray-500">Total Users</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->

                                        <!--begin::Stat-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <i class="ki-outline ki-arrow-up fs-3 text-success me-2"></i>
                                                <div class="fs-4 fw-bold counted" data-kt-countup="true" data-kt-countup-value="15000" data-kt-countup-prefix="$" data-kt-initialized="1">$15,000</div>
                                            </div>
                                            <!--end::Number-->

                                            <!--begin::Label-->
                                            <div class="fw-semibold fs-6 text-gray-500">Budget Spent</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Stats-->

                                    <!--begin::Users-->
                                    <div class="symbol-group symbol-hover mb-3">
                                        <!--begin::User-->
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                            <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-bs-original-title="Michael Eberon" data-kt-initialized="1">
                                            <img alt="Pic" src="assets/media/avatars/300-11.jpg">
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michelle Swanston" data-bs-original-title="Michelle Swanston" data-kt-initialized="1">
                                            <img alt="Pic" src="assets/media/avatars/300-7.jpg">
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Francis Mitcham" data-bs-original-title="Francis Mitcham" data-kt-initialized="1">
                                            <img alt="Pic" src="assets/media/avatars/300-20.jpg">
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                            <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-bs-original-title="Melody Macy" data-kt-initialized="1">
                                            <img alt="Pic" src="assets/media/avatars/300-2.jpg">
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Perry Matthew" data-kt-initialized="1">
                                            <span class="symbol-label bg-info text-inverse-info fw-bold">P</span>
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Barry Walter" data-bs-original-title="Barry Walter" data-kt-initialized="1">
                                            <img alt="Pic" src="assets/media/avatars/300-12.jpg">
                                        </div>
                                        <!--end::User-->

                                        <!--begin::All users-->
                                        <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                            <span class="symbol-label bg-dark text-inverse-dark fs-8 fw-bold" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-original-title="View more users" data-kt-initialized="1">+42</span>
                                        </a>
                                        <!--end::All users-->
                                    </div>
                                    <!--end::Users-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Details-->

                        <div class="separator"></div>

                        <!--begin::Nav-->
                        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary py-5 me-6 active" href="project.html">
                                    Overview </a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary py-5 me-6 " href="targets.html">
                                    Targets </a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary py-5 me-6 " href="budget.html">
                                    Budget </a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary py-5 me-6 " href="users.html">
                                    Users </a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary py-5 me-6 " href="files.html">
                                    Files </a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary py-5 me-6 " href="activity.html">
                                    Activity </a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary py-5 me-6 " href="settings.html">
                                    Settings </a>
                            </li>
                            <!--end::Nav item-->
                        </ul>
                        <!--end::Nav-->
                    </div>

                    <audio id="remoteAudio" controls>
                        <p>Your browser doesn't support HTML5 audio.</p>
                    </audio>

                </div>
            </div>

        </div>

    </div>

</div>

<?php require_once 'templates/footer.php'; ?>