
@extends('layouts.layout')
@section('subtitle', 'تفاصيل الحساب')

@section('content')

<div class="container-xl px-4 mt-4">
    <!-- تنقل صفحة الحساب -->
    {{-- <nav class="nav nav-borders">
        <a class="nav-link active ms-0" href="https://www.bootdey.com/snippets/view/bs5-edit-profile-account-details" target="__blank">الملف الشخصي</a>
        <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-billing-page" target="__blank">الفوترة</a>
        <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-security-page" target="__blank">الأمان</a>
        <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-edit-notifications-page" target="__blank">الإشعارات</a> --}}
    </nav>
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- بطاقة صورة الملف الشخصي -->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">صورة الملف الشخصي</div>
                <div class="card-body text-center">
                    <!-- صورة الملف الشخصي -->
                    <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png"  width="100 %" alt="">
                    <!-- مساعدة صورة الملف الشخصي -->
                    <div class="small font-italic text-muted mb-4">JPG أو PNG بحد أقصى 5 ميجابايت</div>
                    <!-- زر تحميل صورة جديدة -->
                    <button class="btn btn-primary" type="button">تحميل صورة جديدة</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- بطاقة تفاصيل الحساب -->
            <div class="card mb-4">
                <div class="card-header">تفاصيل الحساب</div>
                <div class="card-body">
                    <form>
                        <!-- مجموعة النموذج (اسم المستخدم) -->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">اسم المستخدم (كيف سيظهر اسمك للمستخدمين الآخرين على الموقع)</label>
                            <input class="form-control" id="inputUsername" type="text" placeholder="أدخل اسم المستخدم" value="username">
                        </div>
                        <!-- صف النموذج -->
                        <div class="row gx-3 mb-3">
                            <!-- مجموعة النموذج (الاسم الأول) -->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">الاسم الأول</label>
                                <input class="form-control" id="inputFirstName" type="text" placeholder="أدخل اسمك الأول" value="Valerie">
                            </div>
                            <!-- مجموعة النموذج (اسم العائلة) -->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">اسم العائلة</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="أدخل اسم عائلتك" value="Luna">
                            </div>
                        </div>
                        <!-- صف النموذج -->
                        <div class="row gx-3 mb-3">
                            <!-- مجموعة النموذج (اسم المنظمة) -->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputOrgName">اسم المنظمة</label>
                                <input class="form-control" id="inputOrgName" type="text" placeholder="أدخل اسم المنظمة" value="Start Bootstrap">
                            </div>
                            <!-- مجموعة النموذج (الموقع) -->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">الموقع</label>
                                <input class="form-control" id="inputLocation" type="text" placeholder="أدخل موقعك" value="San Francisco, CA">
                            </div>
                        </div>
                        <!-- مجموعة النموذج (عنوان البريد الإلكتروني) -->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">عنوان البريد الإلكتروني</label>
                            <input class="form-control" id="inputEmailAddress" type="email" placeholder="أدخل عنوان بريدك الإلكتروني" value="name@example.com">
                        </div>
                        <!-- صف النموذج -->
                        <div class="row gx-3 mb-3">
                            <!-- مجموعة النموذج (رقم الهاتف) -->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">رقم الهاتف</label>
                                <input class="form-control" id="inputPhone" type="tel" placeholder="أدخل رقم هاتفك" value="555-123-4567">
                            </div>
                            <!-- مجموعة النموذج (تاريخ الميلاد) -->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday">تاريخ الميلاد</label>
                                <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="أدخل تاريخ ميلادك" value="06/10/1988">
                            </div>
                        </div>
                        <!-- زر حفظ التغييرات -->
                        <button class="btn btn-primary" type="button">حفظ التغييرات</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
