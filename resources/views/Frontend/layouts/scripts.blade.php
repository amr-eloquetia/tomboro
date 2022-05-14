<script src="{{ URL::asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ URL::asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
<!-- custom select js -->
<script src="{{ URL::asset('assets/js/vendor/jquery.nice-select.min.js') }}"></script>
<!-- lightcase js -->
<script src="{{ URL::asset('assets/js/vendor/lightcase.js') }}"></script>
<!-- wow js -->
<script src="{{ URL::asset('assets/js/vendor/wow.min.js') }}"></script>
<!-- slick slider js -->
<script src="{{ URL::asset('assets/js/vendor/slick.min.js') }}"></script>
<!-- countdown js -->
<script src="{{ URL::asset('assets/js/vendor/jquery.countdown.js') }}"></script>
<!-- jquery ui js -->
<script src="{{ URL::asset('assets/js/vendor/jquery-ui.min.js') }}"></script>
<!-- datepicker js -->
<script src="{{ URL::asset('assets/js/vendor/datepicker.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/vendor/datepicker.en.js') }}"></script>
<!-- preloader -->
<script src="{{ URL::asset('assets/js/vendor/TweenMax.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/vendor/MorphSVGPlugin.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/preloader.js') }}"></script>
<!-- contact js -->
<script src="{{ URL::asset('assets/js/contact.js') }}"></script>
<!-- custom js -->
<script src="{{ URL::asset('assets/js/app.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script type="text/javascript" src="/javascripts/jquery-3.1.1.min.js"></script>

<!-- remove from cart js -->

<script type="text/javascript">
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>
