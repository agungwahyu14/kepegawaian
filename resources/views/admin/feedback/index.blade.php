@extends('layouts.admin')
@section('content')
    <div class="main-content">
        <section class="section">

            <div class="row mt-5">
                
                <div class="col-12">
                    @if (Session::has('danger'))
                        <p class=" alert alert-danger">{{ Session::get('danger') }}</p>
                    @endif
                  <div class="card">
                    <div class="card-header bg-primary">
                      <h3 class="text-white">Tabel Feedback</h3>
                      
                    </div>
                    <div> 
                    </div>
                    <div class="card-body p-0">
                      <div class="table-responsive">
                        
                        <table class="table table-striped text-center">
                          <tr>
                            <th>No</th>
                            <th>Pegawai ID</th>
                            <th>Feedback</th>
                            <th>Action</th>
                          </tr>

                          <?php $i = 1 ?>
                          @foreach ($feedback as $data)
                          <tr class="p-0 text-center">
                            <td><?= $i ?></td>
                            <td>{{ $data->id_pegawai }}</td>
                            <td>{{ $data->feedback }}</td>
                            <td><form action="/feedback/{{$data->id}}" method="post" class="d-inline">
                              @method('DELETE')
                              @csrf
                              <button type="submit" id="btn-hapus" class="btn btn-danger" 
                                onclick="return confirm('Apakah Kamu Yakin Ingin Menghapus data?')"
                                  >
                                <i class="fa-solid fa-trash"> Hapus</i>
                              </button>
                            </form></td>
                          </tr>
                          <?php $i++; ?>
                          @endforeach
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </section>
    </div>
@endsection
