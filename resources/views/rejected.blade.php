<div class="modal fade" id="rejected-{{$o->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <form class="col text-center" method="post" action="{{route('order_rejected', $o->id)}}">
        @csrf
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmar rechazo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>¿Estas seguro(a) de rechazar la orden?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
            </div>
        </div>

    </form>
</div>