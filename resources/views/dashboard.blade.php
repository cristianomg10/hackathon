@extends('../layout')

@section('header')
    <h1 class="display-4">DASHBOARD</h1>
@endsection

@section('content')
    <script src="/js/canvas-toBlob.js"></script>
    <script src="/js/FileSaver.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
    <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous">
    </script>
    <div class="row d-flex justify-content-center">
        <div class="col-10 bg-white rounded mb-5" >
            <canvas class="line-chart" id="chart_estudante"></canvas>
            <button class="btn btn-light col-12 mb-2" id="save_chart1">Download Chart</button>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-10 bg-white rounded mb-5" >
            <canvas class="line-chart2" id="chart_empresa"></canvas>
            <button class="btn btn-light col-12 mb-2" id="save_chart2">Download Chart</button>
        </div>
    </div>

    <script>

        var Label=[];
        @foreach($dados['meses_usuarios'] as $numero =>$valor)
            var add = Label.push("{{($valor)}}");
        @endforeach

        var EstudantesIFSC=[];
            @foreach($dados['usuarios_ifsc'] as $numero =>$valor)
                var add = EstudantesIFSC.push({{$valor}});
        @endforeach

        var EstudantesIF=[];
            @foreach($dados['usuarios_if'] as $numero =>$valor)
        var add = EstudantesIF.push({{$valor}});
        @endforeach



        var ctx = document.getElementsByClassName("line-chart");
        var chartGraph = new Chart(ctx,{
            type:'bar',
            data: {
                labels:Label,
                datasets:[{
                    label:"ESTUDANTES IFSC",
                    borderWidth:6,
                    borderColor: 'rgba(136,255,135,0.5)',
                    backgroundColor:  'rgba(136,255,135,0.5)',
                    data:EstudantesIFSC,
                },

                {
                    label:"ESTUDANTES IFC",
                    borderWidth:6,
                    borderColor: 'rgba(255,136,135,0.5)',
                    backgroundColor:  'rgba(255,136,135,0.5)',
                    data:EstudantesIF,
                }
                ]

            },
            options:{
                title:{
                    display:true,
                    fontSize:20,
                    text:"ESTUDANTES CADASTRADOS "
                },
                labels:{
                    fontStyle:"bold",
                },
                scales:{
                    yAxes:[{
                        ticks:{
                        min:0,
                        beginAtZero:true,
                        },
                }],

                }
            }
        });
        $("#save_chart1").click(function () {
            $("#chart_estudante").get(0).toBlob(function(blob) {
                saveAs(blob, "chart_estudante.png")
            });
        });

    </script>

    <script>


        var Label=[];
            @foreach($dados['meses_empresas'] as $numero =>$valor)
        var add = Label.push("{{($valor)}}");
            @endforeach

        var Empresas=[];
            @foreach($dados['empresas'] as $numero =>$valor)
        var add = Empresas.push({{$valor}});
            @endforeach


        var ctx = document.getElementsByClassName("line-chart2");
        var chartGraph = new Chart(ctx,{
            type:'bar',
            data: {
                labels:Label,
                datasets:[{
                    label:"EMPRESAS CADASTRADAS MENSALMENTE",
                    borderWidth:6,
                    borderColor: 'rgba(20,140,160,0.5)',
                    backgroundColor: 'rgba(20,140,160,0.5)',
                    data:Empresas,
                }
                ]

            },
            options:{
                title:{
                    display:true,
                    fontSize:20,
                    text:"EMPRESAS CADASTRADOS"
                },
                labels:{
                    fontStyle:"bold",
                }
            }
        });
        $("#save_chart2").click(function () {
            $("#chart_empresa").get(0).toBlob(function(blob) {
                saveAs(blob, "chart_empresa.png")
            });
        });

    </script>
@endsection
