<!-- jquery-->
<script src="{{ asset('backend/js/jquery-3.3.1.min.js') }}"></script>
<!-- sweetalert-->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Plugins js -->
<script src="{{ asset('backend/js/plugins.js') }}"></script>
<!-- Popper js -->
<script src="{{ asset('backend/js/popper.min.js') }}"></script>
<!-- Bootstrap js -->
<script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
<!-- Counterup Js -->
<script src="{{ asset('backend/js/jquery.counterup.min.js') }}"></script>
<!-- Moment Js -->
<script src="{{ asset('backend/js/moment.min.js') }}"></script>
<!-- Waypoints Js -->
<script src="{{ asset('backend/js/jquery.waypoints.min.js') }}"></script>
<!-- Scroll Up Js -->
<script src="{{ asset('backend/js/jquery.scrollUp.min.js') }}"></script>
<!-- Full Calender Js -->
<script src="{{ asset('backend/js/fullcalendar.min.js') }}"></script>
<!-- Chart Js -->
<script src="{{ asset('backend/js/Chart.min.js') }}"></script>
<!-- Custom Js -->
<script src="{{ asset('backend/js/main.js') }}"></script>
<!-- Select 2 Js -->
<script src="{{ asset('backend/js/select2.min.js') }}"></script>
<!-- Date Picker Js -->
<script src="{{ asset('backend/js/datepicker.min.js') }}"></script>
<!-- Smoothscroll Js -->
<script src="{{ asset('backend/js/jquery.smoothscroll.min.js') }}"></script>
<!-- DataTable -->
<script src="{{ asset('backend/js/jquery.dataTables.min.js') }}"></script>
<!--Toastr -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}"
        switch(type){
        case 'info':
        toastr.info(" {{ Session::get('message') }} ");
        break;
    
        case 'success':
        toastr.success(" {{ Session::get('message') }} ");
        break;
    
        case 'warning':
        toastr.warning(" {{ Session::get('message') }} ");
        break;
    
        case 'error':
        toastr.error(" {{ Session::get('message') }} ");
        break;
        }
    @endif
</script>

<script>
    $(function() {
        $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            var link = $(this).attr("href");
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success ml-1',
                    cancelButton: 'btn btn-danger mr-1'
                },
                buttonsStyling: false
            })
            swalWithBootstrapButtons.fire({
                title: 'Əminsən ?',
                text: "Sildikən sonra geri qaytarılamaz",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Bəli, Sil !',
                cancelButtonText: 'Xeyr, Silmə !',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = link;
                    swalWithBootstrapButtons.fire(
                        'Silindi!',
                        'Uğurla Silindi',
                        'success'
                    )
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Ləğv Edildi!',
                        'Məlumatlar Güvəndədir! ;)',
                        'error'
                    )
                }
            })
        })
    })
</script>