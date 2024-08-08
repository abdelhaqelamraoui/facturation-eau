@extends('layouts.layout')
@section('subtitle','إضافة زبون')

@section('content')
<div class="container-fluid">
    <div class="container">
        <!-- نموذج المعلومات الأساسية -->
        <form action="{{ route('clients.store') }}" method="POST">
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
                                        <input type="text" name="client[nom]" class="form-control text-end" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3 text-end">
                                        <label class="form-label text-end">اسم العائلة</label>
                                        <input type="text" name="client[prenom]" class="form-control text-end" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3 text-end">
                                        <label class="form-label text-end">رقم الهاتف</label>
                                        <input type="text" name="client[telephone]" class="form-control text-end" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3 text-end">
                                        <label class="form-label text-end">رقم البطاقة الوطنية</label>
                                        <input type="text" name="client[cin]" class="form-control text-end" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="mb-3 text-end">
                                        <label class="form-label text-end">العنوان</label>
                                        <input type="text" name="client[adresse]" class="form-control text-end" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- معلومات العداد -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="h6 mb-4 text-end">معلومات العداد</h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 mb-3 text-end ">
                                        <label class="form-label text-end">قيمة العداد</label>
                                        <input type="number" name="releve[valeur]" class="form-control text-end" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3 text-end">
                                        <label class="form-label text-end">رقم العداد</label>
                                        <input type="number" name="compteur[numero]" class="form-control text-end" required>
                                    </div>
                                </div>
                                <!-- Add other compteur fields here if needed -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <span class="d-flex gap-5">
                    <button type="submit" class="btn btn-primary px-5 btn-icon-text"><i class="bi bi-save"></i> <span class="text">حفظ</span></button>
                    <a href="" class="btn btn-secondary px-5 btn-icon-text"><i class="bi bi-x"></i> <span class="text">إلغاء</span></a>
                </span>
            </div>
        </form>
    </div>
</div>
@endsection