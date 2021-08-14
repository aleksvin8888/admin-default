<form action="{{ route('admin.posts.destroy', $post) }}" method="post">
    <div class="modal-body">
        @csrf
        @method('DELETE')
        <h5 class="text-center"> !!! УДАЛЕНИЯ !!! пост Id - {{$post->id}}
            <br>
            <strong>{{$post->title}}</strong>
        </h5>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
        <button type="submit" class="btn btn-danger">Да, удалить!</button>
    </div>
</form>
