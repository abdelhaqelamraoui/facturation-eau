@extends('layouts.layout')
@section('subtitle','إحصائيات الزبون')

@section('content')
<div class="container">
    <!-- TODO -->

    <table class="table table-bordered">
        <thead class="table-success">
            <tr>
                <th>الإسم الشخصي</th>
                <th>الإسم العائلي</th>
                <th>ر.ب.و</th>
                <th>رقم العداد</th>
                <th>آخر كشف</th>
                <th>الفواتير المستخلصة</th>
                <th>الفواتير غير المستخلصة</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$client->nom}}</td>
                <td>{{$client->prenom}}</td>
                <td>{{$client->cin}}</td>
                <td>{{$client->compteur->numero}}</td>
                <td>{{$client->compteur->releves->last()->valeur}}</td>
                <td>{{$totals['facture']['payee']}}</td>
                <td>{{$totals['facture']['nonPayee']}}</td>
            </tr>
        </tbody>
    </table>

    <div class="row">
        <div class="col">
            <table class="table table-sm table-bordered caption-top">
                <caption class="text-end">الفواتير غير المستخلصة</caption>
                <thead class="table-warning">
                    <tr>
                        <th class="text-center">الرقم</th>
                        <th class="text-center">التاريخ</th>
                        <th class="text-center">الاستهلاك</th>
                        <th class="text-center">الثمن</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($factures as $i => $facture)
                    <tr>
                        <td class="fw-bold">{{$i}}</td>
                        <td>{{$facture->date}}</td>
                        <td>{{$facture->volume}}</td>
                        <td>{{$facture->montant}}</td>
                    </tr>

                    @empty
                    <tr>
                        <td colspan="4">لا يوجد فواتير</td>
                    </tr>
                    @endforelse
                </tbody>
                <tfoot class="table-warning table-group-divider">
                    <tr>
                        <th rowspan="2" colspan="2">المجموع</th>
                        <th>المستخلصة</th>
                        <th>غير المستخلصة</th>
                    </tr>
                    <tr>
                        <td>{{ $totals['montant']['paye'] }}</td>
                        <td>{{ $totals['montant']['nonPaye'] }}</td>
                    </tr>
                </tfoot>
            </table>

        </div>

        <div class="col">
            <script type="text/javascript">
                window.onload = function() {
                    const chart = new CanvasJS.Chart("chartContainer", {
                        theme: "light2",
                        title: {
                            text: "ملخص الفواتير"
                        },
                        data: [{
                            type: "pie",
                            showInLegend: true,
                            toolTipContent: "{y} - #percent %",
                            yValueFormatString: "# فاتورة",
                            legendText: "{indexLabel}",
                            dataPoints: [{
                                    y: parseInt(<?= $totals['facture']['payee'] ?>),
                                    indexLabel: "مستخلصة"
                                },
                                {
                                    y: parseInt(<?= $totals['facture']['nonPayee'] ?>),
                                    indexLabel: "غير مستخلصة"
                                },

                            ]
                        }]
                    });
                    chart.render();

                    const chart2 = new CanvasJS.Chart("chartContainer2", {
                        theme: "light2",
                        title: {
                            text: "ملخص الفواتير"
                        },
                        data: [{
                            type: "pie",
                            showInLegend: true,
                            toolTipContent: "{y} - #percent %",
                            yValueFormatString: "# factures",
                            legendText: "{indexLabel}",
                            dataPoints: [{
                                    y: parseInt(<?= $totals['facture']['payee'] ?>),
                                    indexLabel: "مستخلصة"
                                },
                                {
                                    y: parseInt(<?= $totals['facture']['nonPayee'] ?>),
                                    indexLabel: "غير مستخلصة"
                                },

                            ]
                        }]
                    });
                    chart2.render();
                }
            </script>

            <div id="chartContainer" class="mb-2" style="height: 370px; max-width: 920px; margin: 8px auto;"></div>

            <!-- <div id="chartContainer2" class="mt-2" style="height: 370px; max-width: 920px; margin: 8px auto;"></div> -->

        </div>
    </div>


    <script src="{{ asset('assets/canvasjs/canvasjs.min.js') }}"></script>
</div>
@endsection