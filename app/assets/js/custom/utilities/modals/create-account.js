"use strict";
var KTCreateAccount = (function () {
    var e,
        t,
        c,
        i,
        o,
        a,
        r,
        p,
        s = [];
    return {
        init: function () {
            (e = document.querySelector("#kt_modal_create_account")) && new bootstrap.Modal(e),
                (t = document.querySelector("#kt_create_account_stepper")) &&
                ((i = t.querySelector("#kt_create_account_form")),
                    (o = t.querySelector('[data-kt-stepper-action="submit"]')),
                    (a = t.querySelector('[data-kt-stepper-action="next"]')),
                    (p = t.getAttribute("data-kt-stepper-current-step")),
                    (r = new KTStepper(t, { startIndex: p })).on("kt.stepper.changed", function (e) {
                        3 === r.getCurrentStepIndex()
                            ? ($("#kt_create_account_form_account_type_corporate").is(':checked') ? $(".business-input").html('<div class="fv-row mb-10"><label class="form-label required">Business Name</label><input name="business_name" class="form-control form-control-lg form-control-solid" value="" /></div><div class="fv-row mb-10"><label class="form-label required">Corporation Type</label><select name="business_type" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Select..." data-allow-clear="true" data-hide-search="true"><option></option><option value="1">S Corporation</option><option value="1">C Corporation</option><option value="2">Sole Proprietorship</option><option value="3">Non-profit</option><option value="4">Limited Liability</option><option value="5">General Partnership</option></select></div>') : $(".business-input").html('')) : null;
                        4 === r.getCurrentStepIndex()
                            ? (o.classList.remove("d-none"), o.classList.add("d-inline-block"), a.classList.add("d-none"))
                            : 5 === r.getCurrentStepIndex()
                                ? (o.classList.add("d-none"), a.classList.add("d-none"))
                                : (o.classList.remove("d-inline-block"), o.classList.remove("d-none"), a.classList.remove("d-none"));
                    }),
                    r.on("kt.stepper.next", function (e) {
                        var currentIndex = e.getCurrentStepIndex() - 1;
                        var t = s[currentIndex];
                        t ? t.validate().then(function (t) {
                            if (t === "Valid") {
                                a.setAttribute("data-kt-indicator", "on");
                                a.disabled = !0;
                                var elements = s[currentIndex].elements;
                                let formData = new FormData()
                                for (let key in elements) {
                                    formData.append(`${key}`, elements[key][0].value);
                                }
                                formData.append("account_setup", e.getCurrentStepIndex());
                                axios.post("src/action/account-setup", formData).then(function (result) {
                                    console.log(result);
                                    if (result.data.error) {
                                        Swal.fire({
                                            text: result.data.message,
                                            icon: "error",
                                            buttonsStyling: !1,
                                            confirmButtonText: "Ok, got it!",
                                            customClass: { confirmButton: "btn btn-light" },
                                        });
                                    } else {
                                        a.removeAttribute("data-kt-indicator");
                                        a.disabled = !1;
                                        e.goNext();
                                        KTUtil.scrollTop();
                                    }
                                }).catch(function (error) {
                                    Swal.fire({
                                        text: error.response.data.message || error.message || "Sorry, looks like there are some errors detected, please try again.",
                                        icon: "error",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: { confirmButton: "btn btn-light" },
                                    });
                                });
                            } else {
                                Swal.fire({
                                    text: "Sorry, looks like there are some errors detected, please try again.",
                                    icon: "error",
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: { confirmButton: "btn btn-light" },
                                }).then(function () {
                                    KTUtil.scrollTop();
                                });
                            }
                        })
                            : (e.goNext(), KTUtil.scrollTop());
                    }),
                    r.on("kt.stepper.previous", function (e) {
                        console.log("stepper.previous"), e.goPrevious(), KTUtil.scrollTop();
                    }),
                    s.push(
                        FormValidation.formValidation(i, {
                            fields: {
                                first_name: {
                                    validators: {
                                        notEmpty: { message: "First name is required" },
                                        regexp: {
                                            regexp: /^[a-zA-Z\s-]+$/,
                                            message: "Not a valid first name"
                                        }
                                    }
                                },
                                last_name: {
                                    validators: {
                                        notEmpty: { message: "Last name is required" },
                                        regexp: {
                                            regexp: /^[a-zA-Z\s-]+$/,
                                            message: "Not a valid last name"
                                        }
                                    }
                                },
                                street_address: { validators: { notEmpty: { message: "Street address is required" } } },
                                address_city: { validators: { notEmpty: { message: "City is required" } } },
                                address_country: { validators: { notEmpty: { message: "Country is required" }, choice: { message: "Country is required" } } },
                                address_state: { validators: { notEmpty: { message: "State is required" }, choice: { message: "State is required" } } },
                                address_zip: {
                                    validators: {
                                        notEmpty: { message: "Zip code is required" },
                                        regexp: {
                                            regexp: /^\d{5}$/,
                                            message: 'The zip code must contain 5 digits',
                                        },
                                    }
                                },
                            },
                            plugins: { trigger: new FormValidation.plugins.Trigger(), bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) },
                        })
                    ),
                    s.push(
                        FormValidation.formValidation(i, {
                            fields: {
                                account_team_size: { validators: { notEmpty: { message: "Time size is required" } } },
                                account_name: { validators: { notEmpty: { message: "Account name is required" } } },
                                account_plan: { validators: { notEmpty: { message: "Account plan is required" } } },
                            },
                            plugins: { trigger: new FormValidation.plugins.Trigger(), bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) },
                        })
                    ),
                    s.push(
                        FormValidation.formValidation(i, {
                            fields: {
                                business_name: { validators: { notEmpty: { message: "Busines name is required" } } },
                                business_descriptor: { validators: { notEmpty: { message: "Busines descriptor is required" } } },
                                business_type: { validators: { notEmpty: { message: "Busines type is required" } } },
                                business_email: { validators: { notEmpty: { message: "Busines email is required" }, emailAddress: { message: "The value is not a valid email address" } } },
                            },
                            plugins: { trigger: new FormValidation.plugins.Trigger(), bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) },
                        })
                    ),
                    s.push(
                        FormValidation.formValidation(i, {
                            fields: {
                                card_name: { validators: { notEmpty: { message: "Name on card is required" } } },
                                card_number: { validators: { notEmpty: { message: "Card member is required" }, creditCard: { message: "Card number is not valid" } } },
                                card_expiry_month: { validators: { notEmpty: { message: "Month is required" } } },
                                card_expiry_year: { validators: { notEmpty: { message: "Year is required" } } },
                                card_cvv: { validators: { notEmpty: { message: "CVV is required" }, digits: { message: "CVV must contain only digits" }, stringLength: { min: 3, max: 4, message: "CVV must contain 3 to 4 digits only" } } },
                            },
                            plugins: { trigger: new FormValidation.plugins.Trigger(), bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) },
                        })
                    ),
                    o.addEventListener("click", function (e) {
                        s[3].validate().then(function (t) {
                            console.log("validated!"),
                                "Valid" == t
                                    ? (e.preventDefault(),
                                        (o.disabled = !0),
                                        o.setAttribute("data-kt-indicator", "on"),
                                        axios.post("src/action/account-setup.php").then(function (e) {
                                            console.log(e);
                                            o.removeAttribute("data-kt-indicator"), (o.disabled = !1), r.goNext();
                                        }))
                                    : Swal.fire({
                                        text: "Sorry, looks like there are some errors detected, please try again.",
                                        icon: "error",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: { confirmButton: "btn btn-light" },
                                    }).then(function () {
                                        KTUtil.scrollTop();
                                    });
                        });
                    }),
                    $(i.querySelector('[name="card_expiry_month"]')).on("change", function () {
                        s[3].revalidateField("card_expiry_month");
                    }),
                    $(i.querySelector('[name="card_expiry_year"]')).on("change", function () {
                        s[3].revalidateField("card_expiry_year");
                    }),
                    $(i.querySelector('[name="business_type"]')).on("change", function () {
                        s[2].revalidateField("business_type");
                    }));
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTCreateAccount.init();
});