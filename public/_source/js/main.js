/*jshint curly:true, eqeqeq:true, laxbreak:true, noempty:false */
/*
 https://github.com/Andr3as/Codiad-Beautify

 The MIT License (MIT)

 Copyright (c) 2007-2013 Einar Lielmanis and contributors.

 Permission is hereby granted, free of charge, to any person
 obtaining a copy of this software and associated documentation files
 (the "Software"), to deal in the Software without restriction,
 including without limitation the rights to use, copy, modify, merge,
 publish, distribute, sublicense, and/or sell copies of the Software,
 and to permit persons to whom the Software is furnished to do so,
 subject to the following conditions:

 The above copyright notice and this permission notice shall be
 included in all copies or substantial portions of the Software.

 THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS
 BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN
 ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 SOFTWARE.


 Style HTML
 ---------------

 Written by Nochum Sossonko, (nsossonko@hotmail.com)

 Based on code initially developed by: Einar Lielmanis, <einar@jsbeautifier.org>
 http://jsbeautifier.org/

 Usage:
 style_html(html_source);

 style_html(html_source, options);

 The options are:
 indent_inner_html (default false)  — indent <head> and <body> sections,
 indent_size (default 4)          — indentation size,
 indent_char (default space)      — character to indent with,
 wrap_line_length (default 250)            -  maximum amount of characters per line (0 = disable)
 brace_style (default "collapse") - "collapse" | "expand" | "end-expand" | "none"
 put braces on the same line as control statements (default), or put braces on own line (Allman / ANSI style), or just put end braces on own line, or attempt to keep them where they are.
 unformatted (defaults to inline tags) - list of tags, that shouldn't be reformatted
 indent_scripts (default normal)  - "keep"|"separate"|"normal"
 preserve_newlines (default true) - whether existing line breaks before elements should be preserved
 Only works before elements, not inside tags or for text.
 max_preserve_newlines (default unlimited) - maximum number of line breaks to be preserved in one chunk
 indent_handlebars (default false) - format and indent {{#foo}} and {{/foo}}
 end_with_newline (false)          - end with a newline


 e.g.

 style_html(html_source, {
 'indent_inner_html': false,
 'indent_size': 2,
 'indent_char': ' ',
 'wrap_line_length': 78,
 'brace_style': 'expand',
 'unformatted': ['a', 'sub', 'sup', 'b', 'i', 'u'],
 'preserve_newlines': true,
 'max_preserve_newlines': 5,
 'indent_handlebars': false
 });
 */
