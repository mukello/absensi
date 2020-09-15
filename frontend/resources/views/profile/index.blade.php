@extends('base.main')
@section('title_page') @lang('lang.profile.title_page') @endsection

@section('content')

    <div class="card card-style">
        <div class="content">
            <div class="d-flex">
                <div>
                    @if(isset($model->photo) && $model->photo != "")
                        <img src="{{ $model->photo }}" width="50" class="mr-3 bg-highlight rounded-xl" style="width: 50px; height: 50px; margin-right: 5px;">
                    @else
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQdc_pViMeba37-qxWAWLBm1Bn5XeQWZoadWA&usqp=CAU" style="width: 50px; margin-right: 5px;">
                    @endif
                </div>
                <div>
                    <h1 class="mb-0 pt-1">{{ $model->name }}</h1>
                    @if($model->flag == "Guru")
                    <p class="color-highlight font-11 mt-n2 mb-3">@lang('lang.profile.flag_guru')</p>
                    @else
                    <p class="color-highlight font-11 mt-n2 mb-3">{{ $model->class }}</p>
                    @endif
                </div>
            </div>
            <p>
                @lang('lang.profile.profile_desc')
            </p>
        </div>
    </div>

    <div class="card card-style">
        <div class="content mt-3 mb-2">
            <h1 class="vcard-title text-capitalize font-18 color-highlight">@lang('lang.profile.regis_detail')</h1>

            @if($model->flag == "Guru")

                @if($model->nip != "")
                <div class="vcard-field">
                    <strong>@lang('lang.profile.nip')</strong>{{ $model->nip }}<i class="fa fa-tags color-highlight"></i>
                </div>
                @endif

            @else

                @if($model->registration_number != "")
                <div class="vcard-field">
                    <strong>@lang('lang.profile.regis_no')</strong>{{ $model->registration_number }}<i class="fa fa-tags color-highlight"></i>
                </div>
                @endif

                @if($model->nisn != "")
                <div class="vcard-field">
                    <strong>@lang('lang.profile.nisn')</strong> {{ $model->nisn }}<i class="fa fa-user color-highlight"></i>
                </div>
                @endif

                @if($model->nis != "")
                <div class="vcard-field border-0">
                    <strong>@lang('lang.profile.nis')</strong>{{ $model->nis }}<i class="fa fa-user color-highlight"></i>
                </div>
                @endif

            @endif
        </div>
    </div>

