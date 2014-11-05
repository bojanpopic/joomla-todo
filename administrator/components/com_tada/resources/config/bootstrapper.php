<?php
/**
 * @package     Tada
 * @copyright   Copyright (C) 2011 - 2014 Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.joomlatools.com
 */

return array(
    'aliases' => array(
        'com://admin/tada.model.entity.activity'          => 'com:activities.model.entity.activity',
        'com://admin/tada.model.entity.activities'        => 'com:activities.model.entity.activities',
        'com://admin/tada.controller.behavior.purgeable'  => 'com:activities.controller.behavior.purgeable',
        'com://admin/tada.controller.permission.activity' => 'com:activities.controller.permission.activity',
        'com://admin/tada.controller.toolbar.activity'    => 'com:activities.controller.toolbar.activity',
        'com://admin/tada.template.helper.activity'       => 'com:activities.template.helper.activity',
        'com://admin/tada.view.activities.json'           => 'com:activities.view.activities.json',
    ),
    'identifiers' => array(
        'com://admin/tada.controller.item' => array(
            'behaviors' => array('com:activities.controller.behavior.loggable' => array('loggers' => array('com://admin/tada.activity.logger')))
        )
    )
);