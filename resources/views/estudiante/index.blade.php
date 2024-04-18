@extends('layouts.app')

@section('template_title')
    Estudiante
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Estudiante') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('estudiantes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre</th>
										<th>Pregunta1</th>
										<th>Pregunta2</th>
										<th>Pregunta3</th>
										<th>Pregunta4</th>
										<th>Pregunta5</th>
										<th>Pregunta6</th>
										<th>Pregunta7</th>
										<th>Pregunta8</th>
										<th>Pregunta9</th>
										<th>Pregunta10</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($estudiantes as $estudiante)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $estudiante->nombre }}</td>
											<td>{{ $estudiante->pregunta1 }}</td>
											<td>{{ $estudiante->pregunta2 }}</td>
											<td>{{ $estudiante->pregunta3 }}</td>
											<td>{{ $estudiante->pregunta4 }}</td>
											<td>{{ $estudiante->pregunta5 }}</td>
											<td>{{ $estudiante->pregunta6 }}</td>
											<td>{{ $estudiante->pregunta7 }}</td>
											<td>{{ $estudiante->pregunta8 }}</td>
											<td>{{ $estudiante->pregunta9 }}</td>
											<td>{{ $estudiante->pregunta10 }}</td>

                                            <td>
                                                <form action="{{ route('estudiantes.destroy',$estudiante->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('estudiantes.show',$estudiante->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('estudiantes.edit',$estudiante->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $estudiantes->links() !!}
            </div>
        </div>
    </div>
@endsection
