<div class="container">

    <table border="3" cellspacing="0" cellpadding="10" align="center">
        <tr>
            <th colspan="2" bgcolor="lightgreen">PASAR</th>
            <th colspan="2" bgcolor="lightblue">OUTLET</th>
            <th colspan="2" bgcolor="lightsalmon">GUDANG</th>
        </tr>
        <tr>
            <th bgcolor="springgreen">Nama</th>
            <th bgcolor="mediumspringgreen">Harga</th>
            <th bgcolor="deepskyblue">Nama</th>
            <th bgcolor="turquoise">Harga</th>
            <th bgcolor="tomato">Nama</th>
            <th bgcolor="salmon">Harga</th>
        </tr>
            @foreach( $join_tables as $all )
                <tr>
                    <td>{{ $all->market_name }}</td>
                    <td>{{ $all->market_price }}</td>
                    <td>{{ $all->outlet_name }}</td>
                    <td>{{ $all->outlet_price }}</td>
                    <td>{{ $all->warehouse_name }}</td>
                    <td>{{ $all->warehouse_price }}</td>
                </tr>
            @endforeach
    </table>

</div>