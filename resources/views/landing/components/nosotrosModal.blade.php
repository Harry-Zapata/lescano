<!-- Modal -->
<div class="modal fade" id="modalNosotros" tabindex="-1" role="dialog" aria-labelledby="#NosotrosModal"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="NosotrosModal">{{ $inicio->modalTituloNosotros }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- centrar imagen --}}
                <div class="text-center">
                    <img class="img-fluid mb-4" src="{{asset($inicio->modalImgNosotros)}}" alt="" width="300" height="300">
                </div>
                <div class="text-justify">
                    {{ $inicio->modalTextoNosotros }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
