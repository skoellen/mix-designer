<?php /* /Users/stephankollen/Projects/mix-designer/resources/views/index.blade.php */ ?>
<?php $__env->startSection('content'); ?>

    <div class="container">
        <h1>Hello and welcome</h1>
        <div class="row">
            <div class="col-md-4 animated fadeInLeft" style="background: #ebebeb">
                <p>Column</p>
            </div>
            <div class="col-md-4" style="background: #ebebeb">
                <p>Column</p>
            </div>
            <div class="col-md-4 animated fadeInRight" style="background: #ebebeb">
                <p>Column</p>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>