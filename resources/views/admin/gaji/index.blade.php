@extends('layouts.admin')
@section('content')
    <div class="main-content">
        <section class="section">

            <div class="row mt-5">
                
                <div class="col-12">

                  <div class="card">
                    <div class="card-header bg-primary">
                      <h3 class="text-white">Tabel Gaji</h3>
                      
                    </div>
                    <div>
                      <a href="{{ route('gaji.create') }}" class="btn btn-lg ml-4 mb-2 mt-2 btn-success">[+] Create</a>  
                    </div>
                    <div class="card-body p-0">
                      <div class="table-responsive">
                        <table class="table table-striped text-center">
                          <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Gaji Pokok</th>
                            <th>Tunjangan Tetap</th>
                            <th>Tunjangan Transportasi</th>
                            <th>Total</th>
                        
                          </tr>

                          <?php $i = 1 ?>
                          
                          <tr class="p-0 text-center">
                            <td><?= $i ?></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a href="#" class="btn btn-warning">Update</a> | <a href="#" class="btn btn-danger">Delete</a> </td>
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
