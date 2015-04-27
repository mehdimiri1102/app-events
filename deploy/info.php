<?php

/////////////////////////////////////////////////////////////////////////////
// General information
/////////////////////////////////////////////////////////////////////////////

$app['basename'] = 'events';
$app['version'] = '2.0.20';
$app['release'] = '1';
$app['vendor'] = 'ClearFoundation';
$app['packager'] = 'ClearFoundation';
$app['license'] = 'GPLv3';
$app['license_core'] = 'LGPLv3';
$app['description'] = lang('events_app_description');

/////////////////////////////////////////////////////////////////////////////
// App name and categories
/////////////////////////////////////////////////////////////////////////////

$app['name'] = lang('events_app_name');
$app['category'] = lang('base_category_reports');
$app['subcategory'] = lang('base_subcategory_performance_and_resources');

/////////////////////////////////////////////////////////////////////////////
// Packaging
/////////////////////////////////////////////////////////////////////////////

$app['core_only'] = TRUE;

$app['core_obsoletes'] = array(
    'app-clearsync-core',
);

$app['core_requires'] = array(
    'clearsync',
);

$app['core_directory_manifest'] = array(
    '/var/clearos/events' => array(),
);

$app['core_file_manifest'] = array(
    'clearsync.php'=> array('target' => '/var/clearos/base/daemon/clearsync.php'),
    'trigger' => array(
        'target' => '/usr/sbin/trigger',
        'mode' => '0755',
        'owner' => 'root',
        'group' => 'root',
    ),
);
