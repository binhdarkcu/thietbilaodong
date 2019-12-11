<?php

?>
    <div class="wrap">
    <!-- markup code goes here -->
    <form class="form-cover" action="options.php" method="POST">
        <?php
        settings_fields( 'floating-button-settings' );
        do_settings_sections( 'floating-button-settings' );
        ?>
        
    <div class="fmbl-heading"><h2>Floating Menu</h2>
    <b>Enable/Disable:</b> <input type="checkbox" name="fmbl_activate_option" id="fmbl_activate_option" value="activate" <?php if ('activate' == ( get_option('fmbl_activate_option') )) { echo 'checked'; } ?> />
    </div>
        <table class="fmbl-option"> 
            <tr class="fmbl-menu-title">
                <td colspan="4"><h3>MENU OPTION :</h3></td>
            </tr>
            <tr class="line_tr" >
                <td colspan="4"><div class="line_div"></div></td>
            </tr>                
            <tr class="fmbl-field-url">
                <td>URL 1</td>
                <td><input type="text" placeholder="http://" name="fmbl_option_1" value="<?php echo esc_url( get_option('fmbl_option_1') ); ?>"></td>
                <td>
                    <select name="fmbl_option_6" id="fmbl_option_6">
                    <option selected disabled="disabled">Choose Icon</option>    
                        <?php
                            foreach ($arr as $key => $value) { ?>
                            <option value="<?php echo $key; ?>"<?php if ($key == esc_attr( get_option('fmbl_option_6'))) echo "selected='selected'"; ?>> <?php echo $value; ?></option>
                        <?php }
                        ?>
                    </select>
                </td>
                <td>                        
                    <i class="fa fa-<?php echo esc_attr( get_option('fmbl_option_6'));  ?>"></i>
                </td>
            </tr> 
            <tr class="fmbl-field-url">
                <td>URL 2</td>
                <td><input type="text" placeholder="http://" name="fmbl_option_2" value="<?php echo esc_url( get_option('fmbl_option_2') ); ?>"></td>
                <td>
                    <select name="fmbl_option_7" id="fmbl_option_7">
                    <option selected disabled="disabled">Choose Icon</option>  
                        <?php
                            foreach ($arr as $key => $value) { ?>
                            <option value="<?php echo $key; ?>"<?php if ($key == esc_attr( get_option('fmbl_option_7'))) echo "selected='selected'"; ?>> <?php echo $value; ?></option>
                        <?php }
                        ?>
                    </select>            
                </td>
                <td>                        
                    <i class="fa fa-<?php echo esc_attr( get_option('fmbl_option_7'));  ?>"></i>
                </td>
            </tr>
            <tr class="fmbl-field-url">
                <td>URL 3</td>
                <td><input type="text" placeholder="http://" name="fmbl_option_3" value="<?php echo esc_url( get_option('fmbl_option_3') ); ?>"></td>
                <td>
                    <select name="fmbl_option_8" id="fmbl_option_8">
                    <option selected disabled="disabled">Choose Icon</option>  
                        <?php
                            foreach ($arr as $key => $value) { ?>
                            <option value="<?php echo $key; ?>"<?php if ($key == esc_attr( get_option('fmbl_option_8'))) echo "selected='selected'"; ?>> <?php echo $value; ?></option>
                        <?php }
                        ?>
                    </select>
                </td>        
                <td>                        
                    <i class="fa fa-<?php echo esc_attr( get_option('fmbl_option_8'));  ?>"></i>
                </td>
            </tr>
            <tr class="fmbl-field-url">
                <td>URL 4</td>
                <td><input type="text" placeholder="http://" name="fmbl_option_4" value="<?php echo esc_url( get_option('fmbl_option_4') ); ?>"></td>
                <td>
                    <select name="fmbl_option_9" id="fmbl_option_9">
                    <option selected disabled="disabled">Choose Icon</option>  
                        <?php
                            foreach ($arr as $key => $value) { ?>
                            <option value="<?php echo $key; ?>"<?php if ($key == esc_attr( get_option('fmbl_option_9'))) echo "selected='selected'"; ?>> <?php echo $value; ?></option>
                        <?php }
                        ?>
                    </select>
                </td>
                <td>                        
                    <i class="fa fa-<?php echo esc_attr( get_option('fmbl_option_9'));  ?>"></i>
                </td>        
            </tr>
            <tr class="fmbl-field-url">
                <td>URL 5</td>
                <td><input type="text" placeholder="http://" name="fmbl_option_5" value="<?php echo esc_url( get_option('fmbl_option_5') ); ?>"></td>
                <td>
                    <select name="fmbl_option_10" id="fmbl_option_10">
                    <option selected disabled="disabled">Choose Icon</option>  
                        <?php
                            foreach ($arr as $key => $value) { ?>
                            <option value="<?php echo $key; ?>"<?php if ($key == esc_attr( get_option('fmbl_option_10'))) echo "selected='selected'"; ?>> <?php echo $value; ?></option>
                        <?php }
                        ?>
                    </select>
                </td>
                <td>                        
                    <i class="fa fa-<?php echo esc_attr( get_option('fmbl_option_10'));  ?>"></i>
                </td>
            </tr>                
        </table>
        <table class="fmbl-table2">   
            <tr class="fmbl-menu-title">
                <td colspan="4"><h3>MENU STYLE :</h3></td>
            </tr>
            <tr class="line_tr" >
                <td colspan="4"><div class="line_div"></div></td>
            </tr> 
            <tr>
                <td>Icon</td>  
                <td>
                    <select name="fmbl_option_11" id="fmbl_option_11">
                    <option selected disabled="disabled">Choose Icon</option>  
                        <?php
                            foreach ($arr as $key => $value) { ?>
                            <option value="<?php echo $key; ?>"<?php if ($key == esc_attr( get_option('fmbl_option_11'))) echo "selected='selected'"; ?>> <?php echo $value; ?></option>
                        <?php }
                        ?>
                    </select>
                    <span><i class="fa fa-<?php echo esc_attr( get_option('fmbl_option_11'));  ?>"></i></span>
                </td>
            </tr>
            <tr>
                <td>Position</td>
                <td>
                    <input type="radio" name="fmbl_radio_option_1" id="fmbl-rad-pos-1" value="left"<?php if ('left' == esc_attr( get_option('fmbl_radio_option_1'))) { echo 'checked'; } ?> /> 
                    <label for="fmbl-rad-pos-1">Left</label>
                    <input type="radio"  name="fmbl_radio_option_1" id="fmbl-rad-pos-2" value="right"<?php if ('right' == esc_attr( get_option('fmbl_radio_option_1'))) { echo 'checked'; } ?> /> 
                    <label for="fmbl-rad-pos-2">Right</label>
                </td>
            </tr>
            <tr>
                <td>Icon Size</td>
                <td>
                    <input class="fmbl_inputsize" type="number" placeholder="icon size" name="fmbl_isize_option" step="any" value="<?php echo (int) get_option('fmbl_isize_option'); ?>">
                    <span>
                        <input class="fmbl-font-format" id="fmbl-rad-siz-1" type="radio" name="fmbl_radio_option_2" value="pixel"<?php if ('pixel' == esc_attr( get_option('fmbl_radio_option_2'))) { echo 'checked'; } ?> /> 
                        <label for="fmbl-rad-siz-1">px</label>
                        <input class="fmbl-font-format"  id="fmbl-rad-siz-2" type="radio" name="fmbl_radio_option_2" value="enum"<?php if ('enum' == esc_attr( get_option('fmbl_radio_option_2'))) { echo 'checked'; } ?> /> 
                        <label for="fmbl-rad-siz-2">em</label>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Menu Background</td>
                <td class="fmbl-col-pick">
                <span class="fmbl-picker-fix"><input type="text" class="color-field" name="fmbl_normal_color" value="<?php echo esc_attr( get_option('fmbl_normal_color') ); ?>">
                </span>
            </td>
            </tr>
            <tr>
                <td>Icon</td>
                <td class="fmbl-col-pick">
                    <input type="text" class="color-field" name="fmbl_icolor_option" value="<?php echo esc_attr( get_option('fmbl_icolor_option') ); ?>">
                </td>
            </tr>
            <tr>
                <td>Icon Background</td>
                <td class="fmbl-col-pick">
                    <input type="text" class="color-field" name="fmbl_bcolor_option" value="<?php echo esc_attr( get_option('fmbl_bcolor_option') ); ?>">
                </td>
            </tr>
            <tr>
            <td>Icon Background Hover</td>
            <td class="fmbl-col-pick">
                <span class="fmbl-picker-fix"><input type="text" class="color-field" name="fmbl_hover_color" value="<?php echo esc_attr( get_option('fmbl_hover_color') ); ?>">
                </span>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td><?php submit_button(); ?></td>
            </tr>
        </table>
    </form>
    </div>