

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script
      src="https://kit.fontawesome.com/f4de1d3f98.js"
      crossorigin="anonymous"
    ></script>
     <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
      rel="stylesheet"
    />
    <link href="assets/img/favicon.png" rel="icon">
    <link
      rel="shortcut icon"
      type="image/ico"
      href="assets/images/favimg.png"
    />
    
   
    <title>Hare Krishna Movement - Donation Confirmation</title>
    <link rel="stylesheet" href="https://hkmdehradun.org/assets/css/thank.css"/>
</head>
<body>
    <div class="main_container">
        <div class="child_container">

             <div class="logo-section">
                <div class="main-logo"><img src="https://hkmdehradun.org/assets/10/HKM-Dehradun-Logo-1024x617.jpg" alt="hkmlogo"></div>
                <h2>Hare Krishna Movement Dehradun</h2>
             </div>
             <div class="payment-details">
                <div style="text-align: center;"> <i class="fa fa-check-circle" aria-hidden="true"></i></div>
               
                <div class="title-section"><h3>Amount Received</h3>
                    <h4 >Thank You for your registration</h4>
                </div>
                <div class="donar-details">
                    <div class="donor name"><div><h2>Name</h2></div> <div><p>{{$regData->PARENT_NAME}} </p></div></div>
                    <div class="donor mobile"><div><h2>Mobile</h2></div> <div><p> {{$regData->PHONE}}</p></div></div>
                    <div class="donor amount"><div><h2>Amount</h2></div> <div><p><b>₹ {{$payData->TOTAL_AMOUNT}} /-</b></p></div></div>
                    <div class="donor payid"><div><h2>Transaction ID</h2></div> <div><p> {{$payData->BANK_TRANSACTION_ID}}</p></div></div>
                    
                </div>
                <div class="btn-home"><a href="https://hkmdehradun.org/"><button>Back To Homepage</button></a></div>
                
             </div>
           </div>
    </div>

    
</body>
</html>