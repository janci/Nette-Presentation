<?php

class DumpPresenter implements \Nette\Application\IPresenter {
    public function run(\Nette\Application\Request $request) {
        $arr = array_fill(1,10,10);
        
        dump($arr);
        Nette\Diagnostics\Debugger::dump($arr);
        Nette\Diagnostics\Debugger::barDump($arr,'title');
        Nette\Diagnostics\Debugger::log("Information");
        Nette\Diagnostics\Debugger::fireLog('Firefox Logger');
    }
}
