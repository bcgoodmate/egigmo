@php ($template_file_path = public_path() . '/site' . ($template->content_path ? $template->content_path : '/x'))
@php ($template_file_content = file_exists($template_file_path) ? File::get($template_file_path): '{tag_pagecontent}')

<div class="hybridFormHeader">
    <h2 class="hybridFormTitlewrap">
        Template Details
    </h2>
</div>
<div class="col-inner-extra">
    <div class="row form-group">
        <div class="col-sm-4 text-right">
            <label for="name">Template Name</label>
        </div>
        <div class="col-sm-8">
            <input type="text" name="name" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                   value="{{ old('name') ? old('name') : $template ? $template->name : null }}">
            @if ($errors->has('name'))
                <span class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
            @endif
        </div>
    </div>
    <div class="row form-group">
        <div class="col-sm-4 text-right">
            <label for="enabled">Enabled</label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" id="enabled" value="1">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-sm-4 text-right">
            <label for="default_template">Default Template</label>
        </div>
        <div class="col-sm-8">
            <input type="checkbox" id="default_template" value="1"
                   name="default_template" {{ old('default_template') ? 'checked' : $template && $template->default_template ? 'checked' : $content }}>
        </div>

    </div>
</div>
<br>

<div class="tab-wrapper">
    <div class="tab-row">
        <a href="#">
            <div class="hybridFormHeader">
                <h2 class="hybridFormTitlewrap">
                    More Options
                </h2>
            </div>
        </a>
        <div class="col-inner-extra">
            <div class="row form-group">
                <div class="col-sm-4 text-right">
                    <label for="p01">No HEAD elements:</label>
                </div>
                <div class="col-sm-8">
                    <input type="checkbox" id="p01" value="1">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 text-right">
                    <label for="p02">Printer View:</label>
                </div>
                <div class="col-sm-8">
                    <input type="checkbox" id="p02" value="1">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 text-right">
                    <label for="">Workflow:</label>
                </div>
                <div class="col-sm-8">
                    <p>None Specified <span style="display: inline-block;"><a href="#">Edit</a></span></p>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 text-right">
                    <label for="">Template file:</label>
                </div>
                <div class="col-sm-8">
                    <p><a href="#">Upload</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<div class="hybridFormHeader">
    <h2 class="hybridFormTitlewrap">
        Template Content
    </h2>
</div>

<div class="">
    <div class="form-group">
        <label>Content</label>
        <div class="rich-editor">
            <div class="rich_editor">
                <textarea id="page_rich_body"></textarea>
            </div>
            <iframe id="temp_html" class="hide"></iframe>
            <div class="code_editor">
                <pre id="page_code_body">{{$template_file_content}}</pre>
            </div>
        </div>
        <textarea name="page_body" class="hide">{!! $template_file_content !!}</textarea>

    </div>
    <button class="btn btn-primary btn-default btn-submit">Submit</button>
    <a href="#" class="btn btn-default" onclick="event.preventDefault();
                                                         document.getElementById('page-form-delete').submit();">Delete</a>
</div>