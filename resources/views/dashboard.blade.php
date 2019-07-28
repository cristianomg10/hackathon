@extends('../layout')

@section('header')
    <h1 class="display-4">DASHBOARD</h1>
@endsection

@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
    <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous">
    </script>
    <div class="row d-flex justify-content-center">
        <div class="col-10 bg-white rounded mb-5" >
            <canvas class="line-chart"></canvas>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-10 bg-white rounded mb-5" >
            <canvas class="line-chart2"></canvas>
        </div>
    </div>

    <script>

        var Label = ["{{$dados['meses_usuarios'][0]}}"];
        var Estudantes=[{{$dados['usuarios'][0]}}];
        var ctx = document.getElementsByClassName("line-chart");
        var chartGraph = new Chart(ctx,{
            type:'bar',
            data: {
                labels:Label,
                datasets:[{
                    label:"ESTUDANTES",
                    borderWidth:6,
                    borderColor: 'rgba(136,255,135,0.5)',
                    backgroundColor:  'rgba(136,255,135,0.5)',
                    data:Estudantes,
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
                }
            }
        });


    </script>

    <script>

        var Label = ["{{$dados['meses_empresas'][0]}}"];
        var Result=[{{$dados['empresas'][0]}}];
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
                    data:Result,
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


    </script>
@endsection
