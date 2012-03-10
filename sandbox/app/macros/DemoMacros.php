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
 * Create demo macros for presentation
 * @author Svantner Jan
 */
class DemoMacros extends Nette\Latte\Macros\MacroSet {
    /**
     * Overide methods to initialize new macros for template
     * @param \Nette\Latte\Compiler $compiler
     * @return DemoMacros 
     */
    public static function install(\Nette\Latte\Compiler $compiler) {
        $me = new static($compiler);
        $me->addMacro('hello','echo "Hello world :)"');
        $me->addMacro('try','try {', '}catch(\Exception $e){}');
        return $me;
    }
}
