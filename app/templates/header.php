<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location: login');
    exit();
}

require_once 'src/autoload.php';

$user = unserialize($_SESSION['user']);

if (!$user->is_email_verified) {
    header('location: email-verification');
    exit();
}

if ($user->account_setup != -1) {
    header('location: account-setup');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="OrbixtarSIP is a comprehensive PBX/SIP Phone Solution designed to cater to all your communication needs. It leverages the power of Session Initiation Protocol (SIP) to establish voice communication sessions over the internet, providing a seamless and cost-effective communication solution." />
    <meta name="keywords" content="OrbixtarSIP, PBX Solution, SIP Phone, VoIP, Communication Solution, Business Communication, Internet Telephony, Voice Over IP, Softphone, Asterisk Server, Call Transfer, Call Hold, Conferencing, Wideband Codecs, Audio Quality, Customizable PBX, Voicemail, Interactive Voice Response, Automated Call Distribution, Cross-platform Compatibility" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="OrbixtarSIP: Your Ultimate PBX/SIP Phone Solution for Superior Communication" />
    <meta property="og:url" content="https://orbixtartechnologies.com" />
    <meta property="og:site_name" content="Orbixtar Technologies" />
    <title>Account Login | Kuba Crypto Network</title>
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

</head>

<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            } 

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>

    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">
            <div id="kt_app_header" class="app-header " data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize" data-kt-sticky-animation="false" data-kt-sticky-offset="{default: '0px', lg: '0px'}">

                <!--begin::Header container-->
                <div class="app-container  container-fluid d-flex align-items-stretch flex-stack mt-lg-8 " id="kt_app_header_container">
                    <!--begin::Sidebar toggle-->
                    <div class="d-flex align-items-center d-block d-lg-none ms-n3" title="Show sidebar menu">
                        <div class="btn btn-icon btn-active-color-primary w-35px h-35px me-1" id="kt_app_sidebar_mobile_toggle">
                            <i class="ki-outline ki-abstract-14 fs-2"></i>
                        </div>

                        <!--begin::Logo image-->
                        <a href="index.html">
                            <img alt="Logo" src="assets/media/logos/demo55-small.png" class="h-25px theme-light-show" />
                            <img alt="Logo" src="assets/media/logos/demo55-small-dark.png" class="h-25px theme-dark-show" />
                        </a>
                        <!--end::Logo image-->
                    </div>
                    <!--end::Sidebar toggle-->


                    <!--begin::Navbar-->
                    <div class="app-navbar flex-lg-grow-1" id="kt_app_header_navbar">
                        <div class="app-navbar-item d-flex align-items-stretch flex-lg-grow-1 me-1 me-lg-0">

                            <!--begin::Search-->
                            <div id="kt_header_search" class="header-search d-flex align-items-center w-lg-275px" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="true" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">

                                <!--begin::Tablet and mobile search toggle-->
                                <div data-kt-search-element="toggle" class="search-toggle-mobile d-flex d-lg-none align-items-center">
                                    <div class="d-flex ">
                                        <i class="fa-solid fa-magnifying-glass fs-1 "></i>
                                    </div>
                                </div>
                                <!--end::Tablet and mobile search toggle-->

                                <!--begin::Form(use d-none d-lg-block classes for responsive search)-->
                                <form data-kt-search-element="form" class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
                                    <!--begin::Hidden input(Added to disable form autocomplete)-->
                                    <input type="hidden" />
                                    <!--end::Hidden input-->

                                    <!--begin::Icon-->
                                    <i class="fa-solid fa-magnifying-glass search-icon fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-5"></i> <!--end::Icon-->

                                    <!--begin::Input-->
                                    <input type="text" class="search-input form-control form-control-solid  ps-13" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
                                    <!--end::Input-->

                                    <!--begin::Spinner-->
                                    <span class="search-spinner  position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                                        <span class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
                                    </span>
                                    <!--end::Spinner-->

                                    <!--begin::Reset-->
                                    <span class="search-reset  btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
                                        <i class="fa-solid fa-xmark fs-2 fs-lg-1 me-0"></i> </span>
                                    <!--end::Reset-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Search-->
                        </div>

                        <!--begin::Activities-->
                        <div class="app-navbar-item ms-1 ms-md-3">
                            <!--begin::Menu- wrapper-->
                            <div class="btn btn-icon btn-custom btn-color-gray-500 btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" id="kt_activities_toggle">
                                <i class="ki-outline ki-notification-on fs-2"></i>
                            </div>
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Activities-->
                    </div>
                    <!--end::Navbar-->
                </div>
                <!--end::Header container-->
            </div>