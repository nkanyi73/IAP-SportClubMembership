@extends ('layouts.app')

@section('content')
<!--<div class ="container">
    <div class="row justify-content-center">
        <h2 class="display-6">Welcome</h2>
        <div class="card-group">
            <div class="card">
            <img class="card-img-top" src="" alt="Swimming">
                <div class="card-body">
                    <div class="card-title">Swimming</div>
                </div>
            </div>
        </div>
    </div>
</div>-->

<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src=".../100px180/" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Swimming</h5>
      <p class="card-text">Instuctor Name: Terry Odongo</p>
    </div>
    <div class="card-footer">
        <a href="#" class="btn btn-primary">BOOK</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src=".../100px180/" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Football</h5>
      <p class="card-text">Instuctor Name: James Smith</p>
    </div>
    <div class="card-footer">
        <a href="#" class="btn btn-primary">BOOK</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src=".../100px180/" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Golf</h5>
      <p class="card-text">Instuctor Name: Yoko Ono</p>
    </div>
    <div class="card-footer">
        <a href="#" class="btn btn-primary">BOOK</a>
    </div>
  </div>
</div>
@endsection

