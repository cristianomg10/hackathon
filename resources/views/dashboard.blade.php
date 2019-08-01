@extends('../layout')

@section('header')
    <h4 class="display-4">INFORMAÇÕES GERENCIAIS</h4>
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
    <div class="row d-flex justify-content-center  ">

      <div class="col-6">

            <div class="bg-white  rounded mb-5 pt-4 text-center shadow-md"  style="height: 150px">
                <i class="fas fa-users fa-3x"></i>
                <h3> Usuários: {{$dados['total_usuarios']}}</h3>
            </div>

          <div class="bg-white  rounded mb-5 pt-4 text-center shadow-md"  style="height: 150px">
              <i class="fas fa-building fa-3x"></i>
              <h3>Total empresas: {{$dados['total_empresas']}}</h3>
          </div>



        </div>

        <div class="col-6">

            <div class="bg-white  rounded mb-5 pt-4 text-center shadow-md"  style="height: 150px">
                <i class="fab fa-wpforms fa-3x"></i>
                <h3>Total vagas: {{$dados['total_vagas']}}</h3>

            </div>

            <div class="bg-white  rounded mb-5 pt-4 text-center shadow-md"  style="height: 150px">
                <i class="far fa-question-circle fa-3x"></i>
                <h3>Total enquetes {{$dados['total_enquetes']}}</h3>
            </div>



        </div>

        <div class="col-md-6 ml-0 col-sm-10">

            <div class="bg-white rounded mb-5  shadow-md" >
                <div class="table-responsive" >
                    <canvas class="line-chart " style="height:400px" id="chart_estudante"></canvas>
                </div>
                <button class="btn btn-light col-12 mb-2" id="save_chart1">Download Chart</button>
            </div>

            <div class="bg-white rounded mb-5 shadow-md">
                <div class="table-responsive" >
                    <canvas  class="line-chart2" style="height:400px"  id="chart_empresa"></canvas>
                </div>
                <button class="btn btn-light col-12 mb-2" id="save_chart2">Download Chart</button>
            </div>


        </div>

        <div class="col-md-6 ml-0 col-sm-10">
            <div class="bg-white rounded mb-5 shadow-md">

                <div class="table-responsive" >
                    <canvas  class="line-chart3" style="height:400px"  id="chart_vaga"></canvas>
                </div>
                <button class="btn btn-light col-12 mb-2" id="save_chart3">Download Chart</button>
            </div>
            <div class="bg-white rounded mb-5 shadow-md">
                <div class="table-responsive" >
                    <canvas  class="line-chart4" style="height:400px"  id="chart_enquete"></canvas>
                </div>
                <button class="btn btn-light col-12 mb-2" id="save_chart4">Download Chart</button>
            </div>
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
                responsive: true,
                maintainAspectRatio: false,
                title:{
                    display:true,
                    fontSize:20,
                    text:"ESTUDANTES CADASTRADOS: {{$dados['total_usuarios']}} "
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
            type:'line',
            data: {
                labels:Label,
                datasets:[{
                    label:"EMPRESAS CADASTRADAS",
                    borderWidth:6,
                    borderColor: 'gray',
                    backgroundColor: 'transparent',
                    data:Empresas,
                }
                ]

            },
            options:{
                responsive: true,
                maintainAspectRatio: false,
                title:{
                    display:true,
                    fontSize:20,
                    text:"EMPRESAS CADASTRADAS: {{$dados['total_empresas']}}"
                },
                labels:{
                    fontStyle:"bold",
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            min: 0,
                            beginAtZero: true,
                        },
                    }],
                }
            }
        });
        $("#save_chart2").click(function () {
            $("#chart_empresa").get(0).toBlob(function(blob) {
                saveAs(blob, "chart_empresa.png")
            });
        });

    </script>

    <script>

        var Label=[];
            @foreach($dados['meses_vagas'] as $numero =>$valor)
        var add = Label.push("{{($valor)}}");
            @endforeach


        var Vagas=[];
            @foreach($dados['vagas'] as $numero =>$valor)
        var add = Vagas.push({{$valor}});
            @endforeach


        var ctx = document.getElementsByClassName("line-chart3");
        var chartGraph = new Chart(ctx,{
            type:'line',
            data: {
                labels:Label,
                datasets:[{
                    label:"VAGAS CADASTRADAS",
                    borderWidth:6,
                    borderColor: 'rgba(20,140,160,0.5)',
                    backgroundColor: 'transparent',
                    data:Vagas,
                }
                ]

            },
            options:{
                responsive: true,
                maintainAspectRatio: false,
                title:{
                    display:true,
                    fontSize:20,
                    text:"VAGAS CADASTRADAS: {{$dados['total_vagas']}}"
                },
                labels:{
                    fontStyle:"bold",
                }
            }
        });
        $("#save_chart3").click(function () {
            $("#chart_vaga").get(0).toBlob(function(blob) {
                saveAs(blob, "chart_empresa.png")
            });
        });

    </script>

    <script>


        var Label=[];
            @foreach($dados['meses_enquetes'] as $numero =>$valor)
        var add = Label.push("{{($valor)}}");
            @endforeach

        var Enquetes=[];
            @foreach($dados['enquetes'] as $numero =>$valor)
        var add = Enquetes.push({{$valor}});
            @endforeach


        var ctx = document.getElementsByClassName("line-chart4");
        var chartGraph = new Chart(ctx,{
            type:'line',
            data: {
                labels:Label,
                datasets:[{
                    label:"ENQUETES CADASTRADAS",
                    borderWidth:6,
                    borderColor: 'orange',
                    backgroundColor: 'transparent',
                    data:Enquetes,
                }
                ]

            },
            options:{
                responsive: true,
                maintainAspectRatio: false,
                title:{
                    display:true,
                    fontSize:20,
                    text:"ENQUETES CADASTRADAS: {{$dados['total_enquetes']}}"
                },
                labels:{
                    fontStyle:"bold",
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            min: 0,
                            beginAtZero: true,
                        },
                    }],
                }
            }
        });
        $("#save_chart4").click(function () {
            $("#chart_enquete").get(0).toBlob(function(blob) {
                saveAs(blob, "chart_enquetes.png")
            });
        });

    </script>
@endsection
