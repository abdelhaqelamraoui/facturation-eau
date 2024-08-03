@extends('layouts.layout')

@section('content')
<div class="container-fluid">

    <div class="container">
        <!-- العنوان -->
        <div class="d-flex justify-content-between align-items-lg-center py-3 flex-column flex-lg-row">
            <h2 class="h5 mb-3 mb-lg-0"><a href="{{ url('/admin/customers') }}" class="text-muted"><i class="bi bi-arrow-left-square me-2"></i></a> إنشاء عميل جديد</h2>
            <div class="hstack gap-3">
                <button class="btn btn-light btn-sm btn-icon-text"><i class="bi bi-x"></i> <span class="text">إلغاء</span></button>
                <button class="btn btn-primary btn-sm btn-icon-text"><i class="bi bi-save"></i> <span class="text">حفظ</span></button>
            </div>
        </div>

        <!-- المحتوى الرئيسي -->
        <div class="row">
            <!-- الجانب الأيسر -->
            <div class="col-lg-8">
                <!-- المعلومات الأساسية -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="h6 mb-4">المعلومات الأساسية</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">الاسم الأول</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">اسم العائلة</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">رقم الهاتف</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">رقم الهوية</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">الرقم المرجعي</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">رقم العداد</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- الجانب الأيمن -->
            <div class="col-lg-4">
                <!-- الحالة -->
                <div class="card mb-4 text-end">
                    <div class="card-body text-end">
                        <h3 class="h6">الحالة</h3>
                        <select class="form-select d-inline-block" style="width: auto;">
                            <option value="draft" selected>مسودة</option>
                            <option value="active">نشط</option>
                            <option value="inactive">غير نشط</option>
                        </select>
                    </div>
                </div>
                <!-- الصورة الرمزية -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="h6">الصورة الرمزية</h3>
                        <input class="form-control" type="file">
                    </div>
                </div>
                <!-- الملاحظات -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="h6">ملاحظات</h3>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <!-- إعدادات الإشعارات -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="h6">إعدادات الإشعارات</h3>
                        <ul class="list-group list-group-flush mx-n2">
                            <li class="list-group-item px-0 d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <h6 class="mb-0">الأخبار والتحديثات</h6>
                                    <small>أخبار حول تحديثات المنتجات والميزات.</small>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch">
                                </div>
                            </li>
                            <li class="list-group-item px-0 d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <h6 class="mb-0">النصائح والدروس</h6>
                                    <small>نصائح حول الاستفادة القصوى من المنصة.</small>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" checked>
                                </div>
                            </li>
                            <li class="list-group-item px-0 d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <h6 class="mb-0">البحث عن المستخدمين</h6>
                                    <small>شارك في برنامج الاختبار التجريبي لدينا.</small>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
