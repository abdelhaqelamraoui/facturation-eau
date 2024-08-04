@extends('layouts.layout')

@section('content')
<div class="container-fluid">

    <div class="container">
        <!-- العنوان -->
        <div class="mb-3 text-end">
            <div class="text-end">
                <h2 class="mb-3">إنشاء عميل جديد</h2>
            </div>
        </div>

        <!-- نموذج المعلومات الأساسية -->
        <form action="{{ url('/admin/customers/store') }}" method="POST">
            @csrf
            <div class="row">
                <!-- الجانب الأيسر -->
                <div class="col">
                    <!-- المعلومات الأساسية -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="h6 mb-4 text-end">المعلومات الأساسية</h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 text-end">
                                        <label class="form-label text-end">الاسم الشخصي</label>
                                        <input type="text" name="first_name" class="form-control text-end" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3 text-end">
                                        <label class="form-label text-end">اسم العائلة</label>
                                        <input type="text" name="last_name" class="form-control text-end" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 text-end">
                                        <label class="form-label text-end">رقم الهاتف</label>
                                        <input type="text" name="phone_number" class="form-control text-end" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3 text-end">
                                        <label class="form-label text-end">رقم الهوية</label>
                                        <input type="text" name="identity_number" class="form-control text-end" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3 text-end">
                                        <label class="form-label text-end">الرقم المرجعي</label>
                                        <input type="text" name="reference_number" class="form-control text-end">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3 text-end">
                                        <label class="form-label text-end">رقم العداد</label>
                                        <input type="text" name="meter_number" class="form-control text-end">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ url('/admin/customers') }}" class="btn btn-light btn-sm btn-icon-text"><i class="bi bi-x"></i> <span class="text">إلغاء</span></a>
            <button type="submit" class="btn btn-primary btn-sm btn-icon-text"><i class="bi bi-save"></i> <span class="text">حفظ</span></button>
        </form>
        </form>
    </div>

</div>
@endsection
