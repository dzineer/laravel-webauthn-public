<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="-1">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
    <title>internet hotspot &gt; login</title>
    <style type="text/css">
        body {color: #737373; font-size: 10px; font-family: verdana;}

        textarea,input,select {
            background-color: #FDFBFB;
            border: 1px solid #BBBBBB;
            padding: 2px;
            margin: 1px;
            font-size: 14px;
            color: #808080;
        }

        a, a:link, a:visited, a:active { color: #AAAAAA; text-decoration: none; font-size: 10px; }
        a:hover { border-bottom: 1px dotted #c1c1c1; color: #AAAAAA; }
        img {border: none;}
        td { font-size: 14px; color: #7A7A7A; }
    </style>

</head>

<body>

@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
@php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )
@php( $password_reset_url = View::getSection('password_reset_url') ?? config('adminlte.password_reset_url', 'password/reset') )

@if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
    @php( $register_url = $register_url ? route($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? route($password_reset_url) : '' )
@else
    @php( $login_url = $login_url ? url($login_url) : '' )
    @php( $register_url = $register_url ? url($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? url($password_reset_url) : '' )
@endif

@section('auth_header', __('adminlte::adminlte.login_message'))

<div style="display:flex;justify-content: center;align-items: center;height:100vh;width:100vw;">
    <table style="  margin-left: auto; margin-right: auto; width: 1000px; max-width:100%; background-image: url('/images/login.jpg');background-repeat: no-repeat;background-position: center; background-size:cover; ">
        <tbody><tr style="height: 400px; vertical-align: top;">
            <td>
                <div style="/* margin-bottom:0px; */text-align: center;margin-bottom: 1px;margin-top: 58px;margin-left: 64px;"><img src="/images/logo.jpg" style="height:50px"></div>
                <form name="login" action="{{ $login_url }}" method="post">
                    {{ csrf_field() }}
                    <table width="200" style="margin-left: auto;margin-right: auto;display: block;">
                        <tbody style="
    margin-left: 51px;
"><tr style="display: in;"><td align="right">Login</td>
                            <td><input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                       value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}" autofocus></td>
                        </tr>
                        <tr><td align="right">Password</td>
                            <td><input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                       placeholder="{{ __('adminlte::adminlte.password') }}"></td>
                        </tr>
                        <tr><td></td><td></td></tr>
                        <tr><td>&nbsp;</td>
                            <td><input style="width: 90px; height: 30px;" type="submit" value="OK"></td>
                        </tr>
                        </tbody></table>


                </form>
            </td>
        </tr>


        </tbody></table>

</div>

<div style="color: #737373; font-size: 10px; text-align: center; width:100%">Powered by Yellow.com</div>


<script type="text/javascript">
    document.login.email.focus();
</script>


</body></html>
