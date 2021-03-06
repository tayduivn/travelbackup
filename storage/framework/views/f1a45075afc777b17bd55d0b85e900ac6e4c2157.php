<?php $__env->startSection('title','Tin Tức'); ?>
<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/tintuc/tintuc.css')); ?>">
    <div class="container carosel-tintuc">
        <!--Start code-->
        <h2 class="text-center tour-gio-vang">Tin Tức Nổi Bật</h2>
        <div class="row">

            <div class="col-12">
                <!--SECTION START-->
                <section class="row">

                    <!--Start slider news-->
                    <div class="col-12 col-md-6 pb-0 pb-md-3 pt-3">
                        <div id="featured" class="carousel slide carousel" data-ride="carousel">
                            <!--dots navigate-->
                            <ol class="carousel-indicators top-indicator">
                                <li data-target="#featured" data-slide-to="0" class="active"></li>
                                <li data-target="#featured" data-slide-to="1"></li>
                                <li data-target="#featured" data-slide-to="2"></li>
                                <li data-target="#featured" data-slide-to="3"></li>
                            </ol>

                            <!--carousel inner-->
                            <div class="carousel-inner">
                                <!--Item slider-->


                                <!--Item slider-->
                                <div class="carousel-item active">
                                    <div class="card border-0 rounded-0 text-light overflow zoom">
                                        <div class="position-relative">
                                            <!--thumbnail img-->
                                            <div class="ratio_left-cover-1 image-wrapper">
                                                <a href="<?php echo e(route('chitiet',$first->id)); ?>">
                                                    <img class="img-fluid w-100"
                                                         src="img/news/<?php echo e($first->avatar); ?>"
                                                         alt="Image description">
                                                </a>
                                            </div>
                                            <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                <!--title-->
                                                <a href="<?php echo e(route('chitiet',$first->id)); ?>">
                                                    <h2 class="h3 post-title text-white my-1"><?php echo e($first->tieude); ?></h2>
                                                </a>
                                                <!-- meta title -->
                                                <div class="news-meta">
                                                    <span class="news-date"><?php echo e($first->ngaydang); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--end carousel inner-->
                        </div>
                    </div>
                    <div class="col-12 col-md-6 pt-2 pl-md-1 mb-3 mb-lg-4">
                        <div class="row">

                            <?php $__currentLoopData = $listnews1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stt => $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-6 pb-2 pt-2">
                                <div class="card border-0 rounded-0 text-white overflow zoom">
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_right-cover-2 image-wrapper">
                                            <a href="<?php echo e(route('chitiet',$news->id)); ?>">
                                                <img class="img-fluid"
                                                     src="img/news/<?php echo e($news->avatar); ?>"
                                                     alt="Image description">
                                            </a>
                                        </div>
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                            <!-- category -->
                                            <a class="p-1 badge badge-primary rounded-0" href="<?php echo e(route('chitiet',$news->id)); ?>"><?php echo e($news->tieude); ?></a>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                </section>

            </div>
        </div>
    </div>
    <div class="container">        
        <h2 class="text-center tour-gio-vang">Tin tức </h2>
        <?php $__currentLoopData = $listnews2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stt => $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row tintuc-mgbt">
            <div class="col-md-4">
                <a href="<?php echo e(route('chitiet',$news->id)); ?>"><img width="340" height="200"
                     src="img/news/<?php echo e($news->avatar); ?>"></a>
            </div>
            <div class="col-md-8  ">
                <a href="<?php echo e(route('chitiet',$news->id)); ?>"><h5><p><?php echo e($news->tieude); ?></p></h5></a>
                <p><i class="fas fa-clock"></i><?php echo e($news->ngaydang); ?></p>
                <p><?php echo e($news->tomtat); ?></p>
                <a href="<?php echo e(route('chitiet',$news->id)); ?>">Xem Chi Tiết</a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="justify-content-center row ">
        <div class="col-md-4"><?php echo e($listnews2->links()); ?></div></div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master-layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>