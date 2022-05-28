@extends('products.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Detail</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('products.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <label>Transactions</label>
             <select name="select_type" id="select_type">
              <option>--</option>
                 <option value="INCOME">INCOME</option>
                  <option value="EXPENSE">EXPENSE</option>
                    
            </select>
      </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12">  
        <div class="form-group">
                <strong>Amount:</strong>
                <input type="number" name="amount" class="form-control" placeholder="Amount">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:150px" name="details" placeholder="Details"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">  
        <div class="form-group">
                <strong>Date:</strong>
                <input type="date" name="date" class="form-control" placeholder="date">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection