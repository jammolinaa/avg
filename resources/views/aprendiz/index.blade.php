@extends('layouts.app')

@section('template_title')
    Aprendiz
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <section class="content container-fluid">
        <div class="fond">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span class="title">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
                                </svg>
                                Aprendices
                
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

                    <div class="card">
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
                                                @role('Admin')
                                                <form action="{{ route('aprendiz.destroy',$aprendiz->id) }}" method="POST">
                                                    <a class="btn btn-outline-primary " href="{{ route('aprendiz.show',$aprendiz->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-outline-success" href="{{ route('aprendiz.edit',$aprendiz->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                                @endrole
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
    </section>
@endsection
