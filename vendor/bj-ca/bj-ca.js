var btn = $.fn.button.noConflict() // reverts $.fn.button to jqueryui btn
$.fn.btn = btn // assigns bootstrap button functionality to $.fn.btn
var bootstrapTooltip = $.fn.tooltip.noConflict();
$.fn.bootstrapTt = bootstrapTooltip;