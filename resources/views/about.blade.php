@extends("/layouts.plantilla")

@section("cabecera")
    <div class="col-6"><a href="">Dixroby</a></div>
    <div class="col-6"><a href="">arone</a></div>
@endsection

@section("infoGeneral")
    dixroby arone

    @if(@count($alumnos))
        <table border="1">
            @foreach($alumnos as $persona)
            <tr>
                <td>
                    {{$persona}}
                </td>
            </tr>
            @endforeach
        </table>
        @else
            {{"sin alumnos"}}
    @endif


@endsection

@section("pie")
    <div class="col-6"><a href="">Dixroby</a></div>
    <div class="col-6"><a href="">arone</a></div>
@endsection
