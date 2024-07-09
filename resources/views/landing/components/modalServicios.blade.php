@foreach ( $servicios as $servicio )
    <!-- Modal -->
<div class="modal fade" id="modalServicio{{ $servicio->id }}" tabindex="-1" role="dialog" aria-labelledby="#ServicioModal{{ $servicio->id }}"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ServicioModal{{ $servicio->id }}">{{ $servicio->nombreModal }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- centrar imagen --}}
                <div class="text-center">
                    <img class="img-fluid mb-4" src="{{ asset($servicio->imagenModal) }}" alt=""
                        width="300" height="300">
                </div>
                <div class="text-justify">
                    {{ $servicio->textoModal }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
@endforeach