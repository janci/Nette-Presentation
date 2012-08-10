<?php
/**
 * This file is part of the Nette Presentation project
 *
 * Copyright (c) 2012 Jan Svantner, Peter Szabo
 *
 * For the full copyright and license information, please view
 * the file license.txt that was distributed with this source code.
 */

/**
 * Demo presenter for demonstration nette snippetns and handlers 
 * @author Svantner Jan <posta.janci@gmail.com>
 */
class PresentationPresenter extends BasePresenter
{
    /**
     * Handler for change message on page 
     */
    public function handleMyhandler(){
        //change some content in the snippet
        $this->template->message = 'Call handler `Myhandler`.';
        
        //invalidate the snippet
        $this->invalidateControl('changeMessage');
        
        //invalidate all the snippets in the template
        //$this->invalidateControl();
        
	//the snippet can be also validated back
        //$this->validateControl('changeMessage');
    }
    
    /**
     * Handler to set message back to original 
     */
    public function handleSetback(){
        unset($this->template->message);
        $this->invalidateControl('changeMessage');
    }
    
    
}
