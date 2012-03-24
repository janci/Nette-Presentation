<?php //netteCache[01]000392a:2:{s:4:"time";s:21:"0.78672500 1331386753";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:70:"/home/weby/nette_demo/sandbox/app/templates/Presentation/default.latte";i:2;i:1331386649;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"94abcaa released on 2012-02-29";}}}?><?php

// source file: /home/weby/nette_demo/sandbox/app/templates/Presentation/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'cfz8a7xvbd')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb2fd99804a2_content')) { function _lb2fd99804a2_content($_l, $_args) { extract($_args)
?>Here is macro hello: <?php echo "Hello world :)" ?> <br />

<?php try { throw new \Exception('Here is any error.',2001); }catch(\Exception $e){} ?>

<br />

<a href="<?php echo htmlSpecialChars($_control->link("myhandler!")) ?>" class="ajax" style="color: red;">Url: <?php echo Nette\Templating\Helpers::escapeHtml($_control->link("myhandler!"), ENT_NOQUOTES) ?></a><br />
<a href="<?php echo htmlSpecialChars($_control->link("setback!")) ?>" class="ajax" style="color: red;">Url: <?php echo Nette\Templating\Helpers::escapeHtml($_control->link("setback!"), ENT_NOQUOTES) ?></a><br />

<a href="<?php echo htmlSpecialChars($_control->link("myhandler!")) ?>" style="color: red;">Url: <?php echo Nette\Templating\Helpers::escapeHtml($_control->link("myhandler!"), ENT_NOQUOTES) ?> (without ajax)</a><br /><br />

<div id="<?php echo $_control->getSnippetId('changeMessage') ?>"><?php call_user_func(reset($_l->blocks['_changeMessage']), $_l, $template->getParameters()) ?>
</div> <br />

<div class="footer"><?php $_ctrl = $_control->getComponent("copyright"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?></div>
<div class="footer">Copyright <?php $_ctrl = $_control->getComponent("copyright"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->renderYear() ?>
 ~ <?php $_ctrl = $_control->getComponent("copyright"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->renderCompany() ?>
</div><?php
}}

//
// block _changeMessage
//
if (!function_exists($_l->blocks['_changeMessage'][] = '_lb0b179dc6b6__changeMessage')) { function _lb0b179dc6b6__changeMessage($_l, $_args) { extract($_args); $_control->validateControl('changeMessage')
;echo Nette\Templating\Helpers::escapeHtml($message, ENT_NOQUOTES) ;
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
 extract(array('message' => 'All is ok.'), EXTR_SKIP) ?>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 