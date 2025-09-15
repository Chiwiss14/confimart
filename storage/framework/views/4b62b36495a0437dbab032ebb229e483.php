<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <!-- .main-content -->
    <div class="main-content w-100">
        <div class="main-content-inner">
            <div class="button-show-hide show-mb">
                <span class="body-1">Show Dashboard</span>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p class="text-center text-danger"><?php echo e($err); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <form class="box-info-property" action="<?php echo e(route('admin.property.store')); ?>" method="POST"
                enctype="multipart/form-data"> <?php echo csrf_field(); ?>

                <div class="widget-box-2 mb-20">
                    <label for="status">Property Status:</label>
                    <select name="status" id="status" class="w-full form-control nice-select">
                        <option value="for_sale">For Sale</option>
                        <option value="for_rent">For Rent</option>
                    </select>
                    <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-center"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="widget-box-2 mb-20">
                    <h3 class="title">Upload Media</h3>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="widget-box-2 mb-20">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p class="text-red-500 text-center"><?php echo e($err); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <h5 class="title">Information</h5>


                    <fieldset class="box box-fieldset">
                        <label for="title">
                            Title:<span>*</span>
                        </label>
                        <input type="text" name="title" class="form-control" placeholder="Choose">
                    </fieldset>
                    <fieldset class="box box-fieldset">
                        <label for="desc">Description:</label>
                        <textarea class="textarea" name="description" placeholder="Your Decscription"></textarea>
                    </fieldset>
                    <div class="box grid-layout-3 gap-30">
                        <fieldset class="box-fieldset">
                            <label for="address">
                                Full Address:<span>*</span>
                            </label>
                            <input type="text" class="form-control" name="address"
                                placeholder="Enter property full address">
                        </fieldset>
                        <fieldset class="box-fieldset">
                            <label for="country">
                                Country:<span>*</span>
                            </label>
                            <select name="country" id="" class="w-full form-control nice-select">
                                <option>Nigeria</option>
                                <option>US</option>
                                <option>UK</option>
                            </select>
                        </fieldset>
                    </div>
                </div>
                <div class="widget-box-2 mb-20">
                    <h3 class="title">Price</h3>
                    <div class="box-price-property">
                        <fieldset class="box-fieldset mb-30">
                            <label for="price">Price:<span>*</span></label>
                            <input type="text" class="form-control" name="price"
                                placeholder="Example value: 12345.67">
                        </fieldset>
                    </div>
                </div>
                <div class="widget-box-2 mb-20">
                    <label for="">Select Property
                        <select name="type" id="" class="w-full form-control nice-select">
                            <option>Apartment</option>
                            <option>Self contain</option>
                            <option>Duplex</option>
                        </select>
                    </label>

                </div>
                <div class="box-btn">
                    <button class="tf-btn bg-color-primary pd-13">AddProperty</button>
                </div>
            </form>
            <!-- .footer-dashboard -->
            <div class="footer-dashboard">
                <p>Copyright © 2024 Popty</p>
                <ul class="list">
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Support</a></li>
                </ul>

            </div><!-- /.footer-dashboard -->
        </div>
        <div class="overlay-dashboard"></div>

    </div><!-- /.main-content -->

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\Users\HP\Desktop\PROJECTS\chief-pro\resources\views/admin/addproperty.blade.php ENDPATH**/ ?>