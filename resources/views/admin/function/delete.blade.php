<script>
    function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');
        console.log(urlToRedirect);
        swal({
                title: "Are you sure to Delete this post",
                text: "You will not be able to revert this!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willCancel) => {
                if (willCancel) {



                    window.location.href = urlToRedirect;

                }


            });


    }
</script>

{{-- <script>
    function confirmDelete(item_id) {
        swal({
                title: 'Apakah Anda Yakin?',
                text: "Anda Tidak Akan Dapat Mengembalikannya!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            })
            .then((willDelete) => {
                if (willDelete) {
                    $('#' + item_id).submit();
                } else {
                    swal("Cancelled Successfully");
                }
            });
    }
</script> --}}
