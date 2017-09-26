<?php


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://www.paypalobjects.com/api/checkout.js" data-version-4></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<style type="text/css">
		.bg-grey-lt{
			background-color: #FAFAFA;
		}
	</style>
</head>
<body>
<div id="myContainerElement" class="bg-grey-lt"></div>

<script>

    paypal.Button.render({

        // Set up a getter to create a Payment ID using the payments api, on your server side:

        payment: function() {
            return new paypal.Promise(function(resolve, reject) {

                // Make an ajax call to get the Payment ID. This should call your back-end,
                // which should invoke the PayPal Payment Create api to retrieve the Payment ID.

                // When you have a Payment ID, you need to call the `resolve` method, e.g `resolve(data.paymentID)`
                // Or, if you have an error from your server side, you need to call `reject`, e.g. `reject(err)`

                jQuery.post('/my-api/create-payment')
                    .done(function(data) { resolve(data.paymentID); })
                    .fail(function(err)  { reject(err); });
            });
        },

        // Pass a function to be called when the customer approves the payment,
        // then call execute payment on your server:

        onAuthorize: function(data) {

            console.log('The payment was authorized!');
            console.log('Payment ID = ',   data.paymentID);
            console.log('PayerID = ', data.payerID);

            // At this point, the payment has been authorized, and you will need to call your back-end to complete the
            // payment. Your back-end should invoke the PayPal Payment Execute api to finalize the transaction.

            jQuery.post('/my-api/execute-payment', { paymentID: data.paymentID, payerID: data.payerID })
                .done(function(data) { /* Go to a success page */ })
                .fail(function(err)  { /* Go to an error page  */  });
        },

        // Pass a function to be called when the customer cancels the payment

        onCancel: function(data) {

            console.log('The payment was cancelled!');
            console.log('Payment ID = ', data.paymentID);
        }

    }, '#myContainerElement');
</script>
</body>
</html>