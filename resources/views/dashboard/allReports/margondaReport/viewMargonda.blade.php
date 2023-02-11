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
            @foreach( $join_markets as $market => $item )
            @foreach( $join_outlets as $outlet => $item )
            @foreach( $join_warehouses as $warehouse => $item )
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->market_price }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->outlet_price }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->warehouse_price }}</td>
                </tr>
            @endforeach
            @endforeach
            @endforeach
            <!-- @foreach( $join_outlets as $outlet => $item )
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->outlet_price }}</td>
            @endforeach
            @foreach( $join_warehouses as $warehouse => $item )
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->warehouse_price }}</td>
            @endforeach -->
            </tr>
    </table>

</div>