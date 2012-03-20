<?php
/**
 * Copyright 2012, Jason D Snider (https://jasonsnider.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2012, Jason D Snider (https://jasonsnider.com)
 * @link https://jasonsnider.com
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Group', 'Model');
/**
 * Provides a means by which to painlessly create sitemaps against any data
 * 
 * @package Plugin.ContentFilter
 * @subpackage Plugin.ContentFilter.Model
 * @author Jason D Snider 
 */
class Sitemap extends AppModel
{
    /** 
     * @var array
     * @access public
     */
    public $belongsTo = array(
        'Content' => array(
            'className' => 'Content',
            'foreignKey' => 'model_id',
            'conditions'=>array('Sitemap.model_id LIKE "Content"'),
            'dependent' => true
        )
    );
}
