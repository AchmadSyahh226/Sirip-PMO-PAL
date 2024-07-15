<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Cash Out</title>
    <style>
        table.static {
            position: relative;
            border: 3px solid;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Cash Out <br> Proyek Pembuatan Kapal <br> PT PAL Indonesia</b></p>

        <table class="static" rules="all" border="1px" style="width: 95%">
            <thead>
                <tr>
                    <th>Kapal : </th>
                </tr>
                <tr>
                    <th>No.</th>
                    <th>Tanggal</th>
                    <th>Material</th>
                    <th>Budget IPP</th>
                    <th>Kontrak</th>
                    <th>DP</th>
                    <th>LC/SKBDN</th>
                    <th>Warranty</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($transaction as $item)
                <tr>
                        <td>{{ $no++ }}.</td>
                        <td>{{ $item->date_transaction }}</td>
                        <td>{{  $item->material->name_material }}</td>
                        <td>{{ $item->formatRupiah('idr_budget') }}
                            <br> {{ $item->formatUSD('usd_budget') }}
                        </td>
                        <td>{{ $item->formatRupiah('idr_price_material') }}
                            <br>{{ $item->formatUSD('usd_price_material') }}
                        </td>
                        <td>{{ $item->formatRupiah('idr_down_payment') }}
                            <br>{{ $item->formatUSD('usd_down_payment') }}
                        </td>
                        <td>{{ $item->formatRupiah('idr_lc_skbdn') }}
                            <br>{{ $item->formatUSD('usd_lc_skbdn') }}
                        </td>
                        <td>{{ $item->formatRupiah('idr_price_warranty') }}
                            <br>{{ $item->formatUSD('usd_price_warranty') }}
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
