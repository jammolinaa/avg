@extends('layouts.app')

@section('template_title')
    Aprendiz
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Aprendiz') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('aprendiz.create') }}" class="btn btn-outline-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre Completo</th>
										<th>Pregunta1</th>
										<th>Pregunta2</th>
										<th>Pregunta3</th>
										<th>Pregunta4</th>
										<th>Pregunta5</th>
										<th>Pregunta6</th>
										<th>Pregunta7</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($aprendizs as $aprendiz)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $aprendiz->nombre_completo }}</td>
											<td>{{ $aprendiz->pregunta1 }}</td>
											<td>{{ $aprendiz->pregunta2 }}</td>
											<td>{{ $aprendiz->pregunta3 }}</td>
											<td>{{ $aprendiz->pregunta4 }}</td>
											<td>{{ $aprendiz->pregunta5 }}</td>
											<td>{{ $aprendiz->pregunta6 }}</td>
											<td>{{ $aprendiz->pregunta7 }}</td>

                                            <td>
                                                <form action="{{ route('aprendiz.destroy',$aprendiz->id) }}" method="POST">
                                                    <a class="btn btn-outline-primary " href="{{ route('aprendiz.show',$aprendiz->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-outline-success" href="{{ route('aprendiz.edit',$aprendiz->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $aprendizs->links() !!}
            </div>
        </div>
    </div>
@endsection
