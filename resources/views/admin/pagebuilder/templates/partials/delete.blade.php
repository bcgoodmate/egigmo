<form action="{{route('admin.pagetemplatebuilder.destroy',$template->id)}}" method="post" id="page-form-delete">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="delete" />
</form>