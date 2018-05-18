<div class="form-builders" data-action="{{$action}}">
    <div class="list-btr">
        <h2>{{$form->name or "New Form Builders"}}</h2>
    </div>
    <br>
    <div class="btn-add">
        @include('admin.formbuilder.templates.partials.buttons')
    </div>
    <div class="row">
        <div class="col-inner">


            <div id="webform-builder">
                @include('admin.formbuilder.templates.partials.canvas')
            </div>

            <span class="positionMarker"></span>


            <div class="webform-popup">

                <div class="mfp-hide popup-content-wrapper" id="popup-properties">
                    <div class="">
                        @if($action == 'create')
                            @include('admin.formbuilder.templates.partials.popup-addproperties')
                        @else
                            @include('admin.formbuilder.templates.partials.popup-editproperties', ['form' => $form])
                        @endif
                    </div>
                </div>

                <div class="mfp-hide popup-content-wrapper" id="popup-autoresponder">
                    <div class="">
                        @include('admin.formbuilder.templates.partials.popup-autoresponder')
                    </div>
                </div>

                <div class="mfp-hide popup-content-wrapper" id="popup-notification">
                    <div class="">
                        @include('admin.formbuilder.templates.partials.popup-notification')
                    </div>
                </div>

                <div class="mfp-hide popup-content-wrapper" id="popup-gethtmlcode">
                    <div class="">
                        @include('admin.formbuilder.templates.partials.popup-gethtmlcode')
                    </div>
                </div>

                <div class="mfp-hide popup-content-wrapper" id="popup-customize">
                    <div class="">
                        @include('admin.formbuilder.templates.partials.popup-customize')
                    </div>
                </div>
            </div>
        </div>
        <div class="button-wrapper">
                <input type="button" id="" value="Update" class="btn btn-primary btn-default">
                <input type="button" id="" value="Copy this Web Form" class="btn btn-default">
                <input type="button" id="" value="Delete" class="btn btn-default">
            </div>
    </div>
</div>