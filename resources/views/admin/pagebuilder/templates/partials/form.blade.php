<div class="form-group">
    <label for="name">Template Name</label>
    <input type="text" name="name" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
           value="{{ old('name') ? old('name') : $template ? $template->name : null }}">
    @if ($errors->has('name'))
        <span class="invalid-feedback">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
    @endif
</div>
<div class="form-group">
    <label for="default_template"><input type="checkbox" id="default_template" value="1"
                                         name="default_template" {{ old('default_template') ? 'checked' : $template && $template->default_template ? 'checked' : $content }}>
        Default Template</label>
</div>
<br>
<br>
<hr>
<div class="form-group">
    <label>Content</label>
    <div class="rich-editor">
        <div class="rich_editor">
            <textarea id="page_rich_body"></textarea>
        </div>
        <iframe id="temp_html" class="hide"></iframe>
        <div class="code_editor">
            <pre id="page_code_body"></pre>
        </div>
    </div>
    <textarea name="page_body" class="hide">{{$template ? $template->content_html: null}}</textarea>

</div>
<button class="btn btn-primary btn-default btn-submit">Submit</button>
<a href="#" class="btn btn-danger" onclick="event.preventDefault();
                                                     document.getElementById('page-form-delete').submit();">Delete</a>