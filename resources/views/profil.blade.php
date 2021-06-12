@extends('layout/main_profil')

@section('title', 'Profil')

@section('container')

<html>
    <head>
        <!-- <link href="../asset/css/style.css" rel="stylesheet">

        <title>Detail User</title> -->
        <style>
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
              -webkit-appearance: none;
              margin: 0;
            }

            input[type=number] {
                -moz-appearance: textfield;
              }
        </style>
    </head>
     
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Profil</a></li> -->
              <li class="breadcrumb-item active">Profil</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    @foreach($profil as $profil)
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

            <!-- Profile Image -->
            <!-- <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../asset/adminlte/dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Nina Mcintire</h3>

                <p class="text-muted text-center">Software Engineer</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
            </div> -->

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">{{$profil->nama}}</h3>
              </div>
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../asset/u_file/image/{{$profil->foto}}"
                       alt="User profile picture">
                </div>
              </div>
              <div class="card-body">
                <strong><i class="fas fa-user mr-1"></i> Nama </strong>
                <p class="text-muted">{{$profil->nama}}</p><hr>
                <strong><i class="fas fa-calendar-alt mr-1"></i> Tanggal Lahir </strong>
                <p class="text-muted">{{$profil->tanggal_lahir}}</p><hr>
                <strong><i class="fas fa-building mr-1"></i> Alamat </strong>
                <p class="text-muted">{{$profil->alamat}}</p><hr>
                <strong><i class="fas fa-envelope mr-1"></i> Email </strong>
                <p class="text-muted">{{$profil->email}}</p><hr>
                <strong><i class="fas fa-phone mr-1"></i> No Telepon </strong>
                <p class="text-muted">{{$profil->no_telepon}}</p><hr>
                <!-- <strong><i class="fas fa-user mr-1"></i> Role </strong>
                <p class="text-muted">{{$profil->role}}</p><hr> -->
                </div>
            </div>
        </div>


          <div class="col-md-9">
            <div class="card">
              <!-- <div class="card-header p-2">
                <ul class="nav nav-pills"> -->
                  <!-- <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li> -->
                  <!-- <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li> -->
                  <!-- <li class="nav-item col-12"><a class="active nav-link" data-toggle="tab">Pengaturan Akun</a></li> -->
                <!-- </ul>
              </div> -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Pengaturan Akun</h3>
                </div>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <!-- <div class="active tab-pane" id="activity">
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Shared publicly - 7:30 PM today</span>
                      </div>
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>
                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
                      </p>
                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    <div class="post clearfix">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Sarah Ross</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Sent you a message - 3 days ago</span>
                      </div>
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>
                      <form class="form-horizontal">
                        <div class="input-group input-group-sm mb-0">
                          <input class="form-control form-control-sm" placeholder="Response">
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-danger">Send</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Adam Jones</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Posted 5 photos - 5 days ago</span>
                      </div>
                      <div class="row mb-3">
                        <div class="col-sm-6">
                          <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                        </div>
                        <div class="col-sm-6">
                          <div class="row">
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="../../dist/img/photo2.png" alt="Photo">
                              <img class="img-fluid" src="../../dist/img/photo3.jpg" alt="Photo">
                            </div>
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="../../dist/img/photo4.jpg" alt="Photo">
                              <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                            </div>
                          </div>
                        </div>
                    </div>

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                  </div>
                   -->
                  <!-- <div class="tab-pane" id="timeline">
                    <div class="timeline timeline-inverse">
                      <div class="time-label">
                        <span class="bg-danger">
                          10 Feb. 2014
                        </span>
                      </div>
                      <div>
                        <i class="fas fa-envelope bg-primary"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 12:05</span>

                          <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                          <div class="timeline-body">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                            quora plaxo ideeli hulu weebly balihoo...
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-primary btn-sm">Read more</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                          </div>
                        </div>
                      </div>
                      <div>
                        <i class="fas fa-user bg-info"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                          <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                          </h3>
                        </div>
                      </div>
                      <div>
                        <i class="fas fa-comments bg-warning"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                          <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                          <div class="timeline-body">
                            Take me to your leader!
                            Switzerland is small and neutral!
                            We are more like Germany, ambitious and misunderstood!
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                          </div>
                        </div>
                      </div>
                      <div class="time-label">
                        <span class="bg-success">
                          3 Jan. 2014
                        </span>
                      </div>
                      <div>
                        <i class="fas fa-camera bg-purple"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                          <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                          <div class="timeline-body">
                            <img src="http://placehold.it/150x100" alt="...">
                            <img src="http://placehold.it/150x100" alt="...">
                            <img src="http://placehold.it/150x100" alt="...">
                            <img src="http://placehold.it/150x100" alt="...">
                          </div>
                        </div>
                      </div>
                      <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div>
                    </div>
                  </div> -->

                  <div class="active tab-pane" id="settings">
                    <form class="form-horizontal" action="../EditProfil" method="post" enctype="multipart/form-data">
                    @csrf
                      <div class="row form-group">
                      <input type="text" name="username" value="{{$profil->username}}" hidden></input>
                        <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-10">
                            <input type="text" name="nama" class="form-control" value="{{$profil->nama}}">
                        </div>
                      </div>
                      <div class="row form-group">
                        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-10">
                          <input type="date" name="tanggal_lahir" class="form-control" max="<?php echo date('Y-m-d') ?>" value="{{$profil->tanggal_lahir}}" required>
                        </div>
                      </div>
                      <div class="row form-group">
                        <label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-10">
                            <input type="text" name="alamat" class="form-control" value="{{$profil->alamat}}">
                        </div>
                      </div>
                      <div class="row form-group">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-10">
                            <input type="email" name="email" class="form-control" value="{{$profil->email}}">
                        </div>
                      </div>
                      <div class="row form-group">
                        <label class="col-sm-2 col-form-label">No Telepon</label>
                        <div class="col-10">
                            <input type="number" name="no_telepon" class="form-control" min="0" value="{{$profil->no_telepon}}">
                        </div>
                      </div>
                      <div class="row form-group">
                        <label class="col-sm-2 col-form-label">Foto</label>
                        <div class="input-group col-10">
                          <div class="custom-file">
                            <!--Foto Lama-->
                            <input type="text" name="foto_lama" class="form-control" 
                            value="{{$profil->foto}}" required>
                            <!--Foto Baru-->
                            <input type="file" name="foto" class="custom-file-input" accept="image/*">
                            <label class="custom-file-label">{{$profil->foto}}</label>
                          </div>
                        </div>
                      </div>
                      <div class="row form-group">
                        <label class="col-sm-2 col-form-label">Password</label>
                        <div class="col-10">
                            <input type="password" name="password" class="form-control" value="{{$profil->password}}">
                        </div>
                      </div>
                      <div class="row form-group">
                        <label class="col-sm-2 col-form-label"><text style="color:red">* </text>Konfirmasi Password</label>
                        <div class="col-10">
                            <input type="password" name="cek_password" placeholder="Confirm Password" class="form-control" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button name="confirm" class="btn btn-danger">Simpan</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    @endforeach
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</html>

<!-- {{Session::get('role')}} -->

@endsection