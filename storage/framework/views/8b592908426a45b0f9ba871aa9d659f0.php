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
    <div class="container py-5">

        
        <form method="GET" action="<?php echo e(route('property.list')); ?>" class="mb-6">
            <div class="row g-3 align-items-end">
                <div class="col-md-4 p-4">
                    <label for="search" class="form-label">Search</label>
                    <input type="text" id="search" name="search" class="form-control"
                        placeholder="Search by location or title" value="<?php echo e(request('search')); ?>">
                </div>
                <div class="col-md-3 p-4">
                    <label for="type" class="form-label">Property Type</label>
                    <select id="type" name="type" class="form-select">
                        <option value="">All Types</option>
                        <option value="apartment" <?php echo e(request('type') == 'apartment' ? 'selected' : ''); ?>>Apartment
                        </option>
                        <option value="house" <?php echo e(request('type') == 'house' ? 'selected' : ''); ?>>House</option>
                        <option value="land" <?php echo e(request('type') == 'land' ? 'selected' : ''); ?>>Land</option>
                    </select>
                </div>
                <div class="col-md-3 p-4">
                    <label for="price" class="form-label">Max Price</label>
                    <input type="number" id="price" name="price" class="form-control" placeholder="e.g. 5000000"
                        value="<?php echo e(request('price')); ?>">
                </div>
                <div class="col-md-2 d-grid">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </div>
        </form>

        
        <div class="row g-4">
            <?php $__empty_1 = true; $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <a href="<?php echo e(route('property.single', $property->id)); ?>">
                            <img src="<?php echo e(asset($property->image)); ?>" class="card-img-top" alt="<?php echo e($property->title); ?>"
                                style="height: 200px; object-fit: cover;">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($property->title); ?></h5>
                            <p class="card-text text-muted">
                                <i class="bi bi-geo-alt"></i> <?php echo e($property->address); ?>, <?php echo e($property->country); ?>

                            </p>
                            <h6 class="text-success fw-bold">₦<?php echo e(number_format($property->price, 2)); ?></h6>
                            <ul class="list-inline small mt-2">
                                <li class="list-inline-item"><?php echo e($property->type); ?></li>
                                <?php if($property->bedrooms): ?>
                                    <li class="list-inline-item"><?php echo e($property->bedrooms); ?> Beds</li>
                                <?php endif; ?>
                                <?php if($property->bathrooms): ?>
                                    <li class="list-inline-item"><?php echo e($property->bathrooms); ?> Baths</li>
                                <?php endif; ?>
                            </ul>
                            <a href="<?php echo e(route('property.single', $property->id)); ?>"
                                class="btn btn-outline-primary btn-sm mt-3">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p class="text-center">No properties found.</p>
            <?php endif; ?>
        </div>

        
        <div class="mt-4">
            <?php echo e($properties->links()); ?>

        </div>
    </div>
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
<?php /**PATH C:\Users\HP\Desktop\PROJECTS\chief-pro\resources\views/property-list.blade.php ENDPATH**/ ?>