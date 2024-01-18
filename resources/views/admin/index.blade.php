@extends('layouts.admin')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card card-statistic-2">
                        <div class="card-stats">
                            <div class="card-stats-title">Pegawai </div>
                        </div>
                        <div class="card-icon shadow-primary bg-primary">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Pegawai</h4>
                            </div>
                            <div class="card-body">
                                {{ $pegawai }}
                            </div>
                        </div> 
                    </div>         
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card card-statistic-2">
                        <div class="card-stats">
                            <div class="card-stats-title">Absensi </div>
                        </div>
                        <div class="card-icon shadow-primary bg-primary">
                            <i class="fas fa-list"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Absensi</h4>
                            </div>
                            <div class="card-body">
                                {{ $absensi }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12">
                  <div class="card card-statistic-2">
                      <div class="card-stats">
                          <div class="card-stats-title">Gaji </div>
                      </div>
                      <div class="card-icon shadow-primary bg-primary">
                          <i class="fas fa-dollar-sign"></i>
                      </div>
                      <div class="card-wrap">
                          <div class="card-header">
                              <h4>Total Gaji</h4>
                          </div>
                          <div class="card-body">
                              {{ $gaji }}
                          </div>
                      </div>
                  </div>
              </div>
              

                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card card-statistic-2">
                        <div class="card-stats">
                            <div class="card-stats-title">Cuti </div>
                        </div>
                        <div class="card-icon shadow-primary bg-primary">
                            <i class="fas fa-comment"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Cuti</h4>
                            </div>
                            <div class="card-body">
                                {{ $cuti }}
                            </div>
                        </div>
                    </div>
                </div>





            </div>
        </section>
    </div>
@endsection