<!-- FORM  -->
    <div id="form-body">
    <form action="{{ route('profile.profile.store') }}" method="POST">
    @csrf
    <div class="card card-style" style="margin-bottom: -25px;">

        <div class="content" >
            <h3 class="font-600 color-highlight">@lang('lang.profile.basic_info')</h3>
            <p>
                @lang('lang.profile.basic_info_detail')
            </p>

            @if(isset($model->photo) && $model->photo != "" && $model->photo != null)
            <input type="hidden" name="doc_image" id="doc_image" value="{{ $model->photo }}">
            @endif

            @foreach($parents as $parent)

            @if(isset($parent->ktp_file) && $parent->ktp_file != "" && $parent->ktp_file != null)
            <input type="hidden" name="ktp_image" id="ktp_image" value="{{ $parent->ktp_file }}">
            @endif

            @if(isset($parent->kk_file) && $parent->kk_file != "" && $parent->kk_file != "")
            <input type="hidden" name="kk_image" id="kk_image" value="{{ $parent->kk_file }}">
            @endif

            @endforeach

            <input type="hidden" name="id" id="id" value="{{ $model->id }}">

            @if($model->flag == "Guru")
                <div class="todo-list list-group list-custom-small">
                    
                    <div class="input-style input-style-2  mb-">
                        <span class="color-highlight input-style-1-active">@lang('lang.profile.foto')</span>
                        <div class="dropzone" id="apake"></div>
                        <input type="hidden" name="photo" id="image"></input>
                    </div>

                    

                    <div class="input-style input-style-2  mb-">
                        <span class="color-highlight input-style-1-active">@lang('lang.profile.nama_lengkap')</span>
                        <em>(required)</em>
                        <input name="name" class="form-control" type="text" value="{{ $model->name }}" placeholder="@lang('lang.profile.nama_lengkap')">
                    </div>

                    <div class="input-style input-style-2  mb-">
                        <span class="color-highlight input-style-1-active">@lang('lang.profile.birth_place')</span>
                        <em>(required)</em>
                        <input name="birth_place" class="form-control" type="text" value="{{ $model->birth_place }}" placeholder="@lang('lang.profile.birth_place')">
                    </div>

                    <div class="input-style input-style-2  mb-">
                        <span class="color-highlight input-style-1-active">@lang('lang.profile.birth_date')</span>
                        <em>(required)</em>
                        <input name="birth_date" class="form-control" type="date" value="{{ $model->birth_date }}" placeholder="@lang('lang.profile.birth_date')">
                    </div>

                    <div class="input-style input-style-2  mb-">
                        <span class="color-highlight input-style-1-active">@lang('lang.profile.gender')</span>
                        <em>(required)</em>
                        <select name="gender" class="form-control">
                            <option value="L" {{ $model->gender == "L" ? 'selected' : '' }}>@lang('lang.profile.laki')</option>
                            <option value="P" {{ $model->gender == "P" ? 'selected' : '' }}>@lang('lang.profile.perempuan')</option>
                        </select>
                    </div>

                    <div class="input-style input-style-2  mb-">
                        <span class="color-highlight input-style-1-active">@lang('lang.profile.religion')</span>
                        <em>(required)</em>
                        <input name="religion" class="form-control" type="text" value="{{ $model->religion }}" placeholder="@lang('lang.profile.religion')">
                    </div>

                    <div class="input-style input-style-2 mt-4">
                        <span class="input-style-1-active" style="margin-top: -30px;">@lang('lang.profile.address') </span>
                        <textarea name="address" style="height: 100px; line-height: 20px; padding-top: 12px; margin-top: -30px;" placeholder="@lang('lang.profile.address')" class="form-control" cols="5" rows="5" >{{ $model->address }}</textarea>
                    </div>

                    <div class="input-style input-style-2  mb-">
                        <span class="color-highlight input-style-1-active">@lang('lang.profile.email')</span>
                        <em>(required)</em>
                        <input name="email" class="form-control" type="email" value="{{ $model->email }}" placeholder="@lang('lang.profile.email')">
                    </div>

                    <div class="input-style input-style-2  mb-">
                        <span class="color-highlight input-style-1-active">@lang('lang.profile.telp')</span>
                        <em>(required)</em>
                        <input name="phone_number" class="form-control" type="number" value="{{ $model->phone_number }}" placeholder="@lang('lang.profile.telp')">
                    </div>
                </div>
                
            @else

            <div class="todo-list list-group list-custom-small">
                
                <div class="todo-list list-group list-custom-small">
                    
                    <div class="input-style input-style-2  mb-">
                        <span class="color-highlight input-style-1-active">@lang('lang.profile.foto')</span>
                        <div class="dropzone" id="apake"></div>
                        <input type="hidden" name="photo" id="image"></input>
                    </div>

                    <div class="input-style input-style-2  mb- ">
                        <span class="color-highlight input-style-1-active">@lang('lang.profile.nama_lengkap')</span>
                        <em>(required)</em>
                        <input name="name" class="form-control" type="text" value="{{ $model->name }}" placeholder="@lang('lang.profile.nama_lengkap')">
                    </div>

                    <div class="input-style input-style-2  mb-">
                        <span class="color-highlight input-style-1-active">@lang('lang.profile.birth_place')</span>
                        <em>(required)</em>
                        <input name="birth_place" class="form-control" type="text" value="{{ $model->birth_place }}" placeholder="@lang('lang.profile.birth_place')">
                    </div>

                    <div class="input-style input-style-2  mb-">
                        <span class="color-highlight input-style-1-active">@lang('lang.profile.birth_date')</span>
                        <em>(required)</em>
                        <input name="birth_date" class="form-control" type="date" value="{{ $model->birth_date }}" placeholder="@lang('lang.profile.birth_date')">
                    </div>

                    <div class="input-style input-style-2  mb-">
                        <span class="color-highlight input-style-1-active">@lang('lang.profile.gender')</span>
                        <em>(required)</em>
                        <select name="gender" class="form-control">
                            <option value="L" {{ $model->gender == "L" ? 'selected' : '' }}>@lang('lang.profile.laki')</option>
                            <option value="P" {{ $model->gender == "P" ? 'selected' : '' }}>@lang('lang.profile.perempuan')</option>
                        </select>
                    </div>

                    <div class="input-style input-style-2  mb-">
                        <span class="color-highlight input-style-1-active">@lang('lang.profile.religion')</span>
                        <em>(required)</em>
                        <input name="religion" class="form-control" type="text" value="{{ $model->religion }}" placeholder="@lang('lang.profile.religion')">
                    </div>

                    <div class="input-style input-style-2 mt-4">
                        <span class="input-style-1-active" style="margin-top: -30px;">@lang('lang.profile.address') </span>
                        <textarea name="address" style="height: 100px; line-height: 20px; padding-top: 12px; margin-top: -30px;" placeholder="@lang('lang.profile.address')" class="form-control" cols="5" rows="5" >{{ $model->address }}</textarea>
                    </div>

                    <div class="input-style input-style-2  mb-">
                        <span class="color-highlight input-style-1-active">@lang('lang.profile.email')</span>
                        <em>(required)</em>
                        <input name="email" class="form-control" type="email" value="{{ $model->email }}" placeholder="@lang('lang.profile.email')">
                    </div>

                    <div class="input-style input-style-2  mb-">
                        <span class="color-highlight input-style-1-active">@lang('lang.profile.telp')</span>
                        <em>(required)</em>
                        <input name="phone_number" class="form-control" type="number" value="{{ $model->phone_number }}" placeholder="@lang('lang.profile.telp')">
                    </div>
                </div>
                
            </div>

            @endif
           
        </div>
    </div>
    <br>
    <br>

    @if(count($parents) > 0)
    @foreach($parents as $parent)
    <div class="card card-style" style="margin-bottom: 20px;">

        <div class="content" >
            <h3 class="font-600 color-highlight">Parents Info</h3>
            <p>
                 Basic details about parents. These can be connected to your database and shown on the user profile.
            </p>
            
                <div class="todo-list list-group list-custom-small">

                    <div class="input-style input-style-2 ">
                        <span class="color-highlight input-style-1-active">Parents Name</span>
                        <em>(required)</em>
                        <input name="parent_name" class="form-control " type="text" value="{{ $parent->name }}" placeholder="Fullname">
                    </div>

                    <div class="input-style input-style-2  mb-">
                        <span class="color-highlight input-style-1-active">Relationship</span>
                        <em>(required)</em>
                        <input name="parent_relationship" class="form-control" type="text" value="{{ $parent->relationship }}" placeholder="Relationship">
                    </div>

                    <div class="input-style input-style-2 mt-4">
                        <span class="input-style-1-active" style="margin-top: -30px;">Address </span>
                        <textarea name="parent_address" style="height: 100px; line-height: 20px; padding-top: 12px; margin-top: -30px;" placeholder="Address" class="form-control" cols="5" rows="5" >{{ $parent->address }}</textarea>
                    </div>

                    <div class="input-style input-style-2  mb-">
                        <span class="color-highlight input-style-1-active">Phone Number</span>
                        <em>(required)</em>
                        <input name="parent_phone_number" class="form-control" type="text" value="{{ $parent->phone_number }}" placeholder="Phone Number">
                    </div>

                    <div class="input-style input-style-2  mb-">
                        <span class="color-highlight input-style-1-active">Occupation</span>
                        <em>(required)</em>
                        <input name="parent_occupation" class="form-control" type="text" value="{{ $parent->occupation }}" placeholder="Occupation">
                    </div>

                    <div class="input-style input-style-2  mb-">
                        <span class="color-highlight input-style-1-active">KTP Number</span>
                        <em>(required)</em>
                        <input name="ktp_number" class="form-control" type="text" value="{{ $parent->ktp_number }}" placeholder="KTP Number">
                    </div>

                    <div class="input-style input-style-2  mb-">
                        <span class="color-highlight input-style-1-active">KTP File</span>
                        <div class="dropzone" id="ktp"></div>
                        <input type="hidden" name="ktp_file" id="ktp_file"></input>
                    </div>

                    <div class="input-style input-style-2  mb-">
                        <span class="color-highlight input-style-1-active">KK Number</span>
                        <em>(required)</em>
                        <input name="kk_number" class="form-control" type="text" value="{{ $parent->kk_number }}" placeholder="KK Number">
                    </div>

                    <div class="input-style input-style-2  mb-">
                        <span class="color-highlight input-style-1-active">KK File</span>
                        <div class="dropzone" id="kk"></div>
                        <input type="hidden" name="kk_file" id="kk_file"></input>
                    </div>

                </div>
                
            

            
            </div>
        </div>
    </div>
    @endforeach
    @endif

    <div class="card card-style" style="margin-bottom: -5px;">
        <div class="content" >
            <button style="border: none; " class="btn-save-profile btn btn-block bg-highlight rounded-sm shadow-xl btn-m text-uppercase font-900">Save Information</button>
        </div>
    </div>

    </form>

