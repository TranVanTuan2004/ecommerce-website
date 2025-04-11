@extends('layouts.app')

@section('title', 'Sửa User')

@section('content')
    <h1>Sửa thông tin User</h1>

    <form action="{{ route('users.update', $user->id) }}" method="POST" style="max-width: 500px;">
        @csrf
        @method('PUT')

        <label for="name">Họ tên:</label><br>
        <input type="text" id="name" name="name" value="{{ $user->name }}" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="{{ $user->email }}" required><br><br>

        <label for="password">Mật khẩu mới (nếu đổi):</label><br>
        <input type="password" id="password" name="password" placeholder="Nhập password mới"><br><br>

        <label for="phone">Số điện thoại:</label><br>
        <input type="text" id="phone" name="phone" value="{{ $user->phone }}"><br><br>

        <label for="address">Địa chỉ:</label><br>
        <input type="text" id="address" name="address" value="{{ $user->address }}"><br><br>

        <label for="role">Vai trò (1 = Khách hàng, 2 = Admin,...):</label><br>
        <input type="number" id="role" name="role" value="{{ $user->role }}"><br><br>

        <button type="submit">💾 Cập nhật</button>
    </form>
@endsection