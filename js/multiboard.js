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
    var
        // Declare/Define types to make sure they are what we need
        _types = {
            undefined: '',
            function:  'function',
            object:    'object',
            string:    'string',
            number:    'number'
        },
        
        // Declare the default options to be used throughout the entire plugin
        _defaults;
    
    /**
     * public function $.fn.multiboard( [options] )
     *
     * @description Constructor method to create the keyboard object
     * @param {options} User-supplied options for customized experience
     * @return {this} Returns itself for chaining functions
     */
    $.fn.multiboard = function(options)
    {
        _defaults = _defineDefaults();
        if(typeof options !== _types.undefined && typeof options === _types.object)
        {
            _messageHandler('custom', '"options" is defined.');
            _defaults = _mergeOptions(_defaults, options);
        }
        else
        {
            _messageHandler('custom', '"options" is NOT defined.');
        }
        
        
        // Check if the object we are linking to is defined in the DOM
        if(this.length <= 0)
        {
            _messageHandler('undefinedSelector');
        }
        else
        {
            var objCount = this.length;
            for(var i = 0; i < objCount; ++i)
            {
                this[i].addEventListener('keydown', _keyboardListener);
            }
        }
        
        
        return this;
    }
    
    /**
     * private function _keyboardListener( object thisObject )
     *
     * @description Activates the keyboard listener
     * @param {Object} thisObject DOM object(s) reference to listen
     * @return NULL
     */
    function _keyboardListener(event)
    {
        var originalKey = event.which,
            convertedKey;
        
        // NOTE: figure out conversion process (external js script / JSON)
        // Also need to figure out what the default language is for user keyboard and find appropriate conversion.
        
        console.log(originalKey);
        console.log(convertedKey);
    }
    
    /**
     * private function _mergeOptions( object options )
     * 
     * @description Recursive "merge" function between user and plugin options
     * @param {Object} options User-defined options
     * @return {Object} User-defined plugin options
     */
    function _mergeOptions(defaults, options)
    {
        var objCount = options.length;
        for(var key in options)
        {
            // Only proceed if the user-defined options match the default options
            if(key in defaults)
            {
                // Use recursion if the element is an object
                if(typeof options[key] === _types.object)
                {
                    // Are objects the same?
                    if(typeof defaults[key] === _types.object)
                    {
                        // Dive deeper
                        _mergeOptions(defaults[key], options[key]);
                    }
                    else
                    {
                        // Warn user their options object isn't correct
                        _messageHandler('invalidOptions');
                    }
                }
                else
                {
                    // If both object keys are not objects, overwrite default with user-defined
                    if(typeof defaults[key] !== _types.object)
                    {
                        defaults[key] = options[key];
                    }
                    else
                    {
                        // Warn user their options object isn't correct
                        _messageHandler('invalidOptions');
                    }
                }
            }
            else
            {
                // Warn user their options object isn't correct
                _messageHandler('invalidOptions');
            }
        }
        
        return defaults;
    }
    
    /**
     * private function _defineDefaults()
     * 
     * @description Helper function to define the plugin's default options
     * @return {Object} Defined default options
     */
    function _defineDefaults()
    {
        return {
        language: 'french',
        some: {
            thing: 'cool',
            man: 'yeah'
        },
        wat: 12345,
        hey: {
            lets: {
                check: {
                    out: 'recursion'
                }
            },
            buddy: 999
        }
        };
    }
    
    /**
     * private function _messageHandler( string type, string message )
     *
     * @description Helper function to hold all error messages provided for the user
     * @param {String} type The message variable to select what the user needs to know
     * @param {String} message Custom message for user
     * @return NULL
     */
    function _messageHandler(type, message)
    {
        if(typeof message === _types.string)
        {
            type = 'custom';
        }
        
        switch(type)
        {
        case 'custom':
            console.log(message);
            break;
            
        case 'invalidOptions':
            console.warn('Multi-Board Options object is not properly defined, truncating invalid data.');
            break;
            
        case 'defaultLog':
            console.log('Something happened that makes me have to say... something...');
            break;
            
        case 'defaultWarning':
            console.warn('Something is not quite right, but we can proceed.');
            break;
            
        case 'undefinedSelector':
            console.error('There is no object provided, failed to set up Multi-Board.');
            return 1;
            
        case 'defaultError':
            console.error('An error has occurred with the plugin.');
            return 1;
            
        default:
            console.error('Something went terribly wrong! (_messageHandler(string): switch default activated)');
            return 1;
        }
        
        // Return normal if error did not occur
        return 0;
    }
    
}(jQuery));