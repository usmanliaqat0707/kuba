"use strict";
var url = new URL(location.href);
var referral = url.searchParams.get("referral");

var KTEmailVerification = (function () {
    var t
    return {
        resendEmail: function () {
            (t = document.querySelector("#kt_resend_email")),
                (t.addEventListener("click", function (e) {
                    e.preventDefault();
                    (t.setAttribute("data-kt-indicator", "on"),
                        (t.disabled = !0),
                        axios.post("src/action/resend-verification-email").then(function (t) {
                            console.log(t)
                        }).catch(function (error) {
                            Swal.fire({
                                text: error.response.data.message || error.message || "Sorry, looks like there are some errors detected, please try again.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: { confirmButton: "btn btn-primary" },
                            });
                        }).then(() => {
                            t.removeAttribute("data-kt-indicator"), (t.disabled = !1);
                        })
                    )
                }));
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTEmailVerification.resendEmail();
});
