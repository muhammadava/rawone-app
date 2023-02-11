<div class="container">

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Nama</th>
            <th>Harga</th>
        </tr>
            @foreach( $join_tables as $all )
                <tr>
                    <td>{{ $all->name }}</td>
                    <td>{{ $all->market_price }}</td>
                    <td>{{ $all->name }}</td>
                    <td>{{ $all->outlet_price }}</td>
                    <td>{{ $all->name }}</td>
                    <td>{{ $all->warehouse_price }}</td>
                </tr>
            @endforeach
    </table>

</div>