<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "frontend_editing".
 *
 * Auto generated 07-04-2017 14:21
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Frontend Editing',
  'description' => 'Enable editors to work with the content in the most intuitive way possible',
  'category' => 'fe',
  'state' => 'stable',
  'uploadfolder' => false,
  'createDirs' => '',
  'clearCacheOnLoad' => 1,
  'author' => 'TYPO3 Community',
  'author_email' => 'typo3cms@typo3.org',
  'author_company' => '',
  'version' => '1.0.1',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '8.7.0-8.7.99',
      'setup' => '8.7.0-8.7.99',
      'rte_ckeditor' => '8.7.0-8.7.99',
    ),
    'conflicts' => 
    array (
      'feedit' => '',
    ),
    'suggests' => 
    array (
    ),
  ),
  'clearcacheonload' => true,
);

