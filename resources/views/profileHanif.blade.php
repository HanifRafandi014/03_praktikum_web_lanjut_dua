@extends('layouts.content')

@section('title', 'Profil Hanif')

@section('content')
<x-laravel2 dashboard="" profile="active" hanif="active" trisinus="" pengalaman="" kuliah=""/>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Profile Hanif</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Hanif Naufal Rafandi</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">

					<!-- Profile Image -->
					<div class="card card-primary card-outline">
						<div class="card-body box-profile">
							<div class="text-center">
								<img class="profile-user-img img-fluid img-circle" src="{{asset('AdminLTE-3.0.0')}}/dist/img/hanif.jpeg" alt="User profile picture">
							</div>

							<h3 class="profile-username text-center">Hanif Naufal Rafandi</h3>

							<p class="text-muted text-center">Mahasiswa</p>

							<ul class="list-group list-group-unbordered mb-3">
								<li class="list-group-item">
									<b>Kelas</b> <a class="float-right">TI-2G</a>
								</li>
								<li class="list-group-item">
									<b>Nomor</b> <a class="float-right">14</a>
								</li>
								<li class="list-group-item">
									<b>NIM</b> <a class="float-right">2141720127</a>
								</li>
								<b>No Hp</b> <a class="float-right">081235485829</a>
							</ul>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->

					<!-- About Me Box -->
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">About Me</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<strong><i class="fas fa-book mr-1"></i> Tempat, Tanggal Lahir</strong>

							<p class="text-muted">
								Blitar, 28 Januari 2003
							</p>

							<hr>

							<strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

							<p class="text-muted">Perumahan Pondok Delta RT 01 RW 07 Kel. Kaweron Kec. Talun Kab. Blitar Jawa Timur</p>

							<hr>

							<strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

							<p class="text-muted">
								<span class="tag tag-danger">Networking</span>
								<span class="tag tag-success">Java</span>
								<span class="tag tag-info">Web</span>
								<span class="tag tag-warning">Python</span>
							</p>

							<hr>

							<strong><i class="far fa-file-alt mr-1"></i> Hobi</strong>
							<p class="text-muted">Watch film</p>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col -->
				<div class="col-md-9">
					<div class="card">
						<div class="card-header p-2">
							<ul class="nav nav-pills">
								<li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">My Activity</a></li>
								<li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Post an Activity</a></li>
							</ul>
						</div><!-- /.card-header -->
						<div class="card-body">
							<div class="tab-content">
								<div class="active tab-pane" id="activity">
									<!-- Post -->
									<div class="post">
										<div class="user-block">
											<img class="img-circle img-bordered-sm" src="{{asset('AdminLTE-3.0.0')}}/dist/img/hanif.jpeg" alt="user image">
											<span class="username">
												<a href="#">Hanif Naufal Rafandi</a>
												<a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
											</span>
											<span class="description">Shared publicly - 8:45 PM today</span>
										</div>
										<!-- /.user-block -->
										<p>
											Kuliah di jurusan teknik sangat menyenangkan
										</p>

										<p>
											<a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
											<a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
											<span class="float-right">
												<a href="#" class="link-black text-sm">
													<i class="far fa-comments mr-1"></i> Comments (0)
												</a>
											</span>
										</p>

										<input class="form-control form-control-sm" type="text" placeholder="Type a comment">
									</div>
									<!-- /.post -->
									<div class="post">
										<div class="user-block">
											<img class="img-circle img-bordered-sm" src="{{asset('AdminLTE-3.0.0')}}/dist/img/hanif.jpeg" alt="user image">
											<span class="username">
												<a href="#">Hanif Naufal Rafandi</a>
												<a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
											</span>
											<span class="description">Shared publicly - 09.00 days today</span>
										</div>
										<!-- /.user-block -->
										<p>
											Semangat terus nih 
										</p>

										<p>
											<a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
											<a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
											<span class="float-right">
												<a href="#" class="link-black text-sm">
													<i class="far fa-comments mr-1"></i> Comments (0)
												</a>
											</span>
										</p>

										<input class="form-control form-control-sm" type="text" placeholder="Type a comment"> <br>
									</div>
									<!-- /.post -->
								</div>
								<!-- /.tab-pane -->

								<div class="col-md-6">
									<!-- USERS LIST -->
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Contributor</h3>

											<div class="card-tools">
												<span class="badge badge-danger">2 Contributor</span>
												<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
												</button>
												<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
												</button>
											</div>
										</div>
										<!-- /.card-header -->
										<div class="card-body p-0">
											<ul class="users-list clearfix">
												<li>
													<img src="{{asset('AdminLTE-3.0.0')}}/dist/img/hanif.jpeg" alt="User Image">
													<a class="users-list-name" href="#">Hanif Naufal Rafandi</a>
													<span class="users-list-date">Today</span>
												</li>
												<li>
													<img src="{{asset('AdminLTE-3.0.0')}}/dist/img/trisinus.jpeg" alt="User Image">
													<a class="users-list-name" href="#">Trisinus Gulo</a>
													<span class="users-list-date">Yesterday</span>
												</li>
											</ul>
											<!-- /.users-list -->
										</div>
										<!-- /.card-body -->
										<div class="card-footer text-center">
											<a href="javascript::">View All Contributor</a>
										</div>
										<!-- /.card-footer -->
									</div>
									<!--/.card -->
								</div>
								<!-- /.col -->
							</div>
							<!-- /.row -->

							<div class="tab-pane" id="settings">
								<form class="form-horizontal">
									<div class="form-group row">
										<div class="col-sm-12">
											<textarea class="form-control" id="inputExperience" placeholder="Tulis sesuatu untuk dipost"></textarea>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-sm-10">
											<div class="checkbox">
												<label>
													<input type="checkbox"> Post publicly</a>
												</label>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-sm-10">
											<button type="submit" class="btn btn-danger">Post</button>
										</div>
									</div>
								</form>
							</div>
							<!-- /.tab-pane -->
						</div>
						<!-- /.tab-content -->
					</div><!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div><!-- /.container-fluid -->
</section>
</div>

@endsection