@extends('voyager::master')

{{-- @section('page_title', __('voyager::generic.media')) --}}

@section('content')
    <div class="page-content container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">

                <div class="admin-section-title">
                    <h3><i class="voyager-mail"></i> Correos recibidos</h3>
                </div>
                <div class="col-md-4" style="height: 800px; overflow-y: auto; overflow-x:hidden; box-sizing:border-box">
                    @if (!empty($emails))
                        <ul class="list-group">
                            @foreach ($emails as $key => $email)
                                <li class="list-group-item email-item" data-index="{{ $key }}">
                                    @php echo '<b>' .$email['from'].'</b><br>' .$email['subject'] . '<br><span style="font-size:10pt">' . $email['date'] . '</span>'  @endphp
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>No se encontraron correos.</p>
                    @endif
                    {{ $paginator->links() }}

                </div>
                <div class="col-md-8">
                    <div id="email-content">
                        <p>Selecciona un correo para ver su contenido.</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .page-content container-fluid -->
    {{-- @stop --}}


@endsection



@section('javascript')
    <script>
        // Esperar a que el DOM esté listo
        document.addEventListener("DOMContentLoaded", function() {
            const emailItems = document.querySelectorAll('.email-item');
            const emailContentDiv = document.getElementById('email-content');

            emailItems.forEach(item => {
                item.addEventListener('click', function() {
                    const index = this.getAttribute('data-index');

                    // Obtener el correo seleccionado
                    const email = {!! json_encode($emails) !!}[index];

                    // Actualizar el contenido del correo en el div correspondiente
                    emailContentDiv.innerHTML = `
                    <h5>${email.subject}</h5>
                    <p><strong>De:</strong> ${email.from}</p>
                    <p><strong>Fecha:</strong> ${email.date}</p>
                    <hr>
                    <div>${email.body}</div>
                `;
                });
            });
        });
    </script>
@endsection
