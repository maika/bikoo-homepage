<?php


if(defined('W3TC') && W3TC && empty($this->settings['dismiss_object_cache_warning'])){
    $w3tc_config = & w3_instance('W3_Config');
    if ($w3tc_config->get_boolean('objectcache.enabled') && $w3tc_config->get_integer('objectcache.lifetime') > 0) {
        add_action('admin_notices', 'icl_persistent_object_cache_warning');
        
        function icl_persistent_object_cache_warning(){
            ?>
            <div class="error">
                <p style="float:right;"><a onclick="var athis = jQuery(this); jQuery.ajax({url:icl_ajx_url, type:'POST', data:{'icl_ajx_action':'dismiss_object_cache_warning', '_icl_nonce':'<?php echo wp_create_nonce('dismiss_object_cache_warning_nonce'); ?>'}, success: function(){athis.parent().parent().fadeOut();}}); return false;" href="#"><?php _e('Dismiss', 'sitepress') ?></a></p>
                <p>
                    <?php printf(__('Your site uses <a%s>persistent object caching</a>, which is currently not compatible with WPML.', 'sitepress'), ' href="' . admin_url('admin.php?page=w3tc_objectcache') . '"') ?><br />
                    <?php printf(__('Please <a%s>disable Object Caching</a> to avoid data corruption.', 'sitepress'), ' href="' . admin_url('admin.php?page=w3tc_general') . '"') ?>
                </p>                       
            </div>
            <?php
        }
    }
} 

global $_wp_using_ext_object_cache;
if(isset($_wp_using_ext_object_cache) && $_wp_using_ext_object_cache && empty($this->settings['dismiss_object_cache_warning'])){
    add_action('admin_notices', 'icl_persistent_object_cache_warning');
    
    function icl_persistent_object_cache_warning(){
        ?>
        <div class="error">
            <p style="float:right;"><a onclick="var athis = jQuery(this); jQuery.ajax({url:icl_ajx_url, type:'POST', data:{'icl_ajx_action':'dismiss_object_cache_warning', '_icl_nonce':'<?php echo wp_create_nonce('dismiss_object_cache_warning_nonce'); ?>'}, success: function(){athis.parent().parent().fadeOut();}}); return false;" href="#"><?php _e('Dismiss', 'sitepress') ?></a></p>
            <p>
                <?php printf(__('Your site uses <a%s>persistent object caching</a>, which is currently not compatible with WPML.', 'sitepress'), ' href="' . admin_url('options-general.php?page=wpsupercache&tab=settings') . '"') ?><br />
                <?php printf(__('Please <a%s>disable Object Caching</a> to avoid data corruption.', 'sitepress'), ' href="' . admin_url('options-general.php?page=wpsupercache&tab=settings') . '"') ?>
            </p>                       
        </div>
        <?php
    }
} 




