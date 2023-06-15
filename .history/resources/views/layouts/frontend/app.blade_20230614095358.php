<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('dist/img/tab_logo.png') }}">
    <title>{{ $title }} - {{ config('app.name') }}</title>
    @vite('resources/css/app.css')
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" /> --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body style="font-family: 'Open Sans', sans-serif;">
    <!-- navbar -->
    @include('layouts.frontend.partials.navbar')

    <!-- content -->
    <div class="content-section">
        @yield('content')
    </div>

    <!-- toastr -->
    @include('sweetalert::alert')

    <!-- footer -->
    @include('layouts.frontend.partials.footer')

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        function deleteData(id) {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: true
            })

            swalWithBootstrapButtons.fire({
                title: 'Apakah anda ingin mengeluarkan item ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, tolong!',
                cancelButtonText: 'Nope!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-' + id).submit();

                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Data kamu aman !',
                        '',
                        'error'
                    )
                }
            })
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>
    <script>
        $(document).ready(function() {
          $('.summernote').summernote({
            height: 200
          });
        });
      </script>
    @stack('js')
</body>

</html>
