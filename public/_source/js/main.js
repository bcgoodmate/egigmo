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
            return '<div class="field-actions"><a href="#" class="edit" title="Edit "></a><a href="#" class="delete" title="delete"></a></div>';
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

        cls.template = function () {
            
        }

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

                $('.tab-wrapper .tab-row > a').on('click', function(e){
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
            },
            aceEditor: function () {
                if(!$('#page_code_body')[0]) return;

                var editor = ace.edit('page_code_body');

                editor.setTheme('ace/theme/chrome');
                editor.setOptions({
                    // fontFamily: 'tahoma',
                    fontSize: '14px',
                    mode: 'ace/mode/html',
                    autoScrollEditorIntoView: true,
                    displayIndentGuides: false // hide dotted indent guide
                });
                editor.setShowPrintMargin(false); // hide vertical ruler
                editor.getSession().setUseWorker(false); // disable line syntax checker

                ace.config.loadModule('ace/ext/emmet', function() {
                    ace.require('ace/lib/net').loadScript('https://cloud9ide.github.io/emmet-core/emmet.js', function() {
                        editor.setOption('enableEmmet', true);
                        editor.setOption('enableEmmet', true);
                    });
                });

                return editor;
            }
        },
        route: {
            init: function () {
                this.templateBuilder();
                this.formBuilder();
            },
            templateBuilder: function () {
                if(!$('[data-module="templatebuilder"]')[0]) return;

                var code = $('textarea[name="html_code"]').val();
                var pattern = /<body[^>]*>((.|[\n\r])*)<\/body>/m; // https://stackoverflow.com/questions/6195615/get-contents-of-body-body-within-a-string?utm_medium=organic&utm_source=google_rich_qa&utm_campaign=google_rich_qa
                var body = pattern.exec(code);
                var aceEditor = utils.components.aceEditor();
                var richEditor = $('#page_rich_body').trumbowyg({
                    autogrow: true,
                    autogrowOnEnter: true,
                    btnsDef: {
                        viewSource: {
                            fn: function(e) {
                                richEditor.closest('.rich-editor')
                                    .toggleClass('inactive')
                                    .find('.trumbowyg-button-pane')
                                    .toggleClass('trumbowyg-disable')
                                    .find('.trumbowyg-viewSource-button')
                                    .toggleClass('trumbowyg-active');

                                if(richEditor.closest('.rich-editor').hasClass('inactive')) {
                                    aceEditor.setValue(code.replace(pattern, body[0].split('>')[0] + '>'+ richEditor.trumbowyg('html') +'<body>'));
                                } else {

                                }
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

                // richEditor.trumbowyg('html', body[1]);

                aceEditor.container.addEventListener("contextmenu", function(e) {
                    e.preventDefault();
                    console.log('test');
                    return false;
                }, false);

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




