/**
 * jQuery plugin: multiboard
 * 
 * Authored by:
 *  - Patrick Barnum
 * 
 * // License: GNU Free Documentation License (GFDL)
 * This plugin is written for the benefit of all, please feel free to use, modify, and redistribute while keeping this same license.
 * 
 * Multi-Board: A plugin written for the jQuery library used to display a multi-language keyboard for text inputs.
 */

(function($)
{
    'use strict';
    
    // Global variables
    var types = {
            undefined: '',
            object:    'object',
            array :    'array',
            string:    'string',
            number:    'number'
        };
    
    /**
     * multiboard([options])
     *
     * @description Constructor method to create the keyboard object
     * 
     * @param options User-supplied options for customized experience
     * 
     * @return this Returns itself for chaining functions
     */
    $.fn.multiboard = function(options)
    {
        if(typeof options !== types.undefined && typeof options === types.object)
        {
            console.log('"options" is defined.');
        }
        else
        {
            console.log('"options" is NOT defined.');
        }
        
        return this;
    }
    
}(jQuery));