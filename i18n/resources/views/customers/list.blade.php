<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }

    /*.full-height {*/
    /*    height: 100vh;*/
    /*}*/

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 50px;
    }

    .links > a {
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 10px;
    }

    .container{
        margin-top: 30px;
    }
    .w-5{
        display: none;
    }
    p{
        margin-top: 10px;
    }
</style>
<body class="antialiased">
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            @lang('language.title')
        </div>
        <div class="links">
            <a href="{{ route('use.change-language', ['en']) }}">English</a>
            <a href="{!! route('use.change-language', ['vi']) !!}">Vietnam</a>
        </div>
    </div>
</div>
<div class="container">

    <table class="table">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">@lang('language.first_name')</th>
            <th scope="col">@lang('language.last_name')</th>
            <th scope="col">@lang('language.address')</th>
            <th scope="col">@lang('language.email')</th>
        </tr>
        </thead>
        <tbody>
        @if(count($customers) == 0)
            <tr>
                <td colspan="5">@lang('language.note')</td>
            </tr>
        @else
            @foreach($customers as $key => $customer)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $customer['first_name'] }}</td>
                    <td>{{ $customer['last_name'] }}</td>
                    <td>{{ $customer['address'] }}</td>
                    <td>{{ $customer['email'] }}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
</div>
{{ $customers->links() }}
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
