@extends('layoutsAdmin.app')

@section('content')
<div class="container-fluid">
  <div class="card">
    <div class="card-body">
        <!-- Update Status Form -->
        <form action="/store/keterangan/{{$status->id}}" method="POST">
            @csrf

            <div class="form-group">
                <label for="status">Keterangan</label>
                <textarea class="form-control" id="status" name="status" rows="4">{{ old('status', $status->status) }}</textarea>
                @error('status')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('status.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div> 
  </div>
</div>
@endsection
