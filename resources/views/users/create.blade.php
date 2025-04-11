@extends('layouts.app')

@section('title', 'Thêm User')

@section('content')
    <h1>Thêm User mới</h1>

    <form action="{{ route('users.store') }}" method="POST" style="max-width: 500px;">
        @csrf

        <label for="name">Họ tên:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Mật khẩu:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <label for="phone">Số điện thoại:</label><br>
        <input type="text" id="phone" name="phone"><br><br>

        <label for="address">Địa chỉ:</label><br>
        <input type="text" id="address" name="address"><br><br>

        <label for="role">Vai trò (1 = Khách hàng, 2 = Admin,...):</label><br>
        <input type="number" id="role" name="role" value="1"><br><br>

        <button type="submit">➕ Thêm User</button>
    </form>
@endsection