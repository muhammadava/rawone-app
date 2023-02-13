<div class="container">

    <table border="3" cellspacing="0" cellpadding="5" width="500" align="center">
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
                    <td align="right">{{ $all->market_price }}</td>
                    <td>{{ $all->outlet_name }}</td>
                    <td align="right">{{ $all->outlet_price }}</td>
                    <td>{{ $all->warehouse_name }}</td>
                    <td align="right">{{ $all->warehouse_price }}</td>
                </tr>
            @endforeach
            <tr>
                <td>TOTAL</td> 
                <td align="right">Rp. {{ number_format($totalMarket) }}</td>  
                <td>TOTAL</td>    
                <td align="right">Rp. {{ number_format($totalOutlet) }}</td>  
                <td>TOTAL</td>    
                <td align="right">Rp. {{ number_format($totalWarehouse) }}</td>  
            </tr>
    </table>

</div>