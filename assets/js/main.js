(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        dots: false,
        loop: true,
        nav: true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });

    
})(jQuery);
document.addEventListener('DOMContentLoaded', function () {
    const mobileInput = document.getElementById('mob_number');

    if (mobileInput) {
        mobileInput.addEventListener('input', checkValidMobilesec);
        mobileInput.addEventListener('paste', function (event) {
            // Wait for the paste event to complete
            setTimeout(() => checkValidMobilesec(event), 0);
        });
    }
});
function checkValidMobilesec() {
    const mobileInput = document.getElementById('phone');
    let mobileNo = mobileInput.value;

    if (mobileNo !== "") {
        // Check if the first digit is 0
        if (mobileNo.charAt(0) === '0') {
            $('.form-error').text("Mobile numbers should not start with 0.");
            mobileInput.value = '';  // Clear the input
            return false;
        }
    }
}

document.getElementById('email').addEventListener('input', function (e) {
    this.value = this.value.replace(/\s/g, '');
});

document.getElementById('email').addEventListener('paste', function (e) {
    let paste = (e.clipboardData || window.clipboardData).getData('text');
    this.value = paste.replace(/\s/g, '');
    e.preventDefault();
});

function ischeckNumber(event) {
    // Get the input element
    const input = event.target;

    // Use a regular expression to match only numbers
    const numberPattern = /^[0-9]*$/;

    // If the input value doesn't match the pattern, remove the non-numeric characters
    if (!numberPattern.test(input.value)) {
        input.value = input.value.replace(/[^0-9]/g, '');
    }
}
function isAlphanumeric(event) {
    const input = event.target;
    const alphanumericPattern = /^[a-zA-Z0-9 ,\-]*$/;
    if (!alphanumericPattern.test(input.value)) {
        input.value = input.value.replace(/[^a-zA-Z0-9 ,\-]/g, '');
    }
}
document.addEventListener('DOMContentLoaded', function () {
    const inputFields = document.getElementsByClassName('num');

    // Attach event listeners to each input element
    Array.from(inputFields).forEach(inputField => {
        inputField.addEventListener('input', ischeckNumber);
        inputField.addEventListener('paste', function (event) {
            // Wait for the paste event to complete
            setTimeout(() => ischeckNumber(event), 0);
        });
    });
});
document.addEventListener('DOMContentLoaded', function () {
    const inputFields = document.getElementsByClassName('checkalpha');

    // Attach event listeners to each input element
    Array.from(inputFields).forEach(inputField => {
        inputField.addEventListener('input', isAlphanumeric);
        inputField.addEventListener('paste', function (event) {
            // Wait for the paste event to complete
            setTimeout(() => isAlphanumeric(event), 0);
        });
    });
});

function checkChar(event) {
    const input = event.target;
    const alphaPattern = /^[a-zA-Z ]*$/;
    if (!alphaPattern.test(input.value)) {
        input.value = input.value.replace(/[^a-zA-Z ]/g, '');
    }
}

document.addEventListener('DOMContentLoaded', function () {
    const alphaInputs = document.getElementsByClassName('checkchar');

    for (let input of alphaInputs) {
        input.addEventListener('input', checkChar);
        input.addEventListener('paste', function (event) {
            // Wait for the paste event to complete
            setTimeout(() => checkChar(event), 0);
        });
    }
});

$('.batchBox').on('click',function(){
   var id = $(this).attr('id');
   $('.batchBox').removeClass('ud-selected');
   $('.tksvg').hide();
   $(this).addClass('ud-selected');
   $('.tickSvg'+id).show();
   $('#batch'+id).prop('checked',true);
});

$('.paymentMode').on('click',function(){
   var id = $(this).attr('id');
   $('.paymentMode').removeClass('bg-hkm');
   $(this).addClass('bg-hkm');
   $('#mode'+id).prop('checked',true);
});
$('.datepicker').datepicker({
    dateFormat: "dd-M-yy", // Example: 17-May-2025
    changeYear: true,
    changeMonth: true,
    yearRange: "-15:-3", // 15 to 3 years ago from today
    minDate: function () {
        var today = new Date();
        return new Date(today.setFullYear(today.getFullYear() - 15));
    }(),
    maxDate: function () {
        var today = new Date();
        return new Date(today.setFullYear(today.getFullYear() - 3));
    }()
});
$('.proceedBtn').on('click',function(){
    var cname = $('#cname').val();
    var dob = $('#dob').val();
    var isBatchChecked = $('input[name="batch"]:checked').length > 0;
    var isModeChecked = $('input[name="mode"]:checked').length > 0;
    var school = $('#school').val();
    var city = $('#city').val();
    var name = $('#name').val();
    var phone = $('#phone').val();
    var email = $('#email').val();
    var pan = $('#pan').val();
 
    if(cname == '')
    {
      $('.form-error').text('Please Enter Name of the Child !!');
      $('#cname').focus();
    }else if(dob == ''){
      $('.form-error').text('Please Enter Date of Birth !!');
      $('#dob').focus();
    }else if(!isBatchChecked){
      $('.form-error').text('Please Select Batch !!');
      $('#batch1').focus();
    }else if(!isModeChecked){
      $('.form-error').text('Please Select Payment Mode !!');
      $('#mode1').focus();
    }else if(school == ''){
     $('.form-error').text('Please Enter School Name !!');
     $('#school').focus();
    }else if(city == ''){
     $('.form-error').text('Please Enter City !!');
     $('#city').focus();
    }else if(name == ''){
     $('.form-error').text('Please Enter Name of the Parent !!');
     $('#name').focus();
    }else if(phone == ''){
     $('.form-error').text('Please Enter Phone Number !!');
     $('#phone').focus();
    }else if(email == ''){
     $('.form-error').text('Please Enter Email Id !!');
     $('#email').focus();
    }else{
      $('.form-error').text('');
      $('.proceedBtn').prop('disabled',true);
      $('#RegPost').submit();
    }

});

