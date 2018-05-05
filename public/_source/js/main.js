/* jQuery livequery Version: 1.1.1 */
!function(e){e.extend(e.fn,{livequery:function(i,t,u){var n,r=this;return e.isFunction(i)&&(u=t,t=i,i=void 0),e.each(e.livequery.queries,function(e,s){if(!(r.selector!=s.selector||r.context!=s.context||i!=s.type||t&&t.$lqguid!=s.fn.$lqguid||u&&u.$lqguid!=s.fn2.$lqguid))return(n=s)&&!1}),(n=n||new e.livequery(this.selector,this.context,i,t,u)).stopped=!1,n.run(),this},expire:function(i,t,u){var n=this;return e.isFunction(i)&&(u=t,t=i,i=void 0),e.each(e.livequery.queries,function(r,s){n.selector!=s.selector||n.context!=s.context||i&&i!=s.type||t&&t.$lqguid!=s.fn.$lqguid||u&&u.$lqguid!=s.fn2.$lqguid||this.stopped||e.livequery.stop(s.id)}),this}}),e.livequery=function(i,t,u,n,r){return this.selector=i,this.context=t,this.type=u,this.fn=n,this.fn2=r,this.elements=[],this.stopped=!1,this.id=e.livequery.queries.push(this)-1,n.$lqguid=n.$lqguid||e.livequery.guid++,r&&(r.$lqguid=r.$lqguid||e.livequery.guid++),this},e.livequery.prototype={stop:function(){var e=this;this.type?this.elements.unbind(this.type,this.fn):this.fn2&&this.elements.each(function(i,t){e.fn2.apply(t)}),this.elements=[],this.stopped=!0},run:function(){if(!this.stopped){var i=this,t=this.elements,u=e(this.selector,this.context),n=u.not(t);this.elements=u,this.type?(n.bind(this.type,this.fn),t.length>0&&e.each(t,function(t,n){e.inArray(n,u)<0&&e.event.remove(n,i.type,i.fn)})):(n.each(function(){i.fn.apply(this)}),this.fn2&&t.length>0&&e.each(t,function(t,n){e.inArray(n,u)<0&&i.fn2.apply(n)}))}}},e.extend(e.livequery,{guid:0,queries:[],queue:[],running:!1,timeout:null,checkQueue:function(){if(e.livequery.running&&e.livequery.queue.length)for(var i=e.livequery.queue.length;i--;)e.livequery.queries[e.livequery.queue.shift()].run()},pause:function(){e.livequery.running=!1},play:function(){e.livequery.running=!0,e.livequery.run()},registerPlugin:function(){e.each(arguments,function(i,t){if(e.fn[t]){var u=e.fn[t];e.fn[t]=function(){var i=u.apply(this,arguments);return e.livequery.run(),i}}})},run:function(i){null!=i?e.inArray(i,e.livequery.queue)<0&&e.livequery.queue.push(i):e.each(e.livequery.queries,function(i){e.inArray(i,e.livequery.queue)<0&&e.livequery.queue.push(i)}),e.livequery.timeout&&clearTimeout(e.livequery.timeout),e.livequery.timeout=setTimeout(e.livequery.checkQueue,20)},stop:function(i){null!=i?e.livequery.queries[i].stop():e.each(e.livequery.queries,function(i){e.livequery.queries[i].stop()})}}),e.livequery.registerPlugin("append","prepend","after","before","wrap","attr","removeAttr","addClass","removeClass","toggleClass","empty","remove","html"),e(function(){e.livequery.play()})}(jQuery);

/*!
 * Nestable jQuery Plugin - Copyright (c) 2012 David Bushell - https://github.com/dbushell/Nestable
 * Dual-licensed under the BSD or MIT licenses
 */
