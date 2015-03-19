<?php ?>
  <div class="theme-options-wrap">
   <div class="icon32" id="icon-tools"><br></div>
  <h2>Parkview Theme Options Page</h2>

  <form method="post" action="options.php">
    <?php settings_fields( 'parkview-settings-group' ); ?>
    <?php $parkview_options = get_option( 'parkview_options' ); ?>
    <table class="form-table">
      <tr valign="top">
      <th scope="row">Name</th>
      <td><input type="text" name="parkview_options[option_name]" value="<?php echo esc_attr( $parkview_options['option_name'] ); ?>" /></td>
      </tr>

      <tr valign="top">
      <th scope="row">Email</th>
      <td><input type="text" name="parkview_options[option_email]" value="<?php echo esc_attr( $parkview_options['option_email'] ); ?>" /></td>
      </tr>

      <tr valign="top">
      <th scope="row">URL</th>
      <td><input type="text" name="parkview_options[option_url]" value="<?php echo esc_url( $parkview_options['option_url'] ); ?>" /></td>
      </tr>
    </table>

    <p class="submit">
      <input type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />
    </p>

  </form>
  </div>
