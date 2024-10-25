@extends('practice.practice')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    @forelse ($customer as $item)
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                    @empty
                        Record is empty
                    @endforelse

                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
@endsection