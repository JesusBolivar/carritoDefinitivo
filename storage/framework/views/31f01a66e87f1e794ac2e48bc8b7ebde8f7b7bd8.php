<?php $__env->startSection('content'); ?>

    <div class="container">
        <p><a href="<?php echo e(url('shop')); ?>">Home</a> / Wishlist</p>
        <h1>Your Wishlist</h1>

        <hr>

        <?php if(session()->has('success_message')): ?>
            <div class="alert alert-success">
                <?php echo e(session()->get('success_message')); ?>

            </div>
        <?php endif; ?>

        <?php if(session()->has('error_message')): ?>
            <div class="alert alert-danger">
                <?php echo e(session()->get('error_message')); ?>

            </div>
        <?php endif; ?>

        <?php if(sizeof(Cart::instance('wishlist')->content()) > 0): ?>

            <table class="table">
                <thead>
                    <tr>
                        <th class="table-image"></th>
                        <th>Product</th>

                        <th>Price</th>
                        <th class="column-spacer"></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = Cart::instance('wishlist')->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="table-image"><a href="<?php echo e(url('shop', [$item->model->slug])); ?>"><img src="<?php echo e(asset('img/' . $item->model->image)); ?>" alt="product" class="img-responsive cart-image"></a></td>
                        <td><a href="<?php echo e(url('shop', [$item->model->slug])); ?>"><?php echo e($item->name); ?></a></td>

                        <td>$<?php echo e($item->subtotal); ?></td>
                        <td class=""></td>
                        <td>
                            <form action="<?php echo e(url('wishlist', [$item->rowId])); ?>" method="POST" class="side-by-side">
                                <?php echo csrf_field(); ?>

                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" class="btn btn-danger btn-sm" value="Remove">
                            </form>

                            <form action="<?php echo e(url('switchToCart', [$item->rowId])); ?>" method="POST" class="side-by-side">
                                <?php echo csrf_field(); ?>

                                <input type="submit" class="btn btn-success btn-sm" value="To Cart">
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>

            <div class="spacer"></div>

            <a href="/shop" class="btn btn-primary btn-lg">Continue Shopping</a> &nbsp;

            <div style="float:right">
                <form action="<?php echo e(url('/emptyWishlist')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" class="btn btn-danger btn-lg" value="Empty Wishlist">
                </form>
            </div>

        <?php else: ?>

            <h3>You have no items in your Wishlist</h3>
            <a href="/shop" class="btn btn-primary btn-lg">Continue Shopping</a>

        <?php endif; ?>

        <div class="spacer"></div>

    </div> <!-- end container -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>