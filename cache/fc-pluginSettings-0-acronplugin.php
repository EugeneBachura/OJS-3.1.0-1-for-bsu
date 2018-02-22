<?php return array (
  'crontab' => 
  array (
    0 => 
    array (
      'className' => 'plugins.importexport.crossref.CrossrefInfoSender',
      'frequency' => 
      array (
        'hour' => 24,
      ),
      'args' => 
      array (
      ),
    ),
    1 => 
    array (
      'className' => 'plugins.importexport.datacite.DataciteInfoSender',
      'frequency' => 
      array (
        'hour' => 24,
      ),
      'args' => 
      array (
      ),
    ),
    2 => 
    array (
      'className' => 'plugins.importexport.medra.MedraInfoSender',
      'frequency' => 
      array (
        'hour' => 24,
      ),
      'args' => 
      array (
      ),
    ),
    3 => 
    array (
      'className' => 'lib.pkp.classes.task.ReviewReminder',
      'frequency' => 
      array (
        'hour' => 24,
      ),
      'args' => 
      array (
      ),
    ),
  ),
  'enabled' => true,
); ?>