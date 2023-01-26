<!-- CSS -->
@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('vendors/css/forms/spinner/jquery.bootstrap-touchspin.css') }}">
@endsection

@section('page-style')

@endsection
{{-- /CSS --}}

<div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center mb-2">
          <h1 class="mb-1">تسجيل التفقد الآن</h1>
          <p>الرجاء ملئ المعلومات التالية, علماً أن المعلومات الحالية هي من أخر تفقد تم تسجيله</p>
        </div>

        <form id="editUserForm" class="row gy-1 pt-75" onsubmit="return false">

          <section id="slider-scales-pips">
            <div class="row">
            <div class="col-sm-12">
                <div class="card w-border">
                    <div class="card-header">
                        <h4 class="text-uppercase">القياسات</h4>
                    </div>
                    <div class="card-body d-flex" style="text-align: center; justify-content: center;">
                        <div class="col-6 col-md-3">
                            <label class="form-label align-items-center" for="modalEditUserFirstName">الوزن (كغ)</label>
                            <div class="input-group input-group-lg">
                                <input type="number" class="touchspin-min-max" value="75" />
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <label class="form-label" for="modalEditUserFirstName">البطن (سم)</label>
                            <div class="input-group input-group-lg">
                                <input type="number" class="touchspin-min-max" value="79" />
                            </div>
                        </div>
                    </div>
                    <div class="card-body d-flex justify-content-between align-items-center" style="text-align: center;">
                        <div class="col-6 col-md-3">
                            <label class="form-label" for="modalEditUserFirstName">الخصر (سم)</label>
                            <div class="input-group input-group-lg">
                                <input type="number" class="touchspin-min-max" value="81" />
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <label class="form-label" for="modalEditUserFirstName">الرقبة (سم)</label>
                            <div class="input-group input-group-lg">
                                <input type="number" class="touchspin-min-max" value="37" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </section>

            <section id="slider-scales-pips">
                <div class="row">
                <div class="col-sm-12">
                    <div class="card w-border">
                    <div class="card-header wo-margin">
                        <h4 class="text-uppercase">الالتزام التدريبي</h4>
                    </div>
                    <div class="card-body">
                        <div id="training-commitment" class="mt-1 mb-3"></div>
                    </div>
                    </div>
                </div>
                </div>
            </section>

            <section id="slider-scales-pips">
                <div class="row">
                <div class="col-sm-12">
                    <div class="card w-border">
                    <div class="card-header wo-margin">
                        <h4 class="text-uppercase">الالتزام الغذائي</h4>
                    </div>
                    <div class="card-body">
                        <div id="dietary-commitment" class="mt-1 mb-3"></div>
                    </div>
                    </div>
                </div>
                </div>
            </section>
            <div class="col-12 text-center mt-2 pt-50">
                <button type="submit" class="btn btn-primary me-1" id="confirm-color">حفظ</button>
            </div>
        </form>

      </div>
    </div>
  </div>
</div>
