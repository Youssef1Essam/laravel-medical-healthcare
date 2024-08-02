<!-- Subscribe start -->
<?php if(session('success')): ?>
    <div class="alert alert-success text-center">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<section id="subscribe" class="d-flex align-items-center"
style="background-image: url(images/subscribe-bg.jpg); background-repeat: no-repeat;background-size: cover; height: 444px;">
<div class="container">
<div class="row align-items-center">
    <div class="subscribe-content">
    <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="subscribe-header content-light mb-5">
            <span class="text-light text-uppercase">Our newsletter</span>
            <h3 class="display-3 fw-semibold text-light mt-3">Subscribe Us To Get More Updates</h3>
        </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <form action="<?php echo e(route('subscribe')); ?>" method="POST" class="d-flex flex-wrap position-relative">
                <?php echo csrf_field(); ?>
            <input type="text" name="email" placeholder="Your Email Addresss"
            class="border-radius-35 text-light ps-4 outline-transparent">
            <button
            class="btn btn-light btn-subscribe btn-pill position-absolute fw-medium text-uppercase">Subscribe</button>
        </form>
        </div>
    </div>
    </div>
</div>
</div>
</section>

<!-- Subscribe end -->
<?php /**PATH C:\xampp\htdocs\medical_healthcare\resources\views/includes/subscribe.blade.php ENDPATH**/ ?>