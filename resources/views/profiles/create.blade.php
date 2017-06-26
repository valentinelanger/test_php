@extends ('layouts.app')

@section ('content')

  <h1>Register yourself to try our paiement request system</h1>

  <form>
    <div class="form-group">
      <label for="firstname">Firstname</label>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
    </div>
    <div class="form-group">
      <label for="lastname">Lastname</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" class="form-control" id="email" placeholder="Another input">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
