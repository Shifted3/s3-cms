/**
 * Shifted 3 Content Management System
 *
 * This is the main JavaScript file.
 * Load it after jQuery.
 */

/**
 * Escapes HTML inside the DOM object
 *
 * @param {DOM} object The element to escape.
 * @return None
 */

function escape(object)
{
    object.text(object.html());
}

/**
 * Unescapes HTML inside the DOM object
 *
 * @param {DOM} object The element to unescape.
 * @return None
 */

function unescape(object)
{
    var entityMap = {'&amp;': '&', '&lt;': '<', '&gt;': '>', '&quot;': '"', '&#39;': "'", '&#x2F;': '/', '&#x60;': '`', '&#x3D;': '='};
    var escaped = object.text();
    for(symbol in entityMap)
        escaped.replace(symbol, entityMap[symbol]);
    object.html(escaped);
}

/**
 * Escapes all DOM objects with class 'escape'.
 * Unescapes all DOM objects with class 'unescape'.
 *
 * @param None
 * @return None
 */

$(document).ready(() => { 
    $(".escape").each(function() {
        escape($( this ));
    });
    $(".unescape").each(function() {
        unescape($( this ));
    });
});