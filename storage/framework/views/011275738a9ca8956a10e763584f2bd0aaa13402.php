<?php $__env->startSection('content'); ?>

    <div class="container">
        <p><a href="<?php echo e(url('shop')); ?>">Home</a> / Cart</p>
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra-js'); ?>
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
                  url: '<?php echo e(url("/cart")); ?>' + '/' + id,
                  data: {
                    'quantity': this.value,
                  },
                  success: function(data) {
                    window.location.href = '<?php echo e(url('/cart')); ?>';
                  }
                });

            });

        })();

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>