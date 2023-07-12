<?php $__env->startSection('title_page'); ?>
    Detail Product
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('body_content'); ?><!DOCTYPE html>
    <!--main content start-->
    <style>
        button.btn.btn-outline-primary {
            float: left;
            margin-top: 10px;
            color: white;

            background-color: dodgerblue;
            /* color: whitesmoke; */
            margin-left: -14px;
        }
        div#Extra {
    display: inline-block;
}
    </style>

    <section id="main-content">
        <section class="wrapper">
            <div class="table-agile-info">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <a href="/list_product">
                            <button type="button" class="btn btn-outline-primary">Back</button>
                        </a>
                        Detail Product
                    </div>

                    <?php

                    ?>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12 col-sm=12 col-md-12">
                                <div class="form-group">
                                    <strong>Name Product:</strong>
                                    <?php echo e($data->name_product); ?>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-sm=12 col-md-12">
                                <div class="form-group">
                                    <strong>Money:</strong>
                                    <?php echo e($data->money); ?>$
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-sm=12 col-md-12">
                                <div class="form-group">
                                    <strong>Main:</strong>
                                   
                                        <img src="<?php echo e($Main->value); ?>" alt="" width="200px">
                                   
                                </div>
                               
                                <div class="form-group" id="Extra">
                                    <strong>Extra:</strong>
                             
                               <?php $__currentLoopData = $Extra; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <?php $__currentLoopData = explode('|',$row->value); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <img src="<?php echo e($value); ?>" alt="" width="200px">
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm=12 col-md-12">
                                <div class="form-group">
                                    <strong>category Product:</strong>
                                    <?php echo e($data->name); ?>

                                </div>
                            </div>

                        </div>

                    </div>
                    <footer class="panel-footer">

                    </footer>
                </div>
            </div>
        </section>
        <!-- footer -->
        <div class="footer" style="width: 100%; position: absolute; bottom: 0; text-align: center">
            <div class="wthree-copyright">
                <p>© 2023. All rights reserved | Design by <a href="/about">Favorable Team</a></p>
            </div>
        </div>
        <!-- / footer -->
    </section>

    <!--main content end-->
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Phong\Documents\project-FANoFAN\resources\views/Product/detail_product.blade.php ENDPATH**/ ?>