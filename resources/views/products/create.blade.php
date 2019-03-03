{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-12">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">--}}
                     {{--Crear Producto--}}
                {{--</div>--}}
                {{--<div class="card-body">--}}
                    {{--<form action="{{route('poducts.store')}}" method="post">--}}
                        {{--@csrf--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="">Descripcion</label>--}}
                            {{--<input type="text" class="form-control" name="description">--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="">Precio</label>--}}
                            {{--<input type="number" class="form-control" name="price">--}}
                        {{--</div>--}}
                        {{--<button type="submit" class="btn btn-primary">Guardar</button>--}}
                        {{--<a href="{{route('products.index')}}" class="btn btn-danger">Cancelar</a>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}

<div class="modal fade" id="crear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{route('poducts.store')}}" method="post">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="">Descripcion</label>
                        <input type="text" class="form-control" name="description">
                    </div>
                    <div class="form-group">
                        <label for="">Precio</label>
                        <input type="number" class="form-control" name="price">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>