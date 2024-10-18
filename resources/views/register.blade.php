@extends('Layout.layouts')

@section('title', 'Register')

@section('content')
    <h1 style="text-align: center;">Register</h1>

    <form action="/contact" method="GET" style="width: 300px; margin: 0 auto; border: 1px solid #000; padding: 20px;">
        <table cellpadding="8" cellspacing="0" border="0" width="100%">
            <tr>
                <td><label for="name">Name:</label></td>
                <td><input type="text" id="name" name="name" style="width: 100%;"></td>
            </tr>
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
                    <button type="submit" style="width: 100%; padding: 10px; background-color: blue; color: white;">Register</button>
                </td>
            </tr>
        </table>
    </form>
@endsection
