<form action="{{route('admin.pagebuilder.destroy',$page->id)}}" method="post" id="page-form-delete">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="delete" />
</form>