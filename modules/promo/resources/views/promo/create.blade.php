
@extends('admin::layout-nassau')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
@endpush


@section('content')

            <!-- start form -->
            <form method="post">
              @csrf
            <div class="row pr-4">
              <div class="col">
                <div class="form-group">
                  <label for="exampleInputCategoryName">Promo Code</label>
                  <input type="text" class="form-control" name="code" id="exampleInputName">
                  @if($errors->has('code'))
                  <span class="text-danger small">{{$errors->first('code')}}</span>
                  @endif
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="exampleInputCategoryName">Promo Type</label>
                  <select class="form-control" name="type" id="exampleFormControlSelect1">
                    @foreach(config('promo.type') as $i => $row)
                    <option value="{{$row}}">{{ ucwords($row)}}</option>
                    @endforeach
                  </select>
                  @if($errors->has('type'))
                  <span class="text-danger small">{{$errors->first('type')}}</span>
                  @endif
                </div>
              </div> 
            </div>
            <div class="row pr-4">
              <div class="col">
                <div class="form-group">
                  <label for="exampleInputCategoryName">Promo Reward</label>
                  <input type="number" class="form-control" name="reward" id="exampleInputAmount">
                  @if($errors->has('reward'))
                  <span class="text-danger small">{{$errors->first('reward')}}</span>
                  @endif
                </div>
              </div> 
              <div class="col">
                <div class="form-group">
                  <label for="exampleInputCategoryName">Expired Date</label>
                  <input type="text" name="expires_at" class="form-control" id="datetimepicker1">
                  @if($errors->has('expires_at'))
                  <span class="text-danger small">{{$errors->first('expires_at')}}</span>
                  @endif
                </div>
              </div> 
            </div>
            <div class="row pr-4">
              <div class="col">
                <div class="float-right">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>
            </div>
          </form>
            <!-- end form -->
  @endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script>
  $('#datetimepicker1').datepicker();
</script>
@endpush