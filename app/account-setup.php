<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location: login');
    exit();
} else {
    require_once 'src/autoload.php';

    $database = database::getInstance();
    $user = new User($database);

    if(!$user->is_email_verified){
        header('location: verify-email');
        exit();
    }

    if($user->account_setup == -1){
        header('location: index');
        exit();
    }
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
    <title>Sign Up - OrbixtarSIP</title>
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

</head>

<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center">
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

    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column stepper-multistep" id="kt_create_account_stepper" data-kt-stepper-current-step="<?php echo intval($user->account_setup) + 1 ?>">
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-lg-row-auto w-lg-350px w-xl-500px">
                <div class="d-flex flex-column position-lg-fixed top-0 bottom-0 w-lg-350px w-xl-500px scroll-y bgi-size-cover bgi-position-center" style="background: linear-gradient(180deg, #f27457 0, #a08488 100%);">
                    <!--begin::Header-->
                    <div class="d-flex flex-center py-10 py-lg-20 mt-lg-20">
                        <!--begin::Logo-->
                        <a href="index.html">
                            <img alt="Logo" src="assets/media/logos/custom-1.png" class="h-90px" />
                        </a>
                        <!--end::Logo-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="d-flex flex-row-fluid justify-content-center p-10">
                        <!--begin::Nav-->
                        <div class="stepper-nav">
                            <!--begin::Step 1-->
                            <div class="stepper-item current" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon rounded-3">
                                        <i class="fa fa-check fs-2 stepper-check"></i>
                                        <span class="stepper-number">1</span>
                                    </div>
                                    <!--end::Icon-->

                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title fs-2">
                                            Personal Details
                                        </h3>

                                        <div class="stepper-desc fw-normal">
                                            Enter your personal info
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Line-->
                                <div class="stepper-line h-40px">
                                </div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 1-->

                            <!--begin::Step 2-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon rounded-3">
                                        <i class="fa fa-check fs-2 stepper-check"></i>
                                        <span class="stepper-number">2</span>
                                    </div>
                                    <!--end::Icon-->

                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title fs-2">
                                            Account Info
                                        </h3>
                                        <div class="stepper-desc fw-normal">
                                            Setup your account settings
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Line-->
                                <div class="stepper-line h-40px">
                                </div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 2-->

                            <!--begin::Step 3-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon">
                                        <i class="fa fa-check fs-2 stepper-check"></i>
                                        <span class="stepper-number">3</span>
                                    </div>
                                    <!--end::Icon-->

                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title fs-2">
                                            Business Details
                                        </h3>
                                        <div class="stepper-desc fw-normal">
                                            Setup your business details
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Line-->
                                <div class="stepper-line h-40px">
                                </div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 3-->

                            <!--begin::Step 4-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon">
                                        <i class="fa fa-check fs-2 stepper-check"></i>
                                        <span class="stepper-number">4</span>
                                    </div>
                                    <!--end::Icon-->

                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Billing Details
                                        </h3>
                                        <div class="stepper-desc fw-normal">
                                            Provide your payment info
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Line-->
                                <div class="stepper-line h-40px">
                                </div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 4-->

                            <!--begin::Step 5-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon">
                                        <i class="fa fa-check fs-2 stepper-check"></i>
                                        <span class="stepper-number">5</span>
                                    </div>
                                    <!--end::Icon-->

                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Completed
                                        </h3>
                                        <div class="stepper-desc fw-normal">
                                            Your account is created
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 5-->
                        </div>
                        <!--end::Nav-->
                    </div>
                    <!--end::Body-->

                    <!--begin::Footer-->
                    <div class="d-flex flex-center flex-wrap px-5 py-10">
                        <!--begin::Links-->
                        <div class="d-flex fw-normal">
                            <a href="https://keenthemes.com/" class="text-white px-5" target="_blank">Terms</a>

                            <a href="https://devs.keenthemes.com/" class="text-white px-5" target="_blank">Plans</a>

                            <a href="https://1.envato.market/EA4JP" class="text-white px-5" target="_blank">Contact Us</a>
                        </div>
                        <!--end::Links-->
                    </div>
                    <!--end::Footer-->
                </div>
            </div>
            <!--begin::Aside-->

            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-650px w-xl-700px p-10 p-lg-15 mx-auto">
                        <!--begin::Form-->
                        <form class="my-auto pb-5" novalidate="novalidate" id="kt_create_account_form">
                            <!--begin::Step 1-->
                            <div class="current" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-12">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-gray-900">Personal Details</h2>
                                        <!--end::Title-->

                                        <!--begin::Notice-->
                                        <div class="text-muted fw-semibold fs-6">
                                            Enter your name and address.
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->
                                    <div class="loading-shimmer" style="display: none;">
                                        <div class="desc-wrapper">
                                            <p class="heading shimmer"></p>
                                            <p class="heading shimmer"></p>
                                            <p class="desc shimmer"></p>
                                            <p class="desc shimmer"></p>
                                            <p class="desc shimmer"></p>
                                            <p class="desc shimmer"></p>
                                            <p class="desc shimmer"></p>
                                            <p class="desc shimmer"></p>
                                        </div>
                                    </div>
                                    <!--begin::Input group-->
                                    <div class="row">
                                        <div class="fv-row mb-10 col-6">
                                            <!--begin::Label-->
                                            <label class="form-label required">First Name</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input name="first_name" type="text" class="form-control form-control-lg form-control-solid" value="<?php echo $user->first_name; ?>" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10 col-6">
                                            <!--begin::Label-->
                                            <label class="form-label required">Last Name</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input name="last_name" type="text" class="form-control form-control-lg form-control-solid" value="<?php echo $user->last_name; ?>" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold form-label required">Address</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input name="street_address" type="text" class="form-control form-control-lg form-control-solid" value="<?php echo $user->street_address; ?>" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->

                                    <div class="row">
                                        <div class="fv-row mb-10 col-6">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label required">City</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input name="address_city" type="text" class="form-control form-control-lg form-control-solid" value="<?php echo $user->address_city; ?>" />
                                            <!--end::Input-->
                                        </div>
                                        <div class="fv-row mb-10 col-6">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label required">Country</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <select name="address_country" data-selected-country="<?php echo $user->address_country; ?>" id="address-country" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Select..." data-allow-clear="false" data-hide-search="true"></select>
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <div class="row">
                                        <div class="fv-row mb-0 col-6">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label required">State</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <select name="address_state" data-selected-state="<?php echo $user->address_state; ?>" id="address-state" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Select..." data-allow-clear="true" data-hide-search="true"></select>
                                            <!--end::Input-->
                                        </div>
                                        <div class="fv-row mb-0 col-6">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label required">Zip Code</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input name="address_zip" type="text" class="form-control form-control-lg form-control-solid" value="<?php echo $user->address_zip; ?>" />
                                            <!--end::Input-->
                                        </div>
                                    </div>

                                </div>
                                <!--end::Wrapper-->

                            </div>
                            <!--end::Step 1-->

                            <!--begin::Step 2-->
                            <div class="" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-15">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-gray-900">Account Info</h2>
                                        <!--end::Title-->

                                        <!--begin::Notice-->
                                        <div class="text-muted fw-semibold fs-6">
                                            If you need more info, please check out
                                            <a href="#" class="link-primary fw-bold">Help Page</a>.
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="form-label mb-3">Referral ID</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="referral_id" placeholder="" value="<?php echo $user->referrer->referral_code; ?>" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-0 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center form-label mb-0">
                                            Select Account Plan

                                            <span class="ms-1" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan">
                                                <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span> </label>
                                        <!--end::Label-->
                                        <label class="d-flex align-items-center form-label mb-5">
                                            <a href="">View All Plans</a>
                                        </label>
                                        <!--begin::Options-->
                                        <div class="mb-0">
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2" data-bs-toggle="tooltip" aria-label="FlexiTalk (Pay-as-You-Go) <ul><li>Ideal for occasional users. Pay only for the minutes you use.</li><li>$0.05 per minute</li><li>Up to 2 calls at a time</li></ul>" data-bs-original-title="FlexiTalk (Pay-as-You-Go) <ul><li>Ideal for occasional users. Pay only for the minutes you use.</li><li>$0.05 per minute</li><li>Up to 2 calls at a time</li></ul>" data-kt-initialized="1">
                                                    <!--begin::Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label">
                                                            <img class="fs-1 text-gray-600" src="./assets/media/icons/pay-as-you-go-plan.png" style="width: 26px;" /> </span>
                                                    </span>
                                                    <!--end::Icon-->

                                                    <!--begin::Description-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold text-gray-800 text-hover-primary fs-5">Pay as You Go</span>
                                                        <span class="fs-6 fw-semibold text-muted">Ideal for occasional users. Pay only for the minutes you use.</span>
                                                        <span class="fs-6 fw-bold text-muted">$0 per month</span>
                                                    </span>
                                                    <!--end:Description-->
                                                </span>
                                                <!--end:Label-->

                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="account_plan" value="1" />
                                                </span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->

                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin::Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label">
                                                            <img class="fs-1 text-gray-600" src="./assets/media/icons/starter-plan.png" style="width: 26px;" /> </span>
                                                    </span>
                                                    <!--end::Icon-->

                                                    <!--begin::Description-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold text-gray-800 text-hover-primary fs-5">LiteTalk</span>
                                                        <span class="fs-6 fw-semibold text-muted">Perfect for small businesses or personal use.</span>
                                                        <span class="fs-6 fw-bold text-muted">$20 per month</span>
                                                    </span>
                                                    <!--end:Description-->
                                                </span>
                                                <!--end:Label-->

                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" checked name="account_plan" value="2" />
                                                </span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->

                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin::Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label">
                                                            <img class="fs-1 text-gray-600" src="./assets/media/icons/business-plan.png" style="width: 26px;" /> </span>
                                                    </span>
                                                    <!--end::Icon-->

                                                    <!--begin::Description-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold text-gray-800 text-hover-primary fs-5">ProTalk</span>
                                                        <span class="fs-6 fw-semibold text-muted">Designed for growing businesses.</span>
                                                        <span class="fs-6 fw-bold text-muted">$50 per month</span>
                                                    </span>
                                                    <!--end:Description-->
                                                </span>
                                                <!--end:Label-->
                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="account_plan" value="3" />
                                                </span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->

                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin::Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label">
                                                            <img class="fs-1 text-gray-600" src="./assets/media/icons/enterprise-plan.png" style="width: 26px;" /> </span>
                                                    </span>
                                                    <!--end::Icon-->

                                                    <!--begin::Description-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold text-gray-800 text-hover-primary fs-5">UltraTalk</span>
                                                        <span class="fs-6 fw-semibold text-muted">Scalable solution for large enterprises.</span>
                                                        <span class="fs-6 fw-bold text-muted">$150 per month</span>
                                                    </span>
                                                    <!--end:Description-->
                                                </span>
                                                <!--end:Label-->

                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="account_plan" value="4" />
                                                </span>
                                                <!--end:Input-->

                                            </label>

                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack mb-0 cursor-pointer">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin::Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label">
                                                            <img class="fs-1 text-gray-600" src="./assets/media/icons/custom-plan.png" style="width: 26px;" /> </span>
                                                    </span>
                                                    <!--end::Icon-->

                                                    <!--begin::Description-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold text-gray-800 text-hover-primary fs-5">TailorTalk</span>
                                                        <span class="fs-6 fw-semibold text-muted">Create a plan that suits your specific needs.</span>
                                                        <span class="fs-6 fw-bold text-muted">Custom pricing based on usage</span>
                                                    </span>
                                                    <!--end:Description-->
                                                </span>
                                                <!--end:Label-->

                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="account_plan" value="5" />
                                                </span>
                                                <!--end:Input-->

                                            </label>

                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 2-->

                            <!--begin::Step 3-->
                            <div class="" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-12">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-gray-900">Business Details</h2>
                                        <!--end::Title-->

                                        <!--begin::Notice-->
                                        <div class="text-muted fw-semibold fs-6">
                                            If you need more info, please check out
                                            <a href="#" class="link-primary fw-bold">Help Page</a>.
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">First Name</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input name="first" class="form-control form-control-lg form-control-solid" value="" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Last Name</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input name="last" class="form-control form-control-lg form-control-solid" value="" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->

                                    <div class="business-input">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label required">Business Name</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input name="business_name" class="form-control form-control-lg form-control-solid" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label required">Corporation Type</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <select name="business_type" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Select..." data-allow-clear="true" data-hide-search="true">
                                                <option></option>
                                                <option value="1">S Corporation</option>
                                                <option value="1">C Corporation</option>
                                                <option value="2">Sole Proprietorship</option>
                                                <option value="3">Non-profit</option>
                                                <option value="4">Limited Liability</option>
                                                <option value="5">General Partnership</option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold form-label required">Address</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input name="address" class="form-control form-control-lg form-control-solid" value="" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->

                                    <div class="row">
                                        <div class="fv-row mb-0 col-6">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label required">City</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input name="city" class="form-control form-control-lg form-control-solid" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <div class="fv-row mb-0 col-6">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label required">Country</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input name="country" class="form-control form-control-lg form-control-solid" value="" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                </div>
                                <!--end::Wrapper-->

                            </div>
                            <!--end::Step 3-->

                            <!--begin::Step 4-->
                            <div class="" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-15">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-gray-900">Billing Details</h2>
                                        <!--end::Title-->

                                        <!--begin::Notice-->
                                        <div class="text-muted fw-semibold fs-6">
                                            If you need more info, please check out
                                            <a href="#" class="text-primary fw-bold">Help Page</a>.
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                            <span class="required">Name On Card</span>


                                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
                                                <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span> </label>
                                        <!--end::Label-->

                                        <input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
                                        <!--end::Label-->

                                        <!--begin::Input wrapper-->
                                        <div class="position-relative">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
                                            <!--end::Input-->

                                            <!--begin::Card logos-->
                                            <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                                <img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
                                                <img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
                                                <img src="assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
                                            </div>
                                            <!--end::Card logos-->
                                        </div>
                                        <!--end::Input wrapper-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-10">
                                        <!--begin::Col-->
                                        <div class="col-md-8 fv-row">
                                            <!--begin::Label-->
                                            <label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
                                            <!--end::Label-->

                                            <!--begin::Row-->
                                            <div class="row fv-row">
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
                                                        <option></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
                                                        <option></option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                        <option value="2026">2026</option>
                                                        <option value="2027">2027</option>
                                                        <option value="2028">2028</option>
                                                        <option value="2029">2029</option>
                                                        <option value="2030">2030</option>
                                                        <option value="2031">2031</option>
                                                        <option value="2032">2032</option>
                                                        <option value="2033">2033</option>
                                                        <option value="2034">2034</option>
                                                    </select>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-md-4 fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                <span class="required">CVV</span>


                                                <span class="ms-1" data-bs-toggle="tooltip" title="Enter a card CVV code">
                                                    <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span> </label>
                                            <!--end::Label-->

                                            <!--begin::Input wrapper-->
                                            <div class="position-relative">
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
                                                <!--end::Input-->

                                                <!--begin::CVV icon-->
                                                <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                    <i class="ki-outline ki-credit-cart fs-2hx"></i>
                                                </div>
                                                <!--end::CVV icon-->
                                            </div>
                                            <!--end::Input wrapper-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Label-->
                                        <div class="me-5">
                                            <label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
                                            <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Switch-->
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                            <span class="form-check-label fw-semibold text-muted">
                                                Save Card
                                            </span>
                                        </label>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->

                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 4-->

                            <!--begin::Step 5-->
                            <div class="" data-kt-stepper-element="content">


                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-8 pb-lg-10">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-gray-900">Your Are Done!</h2>
                                        <!--end::Title-->

                                        <!--begin::Notice-->
                                        <div class="text-muted fw-semibold fs-6">
                                            If you need more info, please
                                            <a href="#" class="link-primary fw-bold">
                                                Sign In
                                            </a>
                                            .
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Body-->
                                    <div class="mb-0">
                                        <!--begin::Text-->
                                        <div class="fs-6 text-gray-600 mb-5">
                                            Writing headlines for blog posts is as much an art as it is a science
                                            and probably warrants its own post, but for all advise is with what
                                            works for your great & amazing audience.
                                        </div>
                                        <!--end::Text-->

                                        <!--begin::Alert-->

                                        <!--begin::Notice-->
                                        <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed  p-6">
                                            <!--begin::Icon-->
                                            <i class="ki-outline ki-information fs-2tx text-warning me-4"></i> <!--end::Icon-->

                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-stack flex-grow-1 ">
                                                <!--begin::Content-->
                                                <div class=" fw-semibold">
                                                    <h4 class="text-gray-900 fw-bold">We need your attention!</h4>

                                                    <div class="fs-6 text-gray-700 ">To start using great tools, please, <a href="utilities/wizards/vertical.html" class="fw-bold">Create Team Platform</a></div>
                                                </div>
                                                <!--end::Content-->

                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Notice-->
                                        <!--end::Alert-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Wrapper-->

                            </div>
                            <!--end::Step 5-->

                            <!--begin::Actions-->
                            <div class="d-flex flex-stack pt-15">
                                <div class="mr-2">
                                    <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                                        <i class="ki-outline ki-arrow-left fs-4 me-1"></i> Previous
                                    </button>
                                </div>

                                <div>
                                    <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
                                        <span class="indicator-label">
                                            Submit
                                            <i class="ki-outline ki-arrow-right fs-4 ms-2"></i> </span>
                                        <span class="indicator-progress">
                                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>

                                    <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">
                                        <span class="indicator-label">
                                            Continue <i class="fas fa-arrow-right"></i>
                                        </span>

                                        <span class="indicator-progress">
                                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->
        </div>
    </div>
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="assets/js/custom/utilities/modals/create-account.js"></script>
    <script src="assets/js/custom/utilities/modals/countries.js"></script>
</body>

</html>