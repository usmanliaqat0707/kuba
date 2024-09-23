<?php

session_start();
if (isset($_SESSION['user'])) {
    require_once 'src/autoload.php';
    $user = unserialize($_SESSION['user']);
    
    if ($user->is_email_verified == 'yes') {
        header('location: index');
        exit();
    }


    $title = "Email Verification Failed";
    $desc = "The email verification link you clicked is either invalid or has expired. Please ensure that you are using the correct link provided in your email.<br/><br/>If you need assistance, please contact our support team at support@kubacryptonetwork.com.";
    $actionButton = '<a href="index.html" class="btn btn-sm btn-primary">Resend Email</a>';

    if (isset($_GET['token']) && isset($_GET['user_id'])) {
        $token = $_GET['token'];
        $user_id = $_GET['user_id'];

        if ($user->verifyEmail($token, $user_id)) {
            $title = "Email Verification Successful";
            $desc = "Congratulations! Your email address has been successfully verified. You are now ready to explore all the features of Kuba.<br/><br/>Thank you for choosing Kuba. If you have any questions or need assistance, feel free to reach out to our support team.";
            $actionButton = '<a href="index" class="btn btn-sm btn-primary">Dashboard</a>';
        }
    }
} else {
    header('location: login?redirect-url=' . urlencode($_SERVER['REQUEST_URI']));
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
    <title>Email Verification - OrbixtarSIP</title>
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
        <!--begin::Page bg image-->
        <style>
            body {
                background-image: url('assets/media/auth/bg5.png');
            }

            [data-bs-theme="dark"] body {
                background-image: url('assets/media/auth/bg5-dark.jpg');
            }
        </style>
        <!--end::Page bg image-->


        <!--begin::Authentication - Signup Welcome Message -->
        <div class="d-flex flex-column flex-center flex-column-fluid">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-center text-center p-10">
                <!--begin::Wrapper-->
                <div class="card card-flush w-lg-650px py-5">
                    <div class="card-body py-15 py-lg-20">

                        <!--begin::Logo-->
                        <div class="mb-14">
                            <a href="index.html" class="">
                                <img alt="Logo" src="assets/media/logos/logo-2.png" class="h-90px" />
                            </a>
                        </div>
                        <!--end::Logo-->

                        <!--begin::Title-->
                        <h1 class="fw-bolder text-gray-900 mb-5">
                            <?php echo $title; ?>
                        </h1>
                        <!--end::Title-->
                        <!--begin::Action-->
                        <div class="fs-6 mb-8">
                            <span class="fw-semibold text-gray-500"><?php echo $desc; ?></span>
                        </div>
                        <!--end::Action-->

                        <!--begin::Link-->
                        <div class="mb-11">
                            <?php echo $actionButton; ?>
                        </div>
                        <!--end::Link-->

                        <!--begin::Illustration-->
                        <div class="mb-0">
                            <img src="assets/media/auth/membership.png" class="mw-100 mh-300px theme-light-show" alt="" />
                            <img src="assets/media/auth/membership-dark.png" class="mw-100 mh-300px theme-dark-show" alt="" />
                        </div>
                        <!--end::Illustration-->

                    </div>
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Authentication - Signup Welcome Message-->
    </div>

    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
</body>

</html>