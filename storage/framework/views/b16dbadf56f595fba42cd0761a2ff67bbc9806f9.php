<?php $__env->startSection('title','Kết quả tìm kiếm'); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('carosel_home', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/tour/chitietdiemden.css')); ?>">
    <!-- Link font GG -->
    <link href="https://fonts.googleapis.com/css?family=Baloo|Charm|IBM+Plex+Serif|Lobster|Playfair+Display&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo|Baloo+Paaji|Charm|IBM+Plex+Serif|Lobster|Pattaya|Playfair+Display&display=swap"
          rel="stylesheet">

    <div id="content">
        <div class="container detail-des">
            <h3>Kết quả tìm kiếm</h3><br><br>
            <?php if(Session::has('err')): ?>
                <div class="alert alert-danger">
                    <p><?php echo e(Session::get('err')); ?></p>
                </div>
            <?php endif; ?>
            
            <div class="row" id="list">
                <div class="col-lg-9 col-md-12" id="tour-list">
                    <?php $__currentLoopData = $search; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stt => $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="tour row">
                            <div class="image-2 col-md-4">
                                <img src="img/tour/<?php echo e($tour->avatar); ?>" alt="">
                            </div>
                            <div class="info col-md-8">
                                <h5><a href="#"><b><?php echo e($tour->name); ?></b></a></h5>
                                <div class="row">
                                    <div class="left col-md-6">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i><br>
                                        <span>Mã: <?php echo e($tour->id); ?></span><br>
                                        <span>Thời gian: <?php echo e($tour->songay); ?> ngày<br>
                                        <span>Khởi hành: <?php echo e($tour->noikhoihanh); ?></span><br>
                                        <span>Ngày khởi hành: <?php echo e($tour->ngaykhoihanh); ?></span>
                                    </div>
                                    <div class="right col-md-5 ml-auto">
                                        <br>
                                        <span>Số chỗ còn: <?php echo e($tour->socho); ?></span><br>
                                        <span>Giá 1 khách:</span><br>
                                        <span style="color: red; font-size: 22px"><b><?php echo e($tour->giamoi); ?></b></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="justify-content-center row ">
                    <div class="col-md-4"><?php echo e($search->links()); ?></div></div>
                </div>
                
                <div class="col-lg-3 col-md-12" id="list-news">
                    <h4>Tin tức</h4>
                    <?php $__currentLoopData = $listnews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stt => $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row news">
                        <img src="img/news/<?php echo e($news->avatar); ?>" alt="">
                        <a href="#"><b><?php echo e($news->tieude); ?></b></a><br>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master-layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>