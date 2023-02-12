<div class="container">

    <table border="3" cellspacing="0" cellpadding="5" width="100" align="center">
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
            @foreach( $all_tables_integers as $all_tables_integer )
                <tr>
                    <td>{{ $all_tables_integer['market_name'] }}</td>
                    <td>{{ intval($all_tables_integer['market_price']) }}</td>
                    <td>{{ $all_tables_integer['outlet_name'] }}</td>
                    <td>{{ intval($all_tables_integer['outlet_price']) }}</td>
                    <td>{{ $all_tables_integer['warehouse_name'] }}</td>
                    <td>{{ intval($all_tables_integer['warehouse_price']) }}</td>
                </tr>
            @endforeach
    </table>

</div>