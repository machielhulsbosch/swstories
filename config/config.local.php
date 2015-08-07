<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Local config overrides & db credentials
 *
 * Our database credentials and any environment-specific overrides
 * This file should be specific to each developer and not tracked in Git
 *
 * @package    Focus Lab Master Config
 * @version    1.1.1
 * @author     Focus Lab, LLC <dev@focuslabllc.com>
 */

ini_set('display_errors',1);
error_reporting(E_ALL);

// Local testing email address
$env_config['webmaster_email'] = 'info@qforma.nl';

$env_config['cp_url'] = 'http://'.$_SERVER['HTTP_HOST'].'/project/swstories/admin.php';

// use augmented mysql driver, for the extra capabilities
// See also the configs below
$env_db['dbdriver'] = 'qforma_mysql';

/**
 * DB Changelog config
 * Requirements: qforma_mysql driver
 *
 * Config to write logs tracking changes in the database. This is usefull for version-control changes
 * and synching database between develop and production server. As always, also use backups.
 *
 * Suggested workflow:
 * 	Ensure a clean changelog file
 * 	Make modifications in controlpanel
 * 	Rename changelog file with date-time name
 * 	Commit renamed changelog
 */
$env_config['db_changelog_use'] = true;
$env_config['db_changelog_loc'] = 'db/log/_current.log';

/**
 * DB auto-backup config
 * Requirements: qforma_mysql driver
 *
 * Config to backup database at the start of the day. This is usefull to guarantee the database is backed
 * up before each day of development. The developer is responsible for keeping track of these backups
 */
$env_config['db_autobackup_use'] = true;
$env_config['db_autobackup_dir'] = 'db/autobackup/';

/* End of file config.local.php */
/* Location: ./config/config.local.php */