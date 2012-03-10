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
 * Base class for all application presenters.
 * @author Svantner Jan
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
    /**
     * Create new copyright component
     * @return \Copyright 
     */
    public function createComponentCopyright(){
        $copyright = new Copyright();
        $copyright->setCompanyName('Webcreator s.r.o');
        $copyright->setCreatedYear('2010');
        return $copyright;
    }
}
