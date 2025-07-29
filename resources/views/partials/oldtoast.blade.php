<!-- Load dependencies FIRST -->
<link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('user/assets/css/toast.css') }}">

<script>
// Prevent duplicate initialization
if (!window.toastInitialized) {
    window.toastInitialized = true;

    document.addEventListener('DOMContentLoaded', function() {
        // Debug marker
        console.log('Toast handler executing');

        @if (Session::has('success'))
            if (!window.successShown) {
                window.successShown = true;
                toast.success("Success", `{{ Session::get('success') }}`, {
                    variant: 'filled',
                    position: 'top-right'
                });
            }
        @endif

        @if (Session::has('error'))
            if (!window.errorShown) {
                window.errorShown = true;
                toast.error("Error", `{{ Session::get('error') }}`, {
                    variant: 'filled',
                    position: 'top-right'
                });
            }
        @endif

        @if ($errors->any())
            if (!window.validationErrorsShown) {
                window.validationErrorsShown = true;

                const uniqueErrors = {};
                @foreach ($errors->all() as $error)
                    uniqueErrors[`{{ $error }}`] = true;
                @endforeach

                console.log("Unique errors:", Object.keys(uniqueErrors));

                Object.keys(uniqueErrors).forEach((error, index) => {
                    setTimeout(() => {
                        toast.error("Validation Error", error, {
                            variant: 'filled',
                            position: 'top-right',
                            duration: 5000
                        });
                    }, index * 300);
                });
            }
        @endif
    });
}
</script>

<!-- Load JS LAST -->
<script src="{{ asset('user/assets/js/toast.js') }}"></script>
