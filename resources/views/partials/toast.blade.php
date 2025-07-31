<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (Session::has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: `{{ is_array(Session::get('success')) ? implode(', ', Session::get('success')) : Session::get('success') }}`,
            showConfirmButton: false,
            timer: 4000,
            timerProgressBar: true
        });
    </script>
@endif

@if (Session::has('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: `{{ is_array(Session::get('error')) ? implode(', ', Session::get('error')) : Session::get('error') }}`,
            showConfirmButton: false,
            timer: 4000,
            timerProgressBar: true
        });
    </script>
@endif

@if ($errors->any())
    <script>
        const uniqueErrors = {};
        @foreach ($errors->all() as $error)
            uniqueErrors[`{{ $error }}`] = true;
        @endforeach

        Object.keys(uniqueErrors).forEach((error, index) => {
            setTimeout(() => {
                Swal.fire({
                    icon: 'error',
                    title: 'Validation Error',
                    text: error,
                    showConfirmButton: false,
                    timer: 5000,
                    timerProgressBar: true
                });
            }, index * 300);
        });
    </script>
@endif
