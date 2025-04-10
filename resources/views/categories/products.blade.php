<!DOCTYPE html>
<html>

<head>
    <title>Sản phẩm của {{ $category->name }}</title>
</head>

<body>
    <h1>Sản phẩm trong thể loại: {{ $category->name }}</h1>

    <form method="GET" action="{{ route('categories.filter', $category->id) }}">
        <input type="text" name="name" placeholder="Tên sản phẩm" value="{{ request('name') }}">
        <input type="text" name="keyword" placeholder="Từ khóa" value="{{ request('keyword') }}">
        <input type="number" name="price_min" placeholder="Giá từ" value="{{ request('price_min') }}">
        <input type="number" name="price_max" placeholder="Giá đến" value="{{ request('price_max') }}">
        <input type="text" name="brand" placeholder="Thương hiệu" value="{{ request('brand') }}">
        <button type="submit">Lọc</button>
    </form>

    <ul>
        @forelse ($products as $product)
        <li>
            <h3>{{ $product->name }}</h3>
            <p>Giá: {{ $product->price }}</p>
            <p>Mô tả: {{ $product->description }}</p>
            <p>Thương hiệu: {{ $product->brand ?? 'Không có' }}</p>
        </li>
        @empty
        <li>Không có sản phẩm nào.</li>
        @endforelse
    </ul>
</body>

</html>