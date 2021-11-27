<!-- jquery-->
<script src="{{ asset('backend/js/jquery-3.3.1.min.js') }}"></script>
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
