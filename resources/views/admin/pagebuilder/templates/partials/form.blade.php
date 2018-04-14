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
<hr>
<div class="form-group">
    <label for="body">Content</label>
    <textarea name="body" cols="30" rows="10" class="rich_editor form-control"
              id="body">{!! old('body') != '' ? old('body') : $template ? $template -> body : $content !!}</textarea>
</div>
<button type="submit" class="btn btn-primary btn-default">Submit</button>
<a href="#" class="btn btn-danger" onclick="event.preventDefault();
                                                     document.getElementById('page-form-delete').submit();">Delete</a>