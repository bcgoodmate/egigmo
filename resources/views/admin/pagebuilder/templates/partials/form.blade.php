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
                    <span>None Specified <span style="display: inline-block;"><a href="/admin/templates-workflow">Edit</a></span></span>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 text-right">
                    <label for="">Template file:</label>
                </div>
                <div class="col-sm-8">
                    <p><a class="popup-edit" href="#p0293">Upload</a></p>
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
        
        <div class="rich-editor">
            <div class="rich_editor">
                <textarea id="page_rich_body"></textarea>
            </div>
            <div class="code_editor">
                <pre id="page_code_body">{{$template_file_content}}</pre>
            </div>
        </div>

        <textarea name="html_code" class="hide">{!! $template_file_content !!}</textarea>
    </div>
</div>
<div class="button-wrapper">
    <button class="btn btn-primary btn-default btn-submit">Submit</button>
    <a href="#" class="btn btn-default" onclick="event.preventDefault(); document.getElementById('page-form-delete').submit();">Delete</a>
</div>


<div class="popup-content-wrapper mfp-hide" id="p0293">
    <div class="">
        <div class="list-btr">
            <h2>Upload Manager</h2>
        </div>
        <div class="modalwindow">
            <form action="" method="POST">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="name">Select file to upload to server:</label>
                        </div>
                        <div class="col-sm-6">
                            <div class="upload-div">
                                <input type="file" name="name" id="d0291" class="form-control" value="test">
                                <input type="text" name="name" id="d0291" class="form-control" value="test">
                            </div>
                            <br>
                            <label>  (250MB limit applies to each file)</label>
                        </div>
                        <div class="col-sm-2">
                            <!-- <input type="button" value="Select" class="btn btn-default" for="d0291"> -->
                            <label for="d0291" class="btn btn-default select">Select</label>
                        </div>
                    </div>
                </div>

                 <hr>
                <input type="submit" id="btnSaveForm" value="Upload" class="btn btn-primary btn-default">

            </form>
        </div>
    </div>
</div>