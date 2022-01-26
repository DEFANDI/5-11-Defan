@extends('layouts.main')

@section('container')
  <div class="title-top mb-5">
     <h2 class="fw-bold">Contacts Us</h2>
  </div>
  <form>
    <div class="from-floating mb-3">
         <label for="inputname">Nama</label>
         <input type="text" class="form-control" id="inputname" placeholder="Nama">
    </div>
    <div class="from-floating mb-3">
          <label for="inputemail" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputemai" placeholder="Email">
    </div>
    <div class="from-floating mb-3">
         <textarea class="from-control" placeholder="Tinggalkan pesan disini!" id="floatingTextarea2" style="middle: 100px"></textarea>
         <label for="floatingTextarea2">Pesan</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection