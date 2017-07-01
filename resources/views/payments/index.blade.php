@extends ('layouts.app')

@section('content')
<div class="container payments">
  <div class="row">
    <div class="col-xs-12 col-sm-offset-3 col-sm-6">
      <div class="request-list">
        <h1 class="text-center">All the payment requests for your app:</h1>
        <table>
          <tr>
            <th class="title">Request number</th>
            <th class="title">Status</th>
          </tr>
          @foreach($payments as $payment)
          <tr>
            <th><?= $payment->request_id; ?></th>
            <th><?= $payment->status; ?></th>
          </tr>
          @endforeach
        </table>
        <div class="position-abs-b">
          <a class="btn-back flex" href="/">
            <i class="fa fa-long-arrow-left " aria-hidden="true"></i>
            <p>Back</p>
          </a>
        </div>
        <a class="btn button position-abs-u text-center" href="/payments">Update</a>
      </div>
    </div>
  </div>
</div>
@endsection
