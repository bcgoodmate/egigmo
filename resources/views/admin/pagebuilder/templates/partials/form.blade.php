@php ($template_file_path = public_path() . '/site' . ($template->content_path ? $template->content_path : '/x'))
@php ($template_file_content = file_exists($template_file_path) ? File::get($template_file_path): '{tag_pagecontent}')

<div class="form-group">
    <label for="name">Template Name</label>
    <input type="text" name="name" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') ? old('name') : $template ? $template->name : null }}">

    @if ($errors->has('name'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>

<div class="form-group">
    <label for="default_template">
        <input type="checkbox" id="default_template" value="1" name="default_template" {{ old('default_template') ? 'checked' : $template && $template->default_template ? 'checked' : $content }}>
        Default Template
    </label>
</div>

<br>
<br>
<hr>

<div class="form-group">
    <label>Content</label>
    <div class="rich-editor">
        <div class="code_editor" style="display:block;">
            <pre id="page_code_body">{{$template_file_content}}</pre>
        </div>
    </div>

    <textarea name="page_body" class="hide">{!! $template_file_content !!}</textarea>
</div>

<button class="btn btn-primary btn-default btn-submit">Submit</button>
<a href="#" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('page-form-delete').submit();">Delete</a>