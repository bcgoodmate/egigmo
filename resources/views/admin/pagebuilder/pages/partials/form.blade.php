<div class="col-inner-extra">
    <div class="row form-group">
        <div class="col-sm-4 text-right">
            <label>Page Name</label>
        </div>
        <div class="col-sm-8 ">
            @if(old('name'))
                <input type="text" name="name" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                       value="{{old('name') }}">
            @else
                <input type="text" name="name" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                       value="{{$page ? $page->name : null }}">
            @endif

            @if ($errors->has('name'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>

<div class="col-inner-extra">
    <div class="row form-group">
        <div class="col-sm-4 text-right">
            <label for="start_page">Set as Start Page</label>
        </div>
        <div class="col-sm-8 ">
            <input type="checkbox" id="start_page" value="1" name="start_page" {{ old('is_start_page') ? 'checked' : $page && $page->is_start_page ? 'checked' : '' }}>
        </div>
    </div>
</div>
<div class="col-inner-extra">
    <div class="row form-group">
        <div class="col-sm-4 text-right">
            <label>Folder</label>
        </div>
        <div class="col-sm-8 ">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    @if(old('folder'))
                        <select name="folder" class="form-control {{ $errors->has('folder') ? ' is-invalid' : '' }}">
                            <option value="">/</option>
                            @foreach($directories as $directory)
                                <option value="{{$directory}}" {{ old('folder') == $directory ? 'selected' : '' }} >
                                    /{{$directory}}</option>
                            @endforeach
                        </select>
                    @else
                        <select name="folder" class="form-control {{ $errors->has('folder') ? ' is-invalid' : '' }}">
                            <option value="">/</option>
                            @foreach($directories as $directory)
                                <option value="/{{$directory}}" {{$page ? '/'.$directory == $page->folder ? 'selected' : '' : ''}} >
                                    /{{$directory}}</option>
                            @endforeach
                        </select>
                    @endif
                    @if ($errors->has('folder'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('folder') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-4 col-sm-4">
                    <a href="#newfolder-popup" class="open-popup-link form-label-inline">New Folder</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-inner-extra">
    <div class="row form-group">
        <div class="col-sm-4 text-right">
            <label>Template</label>
        </div>
        <div class="col-sm-8 ">
            @if(old('template'))
                <select name="template" class="form-control">
                    <option value="">no template</option>
                    @foreach($templates as $key => $template)
                        <option value="{{$key}}" {{ old('template') == $key ? 'selected': ''}}>{{$template}}</option>
                    @endforeach
                </select>
            @else
                <select name="template" class="form-control">
                    <option value="">no template</option>
                    @foreach($templates as $key => $template)
                        <option value="{{$key}}" {{ $page ? $page->default_template && $key == 'default' ? 'selected' :  !$page->default_template && $key == $page->page_template_id ? 'selected': '' : ''}}>{{$template}}</option>
                    @endforeach
                </select>
            @endif
        </div>
    </div>
</div>
<br>
<br>
<h3><b>SEO Metadata</b></h3>
<div class="col-inner-extra">
    <div class="row form-group">
        <div class="col-sm-4 text-right">
            <label>Page Title</label>
        </div>
        <div class="col-sm-8 ">
            @if(old('name'))
                <input type="text" name="page_title" class="form-control" value="{{ old('page_title') }}">
            @else
                <input type="text" name="page_title" class="form-control" value="{{$page ? $page->page_title : null}}">
            @endif
        </div>
    </div>
</div>
<div class="col-inner-extra">
    <div class="row form-group">
        <div class="col-sm-4 text-right">
            <label>Page Description</label>
        </div>
        <div class="col-sm-8 ">
            @if(old('name'))
                <textarea name="page_desc" cols="30" rows="5" class="form-control"
                          id="page_desc">{{ old('page_desc') }}</textarea>
            @else
                <textarea name="page_desc" cols="30" rows="5" class="form-control"
                          id="page_desc">{{$page ? $page->page_description : null}}</textarea>
            @endif
        </div>
    </div>
</div>
<br>
<br>
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
    <textarea name="page_body" class="hide">{{$page ? $page->content_html: null}}</textarea>
</div>
<div class="button-wrapper">
<button class="btn btn-primary btn-default btn-submit">Submit</button>
<a href="#" class="btn btn-default" onclick="event.preventDefault();
                                                     document.getElementById('page-form-delete').submit();">Delete</a>
                                                 </div>
