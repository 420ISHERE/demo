@php
$amount = request()->query('amount', 0);
$sevas = request()->query('sevas', '');
@endphp


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Donation Checkout - Hare Krishna Movement</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

  <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

  <style>
    .donation-amounts {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
      gap: 12px;
      padding: 20px;
      background-color: #fdf2e9;
      border-radius: 20px;
      margin-bottom: 30px;
    }

    .glass-btn.amount-btn {
      background: #ffd700;
      color: #000;
      font-weight: bold;
      border: none;
      border-radius: 20px;
      padding: 15px 20px;
      transition: 0.3s ease;
      font-size: 16px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .glass-btn.amount-btn:hover,
    .glass-btn.amount-btn.active {
      background-color: #ffae00;
      color: #fff;
    }

    .form-control {
      border-radius: 30px !important;

      border: 1px solid #ccc;
      margin-bottom: 15px;
      font-size: 20px;
    }

    label {
      font-weight: 500;
      margin-bottom: 6px;
      display: block;
      font-size: 14px;
    }

    .btn {
      background-color: #ffd700;
      border-radius: 30px !important;
      padding: 12px 25px;
      border: none;
      color: #000;
      font-weight: 600;
      font-size: 16px;
      transition: 0.3s ease;
    }

    .btn:hover {
      background-color: #ffae00;
      color: white;
    }

    .form-container {

      padding: 0px;

    }

    .info-card {
      padding: 30px;
      color: #222;
      text-align: center;
      height: 100%;
      border-radius: 20px;
    }

    .bg-orange {
      background-color: #FF6F00;
      color: white;
    }

    .bg-yellow {
      background-color: #F5E79E;
      color: #555;
    }

    .custom-padding {
      padding-left: 40px;
      padding-right: 40px;
      padding-top: 40px;
    }
  </style>
</head>

<body>
  <div class="container-fluid custom-padding">
    <div class="row g-4">
      <div class="col-md-12 col-lg-7">
        <div class="row g-3">
          <div class="col-sm-6">
            <div class="info-card bg-orange">
              <img class="img-fluid mb-4" src="{{ asset('assets/icons/cooking.png') }}" alt="Meals served"
                style="height: 80px;">
              <h2>2.89</h2>
              <p>Crore Meals served</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="info-card bg-yellow">
              <img class="img-fluid mb-4" src="{{ asset('assets/icons/people.png') }}" alt="People served"
                style="height: 80px;">
              <h2></h2>
              <p>People served daily</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="info-card bg-yellow">
              <img class="img-fluid mb-4" src="{{ asset('assets/icons/rupee.png') }}" alt="Cost per meal"
                style="height: 65px;">
              <h2>35</h2>
              <p>Cost per meal</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="info-card bg-orange">
              <img class="img-fluid mb-4" src="{{ asset('assets/icons/time-left.png') }}"
                alt="Meal prep time" style="height: 65px;">
              <h2>4</h2>
              <p>Hours meal prep time</p>
            </div>
          </div>
        </div>

        <h2 class="mt-4">Annadanam Mahadanam</h2>
        <p class="text-muted">
          Supporting initiatives to provide food for the needy and temple visitors is a compassionate
          endeavor that not only addresses hunger but also fosters a sense of community and service.
        </p>
        <ul class="list-unstyled">
          <li>✔ High Quality Food</li>
          <li>✔ Fresh Ingredients</li>
          <li>✔ Industry Standard Hygiene</li>
        </ul>
      </div>

      <div class="col-md-12 col-lg-5">
        <div class="form-container">
          <div class="row">
            <div class="col-sm-12">


              <div class="row">
                <div class="form_wrap">
                  <div class="fw_body">
                    <form action="{{ route('payment-gateway') }}" method="post" id="basic_form">
                      @csrf

                      @if($amount && $sevas)
                      {{-- Multi Donation Checkout --}}
                      <p class="fw_t1"><strong>SEVA NAME</strong></p>
                      <p class="fw_t1" style="line-height: 30px;">{{ $feeding }}</p>
                      <p class="fw_t1"><strong>SEVA TYPE</strong></p>
                      <p class="fw_t1">JANMASHTAMI</p>

                      <p class="fw_t1"><strong>TOTAL DONATION AMOUNT</strong></p>
                      <p class="fw_t1">₹{{ number_format($amount) }}</p>

                      <input type="hidden" name="seva_type" value="MULTI-SEVA" />
                      <input type="hidden" name="donation_amount" value="{{ $amount }}" />
                      <input type="hidden" name="selected_sevas" value="{{ $sevas }}" />
                      @else
                      {{-- Single Seva Checkout (default logic) --}}
                      <p class="fw_t1"><strong>SEVA NAME</strong></p>
                      <p class="fw_t1" style="line-height: 30px;">{{ $feeding }}</p>

                      <p class="fw_t1"><strong>SEVA TYPE</strong></p>
                      {{-- THE CHANGE IS APPLIED HERE --}}
                      @if (request()->path() == 'checkout/19')
                      <p class="fw_t1">108 Deep Daan</p>
                      @elseif (request()->path() == 'checkout/20')
                      <p class="fw_t1">ANNADAAN SEVA</p>
                      @else
                      <p class="fw_t1">JANMASHTAMI</p>
                      @endif


                      <p class="fw_t1"><strong>{{ $seva_amount }}</strong></p>
                      <p class="fw_t1">{!! $seva !!}</p>

                      <input type="hidden" name="seva_type" value="ANNADAAN" />
                      <input type="hidden" name="donation_amount" value="{{ $seva_amount }}" />
                      @endif

                      {{-- ... the rest of your form continues here ... --}}
                      @php
                      $hiddenPages = ['checkout/11', 'checkout/12','checkout/13', 'checkout/14',
                      'checkout/15','checkout/16','checkout/17','checkout/18', 'checkout/19'];
                      @endphp

                      @if (!in_array(request()->path(), $hiddenPages))
                      <h4 style="color:black;">Chooose option or add custom ammount</h4>
                      @endif
                      @php
                      $hiddenPages = ['checkout/11', 'checkout/12','checkout/13', 'checkout/14',
                      'checkout/15','checkout/16','checkout/17','checkout/18','checkout/19'];

                      @endphp

                      @if (!in_array(request()->path(), $hiddenPages))
                      <div class="donation-amounts mb-3 text-center">

                        <button type="button" class="glass-btn amount-btn"
                          data-amount="1100">₹1,100</button>
                        <button type="button" class="glass-btn amount-btn"
                          data-amount="2100">₹2,100</button>
                        <button type="button" class="glass-btn amount-btn"
                          data-amount="5100">₹5,100</button>
                        <button type="button" class="glass-btn amount-btn"
                          data-amount="11000">₹11,000</button>
                        <button type="button" class="glass-btn amount-btn"
                          data-amount="15000">₹15,000</button>
                        <button type="button" class="glass-btn amount-btn"
                          data-amount="20000">₹20,000</button>
                        <button type="button" class="glass-btn amount-btn"
                          data-amount="25000">₹25,000</button>
                      </div>

                      @endif


                      <div class="formbuilder-textarea form-group field-Donor-Name">
                        <label for="Donor-Name" class="formbuilder-textarea-label">Donor
                          Name<span class="formbuilder-required">*</span></label>
                        <input type="text" class="form-control" name="donar_name"
                          placeholder="Your Name" access="false" onkeyup="donornameOnly(this)"
                          id="Donor-Name" required="required" aria-required="true">
                      </div>
                      @error('donar_name')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                      <div class="formbuilder-text form-group field-Mobile-Number">
                        <label for="Mobile-Number" class="formbuilder-text-label">Mobile
                          Number<span class="formbuilder-required">*</span></label>
                        <input type="text" placeholder="Your Mobile Number" maxlength="10"
                          size="10" minlength="10" onkeyup="phoneOnly(this)"
                          class="form-control" name="mobile_number" access="false"
                          id="Mobile-Number" required="required" aria-required="true">
                      </div>
                      @error('mobile_number')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                      <div class="formbuilder-text form-group field-Email">
                        <label for="Email" class="formbuilder-text-label">E-Mail ID<span
                            class="formbuilder-required">*</span></label>
                        <input type="email" placeholder="Your Email" class="form-control"
                          name="email" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                          oninput="this.value = this.value.toLowerCase()" access="false"
                          id="Email" required="required" aria-required="true">
                      </div>
                      @error('email')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror



                      <div class="formbuilder-radio-group form-group field-nationality">

                        <div class="radio-group">
                          <div class="formbuilder-radio">
                            <div class="fbr_lft"><input name="nationality" access="false"
                                id="nationality-0" required="required"
                                aria-required="true" value="Indian Citizen" type="radio"
                                checked="checked" id="indian-citizen">
                              <label for="nationality-0">Indian Citizen</label>
                            </div>

                          </div>
                        </div>
                      </div>
                      <div class="clear"></div>
                      <div class="formbuilder-checkbox-group form-group need_prasadam">
                      </div>

                      <div class="formbuilder-checkbox-group form-group field-80G">
                        <div class="checkbox-group">
                          <div class="formbuilder-checkbox">
                            <input name="tax" value="No" type="hidden">
                            <input name="80G" id="need80g" value="Yes" type="checkbox">
                            <label for="need80g">I wish to receive 80G Tax Exemption</label>
                            <div class="act_txt">
                              Finance Act 2021 has made it mandatory to upload
                              the details of donations collected by all those
                              organisations
                              collecting donations which qualify for 80G deduction in Form
                              No.
                              10BD. The PAN and Address are mandatory details to be
                              uploaded.
                            </div>
                          </div>
                        </div>
                      </div>

                      <div id="panField" style="display: none;">
                        <div class="formbuilder-text form-group">
                          <label class="formbuilder-text-label">PAN NUMBER <span
                              class="formbuilder-required">*</span></label>
                          <input type="text" class="form-control pan_number" name="pan_number"
                            maxlength="10" oninput="this.value = this.value.toUpperCase()"
                            placeholder="Eg: ABCDE1234F" aria-required="true">
                        </div>
                      </div>

                      <div id="prasadOptionBox" style="display: block;">
                        <div class="mb-3">
                          <label class="form-label"><strong>Would you like to receive prasadam
                              at home?</strong></label><br>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"
                              name="prasad_choice" id="prasad_yes" value="yes">
                            <label class="form-check-label" for="prasad_yes">Yes</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"
                              name="prasad_choice" id="prasad_no" value="no" checked>
                            <label class="form-check-label" for="prasad_no">No</label>
                          </div>
                        </div>

                        <div id="prasadFields" style="display: none;">
                          <div class="formbuilder-textarea form-group">
                            <label>House No/Door No <span
                                class="formbuilder-required">*</span></label>
                            <input type="text" placeholder="Enter Your House No/Door No"
                              class="form-control" name="address1">
                          </div>
                          <div class="formbuilder-textarea form-group">
                            <label>House/Apartment/Building Name <span
                                class="formbuilder-required">*</span></label>
                            <input type="text"
                              placeholder="Enter Your House/Apartment/Building Name"
                              class="form-control" name="address2">
                          </div>
                          <div class="formbuilder-textarea form-group">
                            <label>Street Name <span
                                class="formbuilder-required">*</span></label>
                            <input type="text" placeholder="Enter Your Street Name"
                              class="form-control" name="address3">
                          </div>
                          <div class="formbuilder-textarea form-group">
                            <label>Location/Area <span
                                class="formbuilder-required">*</span></label>
                            <input type="text" placeholder="Enter Your Location/Area"
                              class="form-control" name="address4">
                          </div>
                          <div class="formbuilder-text form-group">
                            <label>PIN CODE <span
                                class="formbuilder-required">*</span></label>
                            <input type="text" placeholder="Eg: 500001" class="form-control"
                              name="pin_code" maxlength="6">
                          </div>
                          <div class="formbuilder-text form-group">
                            <label>CITY <span class="formbuilder-required">*</span></label>
                            <input type="text" placeholder="Enter Your City/District"
                              class="form-control" name="city">
                          </div>
                          <div class="formbuilder-text form-group">
                            <label>STATE <span class="formbuilder-required">*</span></label>
                            <input type="text" placeholder="Enter Your State"
                              class="form-control" name="state">
                          </div>
                        </div>
                      </div>
                      {{-- THIS IS THE CORRECTED LINE --}}
                      <input type="hidden" name="final_amount" id="final_amount"
                        value="{{ $amount ?: $seva_amount }}">
                      <button type="submit" class="btn-default btn" name="submit_form">DONATE
                        NOW</button>


                  </div>
                </div>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      function lettersOnly(input) {
        var regex = /[^a-zA-Z0-9. ,_\-\/]/gi
        input.value = input.value.replace(regex, "");
        // Apply character limit
        var maxLength = 39;
        if (input.value.length > maxLength) {
          input.value = input.value.substring(0, maxLength);
        }
      }

      function donornameOnly(input) {
        var regex = /[^a-zA-Z ]/gi;
        input.value = input.value.replace(regex, "");

        // Apply character limit
        var maxLength = 39;
        if (input.value.length > maxLength) {
          input.value = input.value.substring(0, maxLength);
        }
      }

      function citystateOnly(input) {
        var regex = /[^a-zA-Z ]/gi
        input.value = input.value.replace(regex, "");
        // Apply character limit
        var maxLength = 30;
        if (input.value.length > maxLength) {
          input.value = input.value.substring(0, maxLength);
        }
      }

      function phoneOnly(input) {
        var regex = /[^0-9]/gi
        input.value = input.value.replace(regex, "");
        // Apply character limit
        var maxLength = 10;
        if (input.value.length > maxLength) {
          input.value = input.value.substring(0, maxLength);
        }
      }

      function numOnly(input) {
        var regex = /[^0-9]/gi
        input.value = input.value.replace(regex, "");
        // Apply character limit
        var maxLength = 6;
        if (input.value.length > maxLength) {
          input.value = input.value.substring(0, maxLength);
        }
      }

      function panOnly(input) {
        var regex = /[^a-zA-Z0-9]/gi
        input.value = input.value.replace(regex, "");
        // Apply character limit
        var maxLength = 10;
        if (input.value.length > maxLength) {
          input.value = input.value.substring(0, maxLength);
        }
      }
    </script>
    <script>
      jQuery(document).ready(function() {
        jQuery("#pan_number").hide();
        jQuery("#address").hide();
        jQuery("#address2").hide();
        jQuery("#address3").hide();
        jQuery("#address4").hide();
        jQuery("#pin_code").hide();
        jQuery("#city").hide();
        jQuery("#state").hide();

      });


      jQuery('input[type=radio][name=nationality]').on('change', function() {
        switch (jQuery('input[type=radio][name=nationality]:checked').val()) {
          case 'Indian Citizen':
            jQuery(".field-80G").show();
            jQuery(".need_prasadam").show();
            if (jQuery("#need80g").is(':checked')) {
              //jQuery("#pan_number").show();
              jQuery("#address").hide();
              jQuery("#address2").hide();
              jQuery("#address3").hide();
              jQuery("#address4").hide();
              jQuery("#pin_code").hide();
              jQuery("#city").hide();
              jQuery("#state").hide();
            } else {
              jQuery("#pan_number").hide();
              jQuery("#address").hide();
              jQuery("#address2").hide();
              jQuery("#address3").hide();
              jQuery("#address4").hide();
              jQuery("#pin_code").hide();
              jQuery("#city").hide();
              jQuery("#state").hide();

            }

            break;
          case 'Foreign Citizen':
            /*if (jQuery("#need80g").is(':checked')) {
                      jQuery("#pan_number").hide();
                      jQuery("#address").hide();
                      jQuery("#address2").hide();
                      jQuery("#address3").hide();
                      jQuery("#address4").hide();
                      jQuery("#pin_code").hide();
                      jQuery("#city").hide();
                      jQuery("#state").hide();
          
                    }else{*/
            jQuery("#pan_number").hide();
            jQuery("#address").hide();
            jQuery("#address2").hide();
            jQuery("#address3").hide();
            jQuery("#address4").hide();
            jQuery("#pin_code").hide();
            jQuery("#city").hide();
            jQuery("#state").hide();
            jQuery(".field-80G").hide();
            jQuery(".need_prasadam").hide();
            /*}*/

            break;
        }
      });



      jQuery('input[type=checkbox][name=80G]').on('change', function() {
        if (jQuery("#need80g").is(':checked')) {
          switch (jQuery('input[type=radio][name=nationality]:checked').val()) {
            case 'Indian Citizen':
              jQuery(".field-80G").show();
              if (jQuery("#need80g").is(':checked')) {
                jQuery("#pan_number").show();
                jQuery('.pan_number').prop('required', true);
                jQuery("#address").show();
                jQuery('.address').prop('required', true);
                jQuery("#address2").show();
                jQuery('.address2').prop('required', true);
                jQuery("#address3").show();
                jQuery('.address3').prop('required', true);
                jQuery("#address4").show();
                jQuery('.address4').prop('required', true);
                jQuery("#pin_code").show();
                jQuery('.pin_code').prop('required', true);
                jQuery("#city").show();
                jQuery('.city').prop('required', true);
                jQuery("#state").show();
                jQuery('.state').prop('required', true);
              } else if (jQuery("#need_prasadam").is(':checked')) {
                jQuery("#pan_number").hide();
                jQuery('.pan_number').prop('required', false);
                jQuery("#address").show();
                jQuery('.address').prop('required', true);
                jQuery("#address2").show();
                jQuery('.address2').prop('required', true);
                jQuery("#address3").show();
                jQuery('.address3').prop('required', true);
                jQuery("#address4").show();
                jQuery('.address4').prop('required', true);
                jQuery("#pin_code").show();
                jQuery('.pin_code').prop('required', true);
                jQuery("#city").show();
                jQuery('.city').prop('required', true);
                jQuery("#state").show();
                jQuery('.state').prop('required', true);
              } else {
                jQuery("#pan_number").hide();
                jQuery("#address").hide();
                jQuery("#address2").hide();
                jQuery("#pin_code").hide();
                jQuery("#city").hide();
                jQuery("#state").hide();
              }


              break;
            case 'Foreign Citizen':
              /*if (jQuery("#need80g").is(':checked')) {
                jQuery("#pan_number").hide();
                jQuery("#address").hide();
                jQuery("#address2").hide();
                jQuery("#address3").hide();
                jQuery("#address4").hide();
                jQuery("#pin_code").hide();
                jQuery("#city").hide();
                jQuery("#state").hide();
              }else{*/
              jQuery("#pan_number").hide();
              jQuery("#address").hide();
              jQuery("#address2").hide();
              jQuery("#address3").hide();
              jQuery("#address4").hide();
              jQuery("#pin_code").hide();
              jQuery(".field-80G").hide();
              jQuery("#city").hide();
              jQuery("#state").hide();
              /*}*/

              break;
          }
        } else {
          jQuery("#pan_number").hide();
          jQuery("#address").hide();
          jQuery("#address2").hide();
          jQuery("#address3").hide();
          jQuery("#address4").hide();
          jQuery("#pin_code").hide();
          jQuery("#city").hide();
          jQuery("#state").hide();
        }
      });

      jQuery('input[type=checkbox][name=need_prasadam]').on('change', function() {
        if (jQuery("#need_prasadam").is(':checked')) {
          switch (jQuery('input[type=radio][name=nationality]:checked').val()) {
            case 'Indian Citizen':
              jQuery(".need_prasadam").show();
              if (jQuery("#need_prasadam").is(':checked')) {
                jQuery("#pan_number").hide();
                jQuery('.pan_number').prop('required', false);
                jQuery("#address").show();
                jQuery('.address').prop('required', true);
                jQuery("#address2").show();
                jQuery('.address2').prop('required', true);
                jQuery("#address3").show();
                jQuery('.address3').prop('required', true);
                jQuery("#address4").show();
                jQuery('.address4').prop('required', true);
                jQuery("#pin_code").show();
                jQuery('.pin_code').prop('required', true);
                jQuery("#city").show();
                jQuery('.city').prop('required', true);
                jQuery("#state").show();
                jQuery('.state').prop('required', true);
              } else if (jQuery("#need80g").is(':checked')) {
                jQuery("#pan_number").show();
                jQuery('.pan_number').prop('required', true);
                jQuery("#address").show();
                jQuery('.address').prop('required', true);
                jQuery("#address2").show();
                jQuery('.address2').prop('required', true);
                jQuery("#address3").show();
                jQuery('.address3').prop('required', true);
                jQuery("#address4").show();
                jQuery('.address4').prop('required', true);
                jQuery("#pin_code").show();
                jQuery('.pin_code').prop('required', true);
                jQuery("#city").show();
                jQuery('.city').prop('required', true);
                jQuery("#state").show();
                jQuery('.state').prop('required', true);
              } else {
                jQuery("#pan_number").hide();
                jQuery("#address").hide();
                jQuery("#address2").hide();
                jQuery("#pin_code").hide();
                jQuery("#city").hide();
                jQuery("#state").hide();
              }


              break;
            case 'Foreign Citizen':
              /*if (jQuery("#need80g").is(':checked')) {
                jQuery("#pan_number").hide();
                jQuery("#address").hide();
                jQuery("#address2").hide();
                jQuery("#address3").hide();
                jQuery("#address4").hide();
                jQuery("#pin_code").hide();
                jQuery("#city").hide();
                jQuery("#state").hide();
              }else{*/
              jQuery("#pan_number").hide();
              jQuery("#address").hide();
              jQuery("#address2").hide();
              jQuery("#address3").hide();
              jQuery("#address4").hide();
              jQuery("#pin_code").hide();
              jQuery(".field-80G").hide();
              jQuery("#city").hide();
              jQuery("#state").hide();
              /*}*/

              break;
          }
        } else {
          jQuery("#pan_number").hide();
          jQuery("#address").hide();
          jQuery("#address2").hide();
          jQuery("#address3").hide();
          jQuery("#address4").hide();
          jQuery("#pin_code").hide();
          jQuery("#city").hide();
          jQuery("#state").hide();
        }
      });

      jQuery("#seva_amount").on('change', function() {
        var amount = $(this).val()
        console.log(amount);

        jQuery("#final_amount").val(amount);
      })

      jQuery("#basic_form").validate({
        rules: {
          seva_amount: {
            required: true,
            digits: true,
          },
          donar_name: {
            required: true,

          },
          mobile_number: {
            required: true,
            digits: true,
            minlength: 10,
            maxlength: 10,
          },
          email: {
            required: true,
          },


          pan_number: {
            required: true,
          },
          address: {
            required: true
          },
          address2: {
            required: true
          },
          address3: {
            required: true,
          },
          address4: {
            required: true,
          },
          pin_code: {
            required: true,
          },
          city: {
            required: true,
          },
          state: {
            required: true,
          }
        },
        messages: {
          seva_amount: {
            required: "Please enter the seva amount",
          },
          donar_name: {
            required: "Name field is required",
          },
          mobile_number: {
            required: "Mobile number field is required",
            digits: "Please Enter 10 Digit Mobile Number Only",
            minlength: "Please Enter 10 Digit Mobile Number Only",
            maxlength: "Please Enter 10 Digit Mobile Number Only",
          },
          email: {
            required: "Email field is required",
          },

          pan_number: {
            required: "Pan number field is required",
          },
          address: {

            required: "Door No. field is required"
          },
          address2: {
            required: "House name field is required"
          },
          address3: {
            required: "Street field is required",
          },
          address4: {
            required: "Location field is required",
          },
          pin_code: {
            required: "Pin code field is required",

          },
          city: {
            required: "City field is required",
          },
          state: {
            required: "State field is required",
          }

        },
      });



      $('.amount-btn').on('click', function() {
        var amount = $(this).data('amount');
        $('#final_amount').val(amount); // hidden for backend
        $('#seva_amount').val(amount); // visible for user
        $('.amount-btn').removeClass('active');
        $(this).addClass('active');
      });
    </script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        // 80G checkbox + PAN field
        const need80g = document.getElementById('need80g');
        const panField = document.getElementById('panField');

        function togglePanField() {
          panField.style.display = need80g.checked ? 'block' : 'none';
        }

        need80g.addEventListener('change', togglePanField);
        togglePanField(); // initial

        // Prasadam Yes/No + Address fields
        const yesRadio = document.getElementById('prasad_yes');
        const noRadio = document.getElementById('prasad_no');
        const prasadFields = document.getElementById('prasadFields');

        function togglePrasadFields() {
          prasadFields.style.display = yesRadio.checked ? 'block' : 'none';
        }

        yesRadio.addEventListener('change', togglePrasadFields);
        noRadio.addEventListener('change', togglePrasadFields);
        togglePrasadFields(); // initial
      });
    </script>




    <div class="copy">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-9 fnav">
            <ul>
              <li><a href="https://www.hkmdehradun.org/">Home</a></li>
              <li><a href="https://www.hkmdehradun.org/about-2/">About Us</a></li>
              <li><a href="https://www.hkmdehradun.org/program/"></a></li>
              <li><a href="https://www.hkmdehradun.org/contact-us/">Contact Us</a></li>
              <li><a href="https://www.hkmdehradun.org/term-and-conditions/">Terms & Conditions</a></li>
              <li><a href="https://www.hkmdehradun.org/cancellation-refund-policy/">Refund Policy</a></li>
              <li><a href="https://www.hkmdehradun.org/privacy-policy/">Privacy policy</a></li>

            </ul>
          </div>

          <div class="col-md-3">
            <p style="color: #ff8001;">Hare Krishna Movement Dehradun</p>
          </div>

        </div>
      </div>
    </div>
    <a href="https://wa.me/8123037733"" class=" float" target="_blank">
      <i class="fa fa-whatsapp my-float"></i>
    </a>
</body>

</html>