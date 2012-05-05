<?php
class Translator implements Nette\Localization\ITranslator {
    public function translate($message, $count = NULL, $arg=null) {
        if(isset($arg))
            foreach($arg as $pattern=>$val)
                $message = str_replace('{'.$pattern.'}', $val, $message);
        
        return "X$message";
    }
}

