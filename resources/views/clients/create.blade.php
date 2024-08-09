@extends('layouts.layout')
@section('subtitle','إضافة زبون')
@section('content')
<div class="container">
    <form action="{{ route('clients.store') }}" method="POST" class="mt-4">
        @csrf
        <div class="row">
            <div class="col">
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="h6 mb-4">المعلومات الأساسية</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">الاسم الشخصي</label>
                                    <input type="text" name="client[nom]" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">اسم العائلة</label>
                                    <input type="text" name="client[prenom]" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">رقم الهاتف</label>
                                    <input type="text" name="client[telephone]" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">رقم البطاقة الوطنية</label>
                                    <input type="text" name="client[cin]" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="mb-3">
                                    <label class="form-label">العنوان</label>
                                    <input type="text" name="client[adresse]" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="h6 mb-4">معلومات العداد</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">رقم العداد</label>
                                    <input type="number" name="compteur[numero]" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3 mb-3 ">
                                    <label class="form-label">قيمة العداد</label>
                                    <input type="number" name="compteur[value]" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <div class="">
                <a href="" class="btn btn-light px-5 btn-icon-text border border-dark ms-3"><i class="bi bi-x"></i> <span class="text">إلغاء</span></a>
                <button type="submit" class="btn btn-primary px-5 btn-icon-text me-3"><i class="bi bi-save"></i> <span class="text">حفظ</span></button>
            </div>
        </div>
    </form>
</div>
@endsection