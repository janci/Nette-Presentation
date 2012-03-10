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
 * Components for rendering copyright
 *
 * @author Svantner Jan
 */
class Copyright extends Nette\Application\UI\Control {
    
    /**
     * Set created year
     * @param int $year 
     */
    public function setCreatedYear($year){
        $this->template->created_year = $year;
    }    
    
    /**
     * Set current year
     * @param int $year 
     */
    public function setCurrentYear($year){
        $this->template->year = $year;
    }
    
    /**
     * Set company name
     * @param string $company_name 
     */
    public function setCompanyName($company_name){
        $this->template->company_name = $company_name;
    }
    
    /**
     * Render year part 
     */
    public function renderYear(){
        $template = $this->getTemplate();
        $template->setFile(__DIR__. '/year.latte');
        $template->render();
    }
    
    /**
     * Render company name part 
     */
    public function renderCompany(){
        $template = $this->getTemplate();
        $template->setFile(__DIR__. '/company.latte');
        $template->render();
    }
    
    /**
     * render copyright component 
     */
    public function render(){
        $template = $this->getTemplate();
        $template->setFile(__DIR__. '/template.latte');
        $template->render();
    }
}

