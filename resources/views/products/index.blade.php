@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Listado de Productos
                        @if(Auth::user()->name == 'root')
                            <button type="button" class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#crear">
                                Nuevo Producto
                            </button>
                        @endif
                    </div>
                    <div class="card-body">
                        {{--@if(session('info'))--}}
                            {{--<div class="alert alert-success">--}}
                                {{--{{session('info')}}--}}
                            {{--</div>--}}
                        {{--@endif--}}
                            <br>
                        <input id="filtrar" type="text" class="form-control{{ $errors->has('buscar') ? ' is-invalid' : '' }}" name="filtrar" value="{{ old('buscar') }}" autofocus placeholder="Buscar">
                            <br>

                        <table class="table table-hover table-sm" style="margin-top: 3px;">
                            <thead>
                                <th style="width: 900px;">Descripcion</th>
                                <th style="width: 100px;">Precio</th>
                            </thead>
                            <tbody class="buscar">
                                @foreach($products as $product)
                                    <tr>
                                        <td>
                                        {{$product->description}}
                                        </td>
                                        <td>
                                           $ {{$product->price}}
                                        </td>
                                        <td>
                                            @if(Auth::user()->name == 'root')
                                                <a href="{{ route('products.destroy', $product->id) }}" class="btn btn-danger" style="float: right; margin-left: 5px;">Eliminar</a>
                                                <a id="editar" class="btn btn-primary" style="float: right; color: white" onclick="editar({{ $product->id }})">Editar</a>
                                            @else
                                                <a href="#"><img src="{{ asset('images/Carro.png') }}" alt=""></a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            (function ($) {
                $('#filtrar').keyup(function () {
                    var rex = new RegExp($(this).val(), 'i');
                    $('.buscar tr').hide();
                    $('.buscar tr').filter(function () {
                        return rex.test($(this).text());
                    }).show();
                })
            }(jQuery));
        });

        function editar(id) {
            $.ajax({
                url: '{{ route('product.edit') }}',
                method:'GET',
                data: {'id': id},
                dataType: "json",
                success:function(data){
                    $('#modalEditar').modal('show');
                    $('#descripcion').val(data.descripcion);
                    $('#price').val(data.price);
                    $('#id').val(data.idProducto);
                }
            });
        }
    </script>
    @include('products.create')
    @include('products.edit')
@endsection