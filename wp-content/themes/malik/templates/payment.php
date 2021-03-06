<?php
/* Template Name: Payment */ 
//generate access token
$PAYPAL_CLIENT_ID = 'AZrXsZ9KY901EDD066_Ene3zfgXtmKV3XaqpOnO1r60xOcATQ_WZKhmpvmdS7Dl4zsJopH6kHV-WUURg';
$PAYPAL_SECRET = 'EFFIKJp05rCA9ETfb-MRNEOi7eMMTjoNPKmPuWqRXWefJ4tmgKnmAZQXzmOws8EkA-szUjyADZ92UFiF';
$curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.sandbox.paypal.com/v1/oauth2/token",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_USERPWD => $PAYPAL_CLIENT_ID.":".$PAYPAL_SECRET,
    CURLOPT_POSTFIELDS => "grant_type=client_credentials",
    CURLOPT_HTTPHEADER => array(
    "Accept: application/json",
    "Accept-Language: en_US"
    ),
    ));

    $result= curl_exec($curl);
    // var_dump($result);

    $array=json_decode($result, true); 
    $access_token=$array['access_token'];

    // echo "access token";
    // echo "<pre>";
    // print_r($array);

$curl = curl_close();
$curl = curl_init();
$client_token = '';
$result = null;
if(isset($access_token)){
    //generate client token
    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api-m.sandbox.paypal.com/v1/identity/generate-token",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_HTTPHEADER => array(
    "Accept: application/json",
    "Accept-Language: en_US",
    "Authorization: Bearer ".$access_token
    ),
    ));

    $result = curl_exec($curl);
    $array=json_decode($result, true);
    $client_token=$array['client_token'];

    // echo "Client token";
    // echo "<pre>";
    // print_r($array);
