<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Zend\Paginator\Paginator;

class ProductController extends FrontendController
{
    public function defaultAction(Request $request)
    {
    
    	

    }
    
    public function homeAction(Request $request)
    {
    
    	

    }
    
    public function productAction(Request $request)
    {
    	
    	
    	
        
    }
    
    public function fromAction(Request $request)
    {
    
    	$feedback = new \Pimcore\Model\DataObject\Feedback();
    	$this->view->feedback=$feedback;
    	

    }
}
