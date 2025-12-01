<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hare Krishna Movement - Checkout Payment</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
      rel="stylesheet"
    />
     <link
      rel="shortcut icon"
      type="image/ico"
      href="assets/images/favimg.png"
    />
    <link rel="stylesheet" href="https://hkmdehradun.org/assets/css/checkout.css" />
  </head>
  <body>


    <div class="main-container">
      <div class="checkout-container">
        <h2>Confirm Donation!</h2>

        <div class="card-details">
          <div class="seva-details">
            <div class="logo">
              <img
                src="https://hkmdehradun.org/assets/10/HKM-Dehradun-Logo-1024x617.jpg"
                alt="logo"
              />
            </div>
            <div>
              <h3>HKM Dehradun Payments</h3>
              <p class="title">Donation details are as follow</p>
              <p class="sub-title-1">Donation for:</p>
              <h4>ANNADAAN SEVA</h4>
              <p class="sub-title-2">
                Donation Amount: <span class="amount">₹ {{$data->amount/100}}</span>
              </p>
            </div>
          </div>
          <div class="payment-details">
            <div class="payment-details-inner">
              <p class="name-label">Donor Name:</p>
              <p class="name">{{ $data->notes->customer_name}}</p>
              <p class="mobile-label">Mobile Number:</p>
              <p class="name">{{ $data->notes->mobile}}</p>
              <div class="btn-donate">
                <button id="rzp-button1">Donate Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>


<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var amount = "{{ $data->amount/100}}";
var donar_name = "{{ $data->notes->customer_name}}";
var email = "{{ $data->notes->email}}";
var mobile = "{{ $data->notes->mobile}}";
   
   
var options = {
    "key": "rzp_live_w7qvAA5JMYPiOb", 
    "amount": amount*100, 
    "currency": "INR",
    "name": "Hare Krishna Movement Dehradun",
    "description": "Annadaan Seva",
    "image": "https://hkmdehradun.org/assets/images/hkmdrazorpay.jpg",
      "order_id": "{{$data->id}}",
    "handler": function (response){
        
        console.log(response)
      window.location.href="{{route('payment-status')}}"+'?payment_id='+response.razorpay_payment_id +'&order_id='+ "{{ $data->id}}"
           
    },
    "prefill": {
        "name": donar_name ,
         "email" : email,
        "contact": mobile,
    },
    "notes": {
        "address": "Hare Krishna Movement Dehradun",
    },
    "theme": {
        "color": "#007DC5"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        window.location.href="https://hkmdehradun.org/annadaan-seva/failure.php"
});

window.addEventListener("load", (event) => {
 function razorpay(e){
   
    rzp1.open();
    e.preventDefault();
}
razorpay();
});
document.getElementById('rzp-button1').onclick = function(e){
   
    rzp1.open();
    e.preventDefault();
}
</script>