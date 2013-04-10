/**
 * Adds a class to links to allow for informative decoration.
 * Yes this can in part also be accomplished with CSS: a[src$=".ext"]
 *
 * References: jqueryboilerplate.com
 * @package    Code Snippets
 * @subpackage JS
 * @author     Kevin A. Cameron <kevin AT kacevisual DOT com>
 * @copyright  None
 * @license    None
 * @version    1.0
 * @link       http://kacevisual.com
 * @since      Plugin available since release 1.3.3
 */

;(function($,window,document,undefined){

    var pluginName = "linkInfo",
        defaults = {
            external: true,
            pdf: true,
            docx: true,
            gif: true
        };

    function Plugin(element, options) {
        this.element = element;

        this.options = $.extend({}, defaults, options);

        this._defaults = defaults;
        this._name = pluginName;

        this.init();
    }

    Plugin.prototype = {
        init: function() {
            $('a').each(function(){
                var path = $(this).attr("href"),
                    linkExt = path.substring(path.lastIndexOf(".")+1,path.length),
                    pageHost = new RegExp(location.host);

                if (defaults[linkExt]) {
                    $(this).addClass("linkInfo-file linkInfo-" + linkExt);
                }
                if (path.substring(0,4) === "http" && !pageHost.test(path)) {
                    $(this).addClass("linkInfo-ext");
                };

            })
        }
    };

    $.fn[pluginName] = function(options) {
        return this.each(function() {
            if (!$.data(this,"plugin_" + pluginName)) {
                $.data(this, "plugin_" + pluginName, new Plugin(this, options));
            }
        })
    }

})(jQuery,window,document);