<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

/*$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'moodle';
$CFG->dbuser    = 'root';
$CFG->dbpass    = '@ajagbe@';
$CFG->prefix    = 'mdl_';*/

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'den1.mysql4.gear.host';
$CFG->dbname    = 'moodledemo';
$CFG->dbuser    = 'moodledemo';
$CFG->dbpass    = 'In2YO!6rJ?6j';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_0900_ai_ci',
);

//$CFG->wwwroot   = 'http://localhost/moodle';
$CFG->wwwroot   = 'http://lmsdemo.gearhostpreview.com/';
//$CFG->dataroot  = 'C:\\AppServ\\moodledata';/site/wwwroot/moodledata
$CFG->dataroot  = 'http://lmsdemo.gearhostpreview.com/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
