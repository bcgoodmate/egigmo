/* jQuery livequery Version: 1.1.1 */
!function(e){e.extend(e.fn,{livequery:function(i,t,u){var n,r=this;return e.isFunction(i)&&(u=t,t=i,i=void 0),e.each(e.livequery.queries,function(e,s){if(!(r.selector!=s.selector||r.context!=s.context||i!=s.type||t&&t.$lqguid!=s.fn.$lqguid||u&&u.$lqguid!=s.fn2.$lqguid))return(n=s)&&!1}),(n=n||new e.livequery(this.selector,this.context,i,t,u)).stopped=!1,n.run(),this},expire:function(i,t,u){var n=this;return e.isFunction(i)&&(u=t,t=i,i=void 0),e.each(e.livequery.queries,function(r,s){n.selector!=s.selector||n.context!=s.context||i&&i!=s.type||t&&t.$lqguid!=s.fn.$lqguid||u&&u.$lqguid!=s.fn2.$lqguid||this.stopped||e.livequery.stop(s.id)}),this}}),e.livequery=function(i,t,u,n,r){return this.selector=i,this.context=t,this.type=u,this.fn=n,this.fn2=r,this.elements=[],this.stopped=!1,this.id=e.livequery.queries.push(this)-1,n.$lqguid=n.$lqguid||e.livequery.guid++,r&&(r.$lqguid=r.$lqguid||e.livequery.guid++),this},e.livequery.prototype={stop:function(){var e=this;this.type?this.elements.unbind(this.type,this.fn):this.fn2&&this.elements.each(function(i,t){e.fn2.apply(t)}),this.elements=[],this.stopped=!0},run:function(){if(!this.stopped){var i=this,t=this.elements,u=e(this.selector,this.context),n=u.not(t);this.elements=u,this.type?(n.bind(this.type,this.fn),t.length>0&&e.each(t,function(t,n){e.inArray(n,u)<0&&e.event.remove(n,i.type,i.fn)})):(n.each(function(){i.fn.apply(this)}),this.fn2&&t.length>0&&e.each(t,function(t,n){e.inArray(n,u)<0&&i.fn2.apply(n)}))}}},e.extend(e.livequery,{guid:0,queries:[],queue:[],running:!1,timeout:null,checkQueue:function(){if(e.livequery.running&&e.livequery.queue.length)for(var i=e.livequery.queue.length;i--;)e.livequery.queries[e.livequery.queue.shift()].run()},pause:function(){e.livequery.running=!1},play:function(){e.livequery.running=!0,e.livequery.run()},registerPlugin:function(){e.each(arguments,function(i,t){if(e.fn[t]){var u=e.fn[t];e.fn[t]=function(){var i=u.apply(this,arguments);return e.livequery.run(),i}}})},run:function(i){null!=i?e.inArray(i,e.livequery.queue)<0&&e.livequery.queue.push(i):e.each(e.livequery.queries,function(i){e.inArray(i,e.livequery.queue)<0&&e.livequery.queue.push(i)}),e.livequery.timeout&&clearTimeout(e.livequery.timeout),e.livequery.timeout=setTimeout(e.livequery.checkQueue,20)},stop:function(i){null!=i?e.livequery.queries[i].stop():e.each(e.livequery.queries,function(i){e.livequery.queries[i].stop()})}}),e.livequery.registerPlugin("append","prepend","after","before","wrap","attr","removeAttr","addClass","removeClass","toggleClass","empty","remove","html"),e(function(){e.livequery.play()})}(jQuery);
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
                        if(field != undefined) $(settings.controls[i].element).append('<li class="fieldselsection" data-control="'+ control +'"><a href="#">'+ field.label +'</a></li>');
                    }
                }
            },
            loadFields: function (fieldSets) {
                let fields = (fieldSets != undefined) ? fieldSets.fields : settings.fields.filter(function(obj) { return obj.defaultAssign == true; });
                let $li = $('<li />').attr({class: 'multiplefields'}).append(FormBuilder.fieldActions);

                for(let i = 0; i < fields.length; i++) {
                    if(fields[i].type != 'fieldSets') {
                        if(fieldSets == undefined) $li = $('<li />').attr({class: 'singlefield'}).append(FormBuilder.fieldActions);

                        let $div = $('<div />');
                        $div.append('<label for="'+ fields[i].name +'">'+ fields[i].label +'</label>')
                            .append((fields[i].required == true) ? ' <span class="req">*</span>' : '')
                            .append(FormBuilder.fieldType(fields[i]));

                        $(settings.previewArea).append($li.append($div));
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
                    element: '#fieldgrougcustom',
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

