@extends('admin')

@section('konten')

<style>
  body{
      background-color: darkgray;
  }
</style>


    <main>
        <div class="container mt-5">
            <h2 class="text-center pt-3">Contact</h2>
            <table class="table table-bordered mt-2">
                <thead>
                  <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">PESAN</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                @foreach ($contact as $key => $item)
                <tbody>
                  <tr>
                    <th scope="row">{{ $key+1}}</th>
                    <td>{{ $item -> nama}}</td>
                    <td>{{ $item -> email}}</td>
                    <td>{{ $item -> pesan }}</td>
                    <td>
                      <a href="contact/delete/{{$item -> id}}"><button class="btn btn-danger" name="submit" type="submit">HAPUS</button></a>
                    </td>
                  </tr>
                </tbody>
                @endforeach
              </table>
        </div>
    </main>
        
@endsection
