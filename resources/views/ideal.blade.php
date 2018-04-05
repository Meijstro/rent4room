@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Upgrade Account</div>
            <div class="card-body">
              <form action="/upgrade/ideal/payment" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="email">E-mail</label>
                  <input type="text" class="form-control" name="email" id="email" value="{{$user->email}}">
                </div>
                <div class="form-group">
                  <label for="bank">Selecteer je bank</label> <br>
                  <select style="margin-right: 20%;" name="bank">
                      <option></option>
                      <option value="ideal/RABONL2U">Rabobank</option>
                      <option value="ideal/INGBNL2A">ING</option>
                      <option value="ideal/ABNANL2A">ABN AMRO</option>
                      <option value="ideal/SNSBNL2A">SNS Bank</option>
                      <option value="ideal/RBRBNL21">RegioBank</option>
                      <option value="ideal/ASNBNL21">ASN Bank</option>
                      <option value="ideal/KNABNL2H">Knab</option>
                      <option value="ideal/TRIONL2U">Triodos Bank</option>
                      <option value="ideal/FVLBNL22">Van Lanschot</option>
                      <option value="ideal/BUNQNL2A">Bunq</option>
                  </select>
                  <button type="submit" class="btn btn-success">Naar betaling</button>
                </div>
            </div>
          </div>
        </div>
    </div>
@endsection
