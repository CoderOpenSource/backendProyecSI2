<!DOCTYPE html>
<html>

<head>
    <title>Reporte Usuarios</title>
</head>

<style>
    @page {
        margin: 90px 60px;
    }

    header {
        position: fixed;
        top: -90px;
        left: 0px;
        right: 0px;
        height: 10px;
    }

    footer {
        position: fixed;
        bottom: -90px;
        left: 0px;
        right: 0px;
        height: 50px;
    }

    .page-number:after {
        content: counter(page);
    }

    table {
        border-collapse: collapse;
        width: 100%;
        padding-left: 0%;
        border: 1px solid #e0e0e0;
        border-style:none
    }

    p.saltodepagina {
        page-break-after: always;
    }

    td {
        padding: 2px;
        text-align: left;
        border-bottom: 2px solid #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;

    }

    th {
        background-color: #00a914;
        color: white;
        text-align: center;
        padding: 2px;
      
        
    }

    body {
        padding-top: 50px;
        font-family: Helvetica, Futura, Arial, Verdana, sans-serif;
    }

    .page-break {
        page-break-after: always;
    }

</style>

<body>
    <header>
        <?php
        $nombreImagen = $empresa->foto;
        $imagenBase64 = 'data:image/jpg;base64,' . base64_encode(file_get_contents($nombreImagen));
        ?>

        <div style="position: relative">
            <div style="position: absolute">
                <img src="<?php echo $imagenBase64; ?>" style="height: 150px;width:auto;margin-top: 2.5em;"/>
              
            </div>
            <div style="position: absolute;text-align: left">
                {{-- <p style="font-size: 10px;margin-top: 3em;margin-left: 25em;vertical-align:middle;">Reporte de Usuarios:
                    {{ \Carbon\Carbon::now() }}</p> --}}
                    <p style="font-size: 10px;margin-top: 3em;margin-left: 25em;vertical-align:middle;">Parametro de Fechas de Reporte:
                        {{ $lol->inicio }} - {{$f}}</p>
            </div>
        </div>
    </header>
    <footer>
        <div style="position: relative">
            <div style="position: absolute;text-align: left">
                <p style="font-size: 10px;margin-left: 10em;vertical-align:middle;color: #888888;">
                    <strong>"Sistema Activo Fijo"</strong>
                    Para contactarse llamar al 71005231 angelicamirandau@gmail.com
                </p>
            </div>
            <div style="position: absolute;text-align: right">
                <p class="page-number"
                    style="font-size: 10px;margin-top: 1em;margin-left: 1em;vertical-align:middle;">
                    Página </p>
            </div>
        </div>


    </footer>
    <div>

  
        <h4 style="text-align: center;color:#00a914"><strong> REPORTE DE USUARIOS</strong> </h4>
        <p style="font-size: 12px;margin-top: 0.5em;padding: 0; margin: 0;"><strong>DATOS DEL USUARIO</strong>
            
        </p>

            <table class="table-borderless" style="font-size:12px;border-style:none">
                <tr>
                   
                    <th style="text-align: left;background-color: #ffffff;
                    color: rgb(4, 4, 4);border-style:none;width:20px"><strong>Nombre: </strong></th>
                    <td style="text-align: left;background-color: #ffffff;
                    color: rgb(4, 4, 4);width:250px;border-style:none" >{{$user->name}}</td>
                    
                </tr>
                
                
                <tr>
                    <th style="text-align: left;background-color: #ffffff;
                    color: rgb(4, 4, 4);border-style:none"><strong>Email:</strong></th>
                    <td style="text-align: left;background-color: #ffffff;
                    color: rgb(4, 4, 4);border-style:none">{{$user->email}}</td>
               
                </tr>
                
              
                <tr>
                    <th style="text-align: left;background-color: #ffffff;
                    color: rgb(4, 4, 4);border-style:none"><strong>Teléfono</strong></th>
                    <td style="text-align: left;background-color: #ffffff;
                    color: rgb(4, 4, 4);border-style:none">{{$user->telefono}}</td>      
                </tr>
               
                   
               
               
                <tr>
                    <th style="text-align: left;background-color: #ffffff;
                    color: rgb(4, 4, 4);border-style:none"><strong>Cargo:</strong></th>
                    <td style="text-align: left;background-color: #ffffff;
                    color: rgb(4, 4, 4);border-style:none">{{$user->cargo}}</td>
               
                </tr>
                <tr>
                    <th style="text-align: left;background-color: #ffffff;
                    color: rgb(4, 4, 4);border-style:none"><strong>Dirección</strong></th>
                    <td style="text-align: left;background-color: #ffffff;
                    color: rgb(4, 4, 4);border-style:none">{{$user->direccion}}</td>
               
                </tr>
            </table>
            
       
        
            
                    
                    <h4>DETALLES DEL REPORTE</h4>
                   
                    <table id='kardex'>

                        <thead>
                            <tr>
                                <th>ID</th>
                                @if ($lol->nombre == 'true')
                                <th>Nombre</th> 
                                @endif
                                @if ($lol->sexo == 'true')
                                <th>Sexo</th> 
                                @endif
                                @if ($lol->edad == 'true')
                                <th>Edad</th> 
                                @endif
                                @if ($lol->cargo == 'true')
                                <th>Cargo</th> 
                                @endif
                                @if ($lol->direccion == 'true')
                                <th>Dirección</th> 
                                @endif
                                @if ($lol->telefono == 'true')
                                <th>teléfono</th> 
                                @endif
                                @if ($lol->email == 'true')
                                <th>Email</th> 
                                @endif
                                
                               
            
                            </tr>
                            {{-- <th>user</th> --}}
                        </thead>

                        <tbody>
                            @foreach ($users as $us )
                                
                            <tr>

                                <td>{{$us->id}}</td>
                                @if ($lol->nombre == 'true')
                                <td> {{$us->name}} </td> 
                                @endif
                                @if ($lol->sexo == 'true')
                                <td>{{$us->sexo}} </td>
                                @endif
                                @if ($lol->edad == 'true')
                                <td> {{$us->edad}} </td>
                                @endif
                                @if ($lol->cargo == 'true')
                                <td> {{$us->cargo}} </td>
                                @endif
                                @if ($lol->direccion == 'true')
                                <td> {{$us->direccion}} </td>
                                @endif
                                @if ($lol->telefono == 'true')
                                <td> {{$us->telefono}} </td>
                                @endif
                                @if ($lol->email == 'true')
                                <td> {{$us->email}} </td>
                                @endif
                                {{-- <td>{{$contrato->users->name}}</td> --}}

                            </tr>
                            @endforeach

                        </tbody>
                       
                    </table>

                           
                            




    

    </div>

    </div>

</body>

</html>
