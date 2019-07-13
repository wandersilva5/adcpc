
    <!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
            <title>Título Opcional</title>
     
            <!--Custon CSS (está em /public/assets/site/css/certificate.css)-->
            {{-- <link rel="stylesheet" href="{{ url('assets/site/css/certificate.css') }}"> --}}
        </head>
        <style>
        *{margin: 0px; padding: 0px;}
            #corpo{
                margin: 40px 35px 35px 40px;
            }
            #titulo{
                text-align: center;
            }
            #participantes{
                text-justify: auto;
                font-size: 18px;
                margin-top: 20px;
                margin-bottom: 20px;
            }
            #pauta{
                text-align: justify;
            }
            #rodape{
                text-align: right;
                margin-top: 20px;
                margin-bottom: 20px;
            }
        </style>
        <body>
            <div>
                @forelse($atas as $ata)
                <div id="corpo">
                    
                    <h2 id="titulo">{{ $ata->titulo }}</h2>
                    <div id="participantes">Estando presentes: {{ $ata->participantes }}</div>
                    <div id="pauta">{{ $ata->pauta }}</div>

                    <div id="rodape">Rio de Janeiro, {{ $ata->created_at }}</div>

                </div>
                @empty
                    <h2>Essa Ata não foi lança da ou não existe.</h2>
                @endforelse
            </div>

        </body>
</html>