if(!empty($client_token))
{
?>

<html>
<head>

  <meta charset="utf-8"/>

  <!-- Optimal rendering on mobile devices. -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Optimal Internet Explorer compatibility -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!-- Sample CSS styles for demo purposes. You can override these styles to match your web page's branding. -->
  <link rel="stylesheet" type="text/css" href="https://www.paypalobjects.com/webstatic/en_US/developer/docs/css/cardfields.css"/>

</head>
<body>

<!-- JavaScript SDK -->
 <script src="https://www.paypal.com/sdk/js?components=buttons,hosted-fields&client-id=<?php echo $PAYPAL_CLIENT_ID; ?>" data-client-token="<?php echo $client_token; ?>"></script>

   <!-- Buttons container -->
   <table border="0" align="center" valign="top" bgcolor="#FFFFFF" style="width: 39%">
     <tr>
       <td colspan="2">
         <div id="paypal-button-container"></div>
       </td>
     </tr>
     <tr><td colspan="2">&nbsp;</td></tr>
   </table>

   <div align="center"> or </div>

   <!-- Advanced credit and debit card payments form -->
   <div class="card_container">
     <form id="card-form">

       <label for="card-number">Card Number</label><div id="card-number" class="card_field"></div>
       <div>
         <label for="expiration-date">Expiration Date</label>
         <div id="expiration-date" class="card_field"></div>
       </div>
       <div>
         <label for="cvv">CVV</label><div id="cvv" class="card_field"></div>
       </div>
       <label for="card-holder-name">Name on Card</label>
       <input type="text" id="card-holder-name" name="card-holder-name" autocomplete="off" placeholder="card holder name"/>
       <div>
         <label for="card-billing-address-street">Billing Address</label>
         <input type="text" id="card-billing-address-street" name="card-billing-address-street" autocomplete="off" placeholder="street address"/>
       </div>
       <div>
         <label for="card-billing-address-unit">&nbsp;</label>
         <input type="text" id="card-billing-address-unit" name="card-billing-address-unit" autocomplete="off" placeholder="unit"/>
       </div>
       <div>
         <input type="text" id="card-billing-address-city" name="card-billing-address-city" autocomplete="off" placeholder="city"/>
       </div>
       <div>
         <input type="text" id="card-billing-address-state" name="card-billing-address-state" autocomplete="off" placeholder="state"/>
       </div>
       <div>
         <input type="text" id="card-billing-address-zip" name="card-billing-address-zip" autocomplete="off" placeholder="zip / postal code"/>
       </div>
       <div>
         <input type="text" id="card-billing-address-country" name="card-billing-address-country" autocomplete="off" placeholder="country code" />
       </div>
       <br><br>
       <button value="submit" id="submit" class="btn">Pay</button>
     </form>
   </div>

   <!-- Implementation -->
   <script>
     let orderId;

     // Displays PayPal buttons
     paypal.Buttons({
       style: {
         layout: 'horizontal'
       },
        createOrder: function(data, actions) {
           return actions.order.create({
             purchase_units: [{
               amount: {
                 value: "1.00"
               }
             }]
           });
         },
         onApprove: function(data, actions) {
           return actions.order.capture().then(function(details) {
             window.location.href = '/success.html';
           });
         }
     }).render("#paypal-button-container");

     // If this returns false or the card fields aren't visible, see Step #1.
     if (paypal.HostedFields.isEligible()) {

       // Renders card fields
       paypal.HostedFields.render({
         // Call your server to set up the transaction
         createOrder: function () {
           return fetch('https://api-m.sandbox.paypal.com/v2/checkout/orders', {
            method: 'post'
          }).then(function(res) {
              return res.json();
          }).then(function(orderData) {
            orderId = orderData.id;
            return orderId;
          });
         },

         styles: {
           '.valid': {
            'color': 'green'
           },
           '.invalid': {
            'color': 'red'
           }
         },

         fields: {
           number: {
             selector: "#card-number",
             placeholder: "4111 1111 1111 1111"
           },
           cvv: {
             selector: "#cvv",
             placeholder: "123"
           },
           expirationDate: {
             selector: "#expiration-date",
             placeholder: "MM/YY"
           }
         }
       }).then(function (cardFields) {
         document.querySelector("#card-form").addEventListener('submit', (event) => {
           event.preventDefault();

           cardFields.submit({
             // Cardholder's first and last name
             cardholderName: document.getElementById('card-holder-name').value,
             // Billing Address
             billingAddress: {
               // Street address, line 1
               streetAddress: document.getElementById('card-billing-address-street').value,
               // Street address, line 2 (Ex: Unit, Apartment, etc.)
               extendedAddress: document.getElementById('card-billing-address-unit').value,
               // State
               region: document.getElementById('card-billing-address-state').value,
               // City
               locality: document.getElementById('card-billing-address-city').value,
               // Postal Code
               postalCode: document.getElementById('card-billing-address-zip').value,
               // Country Code
               countryCodeAlpha2: document.getElementById('card-billing-address-country').value
             }
           }).then(function () {
             fetch('https://api-m.sandbox.paypal.com/v2/checkout/orders/' + orderId + '/capture/', {
               method: 'post'
             }).then(function(res) {
                return res.json();
             }).then(function (orderData) {
                // Three cases to handle:
                //   (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()
                //   (2) Other non-recoverable errors -> Show a failure message
                //   (3) Successful transaction -> Show confirmation or thank you

                // This example reads a v2/checkout/orders capture response, propagated from the server
                // You could use a different API or structure for your 'orderData'
                var errorDetail = Array.isArray(orderData.details) && orderData.details[0];

                if (errorDetail && errorDetail.issue === 'INSTRUMENT_DECLINED') {
                  return actions.restart(); // Recoverable state, per:
                  // https://developer.paypal.com/docs/checkout/integration-features/funding-failure/
                }

                if (errorDetail) {
                    var msg = 'Sorry, your transaction could not be processed.';
                    if (errorDetail.description) msg += '\n\n' + errorDetail.description;
                    if (orderData.debug_id) msg += ' (' + orderData.debug_id + ')';
                    return alert(msg); // Show a failure message
                }

                // Show a success message or redirect
                alert('Transaction completed!');
             })
          }).catch(function (err) {
            alert('Payment could not be captured! ' + JSON.stringify(err))
          });
         });
       });
     } else {
       // Hides card fields if the merchant isn't eligible
       document.querySelector("#card-form").style = 'display: none';
     }
   </script>

   </body>
   </html>

<?php
}
}
?>