@extends('layouts.main')
@section('title', 'Home')
@section('content')
    <div id="lugar-create-container" class="col-md-6 offset-md-3">

        <a href="lugar/create"><button class="btn btn-success">Criar Lugar</button></a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Título</th>

                    <th scope="col">Status</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($lugares as $lugar)
                    <tr>
                        <th scope="row">{{ $lugar->titulo }}</th>



                        @if ($lugar->status == 1)
                            <td>
                                Ativo
                            </td>

                        @endif

                        @if ($lugar->status == 0)
                            <td>
                                Inativo
                            </td>

                        @endif

                        <td><a href="lugar/edit/{{ $lugar->id }}"><button
                                    class="btn btn-primary">Editar</button></a><br><br>
                            <a href="lugar/view/{{ $lugar->id }}"><button class="btn btn-success">Visualizar</button></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>



    </div>
@endsection
