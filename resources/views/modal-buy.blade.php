<div class="modal fade" id="buy-{{$p->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <form class="col text-center" method="post" action="{{route('order')}}">

        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Comprar producto: {{$p->name}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" placeholder="Nombre" name="name">
                <input type="email" placeholder="correo" name="email">
                <input type="text" placeholder="Teléfono" name="tlf">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Enviar</button>
            </div>
            </div>
        </div>

    </form>
</div>