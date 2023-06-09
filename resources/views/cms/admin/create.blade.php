@extends('cms.parent')

@section('title' , 'الأدمن')

@section('page title' , '')

@section('active title' , 'إضافة أدمن')


@section('styles')

@endsection



@section('content')
<section class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="">إضافة أدمن</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="first_name">الاسم الأول</label>
                        <input type="text" class="form-control" id="first_name" name="first_name"
                            placeholder="أدخل الاسم الأول">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="last_name">الاسم الأخير</label>
                        <input type="text" class="form-control" id="last_name" name="last_name"
                            placeholder="أدخل الاسم الأخير">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="username">اسم المستخدم</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="أدخل المستخدم">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password">كلمة المرور</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="أدخل كلمة المرور">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="mobile">رقم الهاتف</label>
                        <input type="tel" class="form-control" id="mobile" name="mobile"
                            placeholder="Enter Admin Mobile">
                    </div>


                </div>







                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="button" onclick="performStore()" class="btn btn-primary">حفظ</button>
                    <a href="{{ route('admins.index') }}" type="button" class="btn btn-info">العودة للخلف</a>
                </div>
        </form>
        <!-- form end -->
    </div>
</section>
@endsection


@section('scripts')
<script>
    function performStore(){
    let formData = new FormData();
    formData.append('first_name',document.getElementById('first_name').value);
    formData.append('last_name',document.getElementById('last_name').value);
    formData.append('username',document.getElementById('username').value);
    formData.append('password',document.getElementById('password').value);
    formData.append('mobile',document.getElementById('mobile').value);
    store('/cms/admin/admins' , formData)
  }

</script>
@endsection
