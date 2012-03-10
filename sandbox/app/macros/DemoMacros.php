<?php
class DemoMacros extends Nette\Latte\Macros\MacroSet {
    public static function install(\Nette\Latte\Compiler $compiler) {
        $me = new static($compiler);
        $me->addMacro('hello','echo "Hello world :)"');
        $me->addMacro('try','try {', '}catch(\Exception $e){}');
        return $me;
    }
}
