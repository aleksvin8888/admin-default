



<form action="{{ route('users.destroy', $user) }}" method="post">
    <div class="modal-body">
        @csrf
        @method('DELETE')
        <h5  class="text-center">   !!!  УДАЛЕНИЯ  !!!  пользователя Id -  {{$user->id}} <br> {{$user->name}} </h5>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary"  data-dismiss="modal" >Отмена</button>
        <button type="submit" class="btn btn-danger">Да, удалить!</button>
    </div>
</form>