!function(t,e,s,i){var a="ontouchstart"in s,o=function(){var t=s.createElement("div"),i=s.documentElement;if(!("pointerEvents"in t.style))return!1;t.style.pointerEvents="auto",t.style.pointerEvents="x",i.appendChild(t);var a=e.getComputedStyle&&"auto"===e.getComputedStyle(t,"").pointerEvents;return i.removeChild(t),!!a}(),l={listNodeName:"ol",itemNodeName:"li",rootClass:"dd",listClass:"dd-list",itemClass:"dd-item",dragClass:"dd-dragel",handleClass:"dd-handle",collapsedClass:"dd-collapsed",placeClass:"dd-placeholder",noDragClass:"dd-nodrag",emptyClass:"dd-empty",expandBtnHTML:'<button data-action="expand" type="button">Expand</button>',collapseBtnHTML:'<button data-action="collapse" type="button">Collapse</button>',group:0,maxDepth:5,threshold:20};function n(e,i){this.w=t(s),this.el=t(e),this.options=t.extend({},l,i),this.init()}n.prototype={init:function(){var s=this;s.reset(),s.el.data("nestable-group",this.options.group),s.placeEl=t('<div class="'+s.options.placeClass+'"/>'),t.each(this.el.find(s.options.itemNodeName),function(e,i){s.setParent(t(i))}),s.el.on("click","button",function(e){if(!s.dragEl){var i=t(e.currentTarget),a=i.data("action"),o=i.parent(s.options.itemNodeName);"collapse"===a&&s.collapseItem(o),"expand"===a&&s.expandItem(o)}});var i=function(e){var i=t(e.target);if(!i.hasClass(s.options.handleClass)){if(i.closest("."+s.options.noDragClass).length)return;i=i.closest("."+s.options.handleClass)}i.length&&!s.dragEl&&(s.isTouch=/^touch/.test(e.type),s.isTouch&&1!==e.touches.length||(e.preventDefault(),s.dragStart(e.touches?e.touches[0]:e)))},o=function(t){s.dragEl&&(t.preventDefault(),s.dragMove(t.touches?t.touches[0]:t))},l=function(t){s.dragEl&&(t.preventDefault(),s.dragStop(t.touches?t.touches[0]:t))};a&&(s.el[0].addEventListener("touchstart",i,!1),e.addEventListener("touchmove",o,!1),e.addEventListener("touchend",l,!1),e.addEventListener("touchcancel",l,!1)),s.el.on("mousedown",i),s.w.on("mousemove",o),s.w.on("mouseup",l)},serialize:function(){var e=this;return step=function(s,i){var a=[];return s.children(e.options.itemNodeName).each(function(){var s=t(this),o=t.extend({},s.data()),l=s.children(e.options.listNodeName);l.length&&(o.children=step(l,i+1)),a.push(o)}),a},step(e.el.find(e.options.listNodeName).first(),0)},serialise:function(){return this.serialize()},reset:function(){this.mouse={offsetX:0,offsetY:0,startX:0,startY:0,lastX:0,lastY:0,nowX:0,nowY:0,distX:0,distY:0,dirAx:0,dirX:0,dirY:0,lastDirX:0,lastDirY:0,distAxX:0,distAxY:0},this.isTouch=!1,this.moving=!1,this.dragEl=null,this.dragRootEl=null,this.dragDepth=0,this.hasNewRoot=!1,this.pointEl=null},expandItem:function(t){t.removeClass(this.options.collapsedClass),t.children('[data-action="expand"]').hide(),t.children('[data-action="collapse"]').show(),t.children(this.options.listNodeName).show()},collapseItem:function(t){t.children(this.options.listNodeName).length&&(t.addClass(this.options.collapsedClass),t.children('[data-action="collapse"]').hide(),t.children('[data-action="expand"]').show(),t.children(this.options.listNodeName).hide())},expandAll:function(){var e=this;e.el.find(e.options.itemNodeName).each(function(){e.expandItem(t(this))})},collapseAll:function(){var e=this;e.el.find(e.options.itemNodeName).each(function(){e.collapseItem(t(this))})},setParent:function(e){e.children(this.options.listNodeName).length&&(e.prepend(t(this.options.expandBtnHTML)),e.prepend(t(this.options.collapseBtnHTML))),e.children('[data-action="expand"]').hide()},unsetParent:function(t){t.removeClass(this.options.collapsedClass),t.children("[data-action]").remove(),t.children(this.options.listNodeName).remove()},dragStart:function(e){var a=this.mouse,o=t(e.target),l=o.closest(this.options.itemNodeName);this.placeEl.css("height",l.height()),a.offsetX=e.offsetX!==i?e.offsetX:e.pageX-o.offset().left,a.offsetY=e.offsetY!==i?e.offsetY:e.pageY-o.offset().top,a.startX=a.lastX=e.pageX,a.startY=a.lastY=e.pageY,this.dragRootEl=this.el,this.dragEl=t(s.createElement(this.options.listNodeName)).addClass(this.options.listClass+" "+this.options.dragClass),this.dragEl.css("width",l.width()),l.after(this.placeEl),l[0].parentNode.removeChild(l[0]),l.appendTo(this.dragEl),t(s.body).append(this.dragEl),this.dragEl.css({left:e.pageX-a.offsetX,top:e.pageY-a.offsetY});var n,d,h=this.dragEl.find(this.options.itemNodeName);for(n=0;n<h.length;n++)(d=t(h[n]).parents(this.options.listNodeName).length)>this.dragDepth&&(this.dragDepth=d)},dragStop:function(t){var e=this.dragEl.children(this.options.itemNodeName).first();e[0].parentNode.removeChild(e[0]),this.placeEl.replaceWith(e),this.dragEl.remove(),this.el.trigger("change"),this.hasNewRoot&&this.dragRootEl.trigger("change"),this.reset()},dragMove:function(i){var a,l,n,d=this.options,h=this.mouse;this.dragEl.css({left:i.pageX-h.offsetX,top:i.pageY-h.offsetY}),h.lastX=h.nowX,h.lastY=h.nowY,h.nowX=i.pageX,h.nowY=i.pageY,h.distX=h.nowX-h.lastX,h.distY=h.nowY-h.lastY,h.lastDirX=h.dirX,h.lastDirY=h.dirY,h.dirX=0===h.distX?0:h.distX>0?1:-1,h.dirY=0===h.distY?0:h.distY>0?1:-1;var r=Math.abs(h.distX)>Math.abs(h.distY)?1:0;if(!h.moving)return h.dirAx=r,void(h.moving=!0);h.dirAx!==r?(h.distAxX=0,h.distAxY=0):(h.distAxX+=Math.abs(h.distX),0!==h.dirX&&h.dirX!==h.lastDirX&&(h.distAxX=0),h.distAxY+=Math.abs(h.distY),0!==h.dirY&&h.dirY!==h.lastDirY&&(h.distAxY=0)),h.dirAx=r,h.dirAx&&h.distAxX>=d.threshold&&(h.distAxX=0,n=this.placeEl.prev(d.itemNodeName),h.distX>0&&n.length&&!n.hasClass(d.collapsedClass)&&(a=n.find(d.listNodeName).last(),this.placeEl.parents(d.listNodeName).length+this.dragDepth<=d.maxDepth&&(a.length?(a=n.children(d.listNodeName).last()).append(this.placeEl):((a=t("<"+d.listNodeName+"/>").addClass(d.listClass)).append(this.placeEl),n.append(a),this.setParent(n)))),h.distX<0&&(this.placeEl.next(d.itemNodeName).length||(l=this.placeEl.parent(),this.placeEl.closest(d.itemNodeName).after(this.placeEl),l.children().length||this.unsetParent(l.parent()))));var p=!1;if(o||(this.dragEl[0].style.visibility="hidden"),this.pointEl=t(s.elementFromPoint(i.pageX-s.body.scrollLeft,i.pageY-(e.pageYOffset||s.documentElement.scrollTop))),o||(this.dragEl[0].style.visibility="visible"),this.pointEl.hasClass(d.handleClass)&&(this.pointEl=this.pointEl.parent(d.itemNodeName)),this.pointEl.hasClass(d.emptyClass))p=!0;else if(!this.pointEl.length||!this.pointEl.hasClass(d.itemClass))return;var c=this.pointEl.closest("."+d.rootClass),g=this.dragRootEl.data("nestable-id")!==c.data("nestable-id");if(!h.dirAx||g||p){if(g&&d.group!==c.data("nestable-group"))return;if(this.dragDepth-1+this.pointEl.parents(d.listNodeName).length>d.maxDepth)return;var f=i.pageY<this.pointEl.offset().top+this.pointEl.height()/2;l=this.placeEl.parent(),p?((a=t(s.createElement(d.listNodeName)).addClass(d.listClass)).append(this.placeEl),this.pointEl.replaceWith(a)):f?this.pointEl.before(this.placeEl):this.pointEl.after(this.placeEl),l.children().length||this.unsetParent(l.parent()),this.dragRootEl.find(d.itemNodeName).length||this.dragRootEl.append('<div class="'+d.emptyClass+'"/>'),g&&(this.dragRootEl=c,this.hasNewRoot=this.el[0]!==this.dragRootEl[0])}}},t.fn.nestable=function(e){var s=this;return this.each(function(){var i=t(this).data("nestable");i?"string"==typeof e&&"function"==typeof i[e]&&(s=i[e]()):(t(this).data("nestable",new n(this,e)),t(this).data("nestable-id",(new Date).getTime()))}),s||this}}(window.jQuery||window.Zepto,window,document);

