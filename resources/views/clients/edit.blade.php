@extends('layouts.layout')
@section('subtitle','تعديل زبون')


@section('content')
<div class="container-xl px-4 mt-4" dir="rtl">
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-12">
            <!-- بطاقة تعديل المعلومات -->
            <div class="card mb-4">
                <div class="card-header">تعديل معلومات العميل</div>
                <div class="card-body">
                    <form action="{{ route('clients.update', $client->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- صف النموذج -->
                        <div class="row gx-3 mb-3">
                            <!-- مجموعة النموذج (الاسم الأول) -->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">الاسم الشخصي </label>
                                <input class="form-control" id="inputFirstName" type="text" name="client[nom]" value="{{ old('client.nom', $client->nom) }}" placeholder="أدخل اسمك الأول">
                            </div>
                            <!-- مجموعة النموذج (اسم العائلة) -->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">الاسم العائلي</label>
                                <input class="form-control" id="inputLastName" type="text" name="client[prenom]" value="{{ old('client.prenom', $client->prenom) }}" placeholder="أدخل اسم عائلتك">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputCin">رقم البطاقة الوطنية</label>
                                <input class="form-control" id="inputCin" type="text" name="client[cin]" value="{{ old('client.cin', $client->cin) }}" placeholder="أدخل رقم الهوية">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputTelephone">رقم الهاتف</label>
                                <input class="form-control" id="inputTelephone" type="text" name="client[telephone]" value="{{ old('client.telephone', $client->telephone) }}" placeholder="أدخل رقم الهاتف">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputAdresse">العنوان</label>
                                <input class="form-control" id="inputAdresse" type="text" name="client[adresse]" value="{{ old('client.adresse', $client->adresse) }}" placeholder="أدخل العنوان">
                            </div>
                        </div>

                        <!-- معلومات العداد -->
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputCompteurNumero">رقم العداد</label>
                                <input class="form-control" id="inputCompteurNumero" type="text" name="compteur[numero]" value="{{ old('compteur[numero]', $client->compteur->numero ?? '') }}" placeholder="أدخل رقم العداد">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputCompteurValeur">قيمة العداد</label>
                                <input class="form-control" id="inputCompteurValeur" type="text" name="releve[valeur]" value="{{ old('compteur[valeur]', $client->compteur->valeur ?? '') }}" placeholder="أدخل قيمة العداد">
                            </div>
                        </div>

                        <!-- زر حفظ التغييرات -->
                        <button class="btn btn-primary" type="submit">حفظ التعديلات</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection