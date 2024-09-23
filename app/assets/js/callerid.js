$(document).on("click", ".callerid-edit", function () {
    $(this).toggleClass("callerid-edit callerid-save");
    $(this).html('<i class="fa fa-floppy-disk"></i> Save');
    var callerid = $(".callerid-text").text();
    $(".callerid-text").remove();
    $(".callerid-container").prepend('<input type="tel" name="callerid" class="form-control form-control-lg form-control-solid callerid-input" placeholder="14442223333" value="' + callerid + '">')
});

$(document).on("click", ".callerid-save", function () {
    var callerid = $(".callerid-input").val();

    $.blockUI({
        message: '<h1 style="color: #fff">Please Wait...</h1>',
        css: {
            border: 'none',
            padding: '15px',
            paddingTop: '25px',
            backgroundColor: '#000',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            opacity: .5,
            color: '#ffffff',
        }
    })

    $.ajax({
        type: 'POST',
        url: 'update-callerid.php',
        data: { 'callerid': callerid },
    }).done((data) => {
        var response = JSON.parse(data);
        if (response.error) {
            toastr.error(response.message, "Error")
        } else {
            $(this).toggleClass("callerid-edit callerid-save");
            $(this).html('<i class="fa fa-edit"></i> Edit');
            $(".callerid-input").remove();
            $(".callerid-container").prepend('<span class="fw-bold fs-6 text-gray-800 me-2 callerid-text">' + callerid + '</span>');
            toastr.success("Callerid updated!", "Success")
        }
    }).fail((err) => {
        toastr.error(err.statusText, "Error " + err.status)
    }).always(() => {
        $.unblockUI()
    });
});