(function($){
    var FormBuilder = (function () {
        // private static
        var settings = {};

        // constructor
        var cls = function () {
            // public (this instance only)
            this.setOptions = function (opts) { settings = opts; };
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
                        radio.push($('<input type="'+ field.type +'" />').attr({
                            name: obj.name,
                            id: obj.name,
                            value: o.value,
                            checked: checked
                        })[0].outerHTML + o.text);
                    }

                    return radio.join('<br />');
                },
                'checkbox': function(obj) {
                    let checkbox = [], o, checked;

                    for (var i = 0, len = obj.options.length; i < len; ++i) {
                        o = obj.options[i];
                        checked = !!o.checked;
                        checkbox.push($('<input type="checkbox" />').attr({
                                name: obj.name,
                                id: obj.name,
                                value: o.value,
                                checked: checked
                            })[0].outerHTML + (o.text != undefined ? o.text : ''));
                    }

                    return checkbox.join('<br />');
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

        // public (shared across instances)
        cls.prototype = {
            loadControls: function () {
                for(let i = 0; i < settings.controls.length; i++) {
                    for(let c = 0; c < settings.controls[i].fields.length; c++) {
                        let control = settings.controls[i].fields[c];
                        let field = settings.fields.filter(function(obj) { return obj.name == control; })[0];

                        if(field != undefined) $(settings.controls[i].element).find('.row').append('<div class="col-md-6"><div class="fieldselsection" data-control="'+ control +'"><a href="#" class="form-control">'+ field.label +'</a></div></div>');
                    }
                }

                $('#nestable').nestable({
                    group: 1
                }).on('change', function(e) {
                    console.log(e);
                });
            },
            loadFields: function (fieldSets) {
                let fields = (fieldSets != undefined) ? fieldSets.fields : settings.fields.filter(function(obj) { return obj.defaultAssign == true; });
                let $li = $('<li />').attr({class: 'dd-item multiplefields', 'data-id': 1}).append($('<div class="dd-handle">').html(FormBuilder.fieldActions));

                for(let i = 0; i < fields.length; i++) {
                    if(fields[i].type != 'fieldSets') {
                        if(fieldSets == undefined) $li = $('<li />').attr({class: 'dd-item singlefield', 'data-id': 1}).append($('<div class="dd-handle">').html(FormBuilder.fieldActions));

                        let $div = $('<div />');
                        $div.append('<label for="'+ fields[i].name +'">'+ fields[i].label +'</label>')
                            .append((fields[i].required == true) ? ' <span class="req">*</span>' : '')
                            .append(FormBuilder.fieldType(fields[i]));
                        $li.find('.dd-handle').append($div)

                        $(settings.previewArea).append($li);
                    } else {
                        cls.prototype.loadFields(fields[i]);
                    }
                }
            },
            eventHandlers: function () {
                $('.fieldselsection').livequery('click', function (e) {
                    var $this = $(this);

                    let control = $this.data('control');
                    let field = settings.fields.filter(function(obj) { return obj.name == control; })[0];

                    if(field != undefined) {
                        console.log(field);
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
                formBuilder.loadControls();
                formBuilder.loadFields();
                formBuilder.eventHandlers();
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

                if(!$('#popup-content')[0]) return;
                $.magnificPopup.open({
                    items: {
                        src: $('#popup-content').html(),
                        type: 'inline'                        
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
                
                $('#custom-fields a.target').on('click', function(e){
                    e.preventDefault();    
                    var $parents = $(this).closest('#custom-fields > .row > div');
                    $parents.addClass('open');
                    $parents.siblings('.open').removeClass('open');
                });
                $('.new-field-settings .cancel').on('click', function(){
                    $parents = $(this).parents('.new-field-settings');
                    $parents.parents('.open').removeClass('open');
                });
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

                        var template = `<!DOCTYPE html>${$temp_html.find('html')[0].outerHTML}`;

                        template = replaceAll(template,"<!--<notscript", "<script");
                        template = replaceAll(template,"</notscript>-->", "</script>");
                        editor.setValue(template);
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

            }
        }

    }

    $(document).ready(function () {
        utils.init();

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
            fields: [
                {
                    type: 'checkbox',
                    label: 'Gender',
                    name: 'Gender',
                    defaultAssign: true,
                    options: [{
                        text: 'Male',
                        value: 'Male',
                        checked: true
                    }, {
                        text: 'Female',
                        value: 'Female',
                        checked: true
                    }]
                },
                {
                    type: 'multipleselect',
                    label: 'List (Listbox List)',
                    name: 'Nation',
                    defaultAssign: true,
                    options: [{
                        text: 'Male',
                        value: 'Male'
                    }, {
                        text: 'Female',
                        value: 'Female',
                        checked: true
                    }]
                },
                {
                    type: 'radio',
                    label: 'Gender',
                    name: 'Gender',
                    defaultAssign: true,
                    options: [{
                        text: 'Male',
                        value: 'Male'
                    }, {
                        text: 'Female',
                        value: 'Female',
                        checked: true
                    }]
                },
                {
                    type: 'fieldSets',
                    label: 'Full Name',
                    name: 'fieldSetsFullName',
                    defaultAssign: true,
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
                        name: 'FirstName',
                        required: true
                    }, {
                        type: 'text',
                        label: 'Last Name',
                        name: 'LastName',
                        required: true
                    }]
                },
                {
                    type: 'text',
                    label: 'Email Address',
                    name: 'EmailAddress',
                    defaultAssign: true,
                    required: true,
                    removable: false
                },
                {
                    type: 'text',
                    label: 'Home Phone Number',
                    name: 'HomePhone',
                    defaultAssign: true,
                },
                {
                    type: 'text',
                    label: 'Home Fax Number',
                    name: 'HomeFax',
                    defaultAssign: true,
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
                    name: 'DOB',
                    defaultAssign: true
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
                    defaultAssign: true,
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
                    generateName: true
                },
                {
                    type: 'checkbox',
                    label: 'List (Checkbox List)',
                    name: 'customFieldCheckbox',
                    generateName: true
                },
                {
                    type: 'select',
                    label: 'List (Dropdown List)',
                    name: 'customFieldDropdown',
                    generateName: true
                },
                {
                    type: 'multipleselect',
                    label: 'List (Listbox List)',
                    name: 'customFieldListbox',
                    generateName: true
                },
                {
                    type: 'radio',
                    label: 'List (Radio List)',
                    name: 'customFieldRadio',
                    generateName: true
                },
                {
                    type: 'textarea',
                    label: 'Text (Multiline)',
                    name: 'customFieldMultiline',
                    generateName: true,
                    defaultAssign: true
                },
                {
                    type: 'text',
                    label: 'Text (String)',
                    name: 'customFieldSingleline',
                    generateName: true
                },
                {
                    type: 'boolean',
                    label: 'True/False (Boolean)',
                    name: 'customFieldBoolean',
                    generateName: true,
                    defaultAssign: true
                }
            ]
        });
    });

})(jQuery);

