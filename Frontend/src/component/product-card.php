<div class="col"> 
    <div class="card product-card-custom shadow-sm h-100">
        <div class="card-img-top-container">
            <img src="<?php echo $hinh_anh; ?>" class="card-img-top img-fluid" alt="<?php echo $tieu_de; ?>">
        </div>

        <div class="card-body">
            <h5 class="card-title product-title"><?php echo $tieu_de; ?></h5>
            
            <div class="d-flex justify-content-between align-items-center mt-1">
                <div class="price-container">
                    <p class="current-price mb-0">
                        <?php echo number_format($gia_tien, 0, ',', '.'); ?>₫
                    </p>
                    
                    <p class="location-info text-muted mb-0 mt-1">
                        <i class="bi bi-geo-alt-fill"></i> <?php echo $dia_chi; ?>
                    </p>
                    
                    <a href="detail.php?id=<?php echo $id_phong; ?>" class="details">
                        <?php echo $loai_phong; ?>
                    </a> 
                </div>
                
                <button class="btn btn-add-to-favourite" type="button">
                    <i class="bi bi-heart"></i>
                </button>
            </div>
        </div>
    </div>
</div>