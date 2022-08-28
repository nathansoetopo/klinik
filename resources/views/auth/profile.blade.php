@extends('parent.master')
<style>
    @media(max-width: 920px){
        .main-content .section .container-fluid.p-0{
            display: none;
        }
        .profile-section{
            position: relative;
            top: 0%;
        }
    }
    @media(min-width: 921px){
        .profile-section{
            position: relative;
            top: 25vh;
        }
    }
    .card.profile-card{
        border: solid rgba(138, 138, 138, 0.7);
    }
</style>
@section('content')
<div class="main-content">
    <section class="section">
        <div class="container-fluid p-0" style="position: absolute;">
            <img src="{{asset('bg-profile.png')}}" alt="background-profile" style="height: 40vh; width: 100%;">
        </div>
        <div class="row mt-sm-4 profile-section">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card profile-card">
                    <form method="post" class="needs-validation" novalidate="">
                        <div class="card-body">
                            <center>
                                <img alt="image" src="../assets/img/avatar/avatar-1.png" style="height: 130px;width:130px; border-radius:30px"
                                    class="rounded-circle profile-widget-picture mb-3" id="pp">
                                <label for="file" class="btn text-white"
                                    style="position: absolute; top:17%; left:56%; background-color:#2B5BFF; border:solid white; border-radius:50%;"><i
                                        class="fas fa-camera"></i>
                                </label>
                                <br>
                                <div class="text-muted d-inline font-weight-normal">
                                    <h6 class="text-dark">Dr. Diki Samsudin Jadab</h6>Anak
                                </div>
                            </center>
                            <div class="container">
                                <div class="progress mt-5">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                        role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 75%; background-color:#66CDAA;"></div>
                                </div>
                                <div class="row p-0 m-0">
                                    <div class="col-sm">
                                        <h6 class="mt-3">Lorem Ipsum</h6>
                                    </div>
                                    <div class="col-sm">
                                        <h6 class="mt-3 float-right">99</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-4">
                                <div class="progress mt-5">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                        role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 75%; background-color:#66CDAA;"></div>
                                </div>
                                <div class="row p-0 m-0">
                                    <div class="col-sm">
                                        <h6 class="mt-3">Lorem Ipsum</h6>
                                    </div>
                                    <div class="col-sm">
                                        <h6 class="mt-3 float-right">99</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-4">
                                <div class="progress mt-5">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                        role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 75%; background-color:#66CDAA;"></div>
                                </div>
                                <div class="row p-0 m-0">
                                    <div class="col-sm">
                                        <h6 class="mt-3">Lorem Ipsum</h6>
                                    </div>
                                    <div class="col-sm">
                                        <h6 class="mt-3 float-right">99</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-8">
                <div class="card profile-card">
                    <form method="post" class="needs-validation" novalidate="">
                        <div class="card-header">
                            <h4>Profile</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" value="Ujang" required="">
                                    <div class="invalid-feedback">
                                        Please fill in the first name
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Email</label>
                                    <input type="email" class="form-control" value="Maman@test.test" required="">
                                    <div class="invalid-feedback">
                                        Please fill in the email
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label>Jenis Kelamin</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Jenis Kelamin</option>
                                        <option>Pria</option>
                                        <option>Perempuan</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please fill jenis kelamin
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Nomor Telefon</label>
                                    <input type="tel" class="form-control" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label>Alamat</label>
                                    <input type="file" name="file" id="file" style="display: none;">
                                    <textarea
                                        class="form-control summernote-simple">Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Doe'</b>.</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    const img = document.querySelector('#pp');
    const file = document.querySelector('#file');
    file.addEventListener('change', function () {
        const choosedFile = this.files[0];
        if (choosedFile) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                img.setAttribute('src', reader.result);
            })
            reader.readAsDataURL(choosedFile)
        }
    })
</script>
@endsection
