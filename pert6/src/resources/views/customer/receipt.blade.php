<h1>Struk Pembelian</h1>
<p>Nama: {{ $transaction->customer_name }}</p>
<table border="1">
    <tr>
        <th>Produk</th>
        <th>Qty</th>
        <th>Subtotal</th>
    </tr>
    @foreach($transaction->details as $detail)
        <tr>
            <td>{{ $detail->product->name }}</td>
            <td>{{ $detail->qty }}</td>
            <td>Rp{{ number_format($detail->subtotal) }}</td>
        </tr>
    @endforeach
</table>
<p><strong>Total: Rp{{ number_format($transaction->total_price) }}</strong></p>
