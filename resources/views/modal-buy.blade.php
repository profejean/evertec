<div class="modal fade" id="buy-{{$p->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <form class="col text-center" method="post" action="{{route('order', $p->id)}}">
        @csrf
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Buy product: {{$p->name}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
<<<<<<< HEAD
                <input type="text" placeholder="Nombre" name="customer_name">
                <input type="email" placeholder="correo" name="customer_email">
                <input type="number" placeholder="Teléfono" name="customer_mobile">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
=======
                <input type="text" placeholder="Name" name="customer_name">
                <input type="email" placeholder="Email" name="customer_email">
                <input type="text" placeholder="Mobile" name="customer_mobile">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send</button>
>>>>>>> 5cbca7ffa691f01b749bddc0664fdee9bcd5af03
            </div>
            </div>
        </div>

    </form>
</div>