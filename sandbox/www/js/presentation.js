/**
 * This file is part of the Nette Presentation project
 *
 * Copyright (c) 2012 Jan Svantner, Peter Szabo
 *
 * For the full copyright and license information, please view
 * the file license.txt that was distributed with this source code.
 */

/* initialization for variable presentation */
var presentation = presentation || {};

presentation.framework = undefined;

/* on load body initialization */
presentation.onLoadBody = function(fn){
    presentation.framework(presentation).bind('onLoadBody',fn);
};

/* create class presentation */
presentation.ajax = function(){
    var f = presentation.framework
    presentation.onLoadBody(function(){
        f('body').on('click', 'a.ajax', function(event){event.preventDefault(); f.get(this.href); });
    });
}


/* initialization presentation */
;(function(framework,undefined){
    presentation.framework = framework;
    var ajax = new this.ajax();
    
    framework(window).on('load', function(){ framework(presentation).trigger('onLoadBody'); });
}).call(presentation, jQuery);
