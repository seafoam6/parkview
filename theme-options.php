<?php ?>
<div class="wrap">
<h2>Parkview Options</h2>
  <form method="post" action="options.php">
  <?php  settings_fields('parkview-settings-group');
        $parkview_options = get_option('parkview_options'); ?>
    <table class="form-table">
      <tr valign="top">
      <th scope="row">Name</th>
      <td><input type="text" name="parkview_options[option_name]" value="<?php echo esc_attr($parkview_options['option_name']); ?>" /></td>

    </table>
  <p class="submit">
    <input type="submit" class="button-primary" value="Save Changes" />
  </p>
  </form>
</div><!--wrap-->