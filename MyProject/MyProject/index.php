<?php
    include './includes/common.php';
    if(isset($_SESSION['email'])){
        header("location:home.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './includes/links.php'; ?>
    <title>Welcome | Mobile Shoppee</title>
</head>
<body>
    <!-- Header -->
        <?php
            include './includes/header.php';
        ?>
    <!-- Header End -->

    <!-- Main -->
        <div class="content">
            <div class="container-fluid">
                <!-- Row 1 -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 1</div>
                            <div class="panel-body"><img src="./img/one-plus-7T.jpg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">One Plus 7T</h4>
                                <p>Battery : 3800mAH</p>
                                <p>Camera : 48MP +8MP + 16MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM:128GB</p>
                                <p class="p-bold">Price : 35,999/-</p>
                               <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 2</div>
                            <div class="panel-body"><img src="./img/one-plus-7T-pro.jpg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">One Plus 7T Pro</h4>
                                <p>Battery : 4085mAH</p>
                                <p>Camera : 48MP +8MP + 16MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM:128GB</p>
                                <p class="p-bold">Price : 47,999/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 3</div>
                            <div class="panel-body"><img src="./img/mi-note-8.jpg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Redmi note 8</h4>
                                <p>Battery : 4000mAH</p>
                                <p>Camera : 48MP + 13MP + 8MP | 20MP Front Camera</p>
                                <p>RAM : 6GB ROM:64GB</p>
                                <p class="p-bold">Price : 9,999/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 4</div>
                            <div class="panel-body"><img src="./img/samsung-galaxy-a51.jpeg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Samsung Galaxy A51</h4>
                                <p>Battery : 4200mAH</p>
                                <p>Camera : 12MP + 8MP | 20MP Front Camera</p>
                                <p>RAM : 6GB ROM:128GB</p>
                                <p class="p-bold">Price : 25,250/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 5</div>
                            <div class="panel-body"><img src="./img/samsung-galaxy-s-9.jpeg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Samsung Galaxy S9</h4>
                                <p>Battery : 4200mAH</p>
                                <p>Camera : 24MP + 8MP | 20MP Front Camera</p>
                                <p>RAM : 6GB ROM:128GB</p>
                                <p class="p-bold">Price : 30,999/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 6</div>
                            <div class="panel-body"><img src="./img/samsung-galaxy-s10.jpeg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Samsung Galaxy S10 Plus</h4>
                                <p>Battery : 4000mAH</p>
                                <p>Camera : 48MP + 13MP + 8MP | 20MP Front Camera
                                <p>RAM : 12GB ROM:1024GB</p>
                                <p class="p-bold">Price : 1,29,999/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 7</div>
                            <div class="panel-body"><img src="./img/samsung-galaxy-s20-ultra.jpeg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Samsung Galaxy S20 Ultra</h4>
                                <p>Battery : 4000mAH</p>
                                <p>Camera : 48MP + 13MP + 8MP | 20MP Front Camera
                                <p>RAM : 12GB ROM:128GB</p>
                                <p class="p-bold">Price : 97,999/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 8</div>
                            <div class="panel-body"><img src="./img/mi-redmi-k20-pro.jpeg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Redmi k20 pro</h4>
                                <p>Battery : 4000mAH</p>
                                <p>Camera : 48MP + 13MP + 8MP | 20MP Front Camera
                                <p>RAM : 8GB ROM:128GB</p>
                                <p class="p-bold">Price : 29,999/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 9</div>
                            <div class="panel-body"><img src="./img/samsung-galaxy-m311.jpg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Samsung Galaxy M31</h4>
                                <p>Battery : 6000mAH</p>
                                <p>Camera : 64MP  | 16MP Front Camera
                                <p>RAM : 8GB ROM: 128GB</p>
                                <p class="p-bold">Price : 19,999/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 10</div>
                            <div class="panel-body"><img src="./img/iphone-7.jpg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">iPhone 7</h4>
                                <p>Battery : 3400mAH</p>
                                <p>Camera : 12MP  | 16MP Front Camera
                                <p>RAM : 8GB ROM: 256GB</p>
                                <p class="p-bold">Price : 29,999/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 11</div>
                            <div class="panel-body"><img src="./img/iphone-8.jpg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">iPhone 8</h4>
                                <p>Battery : 3400mAH</p>
                                <p>Camera : 20MP  | 16MP Front Camera
                                <p>RAM : 8GB ROM: 128GB</p>
                                <p class="p-bold">Price : 41,999/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 12</div>
                            <div class="panel-body"><img src="./img/iphone-xr.jpg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">iPhone XR</h4>
                                <p>Battery : 4085mAH</p>
                                <p>Camera : : 16MP + 20MP | 16MP Front Camera
                                <p>RAM : 8GB ROM: 256GB</p>
                                <p class="p-bold">Price : 53,999/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Main End -->

    <!-- Footer -->
    <?php
        include './includes/footer.php';
    ?>
    <!-- Footer End -->
</body>
</html>