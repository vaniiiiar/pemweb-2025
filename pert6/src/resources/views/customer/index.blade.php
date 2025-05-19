<h1>Daftar Produk</h1>
<form method="POST" action="{{ route('customer.buy') }}">
    @csrf
    Nama: <input type="text" name="customer_name" required><br><br>

    @foreach($products as $product)
        <div>
            <strong>{{ $product->name }}</strong> - Rp{{ number_format($product->price) }}
            <input type="hidden" name="products[{{ $loop->index }}][id]" value="{{ $product->id }}">
            Qty: <input type="number" name="products[{{ $loop->index }}][qty]" min="0" value="0">
        </div>
    @endforeach

    <button type="submit">Beli</button>
</form>
