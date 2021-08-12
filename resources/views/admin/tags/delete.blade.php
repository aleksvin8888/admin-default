<form action="{{ route('admin.tags.destroy', $tag) }}" method="post">
    <div class="modal-body">
        @csrf
        @method('DELETE')
        <h5 class="text-center"> !!! УДАЛЕНИЯ !!! тег Id - {{$tag->id}} <br> {{$tag->name}} </h5>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
        <button type="submit" class="btn btn-danger">Да, удалить!</button>
    </div>
</form>
