<?php
/**
 * Cross Applicant Management
 *
 * @filesource
 * @copyright (c) 2013 Cross Solution (http://cross-solution.de)
 * @license   AGPLv3
 */

/** ApplyIdentifierElement.php */ 
namespace Jobs\Form;

use Zend\Form\Element\Text;
use Core\Form\ViewPartialProviderInterface;

class ApplyIdentifierElement extends Text implements ViewPartialProviderInterface
{
    
    protected $partial = 'jobs/form/apply-identifier';
    
    public function getViewPartial()
    {
        return $this->partial;
    }
    
    public function setViewPartial($partial)
    {
        $this->partial = $partial;
        return $this;
    }
}

