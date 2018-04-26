/* jQuery livequery Version: 1.1.1 */
(function (e) {
    e.extend(e.fn, {
        livequery: function (t, n, r) {
            var i = this, s;
            if (e.isFunction(t))r = n, n = t, t = undefined;
            e.each(e.livequery.queries, function (e, o) {
                if (i.selector == o.selector && i.context == o.context && t == o.type && (!n || n.$lqguid == o.fn.$lqguid) && (!r || r.$lqguid == o.fn2.$lqguid))return (s = o) && false
            });
            s = s || new e.livequery(this.selector, this.context, t, n, r);
            s.stopped = false;
            s.run();
            return this
        }, expire: function (t, n, r) {
            var i = this;
            if (e.isFunction(t))r = n, n = t, t = undefined;
            e.each(e.livequery.queries, function (s, o) {
                if (i.selector == o.selector && i.context == o.context && (!t || t == o.type) && (!n || n.$lqguid == o.fn.$lqguid) && (!r || r.$lqguid == o.fn2.$lqguid) && !this.stopped)e.livequery.stop(o.id)
            });
            return this
        }
    });
    e.livequery = function (t, n, r, i, s) {
        this.selector = t;
        this.context = n;
        this.type = r;
        this.fn = i;
        this.fn2 = s;
        this.elements = [];
        this.stopped = false;
        this.id = e.livequery.queries.push(this) - 1;
        i.$lqguid = i.$lqguid || e.livequery.guid++;
        if (s)s.$lqguid = s.$lqguid || e.livequery.guid++;
        return this
    };
    e.livequery.prototype = {
        stop: function () {
            var e = this;
            if (this.type)this.elements.unbind(this.type, this.fn); else if (this.fn2)this.elements.each(function (t, n) {
                e.fn2.apply(n)
            });
            this.elements = [];
            this.stopped = true
        }, run: function () {
            if (this.stopped)return;
            var t = this;
            var n = this.elements, r = e(this.selector, this.context), i = r.not(n);
            this.elements = r;
            if (this.type) {
                i.bind(this.type, this.fn);
                if (n.length > 0)e.each(n, function (n, i) {
                    if (e.inArray(i, r) < 0)e.event.remove(i, t.type, t.fn)
                })
            } else {
                i.each(function () {
                    t.fn.apply(this)
                });
                if (this.fn2 && n.length > 0)e.each(n, function (n, i) {
                    if (e.inArray(i, r) < 0)t.fn2.apply(i)
                })
            }
        }
    };
    e.extend(e.livequery, {
        guid: 0, queries: [], queue: [], running: false, timeout: null, checkQueue: function () {
            if (e.livequery.running && e.livequery.queue.length) {
                var t = e.livequery.queue.length;
                while (t--)e.livequery.queries[e.livequery.queue.shift()].run()
            }
        }, pause: function () {
            e.livequery.running = false
        }, play: function () {
            e.livequery.running = true;
            e.livequery.run()
        }, registerPlugin: function () {
            e.each(arguments, function (t, n) {
                if (!e.fn[n])return;
                var r = e.fn[n];
                e.fn[n] = function () {
                    var t = r.apply(this, arguments);
                    e.livequery.run();
                    return t
                }
            })
        }, run: function (t) {
            if (t != undefined) {
                if (e.inArray(t, e.livequery.queue) < 0)e.livequery.queue.push(t)
            } else e.each(e.livequery.queries, function (t) {
                if (e.inArray(t, e.livequery.queue) < 0)e.livequery.queue.push(t)
            });
            if (e.livequery.timeout)clearTimeout(e.livequery.timeout);
            e.livequery.timeout = setTimeout(e.livequery.checkQueue, 20)
        }, stop: function (t) {
            if (t != undefined)e.livequery.queries[t].stop(); else e.each(e.livequery.queries, function (t) {
                e.livequery.queries[t].stop()
            })
        }
    });
    e.livequery.registerPlugin("append", "prepend", "after", "before", "wrap", "attr", "removeAttr", "addClass", "removeClass", "toggleClass", "empty", "remove", "html");
    e(function () {
        e.livequery.play()
    })
})(jQuery);


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
    });

})(jQuery);

