@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="content">
	<div class="container-xxl">


        <div class="row mt-4">
          <div class="col-12">
              <div class="card">
                  <div class="card-header"><h4>Список клиентов </h4>
                      <div class="row  justify-content-between p-2" style="background-color: #F9F9FC;border-radius:10px;" >
                        <div class="col-lg-6 col-sm-12">
                          <form action="{{ url('/clients') }}" class="row" method="GET">
                            <div class="col-sm-12  col-lg-7 mb-2">
                                <input type="search" class="form-control"  name="search" value="{{ request('search') }}" placeholder="Поиск по имени клиента"/>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <button type="submit" class="btn btn-primary">Поиск</button>
                                <a href="{{route('clients.index')}}" class="btn btn-success">Очистка</a>
                            </div>
                        </form>
                        </div>
                      </div>
                  </div><!-- end card header -->
                  <div class="card-body">
                      <div class="table-responsive mb-3">
                          <table class="table table-hover mb-0 w-100"  id="clients-table">
                              <thead>
                                  <tr>
                                      <th scope="col">Имя Фамилия</th>
                                      <th scope="col">Номер телефона</th>
                                      <th scope="col">Адрес</th>
                                      <th scope="col">Название продукта</th>
                                      <th scope="col">Обратная связь
                                      </th>
                                      <th scope="col">Дата создания
                                      </th>
                                      <th scope="col">Действие</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($clients as $client)
                                    <tr class="align-middle">
                                      <td >{{$client->name}}</td>
                                      <td>{{$client->phone}}</td>
                                      <td >{{$client->address}}</td>
                                      <td><?=($client->order[0]) ? $client->order[0]->product->name_uz : '';?></td>
                                      <td><?=($client->is_answered) ?  "<span class='text-success'>Javob qaytarilgan</span>" : "<span class='text-danger'>Javob qaytarilmagan</span>";?></td>
                                      
                                      <td>{{$client->created_at->format('Y.m.d , H:i')}}</td>
                                      <td>
                                        <a href="{{route('clients.show',$client->id)}}" class="btn btn-sm btn-primary" style="margin-right: 10px" ><i data-feather="eye"></i></a>
                                        <form class="d-inline-block " action="{{ route('clients.destroy', $client->id) }}" method="POST">
                                          @csrf
                                          @method("DELETE")
                                          <button class="btn btn-sm btn-danger"><i class="mdi mdi-delete  fs-18"></i></button>
                                        </form>
                                  
                                      </td>
                                    </tr>
                                @endforeach
                              </tbody>
                          </table>
                      </div>
                      @if ($clients->hasPages())
                          <nav>
                              <ul class="pagination">
                                  {{-- Артка sahifa tugmasi --}}
                                  @if ($clients->onFirstPage())
                                      <li class="page-item disabled"><a class="page-link">&laquo; Артка</a></li>
                                  @else
                                      <li class="page-item">
                                          <a class="page-link" href="{{ $clients->previousPageUrl() }}" rel="prev">&laquo; Артка</a>
                                      </li>
                                  @endif
  
                                  {{-- Sahifa raqamlari --}}
                                  @foreach ($clients->getUrlRange(1, $clients->lastPage()) as $page => $url)
                                      @if ($page == $clients->currentPage())
                                          <li class="page-item active" aria-current="page"><a class="page-link">{{ $page }}</a></li>
                                      @else
                                          <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                      @endif
                                  @endforeach
  
                                  {{-- Кейинги sahifa tugmasi --}}
                                  @if ($clients->hasMorePages())
                                      <li class="page-item">
                                          <a class="page-link" href="{{ $clients->nextPageUrl() }}" rel="next">Кейинги &raquo;</a>
                                      </li>
                                  @else
                                      <li class="page-item disabled"><a class="page-link">Кейинги &raquo;</a></li>
                                  @endif
                              </ul>
                          </nav>
                      @endif
                  </div>
              </div>
          </div>
      </div>
		</div> <!-- container-fluid -->
	</div> 
@endsection
