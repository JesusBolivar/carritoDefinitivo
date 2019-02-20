@extends('master')

@section('content')

    <div class="container">
        <p><a href="{{ url('shop') }}">Home</a> / Cart</p>
        <h1>Pago con PayPal</h1>
        <hr>
        <div id="paypal-button">
        <script type="text/javascript">      
          paypal.Button.render({
            env: 'sandbox',
            client: {
              sandbox: 'demo_sandbox_client_id'
            },
            style: {
              color: 'gold',   // 'gold, 'blue', 'silver', 'black'
              size:  'medium', // 'medium', 'small', 'large', 'responsive'
              shape: 'rect'    // 'rect', 'pill'
            },
            payment: function (data, actions) {
              return actions.payment.create({
                transactions: [{
                  amount: {
                    total: '0.01',
                    currency: 'USD'
                  }
                }]
              });
            },
            onAuthorize: function (data, actions) {
              return actions.payment.execute()
                .then(function () {
                  window.alert('Thank you for your purchase!');
                });
            }
          }, '#paypal-button');
        </script>
        </div>
    </div>

@endsection

@section('extra-js')
    <script>
        (function(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.quantity').on('change', function() {
                var id = $(this).attr('data-id')
                $.ajax({
                  type: "PATCH",
                  url: '{{ url("/cart") }}' + '/' + id,
                  data: {
                    'quantity': this.value,
                  },
                  success: function(data) {
                    window.location.href = '{{ url('/cart') }}';
                  }
                });

            });

        })();

    </script>
@endsection