@endsection

@push('scripts')
<script type="text/javascript">

        var _token = "{{ csrf_token() }}";

        // DROPZONE PHOTO
        Dropzone.options.apake = false;
        var apake = new Dropzone('#apake', {
            url: '{{ route('profile.image') }}',
            params: { _token },
            paramName: 'img',
            acceptedFiles: '.jpg, .png, .jpeg',
            maxFiles: 1,
            maxFilesize: 100,
            addRemoveLinks: true,
            parallelUploads: 1
        });

        if($('#doc_image').val() != "" && $('#doc_image').val() != null){
            var id = document.getElementById("id").value;

            $.ajax({
                  url: '{{ route('profile.show-image') }}',
                  data: { id, _token },
                  method: 'post',
                  success: function(data) {
                    var i = 1;


                    $.each(data.imgs, function(key, value) {
                      var mockFile = { name: value.nama, size: value.size, imgNo: i, accepted: true };
                      apake.emit('addedfile', mockFile);
                      apake.createThumbnailFromUrl(mockFile, '../../../' + value.url);
                      apake.emit('complete', mockFile);
                      apake.files.push(mockFile);
                      i = i + 1;

                    });

                }
            });
        }

        apake.on('success', function(file, data) {
            $('#image').val(data);
        });

        apake.on('removedfile', function(file) {
            $('#image').val('');
        });

    

    // DROPZONE KTP
    Dropzone.options.ktp = false;
    var ktp = new Dropzone('#ktp', {
        url: '{{ route('profile.ktp') }}',
        params: { _token },
        paramName: 'img',
        acceptedFiles: '.jpg, .png, .jpeg',
        maxFiles: 1,
        maxFilesize: 100,
        addRemoveLinks: true,
        parallelUploads: 1
    });

    if($('#ktp_image').val() != "" && $('#ktp_image').val() != null){
        var id = document.getElementById("id").value;

        $.ajax({
              url: '{{ route('profile.show-ktp') }}',
              data: { id, _token },
              method: 'post',
              success: function(data) {
                var i = 1;


                $.each(data.imgs, function(key, value) {
                  var mockFile = { name: value.nama, size: value.size, imgNo: i, accepted: true };
                  ktp.emit('addedfile', mockFile);
                  ktp.createThumbnailFromUrl(mockFile, '../../../' + value.url);
                  ktp.emit('complete', mockFile);
                  ktp.files.push(mockFile);
                  i = i + 1;

                });

            }
        });
    }

    ktp.on('success', function(file, data) {
        $('#ktp_file').val(data);
    });

    ktp.on('removedfile', function(file) {
        $('#ktp_file').val('');
    });


    // DROPZONE KK
    Dropzone.options.kk = false;
    var kk = new Dropzone('#kk', {
        url: '{{ route('profile.kk') }}',
        params: { _token },
        paramName: 'img',
        acceptedFiles: '.jpg, .png, .jpeg',
        maxFiles: 1,
        maxFilesize: 100,
        addRemoveLinks: true,
        parallelUploads: 1
    });

    if($('#kk_image').val() != "" && $('#kk_image').val() != null){
        var id = document.getElementById("id").value;

        $.ajax({
              url: '{{ route('profile.show-kk') }}',
              data: { id, _token },
              method: 'post',
              success: function(data) {
                var i = 1;


                $.each(data.imgs, function(key, value) {
                  var mockFile = { name: value.nama, size: value.size, imgNo: i, accepted: true };
                  kk.emit('addedfile', mockFile);
                  kk.createThumbnailFromUrl(mockFile, '../../../' + value.url);
                  kk.emit('complete', mockFile);
                  kk.files.push(mockFile);
                  i = i + 1;

                });

            }
        });
    }

    kk.on('success', function(file, data) {
        $('#kk_file').val(data);
    });

    kk.on('removedfile', function(file) {
        $('#kk_file').val('');
    });
</script>
@endpush