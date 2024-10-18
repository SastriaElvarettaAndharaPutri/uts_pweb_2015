@extends('Layout.layouts')

@section('title', 'Login')

@section('content')
    <h1 style="text-align: center;">Login</h1>

    <form action="/contact" method="GET" style="width: 300px; margin: 0 auto; border: 1px solid #000; padding: 20px;">
        <table cellpadding="8" cellspacing="0" border="0" width="100%">
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="email" id="email" name="email" style="width: 100%;"></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" id="password" name="password" style="width: 100%;"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" value="Login" style="width: 100%; padding: 10px; background-color: green; color: white;">
                </td>
            </tr>
        </table>
    </form>
@endsection


