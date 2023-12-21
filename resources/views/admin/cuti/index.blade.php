@extends('layouts.admin')
@section('content')
    <div class="main-content">
        <section class="section">

            <div class="row mt-5">
                
                <div class="col-12">

                  <div class="card">
                    <div class="card-header bg-primary">
                      <h3 class="text-white">Tabel Cuti</h3>
                      
                    </div>
                    <div>
                      <a href="{{ route('cuti.create') }}" class="btn btn-lg ml-4 mb-2 mt-2 btn-success">[+] Create</a>  
                    </div>
                    <div class="card-body p-0">
                      <div class="table-responsive">
                        
                        <table class="table table-striped text-center">
                          <tr>
                            <th>No</th>
                            <th>Pegawai ID</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                          </tr>

                          <?php $i = 1 ?>
                          
                          <tr class="p-0 text-center">
                            <td><?= $i ?></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><form action="/cuti/{{$data->id}}" method="post" class="d-inline">
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
                           
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </section>
    </div>
@endsection
