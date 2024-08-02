<?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">


<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>
<!-- booking start -->
<section id="book-appointment" class="padding-large mb-0">
    <div class="container">
        <div class="row">
            <div class="display-header">
                <h2 class="display-5 fw-bold text-dark">
                    Book Appointment or call: <span class="text-primary-500">(+20) 999999</span>
                </h2>
            </div>
            <form action="<?php echo e(route('store.book')); ?>" method="POST" class="contact-form d-flex flex-wrap mt-5 gx-1">
                <?php echo csrf_field(); ?>
                <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                    <select class="form-select focus-transparent border border-radius-10 ps-4" aria-invalid="false" name="department" required>
                        <option value="">Select Department</option>
                        <option value="Department of Physiotherapy">Department of Physiotherapy</option>
                        <option value="Department of Dentistry">Department of Dentistry</option>
                        <option value="ENT Department">ENT Department</option>
                        <option value="Department of Pharmacy">Department of Pharmacy</option>
                        <option value="Nursing Department">Nursing Department</option>
                    </select>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                    <select class="form-select focus-transparent border ps-4 border-radius-10" aria-invalid="false" name="doctor_name" required>
                        <option value="">Select Doctor</option>
                        <option value="William Davies">William Davies</option>
                        <option value="Charlotte Taylor">Charlotte Taylor</option>
                        <option value="William Jones">William Jones</option>
                    </select>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                    <input type="text" name="name" placeholder="Full Name" class="border ps-4 border-radius-10" required>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                    <input type="text" name="phone" placeholder="Phone Number" class="border ps-4 border-radius-10" required>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                    <div class="input-group date" id="datepicker">
                        <input type="date" name="birthday" placeholder="Choose Date" class="bg-transparent ps-4 border border-radius-10 position-relative" required>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                    <div class="input-group time" id="timepicker">
                        <input type="time" name="time" class="bg-transparent ps-4 border border-radius-10 position-relative" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-medium btn-primary btn-pill mt-3 text-uppercase">Book an appointment</button>
            </form>
        </div>
    </div>
</section>



<!-- booking end  -->



<?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script src="<?php echo e(asset('js/jquery-1.11.0.min.js')); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/plugins.js')); ?>"></script>
<script src="<?php echo e(asset('js/script.js')); ?>"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<?php /**PATH C:\xampp\htdocs\medical\resources\views/booking.blade.php ENDPATH**/ ?>