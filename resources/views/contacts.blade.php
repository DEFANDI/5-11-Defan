@extends('layouts.main')

@section('container')
  <div class="title-top mb-5">
     <h2 class="fw-bold">Contacts Us</h2>
  </div>
  <form>
    <div class="form-floating mb-3">
         <label for="inputname">Nama</label>
         <input type="text" class="form-control" id="inputname" placeholder="Nama">
    </div>
    <div class="form-floating mb-3">
          <label for="inputemail" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputemai" placeholder="Email">
    </div>
    <div class="form-floating mb-3">
         <label for="floatingTextarea2">Pesan</label>
         <textarea class="form-control" placeholder="Tinggalkan pesan disini!" id="floatingTextarea2" style="middle: 100px"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection