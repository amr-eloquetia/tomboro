<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/d85a79a655.js" crossorigin="anonymous"></script>
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<!-- Select2 CDN -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<!-- Bootstrap 4 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
{{--Datetime picker--}}
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
    integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw=="
    crossorigin="anonymous" />
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
<link rel="icon" type="image/png" href="{{ URL::asset('assets/images/favicon.png') }}" sizes="16x16">
<!-- bootstrap 4  -->
<link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/bootstrap.min.css') }}">
<!-- fontawesome 5  -->
<link rel="stylesheet" href="{{ URL::asset('assets/css/all.min.css') }}">
<!-- line-awesome webfont -->
<link rel="stylesheet" href="{{ URL::asset('assets/css/line-awesome.min.css') }}">
<!-- custom select css -->
<link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/nice-select.css') }}">
<!-- animate css  -->
<link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/animate.min.css') }}">
<!-- lightcase css -->
<link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/lightcase.css') }}">
<!-- slick slider css -->
<link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/slick.css') }}">
<!-- jquery ui css -->
<link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/jquery-ui.min.css') }}">
<!-- datepicker css -->
<link rel="stylesheet" href="{{ URL::asset('assets/css/vendor/datepicker.min.css') }}">
<!-- style main css -->
<link rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}">
@stack('page-styles')
