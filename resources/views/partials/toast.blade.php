<!-- Load dependencies FIRST -->
<!-- SweetAlert2 CSS (optional, for custom styling) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    @if (Session::has('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: `{{ Session::get('success') }}`,
            toast: true,
            showConfirmButton: false,
            timer: 4000,
            timerProgressBar: true
        });
    @endif

    @if (Session::has('error'))
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: `{{ Session::get('error') }}`,
            toast: true,
            showConfirmButton: false,
            timer: 4000,
            timerProgressBar: true
        });
    @endif

    @if ($errors->any())
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
                    toast: true,
                    showConfirmButton: false,
                    timer: 5000,
                    timerProgressBar: true
                });
            }, index * 300);
        });
    @endif

</script>

