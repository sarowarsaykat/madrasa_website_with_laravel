
$(document).ready(function () {
    $(".dropdown").hover(function () {
        var dropdownMenu = $(this).children(".dropdown-menu");
        if (dropdownMenu.is(":visible")) {
            dropdownMenu.parent().toggleClass("open");
        }
    });
});
new DataTable('#myTable', {
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/bn.json',
    },
});
function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'bn'
    }, 'google_translate_element');
}
$(window).load(function () {
    $(".goog-logo-link").empty();
    $('.goog-te-gadget').html($('.goog-te-gadget').children());
});
$('#refresh-captcha').click(function () {
    $.ajax({
        type: 'GET',
        url: 'refresh-captcha',
        success: function (data) {
            $(".captcha span").html(data.captcha);
        }
    });
});
//Form Validation
(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');

        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();
//End Form Validation
$("#same_as_present_address").on('change', function () {
    if (document.getElementById("same_as_present_address").checked == true) {
        $('#permanent_address').hide();
    } else {
        $('#permanent_address').show();
    }
});
//Request for getting district list
function get_districts(division_id, div_id) {
    $.ajax({
        url: '/getDistricts/' + division_id,
        type: "GET",
        dataType: "json",
        success: function (data) {
            if (data) {
                $('#' + div_id).empty();
                $('#' + div_id).append('<option value="">Select</option>');
                $.each(data, function (key, district) {
                    $('select[name="' + div_id + '"]').append('<option value="' + district.district_id + '">' + district.district_name + '</option>');
                });
            } else {
                $('#' + div_id).empty();
            }
        }
    });
}
//Request for getting upazila list
function get_upazilas(district_id, div_id) {
    $.ajax({
        url: '/getUpazilas/' + district_id,
        type: "GET",
        dataType: "json",
        success: function (data) {
            if (data) {
                $('#' + div_id).empty();
                $('#' + div_id).append('<option value="">Select</option>');
                $.each(data, function (key, upazila) {
                    $('select[name="' + div_id + '"]').append('<option value="' + upazila.upazila_id + '">' + upazila.upazila_name + '</option>');
                });
            } else {
                $('#' + div_id).empty();
            }
        }
    });
}
//Mem Reg 
$('#refresh-captcha').click(function () {
    $.ajax({
        type: 'GET',
        url: 'refresh-captcha',
        success: function (data) {
            $(".captcha span").html(data.captcha);
        }
    });
});