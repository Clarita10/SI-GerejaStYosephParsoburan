@extends('layout/main_detail_user')

@section('title', 'User')

@section('container')
<html>
    <head>
        <!-- <link href="../asset/css/style.css" rel="stylesheet">
        <style>
            
        </style>
        <title>Detail User</title> -->
    </head>
    <body>
        <!-- <div class="detail_user">
            <h1>Detail User</h1><hr>
            <form action="../ChangeRole" method="post">
            @csrf
            <fieldset>
                <table>
                    @foreach($detail_user as $user)
                    <input type="text" name="username" value="{{$user->username}}" hidden></input>
                    <tr>
                        <td>ID</td>
                        <td align="center">:</td>
                        <td colspan="2">{{$user->id}}<hr></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td align="center">:</td>
                        <td colspan="2">{{$user->username}}<hr></td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td align="center">:</td>
                        <td colspan="2">{{$user->nama}}<hr></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td align="center">:</td>
                        <td colspan="2">{{$user->email}}<hr></td>
                    </tr>
                    <tr>
                        <td>No Telepon</td>
                        <td align="center">:</td>
                        <td colspan="2">{{$user->no_telepon}}<hr></td>
                    </tr>
                    
                        <tr>
                            <td >Role</td>
                            <td align="center">:</td>
                            <td width="170px">
                                <select name="role">
                                    <option value="masyarakat">{{$user->role}}</option>
                                    @if($user->role=='masyarakat')
                                        <option value="umat">umat</option>
                                    @endif
                                    @if($user->role=='umat')
                                        <option value="masyarakat">masyarakat</option>
                                    @endif
                                </select>
                            </td>
                            <td align="center"><button name="change">change</button></td></br>
                        </tr>
                    @endforeach
                </table>
            </fieldset>
            </form>
            <a class="link" href="../user">BACK</a>
        </div>-->
    </body>
     
     
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Pengguna</a></li> -->
              <li class="breadcrumb-item active">Detail User</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    @foreach($detail_user as $user)
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

            <!-- Profile Image -->
            <!-- <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../../dist/img/user4-128x128.jpg"
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
                <h3 class="card-title">[{{$user->id}}] {{$user->username}}</h3>
              </div>
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../asset/u_file/image/{{$user->foto}}"
                       alt="User profile picture">
                </div>
              </div>
              <div class="card-body">
                <strong><i class="fas fa-user mr-1"></i> Nama </strong>
                <p class="text-muted">{{$user->nama}}</p><hr>
                <strong><i class="fas fa-calendar-alt mr-1"></i> Tanggal Lahir </strong>
                <p class="text-muted">{{$user->tanggal_lahir}}</p><hr>
                <strong><i class="fas fa-building mr-1"></i> Alamat </strong>
                <p class="text-muted">{{$user->alamat}}</p><hr>
                <strong><i class="fas fa-envelope mr-1"></i> Email </strong>
                <p class="text-muted">{{$user->email}}</p><hr>
                <strong><i class="fas fa-phone mr-1"></i> No Telepon </strong>
                <p class="text-muted">{{$user->no_telepon}}</p><hr>
                <strong><i class="fas fa-user mr-1"></i> Role </strong>
                <p class="text-muted">{{$user->role}}</p><hr>
                </div>
            </div>
        </div>


          <div class="col-md-9">
            <div class="card">
              <!-- <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                  <li class="nav-item"><a class="active nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
              </div> -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Pengaturan</h3>
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
                    <form class="form-horizontal" action="../ChangeRole" method="post">
                    @csrf
                      <div class="row form-group">
                        <input type="text" name="username" value="{{$user->username}}" hidden></input>
                        <label class="col-sm-2 col-form-label">Role</label>
                        <div class="col-10">
                          <select name="role" class="form-control">
                              <option value="{{$user->role}}">{{$user->role}}</option>
                              @if($user->role=='masyarakat')
                                  <option value="umat">umat</option>
                              @endif
                              @if($user->role=='umat')
                                  <option value="masyarakat">masyarakat</option>
                              @endif
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button name="change" class="btn btn-danger">Change</button>
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