<!-- Modal -->
<div class="modal fade" id="modal-delete-{{$fallecido->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <form action="{{route('fallecidos.destroy',$fallecido->id)}}" method="POST">
      @csrf
      @method('DELETE')
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminacion de registros</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Deseas eliminar al registro con UUID {{$fallecido->uuid}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-danger">Eliminar</button>
      </div>
    </div>
    </form>
  </div>
</div>