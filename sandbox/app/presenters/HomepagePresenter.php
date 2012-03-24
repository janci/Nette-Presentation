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
 * Homepage presenter.
 * @author Svantner Jan
 * @package    MyApplication
 */
class HomepagePresenter extends BasePresenter
{

	public function renderDefault()
	{
		$this->template->anyVariable = 'any value';
                $myclass = $this->getService('myclass');
                \Nette\Diagnostics\Debugger::barDump($myclass);
                $parameters = $this->getContext()->getParameters();
                \Nette\Diagnostics\Debugger::barDump($parameters);
	}

}
