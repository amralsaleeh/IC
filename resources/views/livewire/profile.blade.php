@section('title', 'الملف الشخصي')

<!-- CSS -->
@section('vendor-style')

@endsection

@section('page-style')

@endsection
{{-- /CSS --}}

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">الملف الشخصي</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active"><a href="dashboard">الصفحة الرئيسية</a></li>
                                <li class="breadcrumb-item ">الملف الشخصي</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="row">
                <div class="card">
                  <div class="card-header border-bottom">
                    <h4 class="card-title">المعلومات الشخصية</h4>
                  </div>
                  <div class="card-body py-2 my-25">
                    <div style="text-align: center">
                        <img
                          src="{{ asset('app-assets/images/avatars/male.svg') }}"
                          id="account-upload-img"
                          class="uploadedAvatar rounded me-50"
                          alt="profile image"
                          height="100"
                          width="100"
                        />
                    </div>

                    <form class="validate-form mt-2 pt-50">
                      <div class="row">
                        <div class="col-12 col-sm-6 mb-1">
                          <label class="form-label">الاسم الأول</label>
                          <input
                            readonly="readonly"
                            type="text"
                            class="form-control"
                            id="accountFirstName"
                            name="firstName"
                            placeholder="الأسم"
                            value="مجد"
                            data-msg="الرجاء إدخال الاسم الأول"
                          />
                        </div>
                        <div class="col-12 col-sm-6 mb-1">
                          <label class="form-label">الاسم الأخير</label>
                          <input
                            readonly="readonly"
                            type="text"
                            class="form-control"
                            id="accountLastName"
                            name="lastName"
                            placeholder="الكنية"
                            value="ستوت"
                            data-msg="الرجاء إدخال الاسم الأخير"
                          />
                        </div>
                        <div class="col-12 col-sm-6 mb-1">
                            <label class="form-label">الجنس</label>
                            <select readonly="readonly" class="hide-search form-select">
                              <option value="male">ذكر</option>
                              <option value="female">أنثى</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-6 mb-1">
                            <label class="form-label" for="accountOrganization">تاريخ الميلاد</label>
                            <input readonly="readonly" type="text" id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" value="2022-10-1" />
                        </div>
                        <div class="col-12 col-sm-6 mb-1">
                            <label class="form-label">دولة الإقامة</label>
                            <select readonly="readonly" class="hide-search form-select">
                              <option value="male">سوريا - Syria </option>
                              <option value="female">ألمانيا - Germany</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-6 mb-1">
                            <label class="form-label">دولة الجنسية</label>
                            <select readonly="readonly" class="hide-search form-select">
                              <option value="male">سوريا - Syria</option>
                              <option value="female">ألمانيا - Germany</option>
                            </select>
                        </div>

                        <div class="col-12 col-sm-6 mb-1">
                          <label class="form-label">البريد الإلكتروني</label>
                          <input
                            readonly="readonly"
                            type="email"
                            class="form-control"
                            id="accountEmail"
                            name="email"
                            placeholder="Email"
                            value="majd@example.com"
                          />
                        </div>

                        <div class="col-12 col-sm-6 mb-1">
                          <label class="form-label">رقم الواتساب</label>
                          <input
                            readonly="readonly"
                            type="text"
                            class="form-control account-number-mask"
                            id="accountPhoneNumber"
                            name="phoneNumber"
                            placeholder="Phone Number"
                            value="963933697861+"
                          />
                        </div>

                      </div>
                      <br>
                        <hr style="margin: 0% 15%;">
                        <div class="card-body">
                            <p class="card-text" style="text-align: center;">
                             هل هناك خطأ..؟ يمكنك <a href="https://wa.me/message/POU44V4CNULGN1">التواصل معي</a> بشكل مباشر ليتم التصحيح
                            </p>
                        </div>
                    </form>

                  </div>
                </div>
                <div class="card">
                    <div class="card-header border-bottom">
                      <h4 class="card-title">المعلومات الرياضية</h4>
                    </div>
                    <div class="card-body py-2 my-25">
                      <form class="validate-form mt-2 pt-50">
                        <div class="row">
                          <div class="col-12 col-sm-6 mb-1">
                              <label class="form-label">الهدف العام</label>
                              <select readonly="readonly" class="hide-search form-select">
                                    <option value="healthy">حياة صحية ( تناول طعاماً صحياً وحافظ على لياقتك )</option>
                                    <option value="lose">فقد وزن ( فقدان الدهون وبناء العضلات )</option>
                                    <option value="gain">اكتساب وزن ( بناء الكتلة والقوة )</option>
                             </select>
                          </div>
                          <div class="col-12 col-sm-6 mb-1">
                              <label class="form-label">مستوى النشاط</label>
                              <select readonly="readonly" class="hide-search form-select">
                                <option value="1.9">عالٍ جداً - (تمرين شاق جداً وعمل بدني)</option>
                                <option value="1.725">عالٍ - (تمرين شاق 6-7 أيام بالأسبوع)</option>
                                <option value="1.55">متوسط - (تمرين معتدل 3-5 أيام في الأسبوع)</option>
                                <option value="1.375">خفيف - (تمرين خفيف 1-3 أيام بالأسبوع)</option>
                                <option value="1.2">قليل جداً - (تمرين قليل أو معدوم)</option>
                              </select>
                          </div>
                          <div class="col-12 col-sm-6 mb-1">
                            <label class="form-label">الهدف التمريني</label>
                            <select readonly="readonly" class="hide-search form-select">
                              <option value="gain">بناء العضلات ( تمارين تساعدك على خسارة الدهون وزيادة الكتلة العضلية )</option>
                              <option value="power">زيادة القوة ( تمارين تساعدك على رفع أوزان أعلى )</option>
                              <option value="endurance">زيادة قدرتك على التحمل ( تمارين تساعد على رفع نبضات القلب وزيادة القدرة على المقاومة )</option>
                            </select>
                          </div>
                          <div class="col-12 col-sm-6 mb-1">
                            <label class="form-label">المستوى الرياضي</label>
                            <select readonly="readonly" class="hide-search form-select">
                              <option value="3">محترف</option>
                              <option value="2">متوسط</option>
                              <option value="1">مبتدئ</option>
                            </select>
                          </div>
                          <div class="col-12 col-sm-6 mb-1">
                            <label class="form-label">أدوات التدريب</label>
                            <select readonly="readonly" select class="select2 form-select" multiple>
                              <option value="AK">بار</option>
                              <option value="HI">دامبل</option>
                              <option value="HI">أجهزة</option>
                              <option value="HI">حبل مقاومة</option>
                              <option value="HI">وزن الجسم</option>
                            </select>
                          </div>
                          <div class="col-12 col-sm-6 mb-1">
                            <label class="form-label">مكان التدريب</label>
                            <select readonly="readonly" class="hide-search form-select">
                              <option value="1">النادي</option>
                              <option value="0">المنزل</option>
                            </select>
                          </div>
                          <div class="col-12 col-sm-6 mb-1">
                            <label class="form-label">الحالة الصحية</label>
                            <select readonly="readonly" select class="select2 form-select" multiple>
                              <option value="AK">عدم تحمل اللاكتوز</option>
                              <option value="AK">الكولوستيرول المرتفع</option>
                              <option value="AK">تكيس المبايض</option>
                              <option value="AK">حساسية الأنسولين</option>
                              <option value="AK">أمراض مناعية</option>
                              <option value="AK">اضطراب افراز الغدة الدرقية</option>
                              <option value="AK">مرض سكري من النوع الثاني</option>
                              <option value="AK">ارتفاع ضغط الدم</option>
                              <option value="AK">حامل</option>
                              <option value="AK">تكميم معدة</option>
                              <option value="AK">أخرى</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-6 mb-1">
                            <label class="form-label">الإصابات</label>
                            <select readonly="readonly" select class="select2 form-select" multiple>
                              <option value="AK">خشونة مفصل الكتف</option>
                              <option value="AK">خلع متكرر لمفصل الكتف</option>
                              <option value="AK">التهاب عضلات الكتف</option>
                              <option value="AK">التهاب عضلة البايسيبس</option>
                              <option value="AK">إلتواء الكاحل</option>
                              <option value="AK">قطع في وتر عضلة السمانة</option>
                              <option value="AK">التهاب في عضلات الساعد</option>
                              <option value="AK">آلام اسفل الظهر</option>
                              <option value="AK">خشونة مفصل الكتف</option>
                              <option value="AK">إصابة في الغضاريف</option>
                              <option value="AK">رباط صليبي أمامي</option>
                              <option value="AK">أخرى</option>
                            </select>
                        </div>

                        </div>
                        <br>
                        <hr style="margin: 0% 15%;">
                        <div class="card-body">
                            <p class="card-text" style="text-align: center;">
                             هل هناك خطأ..؟ يمكنك <a href="https://wa.me/message/POU44V4CNULGN1">التواصل معي</a> بشكل مباشر ليتم التصحيح
                            </p>
                        </div>
                      </form>

                    </div>
                </div>
                <div class="card">
                    <div class="card-header border-bottom">
                    <h4 class="card-title">الأهداف</h4>
                    </div>
                    <div class="card-body py-2 my-25">

                    <form class="validate-form mt-2 pt-50">

                        <div class="card-body d-flex justify-content-between align-items-center" style="text-align: center;">
                            <div class="col-6 col-sm-6 mb-1">
                                <label class="form-label">الوزن (كغ)</label>
                                <div class="input-group input-group-lg">
                                    <input type="number" class="touchspin-min-max" value="83" />
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 mb-1">
                                <label class="form-label">نسبة الدهون (%)</label>
                                <div class="input-group input-group-lg">
                                    <input type="number" class="touchspin-min-max" value="22" />
                                </div>
                            </div>
                        </div>
                        <hr style="margin: 0% 15%;">
                        <div class="card-body">
                            <p class="card-text" style="text-align: center;">
                             هل هناك خطأ..؟ يمكنك <a href="https://wa.me/message/POU44V4CNULGN1">التواصل معي</a> بشكل مباشر ليتم التصحيح
                            </p>
                        </div>
                    </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header border-bottom">
                    <h4 class="card-title">معلومات الحساب</h4>
                    </div>
                    <div class="card-body py-2 my-25">
                        <div class="row">
                            <div class="col-xl-6 col-md-12 col-12 mb-1">
                                <label class="form-label" for="disabledInput">تاريخ الإنتساب</label>
                                <input type="text" class="form-control" id="readonlyInput" readonly="readonly" value="2020-10-1"/>
                            </div>
                            <div class="col-xl-6 col-md-12 col-12 mb-1">
                                <label class="form-label" for="disabledInput">نوع الجسم</label>
                                <input type="text" class="form-control" id="readonlyInput" readonly="readonly" value="عنيد"/>
                            </div>
                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                <label class="form-label" for="disabledInput">الوزن عند البداية (كغ)</label>
                                <input type="text" class="form-control" id="readonlyInput" readonly="readonly" value="110"/>
                            </div>
                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                <label class="form-label" for="disabledInput">نسبة الدهون عند البداية (%)</label>
                                <input type="text" class="form-control" id="readonlyInput" readonly="readonly" value="43"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- JS --}}
@section('vendor-script')

@endsection

@section('page-script')
    <script src="{{ asset('app-assets/js/scripts/forms/form-number-input.js') }}"></script>
@endsection
{{-- /JS --}}
