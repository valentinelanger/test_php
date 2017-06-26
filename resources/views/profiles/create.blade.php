@extends ('layouts.app')

@section ('content')
  <div class="container profile-create">
    <div class="col-xs-12 col-sm-offset-3 col-sm-6">

      <div class="form">
        <h1>Register yourself to try our paiement request system</h1>

        <form method="POST" action="https://homologation.lydia-app.com/doc/api/request/do">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="_token" value="{!! csrf_token() !!}">
          <div class="form-group">

            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="firstname">
          </div>
          <div class="form-group">

            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="lastname">
          </div>
          <div class="form-group">

            <input type="text" class="form-control" id="email" name="email" placeholder="valentine.langer@gmail.com">
          </div>

          <button type="submit" class="btn button">Make a paiement request</button>
        </form>
      </div>
    </div>
  </div>
@endsection
