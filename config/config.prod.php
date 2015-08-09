<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Production config overrides & db credentials
 *
 * Our database credentials and any environment-specific overrides
 *
 * @package    Focus Lab Master Config
 * @version    1.1.1
 * @author     Focus Lab, LLC <dev@focuslabllc.com>
 */


// Sample global variable for Production only
// Can be used in templates like "{global:google_analytics}"
$env_global['global:google_analytics'] = 'UA-XXXXXXXX-XX';

$env_config['cp_url'] = 'http://www.your-project.nl/admin.php';

    // Start our array with environment variables. This gives us {global:env} and {global:env_full} tags for our templates.
    $master_global = array(
        'global:env'        => ENV,
        'global:env_full'   => ENV_FULL,
        'global:base_url'   => $env_config['base_url'],
        'global:cache_bust' => '20131002',
    );

/* End of file config.prod.php */
/* Location: ./config/config.prod.php */