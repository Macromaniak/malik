<?php 
// Include configuration file 
include_once 'config.php'; 
 
// If transaction data is available in the URL 
if(!empty($_GET['item_number']) && !empty($_GET['tx']) && !empty($_GET['amt']) && !empty($_GET['cc']) && !empty($_GET['st'])){ 
    // Get transaction information from URL 
    $item_number = $_GET['item_number']; 
    $txn_id = $_GET['tx']; 
    $payment_gross = $_GET['amt']; 
    $currency_code = $_GET['cc']; 
    $payment_status = $_GET['st']; 
     
} 
?>

<div class="container">
    <div class="status">
        <?php if(!empty($txn_id)){ ?>
            <h1 class="success">Your Payment has been Successful</h1>
			
            <h4>Payment Information</h4>
            <p><b>Transaction ID:</b> <?php echo $txn_id; ?></p>
            <p><b>Paid Amount:</b> <?php echo $payment_gross; ?></p>
            <p><b>Payment Status:</b> <?php echo $payment_status; ?></p>
			
        <?php }else{ ?>
            <h1 class="error">Your Payment has Failed</h1>
        <?php } ?>
    </div>
    <a href="<?php echo site_url(); ?>" class="btn-link">Back to Home</a>
</div>