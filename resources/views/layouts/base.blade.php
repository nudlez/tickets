<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ticket Counter</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<div class="toast" id="alertToast" style="position:fixed;top:0;right:0;z-index:99999">
    <div class="toast-body"></div>
</div>
    @yield('main-contents')
    <div class="modal" id="mdLarge">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body"></div>
            </div>
        </div>
    </div>
    <div class="modal" id="mdSmall">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body"></div>
            </div>
        </div>
    </div>

    <script src="{{asset('css/bs/dist/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('js/inc.js')}}"></script>
    @if (Session::has('alert'))
        <script>
            alertToastContent.innerHTML = "{{ Session::get('alert') }}";
            alertToast.show();
        </script>
    @endif
</body>
</html>