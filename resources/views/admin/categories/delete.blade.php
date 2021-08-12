<form action="{{ route('admin.categories.destroy', $category) }}" method="post">
    <div class="modal-body">
        @csrf
        @method('DELETE')
        <h5 class="text-center"> !!! УДАЛЕНИЯ !!! категори Id - {{$category->id}} <br> {{$category->name}} </h5>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
        <button type="submit" class="btn btn-danger">Да, удалить!</button>
    </div>
</form>
