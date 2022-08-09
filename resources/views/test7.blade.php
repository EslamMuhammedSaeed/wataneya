<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
</body>
<button id="donation">here</button>
<input type="button" value="Pay with Lightbox" onclick="Checkout.showLightbox();" />
<input type="button" value="Pay with Payment Page" onclick="Checkout.showPaymentPage();" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cibpaynow.gateway.mastercard.com/checkout/version/61/checkout.js" data-error="errorCallback"
    data-cancel="cancelCallback"></script>
<script type="text/javascript">






</script>

<script>
$("#donation").on("submit", function (e) {
    e.preventDefault()


    var form = $(this);
    var url = "{{route('donations.createSession')}}";

    $.ajax({
        type: "POST",
        url: url,
        data: form.serialize(), // serializes the form's elements.
        success: function(data)
        {
            console.log(data.status); // show response from the php script.

           if(data.status){
            Checkout.configure({

                session: {

                    id: data.session

                },

                interaction: {

                    merchant: {

                        name: 'TESTCIB701357',

                        address: {

                            line1: '200 Sample St',

                            line2: '1234 Example Town'

                        }

                    }

                }

            });
            Checkout.showPaymentPage();

        }
        }
    });


})
</script>
        
</body>
</html>