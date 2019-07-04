<div class="row">
              <?php 
                $sql = "SELECT id_blog,titulo_blog, url_imagen_principal FROM blogs";
                $res = $conn->query($sql);

                
              
              ?>
                <div class="owl-carousel">
                    <?php  while($items = $res->fetch_assoc()){ ?>
                            <div class="item">
                                    <div class=" box-blog-show">
                                            <a href="blog.php?<?php echo 'title=blog&id=' . $items['id_blog'] .'&titulo=' . str_replace(' ','-',$items['titulo_blog']) ?>">
                                                <img src="img/blog/<?php echo $items['url_imagen_principal'] ?>" alt="<?php echo $items['titulo_blog'] ?>" class="img-fluid">
                                                <p><?php echo $items['titulo_blog']; ?></p>
                                            </a>
                                    </div>
                            </div>
                        <?php }?>
                   

                  
                </div>
                
            </div>