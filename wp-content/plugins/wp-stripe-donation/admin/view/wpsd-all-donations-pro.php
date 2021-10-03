<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$showMessage = '';
$wrongApply = '';

// bulk action
if ( isset( $_POST['bulkSubmit'] ) ) {
    
    $showMessage = $this->wpsd_delete_bulk_donation( $_POST['bulkAction'] );

}

// change any single action
if ( isset( $_GET['delID'] ) ) {

    $showMessage = $this->wpsd_delete_donation( $_GET['delID'] );

}
?>
<div id="wpsd-wrap-all" class="wrap">

    <h2><?php _e('Donations Information', WPSD_TXT_DOMAIN); ?></h2><br>

    <?php 
        if ( '' !== $showMessage ) {
            $this->wpsd_display_notification('info', $showMessage);
        }

        if ( '' !== $wrongApply ) {
            $this->saf_display_notification('error', $wrongApply);
        }
    ?>

    <form id="posts-filter" class="submitterRequest" method="post" action="?page=wpsd-all-donations">
        <div class="alignleft actions clbForm" >
            <select class="changeData" name="bulkAction">
                <option value="">-- <?php _e('BULK ACTION', WPSD_TXT_DOMAIN); ?> --</option>
                <option value="delAll"><?php _e('Delete', WPSD_TXT_DOMAIN); ?></option>
            </select>
            <input type="submit" value="<?php _e('Apply', WPSD_TXT_DOMAIN); ?>" class="button" name="bulkSubmit">
        </div>
        <table class="wp-list-table widefat fixed striped table-view-list posts" cellspacing="0" id="wpc_data_table">
            <thead>
                <tr>
                    <?php print_column_headers('wpsd-column-table'); ?>
                </tr>
            </thead>
            <tbody id="the-list">
                <?php
                $wpsdDonations = $this->wpsd_get_all_donations_full();
                if ( count( $wpsdDonations ) > 0 ) {
                    foreach ( $wpsdDonations as $donation ) {
                        ?>
                        <tr>
                            <td><input type="checkbox" class="bulkSelect" name="bulkSelection[]" value="<?php esc_attr_e( $donation->wpsd_id ); ?>"></td>
                            <td class="wpsd-donated-amount" style="min-width: 200px;"><?php printf('%s (%s)', $donation->wpsd_donated_amount, $donation->wpsd_donator_phone ); ?></td>
                            <td><?php esc_html_e( $donation->wpsd_donation_for ); ?></td>
                            <td><?php esc_html_e( $donation->wpsd_donator_name ); ?></td>
                            <td><?php esc_html_e( $donation->wpsd_donator_email ); ?></td>
                            <td><?php echo date('M d, h:i A', strtotime( $donation->wpsd_donation_datetime )); ?></td>
                            <td>
                                <span class="delReq">
                                    <a href="?page=wpsd-all-donations&delID=<?php esc_attr_e( $donation->wpsd_id ); ?>" class="reqDel"><?php _e('DELETE', WPSD_TXT_DOMAIN); ?></a>
                                </span>
                            </td>
                        </tr>
                        <?php 
                    }
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <?php print_column_headers('wpsd-column-table', false); ?>
                </tr>
            </tfoot>
        </table>
    </form>
</div>