@extends('layouts.master')

@section('title')
    <title>Dashboard</title>
@endsection

@section('content')

<div class="content-wrapper">
    
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Dashboard </h1>
          </div>
        </div>
      </div>
    </div>


    <!-- INFO -->
    
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
              @if (session('success'))
              @component('layouts.alert')
                  @slot('type')
                      success
                  @endslot
                  {!! session('success') !!}
              @endcomponent
              @endif

              @if (session('danger'))
              @component('layouts.alert')
                  @slot('type')
                      danger
                  @endslot
                  {!! session('danger') !!}
              @endcomponent
              @endif


            <!-- LIST -->
            
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Jadwal Hari Ini
                </h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  </div>
                </div>
              

                <!-- DATA -->

              <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">

                  @forelse ($list as $li)
                  <li>
                    
                    <div class="d-inline ml-2">
                      <input type="checkbox" value="" name="todo1" id="todoCheck1">
                      <label for="todoCheck1"></label>
                    </div>
                    
                  <span class="text">{{ $li->name }}</span>
                    
                    <small class="badge badge-success"><i class="far fa-clock"></i> {{ $li->time }}</small>
                    
                    <div class="tools">
                      <form action="{{ route('dashboard.destroy', $li->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-xs btn-danger" title="Hapus"><i class="fas fa-times"></i></button>
                      </form>
                    </div>

                  </li>

                  @empty
                    <li>
                      <p><center>Wah, Anda belum punya jadwal nih. Yuk mulai menyusun jadwal</center></p>
                    </li>

                  @endforelse
                </ul>
              </div>
            </div>

          </div>


          <!-- FORM -->
          
          <div class="col-lg-6">
              <div class="card card-info collapsed-card">
                  <div class="card-header">
                    <h3 class="card-title">Buat Jadwal</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
                    </div>
                  </div>

                  <div class="card-body">

                  <form class="form-horizontal" action="{{ route('create') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                      <div class="form-group">
                        <label for="name" class="col-form-label">Nama Kegiatan</label>
                          <input type="text" class="form-control" name="name" id="name">
                      </div>

                      <div class="bootstrap-timepicker">
                          <div class="form-group">
                            <label for="time" class="col-form-label">Jam</label>
                            <div class="input-group date" id="timepicker" data-target-input="nearest">
                              <input type="text" name="time" class="form-control datetimepicker-input" data-target="#timepicker"/>
                              <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="far fa-clock"></i></div>
                              </div>
                              </div>
                          </div>
                      </div>

                    </div>
                    
                    <div class="card-footer">
                      <button type="submit" class="btn btn-info">Simpan</button>
                      <button type="reset" class="btn btn-default float-right">Hapus</button>
                    </div>
                    
                  </form>
                  
                </div>
          </div>
          
        </div>
      </div>
    </div>
</div>

@endsection

