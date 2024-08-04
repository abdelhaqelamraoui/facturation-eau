@extends('layouts.layout')
@section('subtitle', 'تفاصيل الحساب')

@section('content')

<div class="container-xl px-4 mt-4" dir="rtl">

    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-12">
            <!-- بطاقة تفاصيل الحساب -->
            <div class="card mb-4">
                <div class="card-header">تفاصيل الحساب</div>
                <div class="card-body">
                    <form>

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
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName"> رقم العداد </label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="أدخل اسم عائلتك" value="Luna">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">قيمة العداد </label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="أدخل اسم عائلتك" value="Luna">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">رقم الهاتف </label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="أدخل اسم عائلتك" value="Luna">
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