function trim(t){return t.replace(/^\s+|\s+$/g,"")}function ltrim(t){return t.replace(/^\s+/g,"")}function rtrim(t){return t.replace(/\s+$/g,"")}function style_html(t,e,i,n){var s,r,h,a,_,o,u,p,l,c,g,f,d;for(void 0!==(e=e||{}).wrap_line_length&&0!==parseInt(e.wrap_line_length,10)||void 0===e.max_char||0===parseInt(e.max_char,10)||(e.wrap_line_length=e.max_char),r=void 0!==e.indent_inner_html&&e.indent_inner_html,h=void 0===e.indent_size?4:parseInt(e.indent_size,10),a=void 0===e.indent_char?" ":e.indent_char,o=void 0===e.brace_style?"collapse":e.brace_style,_=0===parseInt(e.wrap_line_length,10)?32786:parseInt(e.wrap_line_length||250,10),u=e.unformatted||["a","span","img","bdo","em","strong","dfn","code","samp","kbd","var","cite","abbr","acronym","q","sub","sup","tt","i","b","big","small","u","s","strike","font","ins","del","pre","address","dt","h1","h2","h3","h4","h5","h6"],p=void 0===e.preserve_newlines||e.preserve_newlines,l=p?isNaN(parseInt(e.max_preserve_newlines,10))?32786:parseInt(e.max_preserve_newlines,10):0,c=void 0!==e.indent_handlebars&&e.indent_handlebars,g=void 0===e.wrap_attributes?"auto":e.wrap_attributes,f=void 0===e.wrap_attributes_indent_size?h:parseInt(e.wrap_attributes_indent_size,10)||h,d=void 0!==e.end_with_newline&&e.end_with_newline,(s=new function(){return this.pos=0,this.token="",this.current_mode="CONTENT",this.tags={parent:"parent1",parentcount:1,parent1:""},this.tag_type="",this.token_text=this.last_token=this.last_text=this.token_type="",this.newlines=0,this.indent_content=r,this.Utils={whitespace:"\n\r\t ".split(""),single_token:"br,input,link,meta,!doctype,basefont,base,area,hr,wbr,param,img,isindex,?xml,embed,?php,?,?=".split(","),extra_liners:"head,body,/html".split(","),in_array:function(t,e){for(var i=0;i<e.length;i++)if(t===e[i])return!0;return!1}},this.is_whitespace=function(t){for(;0<t.length;t++)if(!this.Utils.in_array(t.charAt(0),this.Utils.whitespace))return!1;return!0},this.traverse_whitespace=function(){var t="";if(t=this.input.charAt(this.pos),this.Utils.in_array(t,this.Utils.whitespace)){for(this.newlines=0;this.Utils.in_array(t,this.Utils.whitespace);)p&&"\n"===t&&this.newlines<=l&&(this.newlines+=1),this.pos++,t=this.input.charAt(this.pos);return!0}return!1},this.space_or_wrap=function(t){this.line_char_count>=this.wrap_line_length?(this.print_newline(!1,t),this.print_indentation(t)):(this.line_char_count++,t.push(" "))},this.get_content=function(){for(var t="",e=[];"<"!==this.input.charAt(this.pos);){if(this.pos>=this.input.length)return e.length?e.join(""):["","TK_EOF"];if(this.traverse_whitespace())this.space_or_wrap(e);else{if(c){var i=this.input.substr(this.pos,3);if("{{#"===i||"{{/"===i)break;if("{{"===this.input.substr(this.pos,2)&&"{{else}}"===this.get_tag(!0))break}t=this.input.charAt(this.pos),this.pos++,this.line_char_count++,e.push(t)}}return e.length?e.join(""):""},this.get_contents_to=function(t){if(this.pos===this.input.length)return["","TK_EOF"];var e="",i=new RegExp("</"+t+"\\s*>","igm");i.lastIndex=this.pos;var n=i.exec(this.input),s=n?n.index:this.input.length;return this.pos<s&&(e=this.input.substring(this.pos,s),this.pos=s),e},this.record_tag=function(t){this.tags[t+"count"]?(this.tags[t+"count"]++,this.tags[t+this.tags[t+"count"]]=this.indent_level):(this.tags[t+"count"]=1,this.tags[t+this.tags[t+"count"]]=this.indent_level),this.tags[t+this.tags[t+"count"]+"parent"]=this.tags.parent,this.tags.parent=t+this.tags[t+"count"]},this.retrieve_tag=function(t){if(this.tags[t+"count"]){for(var e=this.tags.parent;e&&t+this.tags[t+"count"]!==e;)e=this.tags[e+"parent"];e&&(this.indent_level=this.tags[t+this.tags[t+"count"]],this.tags.parent=this.tags[e+"parent"]),delete this.tags[t+this.tags[t+"count"]+"parent"],delete this.tags[t+this.tags[t+"count"]],1===this.tags[t+"count"]?delete this.tags[t+"count"]:this.tags[t+"count"]--}},this.indent_to_tag=function(t){if(this.tags[t+"count"]){for(var e=this.tags.parent;e&&t+this.tags[t+"count"]!==e;)e=this.tags[e+"parent"];e&&(this.indent_level=this.tags[t+this.tags[t+"count"]])}},this.get_tag=function(t){var e,i,n="",s=[],r="",h=!1,_=!0,o=this.pos,p=this.line_char_count;t=void 0!==t&&t;do{if(this.pos>=this.input.length)return t&&(this.pos=o,this.line_char_count=p),s.length?s.join(""):["","TK_EOF"];if(n=this.input.charAt(this.pos),this.pos++,this.Utils.in_array(n,this.Utils.whitespace))h=!0;else{if("'"!==n&&'"'!==n||(n+=this.get_unformatted(n),h=!0),"="===n&&(h=!1),s.length&&"="!==s[s.length-1]&&">"!==n&&h){if(this.space_or_wrap(s),h=!1,!_&&"force"===g&&"/"!==n){this.print_newline(!0,s),this.print_indentation(s);for(var l=0;l<f;l++)s.push(a)}for(var d=0;d<s.length;d++)if(" "===s[d]){_=!1;break}}if(c&&"<"===i&&n+this.input.charAt(this.pos)==="{{"&&(n+=this.get_unformatted("}}"),s.length&&" "!==s[s.length-1]&&"<"!==s[s.length-1]&&(n=" "+n),h=!0),"<"!==n||i||(e=this.pos-1,i="<"),c&&!i&&s.length>=2&&"{"===s[s.length-1]&&"{"===s[s.length-2]&&(e="#"===n||"/"===n?this.pos-3:this.pos-2,i="{"),this.line_char_count++,s.push(n),s[1]&&"!"===s[1]){s=[this.get_comment(e)];break}if(c&&"{"===i&&s.length>2&&"}"===s[s.length-2]&&"}"===s[s.length-1])break}}while(">"!==n);var w,y,v=s.join("");w=-1!==v.indexOf(" ")?v.indexOf(" "):"{"===v[0]?v.indexOf("}"):v.indexOf(">"),y="<"!==v[0]&&c?"#"===v[2]?3:2:1;var b=v.substring(y,w).toLowerCase();return"/"===v.charAt(v.length-2)||this.Utils.in_array(b,this.Utils.single_token)?t||(this.tag_type="SINGLE"):c&&"{"===v[0]&&"else"===b?t||(this.indent_to_tag("if"),this.tag_type="HANDLEBARS_ELSE",this.indent_content=!0,this.traverse_whitespace()):this.is_unformatted(b,u)?(r=this.get_unformatted("</"+b+">",v),s.push(r),this.pos,this.tag_type="SINGLE"):"script"===b&&(-1===v.search("type")||v.search("type")>-1&&v.search(/\b(text|application)\/(x-)?(javascript|ecmascript|jscript|livescript)/)>-1)?t||(this.record_tag(b),this.tag_type="SCRIPT"):"style"===b&&(-1===v.search("type")||v.search("type")>-1&&v.search("text/css")>-1)?t||(this.record_tag(b),this.tag_type="STYLE"):"!"===b.charAt(0)?t||(this.tag_type="SINGLE",this.traverse_whitespace()):t||("/"===b.charAt(0)?(this.retrieve_tag(b.substring(1)),this.tag_type="END"):(this.record_tag(b),"html"!==b.toLowerCase()&&(this.indent_content=!0),this.tag_type="START"),this.traverse_whitespace()&&this.space_or_wrap(s),this.Utils.in_array(b,this.Utils.extra_liners)&&(this.print_newline(!1,this.output),this.output.length&&"\n"!==this.output[this.output.length-2]&&this.print_newline(!0,this.output))),t&&(this.pos=o,this.line_char_count=p),s.join("")},this.get_comment=function(t){var e="",i=">",n=!1;for(this.pos=t,input_char=this.input.charAt(this.pos),this.pos++;this.pos<=this.input.length&&((e+=input_char)[e.length-1]!==i[i.length-1]||-1===e.indexOf(i));)!n&&e.length<10&&(0===e.indexOf("<![if")?(i="<![endif]>",n=!0):0===e.indexOf("<![cdata[")?(i="]]>",n=!0):0===e.indexOf("<![")?(i="]>",n=!0):0===e.indexOf("\x3c!--")&&(i="--\x3e",n=!0)),input_char=this.input.charAt(this.pos),this.pos++;return e},this.get_unformatted=function(t,e){if(e&&-1!==e.toLowerCase().indexOf(t))return"";var i="",n="",s=0,r=!0;do{if(this.pos>=this.input.length)return n;if(i=this.input.charAt(this.pos),this.pos++,this.Utils.in_array(i,this.Utils.whitespace)){if(!r){this.line_char_count--;continue}if("\n"===i||"\r"===i){n+="\n",this.line_char_count=0;continue}}n+=i,this.line_char_count++,r=!0,c&&"{"===i&&n.length&&"{"===n[n.length-2]&&(s=(n+=this.get_unformatted("}}")).length)}while(-1===n.toLowerCase().indexOf(t,s));return n},this.get_token=function(){var t;if("TK_TAG_SCRIPT"===this.last_token||"TK_TAG_STYLE"===this.last_token){var e=this.last_token.substr(7);return"string"!=typeof(t=this.get_contents_to(e))?t:[t,"TK_"+e]}return"CONTENT"===this.current_mode?"string"!=typeof(t=this.get_content())?t:[t,"TK_CONTENT"]:"TAG"===this.current_mode?"string"!=typeof(t=this.get_tag())?t:[t,"TK_TAG_"+this.tag_type]:void 0},this.get_full_indent=function(t){return(t=this.indent_level+t||0)<1?"":Array(t+1).join(this.indent_string)},this.is_unformatted=function(t,e){if(!this.Utils.in_array(t,e))return!1;if("a"!==t.toLowerCase()||!this.Utils.in_array("a",e))return!0;var i=(this.get_tag(!0)||"").match(/^\s*<\s*\/?([a-z]*)\s*[^>]*>\s*$/);return!(i&&!this.Utils.in_array(i,e))},this.printer=function(t,e,i,n,s){this.input=t||"",this.output=[],this.indent_character=e,this.indent_string="",this.indent_size=i,this.brace_style=s,this.indent_level=0,this.wrap_line_length=n,this.line_char_count=0;for(var r=0;r<this.indent_size;r++)this.indent_string+=this.indent_character;this.print_newline=function(t,e){this.line_char_count=0,e&&e.length&&(t||"\n"!==e[e.length-1])&&("\n"!==e[e.length-1]&&(e[e.length-1]=rtrim(e[e.length-1])),e.push("\n"))},this.print_indentation=function(t){for(var e=0;e<this.indent_level;e++)t.push(this.indent_string),this.line_char_count+=this.indent_string.length},this.print_token=function(t){this.is_whitespace(t)&&!this.output.length||((t||""!==t)&&this.output.length&&"\n"===this.output[this.output.length-1]&&(this.print_indentation(this.output),t=ltrim(t)),this.print_token_raw(t))},this.print_token_raw=function(t){this.newlines>0&&(t=rtrim(t)),t&&""!==t&&(t.length>1&&"\n"===t[t.length-1]?(this.output.push(t.slice(0,-1)),this.print_newline(!1,this.output)):this.output.push(t));for(var e=0;e<this.newlines;e++)this.print_newline(e>0,this.output);this.newlines=0},this.indent=function(){this.indent_level++},this.unindent=function(){this.indent_level>0&&this.indent_level--}},this}).printer(t,a,h,_,o);;){var w=s.get_token();if(s.token_text=w[0],s.token_type=w[1],"TK_EOF"===s.token_type)break;switch(s.token_type){case"TK_TAG_START":s.print_newline(!1,s.output),s.print_token(s.token_text),s.indent_content&&(s.indent(),s.indent_content=!1),s.current_mode="CONTENT";break;case"TK_TAG_STYLE":case"TK_TAG_SCRIPT":s.print_newline(!1,s.output),s.print_token(s.token_text),s.current_mode="CONTENT";break;case"TK_TAG_END":if("TK_CONTENT"===s.last_token&&""===s.last_text){var y=s.token_text.match(/\w+/)[0],v=null;s.output.length&&(v=s.output[s.output.length-1].match(/(?:<|{{#)\s*(\w+)/)),(null===v||v[1]!==y&&!s.Utils.in_array(v[1],u))&&s.print_newline(!1,s.output)}s.print_token(s.token_text),s.current_mode="CONTENT";break;case"TK_TAG_SINGLE":var b=s.token_text.match(/^\s*<([a-z-]+)/i);b&&s.Utils.in_array(b[1],u)||s.print_newline(!1,s.output),s.print_token(s.token_text),s.current_mode="CONTENT";break;case"TK_TAG_HANDLEBARS_ELSE":s.print_token(s.token_text),s.indent_content&&(s.indent(),s.indent_content=!1),s.current_mode="CONTENT";break;case"TK_CONTENT":s.print_token(s.token_text),s.current_mode="TAG";break;case"TK_STYLE":case"TK_SCRIPT":if(""!==s.token_text){s.print_newline(!1,s.output);var T,m=s.token_text,k=1;"TK_SCRIPT"===s.token_type?T="function"==typeof i&&i:"TK_STYLE"===s.token_type&&(T="function"==typeof n&&n),"keep"===e.indent_scripts?k=0:"separate"===e.indent_scripts&&(k=-s.indent_level);var x=s.get_full_indent(k);if(T)m=T(m.replace(/^\s*/,x),e);else{var A=m.match(/^\s*/)[0].match(/[^\n\r]*$/)[0].split(s.indent_string).length-1,E=s.get_full_indent(k-A);m=m.replace(/^\s*/,x).replace(/\r\n|\r|\n/g,"\n"+E).replace(/\s+$/,"")}m&&(s.print_token_raw(m),s.print_newline(!0,s.output))}s.current_mode="TAG";break;default:""!==s.token_text&&s.print_token(s.token_text)}s.last_token=s.token_type,s.last_text=s.token_text}var N=s.output.join("").replace(/[\r\n\t ]+$/,"");return d&&(N+="\n"),N}if("function"==typeof define&&define.amd)define(["require","./beautify","./beautify-css"],function(t){var e=t("./beautify"),i=t("./beautify-css");return{html_beautify:function(t,n){return style_html(t,n,e.js_beautify,i.css_beautify)}}});else if("undefined"!=typeof exports){var js_beautify=require("./beautify.js"),css_beautify=require("./beautify-css.js");exports.html_beautify=function(t,e){return style_html(t,e,js_beautify.js_beautify,css_beautify.css_beautify)}}else"undefined"!=typeof window?window.html_beautify=function(t,e){return style_html(t,e,window.js_beautify,window.css_beautify)}:"undefined"!=typeof global&&(global.html_beautify=function(t,e){return style_html(t,e,global.js_beautify,global.css_beautify)});

/* jQuery livequery Version: 1.1.1 */
!function(e){e.extend(e.fn,{livequery:function(i,t,u){var n,r=this;return e.isFunction(i)&&(u=t,t=i,i=void 0),e.each(e.livequery.queries,function(e,s){if(!(r.selector!=s.selector||r.context!=s.context||i!=s.type||t&&t.$lqguid!=s.fn.$lqguid||u&&u.$lqguid!=s.fn2.$lqguid))return(n=s)&&!1}),(n=n||new e.livequery(this.selector,this.context,i,t,u)).stopped=!1,n.run(),this},expire:function(i,t,u){var n=this;return e.isFunction(i)&&(u=t,t=i,i=void 0),e.each(e.livequery.queries,function(r,s){n.selector!=s.selector||n.context!=s.context||i&&i!=s.type||t&&t.$lqguid!=s.fn.$lqguid||u&&u.$lqguid!=s.fn2.$lqguid||this.stopped||e.livequery.stop(s.id)}),this}}),e.livequery=function(i,t,u,n,r){return this.selector=i,this.context=t,this.type=u,this.fn=n,this.fn2=r,this.elements=[],this.stopped=!1,this.id=e.livequery.queries.push(this)-1,n.$lqguid=n.$lqguid||e.livequery.guid++,r&&(r.$lqguid=r.$lqguid||e.livequery.guid++),this},e.livequery.prototype={stop:function(){var e=this;this.type?this.elements.unbind(this.type,this.fn):this.fn2&&this.elements.each(function(i,t){e.fn2.apply(t)}),this.elements=[],this.stopped=!0},run:function(){if(!this.stopped){var i=this,t=this.elements,u=e(this.selector,this.context),n=u.not(t);this.elements=u,this.type?(n.bind(this.type,this.fn),t.length>0&&e.each(t,function(t,n){e.inArray(n,u)<0&&e.event.remove(n,i.type,i.fn)})):(n.each(function(){i.fn.apply(this)}),this.fn2&&t.length>0&&e.each(t,function(t,n){e.inArray(n,u)<0&&i.fn2.apply(n)}))}}},e.extend(e.livequery,{guid:0,queries:[],queue:[],running:!1,timeout:null,checkQueue:function(){if(e.livequery.running&&e.livequery.queue.length)for(var i=e.livequery.queue.length;i--;)e.livequery.queries[e.livequery.queue.shift()].run()},pause:function(){e.livequery.running=!1},play:function(){e.livequery.running=!0,e.livequery.run()},registerPlugin:function(){e.each(arguments,function(i,t){if(e.fn[t]){var u=e.fn[t];e.fn[t]=function(){var i=u.apply(this,arguments);return e.livequery.run(),i}}})},run:function(i){null!=i?e.inArray(i,e.livequery.queue)<0&&e.livequery.queue.push(i):e.each(e.livequery.queries,function(i){e.inArray(i,e.livequery.queue)<0&&e.livequery.queue.push(i)}),e.livequery.timeout&&clearTimeout(e.livequery.timeout),e.livequery.timeout=setTimeout(e.livequery.checkQueue,20)},stop:function(i){null!=i?e.livequery.queries[i].stop():e.each(e.livequery.queries,function(i){e.livequery.queries[i].stop()})}}),e.livequery.registerPlugin("append","prepend","after","before","wrap","attr","removeAttr","addClass","removeClass","toggleClass","empty","remove","html"),e(function(){e.livequery.play()})}(jQuery);

/*!
 * Nestable jQuery Plugin - Copyright (c) 2012 David Bushell - https://github.com/dbushell/Nestable
 * Dual-licensed under the BSD or MIT licenses
 */
/*!
 * Nestable jQuery Plugin - Copyright (c) 2012 David Bushell - http://dbushell.com/
 * Dual-licensed under the BSD or MIT licenses
 */
;(function($, window, document, undefined)
{
    var hasTouch = 'ontouchstart' in document;

    /**
     * Detect CSS pointer-events property
     * events are normally disabled on the dragging element to avoid conflicts
     * https://github.com/ausi/Feature-detection-technique-for-pointer-events/blob/master/modernizr-pointerevents.js
     */
    var hasPointerEvents = (function()
    {
        var el    = document.createElement('div'),
            docEl = document.documentElement;
        if (!('pointerEvents' in el.style)) {
            return false;
        }
        el.style.pointerEvents = 'auto';
        el.style.pointerEvents = 'x';
        docEl.appendChild(el);
        var supports = window.getComputedStyle && window.getComputedStyle(el, '').pointerEvents === 'auto';
        docEl.removeChild(el);
        return !!supports;
    })();

    var defaults = {
        listNodeName    : 'ol',
        itemNodeName    : 'li',
        rootClass       : 'dd',
        listClass       : 'dd-list',
        itemClass       : 'dd-item',
        dragClass       : 'dd-dragel',
        handleClass     : 'dd-handle',
        collapsedClass  : 'dd-collapsed',
        placeClass      : 'dd-placeholder',
        noDragClass     : 'dd-nodrag',
        emptyClass      : 'dd-empty',
        expandBtnHTML   : '<button data-action="expand" type="button">Expand</button>',
        collapseBtnHTML : '<button data-action="collapse" type="button">Collapse</button>',
        group           : 0,
        maxDepth        : 5,
        threshold       : 20
    };

    function Plugin(element, options)
    {
        this.w  = $(document);
        this.el = $(element);
        this.options = $.extend({}, defaults, options);
        this.init();
    }

    Plugin.prototype = {

        init: function()
        {
            var list = this;

            list.reset();

            list.el.data('nestable-group', this.options.group);

            list.placeEl = $('<div class="' + list.options.placeClass + '"/>');

            $.each(this.el.find(list.options.itemNodeName), function(k, el) {
                list.setParent($(el));
            });

            list.el.on('click', 'button', function(e) {
                if (list.dragEl) {
                    return;
                }
                var target = $(e.currentTarget),
                    action = target.data('action'),
                    item   = target.parent(list.options.itemNodeName);
                if (action === 'collapse') {
                    list.collapseItem(item);
                }
                if (action === 'expand') {
                    list.expandItem(item);
                }
            });

            var onStartEvent = function(e)
            {
                var handle = $(e.target);

                if (!handle.hasClass('grabbing')) {
                    return;
                }

                if (!handle.hasClass(list.options.handleClass)) {
                    if (handle.closest('.' + list.options.noDragClass).length) {
                        return;
                    }
                    handle = handle.closest('.' + list.options.handleClass);
                }

                if (!handle.length || list.dragEl) {
                    return;
                }

                list.isTouch = /^touch/.test(e.type);
                if (list.isTouch && e.touches.length !== 1) {
                    return;
                }

                e.preventDefault();

                list.dragStart(e.touches ? e.touches[0] : e);
            };

            var onMoveEvent = function(e)
            {
                if (list.dragEl) {
                    e.preventDefault();
                    list.dragMove(e.touches ? e.touches[0] : e);
                }
            };

            var onEndEvent = function(e)
            {
                if (list.dragEl) {
                    e.preventDefault();
                    list.dragStop(e.touches ? e.touches[0] : e);
                }
            };

            if (hasTouch) {
                list.el[0].addEventListener('touchstart', onStartEvent, false);
                window.addEventListener('touchmove', onMoveEvent, false);
                window.addEventListener('touchend', onEndEvent, false);
                window.addEventListener('touchcancel', onEndEvent, false);
            }

            list.el.on('mousedown', onStartEvent);
            list.w.on('mousemove', onMoveEvent);
            list.w.on('mouseup', onEndEvent);

        },

        serialize: function()
        {
            var data,
                depth = 0,
                list  = this;
            step  = function(level, depth)
            {
                var array = [ ],
                    items = level.children(list.options.itemNodeName);
                items.each(function()
                {
                    var li   = $(this),
                        item = $.extend({}, li.data()),
                        sub  = li.children(list.options.listNodeName);
                    if (sub.length) {
                        item.children = step(sub, depth + 1);
                    }
                    array.push(item);
                });
                return array;
            };
            data = step(list.el.find(list.options.listNodeName).first(), depth);
            return data;
        },

        serialise: function()
        {
            return this.serialize();
        },

        reset: function()
        {
            this.mouse = {
                offsetX   : 0,
                offsetY   : 0,
                startX    : 0,
                startY    : 0,
                lastX     : 0,
                lastY     : 0,
                nowX      : 0,
                nowY      : 0,
                distX     : 0,
                distY     : 0,
                dirAx     : 0,
                dirX      : 0,
                dirY      : 0,
                lastDirX  : 0,
                lastDirY  : 0,
                distAxX   : 0,
                distAxY   : 0
            };
            this.isTouch    = false;
            this.moving     = false;
            this.dragEl     = null;
            this.dragRootEl = null;
            this.dragDepth  = 0;
            this.hasNewRoot = false;
            this.pointEl    = null;
        },

        expandItem: function(li)
        {
            li.removeClass(this.options.collapsedClass);
            li.children('[data-action="expand"]').hide();
            li.children('[data-action="collapse"]').show();
            li.children(this.options.listNodeName).show();
        },

        collapseItem: function(li)
        {
            var lists = li.children(this.options.listNodeName);
            if (lists.length) {
                li.addClass(this.options.collapsedClass);
                li.children('[data-action="collapse"]').hide();
                li.children('[data-action="expand"]').show();
                li.children(this.options.listNodeName).hide();
            }
        },

        expandAll: function()
        {
            var list = this;
            list.el.find(list.options.itemNodeName).each(function() {
                list.expandItem($(this));
            });
        },

        collapseAll: function()
        {
            var list = this;
            list.el.find(list.options.itemNodeName).each(function() {
                list.collapseItem($(this));
            });
        },

        setParent: function(li)
        {
            if (li.children(this.options.listNodeName).length) {
                li.prepend($(this.options.expandBtnHTML));
                li.prepend($(this.options.collapseBtnHTML));
            }
            li.children('[data-action="expand"]').hide();
        },

        unsetParent: function(li)
        {
            li.removeClass(this.options.collapsedClass);
            li.children('[data-action]').remove();
            li.children(this.options.listNodeName).remove();
        },

        dragStart: function(e)
        {
            var mouse    = this.mouse,
                target   = $(e.target),
                dragItem = target.closest(this.options.itemNodeName);

            this.placeEl.css('height', dragItem.height());

            mouse.offsetX = e.offsetX !== undefined ? e.offsetX : e.pageX - target.offset().left;
            mouse.offsetY = e.offsetY !== undefined ? e.offsetY : e.pageY - target.offset().top;
            mouse.startX = mouse.lastX = e.pageX;
            mouse.startY = mouse.lastY = e.pageY;

            this.dragRootEl = this.el;

            this.dragEl = $(document.createElement(this.options.listNodeName)).addClass(this.options.listClass + ' ' + this.options.dragClass);
            this.dragEl.css('width', dragItem.width());

            dragItem.after(this.placeEl);
            dragItem[0].parentNode.removeChild(dragItem[0]);
            dragItem.appendTo(this.dragEl);

            $(document.body).append(this.dragEl);
            this.dragEl.css({
                'left' : e.pageX - mouse.offsetX,
                'top'  : e.pageY - mouse.offsetY
            });
            // total depth of dragging item
            var i, depth,
                items = this.dragEl.find(this.options.itemNodeName);
            for (i = 0; i < items.length; i++) {
                depth = $(items[i]).parents(this.options.listNodeName).length;
                if (depth > this.dragDepth) {
                    this.dragDepth = depth;
                }
            }
        },

        dragStop: function(e)
        {
            var el = this.dragEl.children(this.options.itemNodeName).first();
            el[0].parentNode.removeChild(el[0]);
            this.placeEl.replaceWith(el);

            this.dragEl.remove();
            this.el.trigger('change');
            if (this.hasNewRoot) {
                this.dragRootEl.trigger('change');
            }
            this.reset();
        },

        dragMove: function(e)
        {
            var list, parent, prev, next, depth,
                opt   = this.options,
                mouse = this.mouse;

            this.dragEl.css({
                'left' : e.pageX - mouse.offsetX,
                'top'  : e.pageY - mouse.offsetY
            });

            // mouse position last events
            mouse.lastX = mouse.nowX;
            mouse.lastY = mouse.nowY;
            // mouse position this events
            mouse.nowX  = e.pageX;
            mouse.nowY  = e.pageY;
            // distance mouse moved between events
            mouse.distX = mouse.nowX - mouse.lastX;
            mouse.distY = mouse.nowY - mouse.lastY;
            // direction mouse was moving
            mouse.lastDirX = mouse.dirX;
            mouse.lastDirY = mouse.dirY;
            // direction mouse is now moving (on both axis)
            mouse.dirX = mouse.distX === 0 ? 0 : mouse.distX > 0 ? 1 : -1;
            mouse.dirY = mouse.distY === 0 ? 0 : mouse.distY > 0 ? 1 : -1;
            // axis mouse is now moving on
            var newAx   = Math.abs(mouse.distX) > Math.abs(mouse.distY) ? 1 : 0;

            // do nothing on first move
            if (!mouse.moving) {
                mouse.dirAx  = newAx;
                mouse.moving = true;
                return;
            }

            // calc distance moved on this axis (and direction)
            if (mouse.dirAx !== newAx) {
                mouse.distAxX = 0;
                mouse.distAxY = 0;
            } else {
                mouse.distAxX += Math.abs(mouse.distX);
                if (mouse.dirX !== 0 && mouse.dirX !== mouse.lastDirX) {
                    mouse.distAxX = 0;
                }
                mouse.distAxY += Math.abs(mouse.distY);
                if (mouse.dirY !== 0 && mouse.dirY !== mouse.lastDirY) {
                    mouse.distAxY = 0;
                }
            }
            mouse.dirAx = newAx;

            /**
             * move horizontal
             */
            if (mouse.dirAx && mouse.distAxX >= opt.threshold) {
                // reset move distance on x-axis for new phase
                mouse.distAxX = 0;
                prev = this.placeEl.prev(opt.itemNodeName);
                // increase horizontal level if previous sibling exists and is not collapsed
                if (mouse.distX > 0 && prev.length && !prev.hasClass(opt.collapsedClass)) {
                    // cannot increase level when item above is collapsed
                    list = prev.find(opt.listNodeName).last();
                    // check if depth limit has reached
                    depth = this.placeEl.parents(opt.listNodeName).length;
                    if (depth + this.dragDepth <= opt.maxDepth) {
                        // create new sub-level if one doesn't exist
                        if (!list.length) {
                            list = $('<' + opt.listNodeName + '/>').addClass(opt.listClass);
                            list.append(this.placeEl);
                            prev.append(list);
                            this.setParent(prev);
                        } else {
                            // else append to next level up
                            list = prev.children(opt.listNodeName).last();
                            list.append(this.placeEl);
                        }
                    }
                }
                // decrease horizontal level
                if (mouse.distX < 0) {
                    // we can't decrease a level if an item preceeds the current one
                    next = this.placeEl.next(opt.itemNodeName);
                    if (!next.length) {
                        parent = this.placeEl.parent();
                        this.placeEl.closest(opt.itemNodeName).after(this.placeEl);
                        if (!parent.children().length) {
                            this.unsetParent(parent.parent());
                        }
                    }
                }
            }

            var isEmpty = false;

            // find list item under cursor
            if (!hasPointerEvents) {
                this.dragEl[0].style.visibility = 'hidden';
            }
            this.pointEl = $(document.elementFromPoint(e.pageX - document.body.scrollLeft, e.pageY - (window.pageYOffset || document.documentElement.scrollTop)));
            if (!hasPointerEvents) {
                this.dragEl[0].style.visibility = 'visible';
            }
            if (this.pointEl.hasClass(opt.handleClass)) {
                this.pointEl = this.pointEl.parent(opt.itemNodeName);
            }
            if (this.pointEl.hasClass(opt.emptyClass)) {
                isEmpty = true;
            }
            else if (!this.pointEl.length || !this.pointEl.hasClass(opt.itemClass)) {
                return;
            }

            // find parent list of item under cursor
            var pointElRoot = this.pointEl.closest('.' + opt.rootClass),
                isNewRoot   = this.dragRootEl.data('nestable-id') !== pointElRoot.data('nestable-id');

            /**
             * move vertical
             */
            if (!mouse.dirAx || isNewRoot || isEmpty) {
                // check if groups match if dragging over new root
                if (isNewRoot && opt.group !== pointElRoot.data('nestable-group')) {
                    return;
                }
                // check depth limit
                depth = this.dragDepth - 1 + this.pointEl.parents(opt.listNodeName).length;
                if (depth > opt.maxDepth) {
                    return;
                }
                var before = e.pageY < (this.pointEl.offset().top + this.pointEl.height() / 2);
                parent = this.placeEl.parent();
                // if empty create new list to replace empty placeholder
                if (isEmpty) {
                    list = $(document.createElement(opt.listNodeName)).addClass(opt.listClass);
                    list.append(this.placeEl);
                    this.pointEl.replaceWith(list);
                }
                else if (before) {
                    this.pointEl.before(this.placeEl);
                }
                else {
                    this.pointEl.after(this.placeEl);
                }
                if (!parent.children().length) {
                    this.unsetParent(parent.parent());
                }
                if (!this.dragRootEl.find(opt.itemNodeName).length) {
                    this.dragRootEl.append('<div class="' + opt.emptyClass + '"/>');
                }
                // parent root list has changed
                if (isNewRoot) {
                    this.dragRootEl = pointElRoot;
                    this.hasNewRoot = this.el[0] !== this.dragRootEl[0];
                }
            }
        }

    };

    $.fn.nestable = function(params)
    {
        var lists  = this,
            retval = this;

        lists.each(function()
        {
            var plugin = $(this).data("nestable");

            if (!plugin) {
                $(this).data("nestable", new Plugin(this, params));
                $(this).data("nestable-id", new Date().getTime());
            } else {
                if (typeof params === 'string' && typeof plugin[params] === 'function') {
                    retval = plugin[params]();
                }
            }
        });

        return retval || lists;
    };

})(window.jQuery || window.Zepto, window, document);

(function($){
    var FormBuilder = (function () {
        // private static
        var settings = {},
            fieldCounter = 0;

        // constructor
        var cls = function () {
            // public (this instance only)
            this.setOptions = function (opts) { settings = opts; };
        };

        cls.loadControls = function () {
            for(let i = 0; i < settings.controls.length; i++) {
                for(let c = 0; c < settings.controls[i].fields.length; c++) {
                    let control = settings.controls[i].fields[c];
                    let field = settings.fields.filter(function(obj) { return obj.name == control; })[0];

                    if(field != undefined) $(settings.controls[i].element).find('.row').append('<div class="col-md-6"><div class="fieldselsection" data-control="'+ control +'"><a href="javascript:void(0)" class="form-control">'+ field.label +'</a></div></div>');
                }
            }
        };
        
        cls.loadFields = function (jsonFields) {
            let $container = $('<div />');
            let fields = jsonFields.fields;
            let $li = $('<li />').data('info', jsonFields).attr({class: 'dd-item multiplefields', 'data-id': 'CAT_Custom_' + fieldCounter}).append($('<div class="dd-handle grabbing">').html((jsonFields.removable == false) ? '' : FormBuilder.fieldActions()));

            for(let i = 0; i < fields.length; i++) {
                if(fields[i].type != 'fieldSets') {
                    let selectedField = fields[i].name;

                    if(jsonFields.type == undefined) {
                        fieldCounter++;
                        $li = $('<li />').data('info', fields[i]).attr({class: 'dd-item singlefield', 'data-id': 'CAT_Custom_' + fieldCounter}).append($('<div class="dd-handle grabbing">').html((fields[i].removable == false) ? '' : FormBuilder.fieldActions()));
                    } else {
                        selectedField = jsonFields.name;
                    }

                    let $div = $('<div class="grabbing" />');
                    $div.append('<label for="'+ fields[i].name +'">'+ fields[i].label +'</label>')
                        .append((fields[i].required == true) ? ' <span class="req">*</span>' : '')
                        .append(FormBuilder.fieldType(fields[i]));
                    $li.find('.dd-handle').append($div)

                    $container.append($li);

                    // Set active state to the selected control
                    if(fields[i].custom == undefined) $('.fieldselsection[data-control="'+ selectedField +'"] a').addClass('used');
                } else {
                    fieldCounter++;
                    $container.append(FormBuilder.loadFields(fields[i]));
                }
            }

            return $container.children();
        };

        // public static
        cls.fieldType = function(field) {
            var types = {
                'text': function(obj) {
                    return $('<input type="'+ field.type +'" />').attr({
                        name: obj.name,
                        id: obj.name,
                        class: 'form-control'
                    });
                },
                'textarea': function(obj) {
                    return $('<textarea />').attr({
                        name: obj.name,
                        id: obj.name,
                        class: 'form-control'
                    });
                },
                'select': function(obj) {
                    let $select = $('<select />');
                    let options = $select.prop('options'), o, selected;

                    for (var i = 0, len = obj.options.length; i < len; ++i) {
                        o = obj.options[i];
                        selected = !!o.selected;
                        options[i] = new Option(o.text, o.value, selected, selected);
                    }

                    if(obj.subtype == 'multipleselect') $select.attr({multiple: true});

                    return $select.attr({
                        name: obj.name,
                        id: obj.name,
                        class: 'form-control'
                    });
                },
                'multipleselect': function(obj) {
                    obj.subtype = obj.type;

                    let select = types['select'];
                    if (typeof select === 'function') return select(obj);
                },
                'radio': function(obj) {
                    let radio = [], o, checked;

                    for (var i = 0, len = obj.options.length; i < len; ++i) {
                        o = obj.options[i];
                        checked = !!o.checked;
                        let div = $('<div class="fieldoption"/>').html($('<input type="'+ field.type +'" />').attr({
                            name: obj.name,
                            id: obj.name,
                            value: o.value,
                            checked: checked
                        })[0].outerHTML + ' ' + o.text);
                        radio.push(div[0].outerHTML);
                    }

                    return radio.join('\n');
                },
                'checkbox': function(obj) {
                    let checkbox = [], o, checked;

                    for (var i = 0, len = obj.options.length; i < len; ++i) {
                        o = obj.options[i];
                        checked = !!o.checked;
                        let div = $('<div class="fieldoption" />').html($('<input type="checkbox" />').attr({
                            name: obj.name,
                            id: obj.name,
                            value: o.value,
                            checked: checked
                        })[0].outerHTML + ' ' + (o.text != undefined ? o.text : ''));
                        checkbox.push(div[0].outerHTML);
                    }

                    return checkbox.join('\n');
                },
                'boolean': function(obj) {
                    obj.subtype = obj.type;
                    obj.options = [{value: '1'}];

                    let checkbox = types['checkbox'];
                    if (typeof checkbox === 'function') return checkbox(obj);
                },
                'date': function(obj) {
                    return $('<input type="text" />').attr({
                        name: obj.name,
                        id: obj.name,
                        class: 'form-control datepicker'
                    });
                }
            };

            let fieldTypeFunc = types[field.type];
            if (typeof fieldTypeFunc === 'function') return fieldTypeFunc(field);
        };

        cls.fieldActions = function () {
            return '<div class="field-actions"><a href="#" class="edit" title="Edit "><i class="icon far fa-edit"></i></a><a href="#" class="delete" title="delete"><i class="icon fas fa-minus-circle"></i></a></div>';
        };

        cls.template = function (tpl, data) {
            let arr = [];

            switch(tpl) {
                case 'popup-addfield':
                    var typeWithOptions = ['checkbox','select','multipleselect','radio'];
                    var fieldoption = '';

                    if(typeWithOptions.indexOf(data.type) != -1) {
                        if(data.options == undefined) {
                            fieldoption = FormBuilder.template('popup-fieldoption', {value: ''});
                        } else {
                            $.each(data.options, function (k, v) {
                                fieldoption += FormBuilder.template('popup-fieldoption', v);
                            });
                        }
                    }

                    arr = ['<div class="new-field-settings" data-control="'+ data.name +'" data-action="'+ data.action +'">',
                        '<div class="form-group">',
                            '<label>Field Name</label>',
                            '<input type="text" name="fieldlabel" class="form-control" value="'+ ((data.action == 'update') ? data.label : '')  +'">',
                        '</div>',
                        '<div class="form-group">',
                            '<label>Required?</label>',
                            '<input type="checkbox" name="fieldrequire" value="1" '+ ((data.required == true) ? 'checked' : '') +'>',
                        '</div>',
                        fieldoption,
                        '<hr>',
                        '<a href="#" class="btn btn-primary save">save</a>',
                        '<a href="#" class="btn btn-default cancel">cancel</a>',
                    '</div>'];
                    break;
                case 'popup-fieldoption':
                    arr = ['<div class="form-group radio-add">',
                        '<input type="radio">',
                        '<input type="text" class="fieldoption form-control" value="'+ data.value +'">',
                        '<div>',
                            '<a href="#" class="add-field"><i class="fas fa-plus-circle"></i></i></a>',
                            '<a href="#" class="del-field"><i class="fas fa-minus-circle"></i></a>' +
                        '</div>',
                    '</div>'];
                    break;
            }

            return arr.join('\n');
        };

        // public (shared across instances)
        cls.prototype = {
            render: function () {
                FormBuilder.loadControls();

                // Load default fields
                $(settings.previewArea).append(FormBuilder.loadFields({fields: settings.defaults}));

                $('#nestable').nestable({
                    listNodeName : 'ul'
                }).on('change', function(e) {
                    var list = e.length ? e : $(e.target);
                    if (window.JSON) {
                        // console.log(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
                    } else {
                        // console.log('JSON browser support required for this demo.');
                    }
                });
                // console.log($('#nestable').nestable('serialize'));

                var $popupAddField = $('.new-field-settings');
                var $fieldActions = $('.field-actions');

                $('.fieldselsection > a:not(.used)').livequery('click', function (e) {
                    var $this = $(this).parent();

                    if($this.find('.new-field-settings')[0]) {
                        $this.find('.new-field-settings').remove();
                    } else {
                        let control = $this.data('control');
                        let field = settings.fields.filter(function(obj) { return obj.name == control; })[0];

                        if($('.new-field-settings')[0]) $('.new-field-settings').remove();
                        if(field != undefined) {
                            if(field.custom) {
                                field.action = 'save';
                                $this.append(FormBuilder.template('popup-addfield', field));
                            } else {
                                $(settings.previewArea).append(FormBuilder.loadFields({fields: [field]}));
                            }
                        }
                    }

                    e.preventDefault();
                });

                $popupAddField.find('.radio-add .add-field').livequery('click', function (e) {
                    $(FormBuilder.template('popup-fieldoption', {value: ''})).insertAfter($(this).parents('.radio-add'));

                    e.preventDefault();
                });

                $popupAddField.find('.radio-add .del-field').livequery('click', function (e) {
                    if($('.radio-add').length > 1) {
                        $(this).parents('.radio-add').remove();
                    } else {
                        $(this).parents('.radio-add').find('.fieldoption').val('');
                    }

                    e.preventDefault();
                });

                $popupAddField.find('.save').livequery('click', function (e) {
                    var typeWithOptions = ['checkbox','select','multipleselect','radio'], err = [];
                    var $parents = $(this).parents('.new-field-settings'),
                        label = $parents.find('input[name="fieldlabel"]').val(),
                        $options = $parents.find('input.fieldoption'),
                        require = $parents.find('input[name="fieldrequire"]').is(':checked');

                    let control = $parents.data('control');
                    let field = settings.fields.filter(function(obj) { return obj.name == control; })[0];

                    if(label == '') err.push('- Please enter Field Name');
                    if(typeWithOptions.indexOf(field.type) != -1) {
                        var str = '';

                        $options.each(function () {
                            str += $(this).val();
                        });

                        if(str == '') err.push('- Please add Field Items');
                    }

                    if(err.length > 0) {
                        alert(err.join('\n'));
                    } else {
                        field.label = label;
                        field.required = require;

                        if(typeWithOptions.indexOf(field.type) != -1) {
                            var arr = [];
                            $options.each(function () {
                                var val = $(this).val();

                                if(val != '') {
                                    arr.push({
                                        text: val,
                                        value: val
                                    });
                                }
                            });
                            field.options = arr;
                        }

                        if($parents.parents('li').data() != undefined && $parents.parents('li').data('info').action == 'update') {
                            $parents.parents('li').replaceWith(FormBuilder.loadFields({fields: [field]}));
                        } else {
                            $(settings.previewArea).append(FormBuilder.loadFields({fields: [field]}));
                        }

                        $parents.remove();
                    }

                    e.preventDefault();
                });

                $popupAddField.find('.cancel').livequery('click', function (e) {
                    $(this).parents('.new-field-settings').remove();

                    e.preventDefault();
                });

                $fieldActions.find('.edit').livequery('click', function (e) {
                    var $this = $(this), $li = $this.parents('li'),
                        info = $li.data().info;
                        $parents = $this.parents('.dd-handle');

                    if($li.data('info').custom == true) {
                        if($parents.find('.new-field-settings')[0]) {
                            $parents.find('.new-field-settings').remove();
                        } else {
                            if($('.new-field-settings')[0]) $('.new-field-settings').remove();
                            info.action = 'update';
                            $parents.append(FormBuilder.template('popup-addfield', info));
                        }
                    } else {
                        if($('.new-field-settings')[0]) $('.new-field-settings').remove();

                        var c = confirm('Do you want to change the mandatory option?');
                        if (c == true) {
                            if(info.type == 'fieldSets') {
                                $.each(info.fields, function (k, v) {
                                    if(v.required == undefined || v.required == false) {
                                        v.required = true;
                                    } else {
                                        v.required = false;
                                    }
                                });
                            } else {
                                if(info.required == undefined || info.required == false) {
                                    info.required = true;
                                } else {
                                    info.required = false;
                                }
                            }

                            $li.replaceWith(FormBuilder.loadFields({fields: [info]}));
                        }
                    }

                    e.preventDefault();
                });

                $fieldActions.find('.delete').livequery('click', function (e) {
                    var c = confirm('Are you sure you wish to delete this item[s] permanently?');
                    if (c == true) {
                        $('.fieldselsection[data-control="'+ $(this).parents('li').data('info').name +'"]').find('a').removeClass('used');
                        $(this).parents('li').remove();
                    }

                    e.preventDefault();
                });
            }
        };

        return cls;
    })();

    var methods = {
        init : function(options) {
            // Default options
            var settings = $.extend({
                fields: [],
                controls: [],
                sortableControls: true,
                previewArea: '#form-system-field'
            }, options );

            var formBuilder = new FormBuilder();

            // Apply options
            return this.each(function() {
                formBuilder.setOptions(settings);
                formBuilder.render();
            });
        },
        show : function( ) {    },// IS
        hide : function( ) {  },// GOOD
        update : function( content ) {  }// !!!
    };

    $.fn.formBuilder = function(methodOrOptions) {
        if ( methods[methodOrOptions] ) {
            return methods[ methodOrOptions ].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof methodOrOptions === 'object' || ! methodOrOptions ) {
            // Default to "init"
            return methods.init.apply( this, arguments );
        } else {
            $.error( 'Method ' +  methodOrOptions + ' does not exist on jQuery.formBuilder' );
        }
    };
})( jQuery );
(function ($) {
    var utils = {
        init: function () {
            this.ui.init();
            this.route.init();
            this.components.init();
        },
        ui: {

            init: function () {
                utils.ui.inlinePopup();
                utils.ui.dataTable();
                utils.ui.listItem();
                utils.ui.accordionWebform();
                utils.ui.tablets();
            },

            inlinePopup: function () {

                if(!$('.open-popup-link')[0]) return;
                $('.open-popup-link').magnificPopup({
                    type:'inline',
                    midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
                });
            },

            dataTable: function () {

                $('#table-anchor').DataTable();

            },

            listItem: function () {

                $('.list-tre > ul > li.has-dropdown > a').on('click', function (e) {
                    e.preventDefault();
                    var $this = $(this);

                    if ($this.hasClass('open')) {
                        $this.toggleClass('open');
                        $this.next().slideToggle();
                    } else {
                        $('.list-tre ul li a.open').next().slideToggle();
                        $('.list-tre ul li a').removeClass('open');
                        $this.toggleClass('open');
                        $this.next().slideToggle();
                    }
                });

            },

            accordionWebform: function () {

                $('#tabs li a').on('click', function(e){
                    e.preventDefault();
                    var $parents = $(this).parents('#system-fields');
                    var target = $(this).attr('href');
                    var $active = $(this).parents('#tabs');
                    
                    $parents.find('.list-tab').removeClass('active');
                    $(target).addClass('active');
                    $active.find('li.active').removeClass('active');
                    $(this).parent().addClass('active');
                })              

            },

            tablets: function () {

                $('.tab-wrapper .tab-row a').on('click', function(e){
                    e.preventDefault();
                    $(this).next().slideToggle();
                    $(this).toggleClass('down');
                })
            }
           

        },
        components:{
            init:function(){
                this.webform();
                this.webformCreate();
                this.oppurtunity();
                this.menus();
                this.fieldSettingPopover();
            },
            webform: function(){
                if($('.form-builders').data('action') != 'create') return;

                $.magnificPopup.open({
                    closeOnBgClick: false,
                    items: {
                        src: $('#popup-properties'),
                        type: 'inline'
                    },
                    callbacks: {
                        open: function () {
                            $.magnificPopup.instance.close = function () {
                                window.location.href = '/admin/formbuilder';
                            };
                        }
                    }
                });
            },

            webformCreate: function(){

                if(!$('a.popup-edit')[0]) return;
                $('a.popup-edit').magnificPopup({type:'inline'});
            },

            oppurtunity: function(){
               $('.open-check').on('click', function(){
                    if($(this).is(':checked')){
                        $(this).parents('.modalwindow, .for-check').find('#opportunity-details, .open-check-active').addClass('active');
                    }else{
                        $(this).parents('.modalwindow, .for-check').find('#opportunity-details, .open-check-active').removeClass('active');
                    }
                });

            },

            menus: function(){

                $('.choice').on('click', function(){     
                   var target = $(this).attr('href');
                    var $parents = $(this).parents('.rad-wrapper');
                    
                    $parents.find('.rad-main').removeClass('open');
                    $(target).addClass('open');  
                 });


            },

            fieldSettingPopover: function(){
                $('.field-actions a.edit').on('click', function(){
                    var $closest = $(this).closest('.sortable li');
                    $closest.addClass('open'); 
                    $closest.siblings('.open').removeClass('open');           
                })
            }
        },
        route: {
            init: function () {
                this.addpage();
                this.formBuilder();
            },
            addpage: function () {

                if(!$('.pageForm')[0]) return;

                var editor = ace.edit("page_code_body");
                editor.setTheme("ace/theme/monokai");

                editor.setOptions({
                    mode: "ace/mode/html",
                    autoScrollEditorIntoView: true
                });
                ace.config.loadModule("ace/ext/emmet", function() {
                    ace.require("ace/lib/net").loadScript("https://cloud9ide.github.io/emmet-core/emmet.js", function() {
                        editor.setOption("enableEmmet", true);
                        editor.setOption("enableEmmet", true);
                    });
                });

                var $temp_html = $('#temp_html').contents();

                var richEditor = $('#page_rich_body').trumbowyg({
                    autogrow: true,
                    autogrowOnEnter: true,
                    btnsDef: {
                        viewSource: {
                            fn: function(e) {
                                updateFrame();
                            },
                            ico: 'viewHTML'
                        }
                    },
                    btns: [
                        ['viewSource'],
                        ['undo', 'redo'],
                        ['formatting'],
                        ['strong', 'em', 'del'],
                        ['superscript', 'subscript'],
                        ['link'],
                        ['insertImage'],
                        ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                        ['unorderedList', 'orderedList'],
                        ['horizontalRule'],
                        ['removeformat'],
                    ]
                });

                setupFrame();

                function htmlDecode(input){
                    var e = document.createElement('div');
                    e.innerHTML = input;
                    return e.childNodes.length === 0 ? "" : e.childNodes[0].nodeValue;
                }

                function replaceAll(txt, replace, with_this) {
                    return txt.replace(new RegExp(replace, 'g'),with_this);
                }
                
                function updateFrame() {
                    richHtml = editor.getValue();

                    var richHtml, html;
                    $parent = $('#page_rich_body').closest('.rich-editor');
                    $parent.toggleClass('inactive').find('.trumbowyg-button-pane').toggleClass('trumbowyg-disable')
                        .find('.trumbowyg-viewSource-button').toggleClass('trumbowyg-active');

                    if($parent.hasClass('inactive')){
                        richHtml = richEditor.trumbowyg('html');

                        if($temp_html.find('body')[0]){
                            $temp_html.find('body').html(richHtml);
                        }else{
                            $temp_html[0].open();
                            $temp_html[0].write(richHtml);
                            $temp_html[0].close();
                        }

                        var template = '<!DOCTYPE html>' + $temp_html.find('html')[0].outerHTML;

                        template = replaceAll(template,"<!--<notscript", "<script");
                        template = replaceAll(template,"</notscript>-->", "</script>");

                        editor.setValue(style_html(template, {
                            'indent_inner_html': true,
                            'indent_size': 2,
                            'indent_char': ' ',
                            'wrap_line_length': 78,
                            'brace_style': 'expand',
                            'unformatted': ['a', 'sub', 'sup', 'b', 'i', 'u'],
                            'preserve_newlines': true,
                            'max_preserve_newlines': 5,
                            'indent_handlebars': false
                        }));
                    }else{
                        richHtml = editor.getValue();

                        richHtml = replaceAll(richHtml,"<script", "<!--<notscript");
                        richHtml = replaceAll(richHtml,"</script>", "</notscript>-->");

                        $temp_html[0].open();
                        $temp_html[0].write('<!DOCTYPE html> '+richHtml);
                        $temp_html[0].close();

                        if($temp_html.find('body')[0]){
                            html = $temp_html.find('body').html();
                        }else{
                            html = richHtml;
                        }

                        richEditor.trumbowyg('html', html);
                    }
                }

                function setupFrame() {
                    var page = $('.pageForm [name="page_body"]').val();

                    $temp_html[0].open();
                    $temp_html[0].write(page);
                    $temp_html[0].close();

                    editor.setValue(`<!DOCTYPE html>${$temp_html.find('html')[0].outerHTML}`, 1);

                    var template = $temp_html.find('body').html();

                    template = replaceAll(template,"<script", "<!--<notscript");
                    template = replaceAll(template,"</script>", "</notscript>-->");

                    richEditor.trumbowyg('html',template);
                }

                var formSubmit = false;

                $('.pageForm').on('submit',function (e) {
                    e.preventDefault();
                    updateFrame();
                    var $this = $(this),
                        template = `<!DOCTYPE html>${$temp_html.find('html')[0].outerHTML}`;
                    $this.find('[name="page_body"]').val(template);
                    if(!formSubmit) $this[0].submit();
                    formSubmit = true;
                })
            },
            formBuilder: function () {
                if(!~window.location.pathname.indexOf('/formbuilder')) return;

                var $popupproperties = $('#popup-properties')
                var $jsonFields = $('textarea[name="fields"]');
                var defaultFields = [
                    {
                        type: 'fieldSets',
                        label: 'Full Name',
                        name: 'fieldSetsFullName',
                        fields: [{
                            type: 'select',
                            label: 'Title',
                            name: 'Title',
                            options: [{
                                text: 'Dr',
                                value: 'Dr'
                            }, {
                                text: 'Miss',
                                value: 'Miss'
                            }, {
                                text: 'Mr',
                                value: 'Mr',
                                selected: true
                            }, {
                                text: 'Mrs',
                                value: 'Mrs'
                            }, {
                                text: 'Ms',
                                value: 'Ms'
                            }]
                        }, {
                            type: 'text',
                            label: 'First Name',
                            name: 'FirstName'
                        }, {
                            type: 'text',
                            label: 'Last Name',
                            name: 'LastName'
                        }]
                    },
                    {
                        type: 'text',
                        label: 'Email Address',
                        name: 'EmailAddress',
                        required: true,
                        removable: false
                    }
                ];

                if($jsonFields[0] != undefined && $jsonFields.val() != '') defaultFields = $.parseJSON($jsonFields.val())

                $('#webform-builder').formBuilder({
                    controls: [
                        {
                            label: 'Contacts',
                            element: '#fieldgrougcontacts',
                            fields: ['fieldSetsFullName', 'EmailAddress',  'fieldSetsHomeAddress',  'HomePhone',  'HomeFax', 'fieldSetsWorkAddress',  'WorkPhone',  'WorkFax',  'CellPhone',  'WebAddress',  'Company', 'DOB']
                        },
                        {
                            label: 'Misc',
                            element: '#fieldgrougmisc',
                            fields: ['CaptchaV2', 'ReCaptcha', 'Security']
                        },
                        {
                            label: 'Custom Fields',
                            element: '#custom-fields',
                            fields: ['customFieldDateTime', 'customFieldCheckbox', 'customFieldDropdown', 'customFieldListbox', 'customFieldRadio', 'customFieldMultiline', 'customFieldSingleline', 'customFieldBoolean']
                        }
                    ],
                    defaults: defaultFields,
                    fields: [
                        {
                            type: 'fieldSets',
                            label: 'Full Name',
                            name: 'fieldSetsFullName',
                            fields: [{
                                type: 'select',
                                label: 'Title',
                                name: 'Title',
                                options: [{
                                    text: 'Dr',
                                    value: 'Dr'
                                }, {
                                    text: 'Miss',
                                    value: 'Miss'
                                }, {
                                    text: 'Mr',
                                    value: 'Mr',
                                    selected: true
                                }, {
                                    text: 'Mrs',
                                    value: 'Mrs'
                                }, {
                                    text: 'Ms',
                                    value: 'Ms'
                                }]
                            }, {
                                type: 'text',
                                label: 'First Name',
                                name: 'FirstName'
                            }, {
                                type: 'text',
                                label: 'Last Name',
                                name: 'LastName'
                            }]
                        },
                        {
                            type: 'text',
                            label: 'Email Address',
                            name: 'EmailAddress',
                            required: true,
                            removable: false
                        },
                        {
                            type: 'text',
                            label: 'Home Phone Number',
                            name: 'HomePhone'
                        },
                        {
                            type: 'text',
                            label: 'Home Fax Number',
                            name: 'HomeFax'
                        },
                        {
                            type: 'text',
                            label: 'Work Phone Number',
                            name: 'WorkPhone'
                        },
                        {
                            type: 'text',
                            label: 'Work Fax Number',
                            name: 'WorkFax'
                        },
                        {
                            type: 'text',
                            label: 'Cell Phone Number',
                            name: 'CellPhone'
                        },
                        {
                            type: 'text',
                            label: 'Web Address',
                            name: 'WebAddress'
                        },
                        {
                            type: 'text',
                            label: 'Company',
                            name: 'Company'
                        },
                        {
                            type: 'date',
                            label: 'Date of Birth',
                            name: 'DOB'
                        },
                        {
                            type: 'text',
                            label: 'Username',
                            name: 'Username',
                            required: true
                        },
                        {
                            type: 'fieldSets',
                            label: 'Home Address',
                            name: 'fieldSetsHomeAddress', // optional
                            fields: [{
                                type: 'text',
                                label: 'Address',
                                name: 'HomeAddress'
                            }, {
                                type: 'text',
                                label: 'City',
                                name: 'HomeCity'
                            }, {
                                type: 'text',
                                label: 'State',
                                name: 'HomeState'
                            }, {
                                type: 'text',
                                label: 'Postcode',
                                name: 'HomeZip'
                            }, {
                                type: 'select',
                                label: 'Country',
                                name: 'HomeCountry',
                                options: [{
                                    text: 'Australia',
                                    value: 'AU'
                                }, {
                                    text: 'United States',
                                    value: 'US'
                                }]
                            }]
                        },
                        {
                            type: 'fieldSets',
                            label: 'Work Address',
                            name: 'fieldSetsWorkAddress', // optional
                            fields: [{
                                type: 'text',
                                label: 'Address',
                                name: 'WorkAddress'
                            }, {
                                type: 'text',
                                label: 'City',
                                name: 'WorkCity'
                            }, {
                                type: 'text',
                                label: 'State',
                                name: 'WorkState'
                            }, {
                                type: 'text',
                                label: 'Postcode',
                                name: 'WorkZip'
                            }, {
                                type: 'select',
                                label: 'Country',
                                name: 'WorkCountry',
                                options: [{
                                    text: 'Australia',
                                    value: 'AU'
                                }, {
                                    text: 'United States',
                                    value: 'US'
                                }]
                            }]
                        },
                        {
                            type: 'fieldSets',
                            label: 'Shipping Address',
                            name: 'fieldSetsShippingAddress', // optional
                            fields: [{
                                type: 'text',
                                label: 'Address',
                                name: 'ShippingAddress'
                            }, {
                                type: 'text',
                                label: 'City',
                                name: 'ShippingCity'
                            }, {
                                type: 'text',
                                label: 'State',
                                name: 'ShippingState'
                            }, {
                                type: 'text',
                                label: 'Postcode',
                                name: 'ShippingZip'
                            }, {
                                type: 'select',
                                label: 'Country',
                                name: 'ShippingCountry',
                                options: [{
                                    text: 'Australia',
                                    value: 'AU'
                                }, {
                                    text: 'United States',
                                    value: 'US'
                                }]
                            }]
                        },
                        {
                            type: 'fieldSets',
                            label: 'Billing Address',
                            name: 'fieldSetsBillingAddress', // optional
                            fields: [{
                                type: 'text',
                                label: 'Address',
                                name: 'BillingAddress'
                            }, {
                                type: 'text',
                                label: 'City',
                                name: 'BillingCity'
                            }, {
                                type: 'text',
                                label: 'State',
                                name: 'BillingState'
                            }, {
                                type: 'text',
                                label: 'Postcode',
                                name: 'BillingZip'
                            }, {
                                type: 'select',
                                label: 'Country',
                                name: 'BillingCountry',
                                options: [{
                                    text: 'Australia',
                                    value: 'AU'
                                }, {
                                    text: 'United States',
                                    value: 'US'
                                }]
                            }]
                        },
                        {
                            type: 'fieldSets',
                            label: 'Password',
                            name: 'fieldSetsPassword', // optional
                            fields: [{
                                type: 'text',
                                label: 'Password',
                                name: 'Password',
                                required: true
                            }, {
                                type: 'text',
                                label: 'Confirm Password',
                                name: 'PasswordConfirm',
                                required: true
                            }]
                        },
                        {
                            type: 'text',
                            label: 'CaptchaV2',
                            name: 'CaptchaV2'
                        },
                        {
                            type: 'text',
                            label: 'ReCaptcha',
                            name: 'ReCaptcha'
                        },
                        {
                            type: 'text',
                            label: 'Security',
                            name: 'Security'
                        },
                        {
                            type: 'date',
                            label: 'DateTime',
                            name: 'customFieldDateTime',
                            custom: true
                        },
                        {
                            type: 'checkbox',
                            label: 'List (Checkbox List)',
                            name: 'customFieldCheckbox',
                            custom: true
                        },
                        {
                            type: 'select',
                            label: 'List (Dropdown List)',
                            name: 'customFieldDropdown',
                            custom: true
                        },
                        {
                            type: 'multipleselect',
                            label: 'List (Listbox List)',
                            name: 'customFieldListbox',
                            custom: true
                        },
                        {
                            type: 'radio',
                            label: 'List (Radio List)',
                            name: 'customFieldRadio',
                            custom: true
                        },
                        {
                            type: 'textarea',
                            label: 'Text (Multiline)',
                            name: 'customFieldMultiline',
                            custom: true
                        },
                        {
                            type: 'text',
                            label: 'Text (String)',
                            name: 'customFieldSingleline',
                            custom: true
                        },
                        {
                            type: 'boolean',
                            label: 'True/False (Boolean)',
                            name: 'customFieldBoolean',
                            custom: true
                        }
                    ]
                });

                $('input[type="button"][value="Update"]').livequery('click', function () {
                    var arr = [];

                    $('ul#form-system-field li').each(function () {
                        arr.push($(this).data('info'));
                    });

                    $jsonFields.val(JSON.stringify(arr));

                    $.post($popupproperties.find('form').attr('action'), $popupproperties.find('form').serialize(), function () {
                        alert('Form Updated');
                    });
                });
            }
        }
    }

    $(document).ready(function () {
        utils.init();
    });
})(jQuery);

