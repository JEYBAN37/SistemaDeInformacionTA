<?php
$enlace_actual = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$auxDsr = strrpos($enlace_actual, 'edit');

?>
<?php
$enlace_actual = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$auxDsr1 = strrpos($enlace_actual, 'editanexo');

?>

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <?php
        if ($auxDsr === false) {
            echo '<a class="navbar-brand" href="../verificaciones/index">Sistema información de Auditoria Salud Publica</a>';
        } else {
            echo '<a class="navbar-brand" href="../../verificaciones/index">Sistema información de Auditoria Salud Publica</a>';
        }

        ?>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <?php
            if ($auxDsr === false) {
                echo '<a href="../verificaciones/index">';
            } else {
                echo '<a href="../../verificaciones/index">';
            } 
            ?>            
                <i> <svg class="bi bi-house-fill" width="25px" height="25px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                    </svg></i>

                <?php
                if ($auxDsr === false) {
                    echo '<i><img src="../img/flechaabajo.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>';
                } else {
                    echo '<i><img src="../../img/flechaabajo.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>';
                }
                ?>

            </a>

            <!-- /.dropdown-messages -->
        </li>
       
        <!-- /.dropdown -->
        <li class="dropdown">
            <a data-toggle="dropdown" href="#">
                <i><svg class="bi bi-toggle-off" width="25px" height="25px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M11 4a4 4 0 0 1 0 8H8a4.992 4.992 0 0 0 2-4 4.992 4.992 0 0 0-2-4h3zm-6 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM0 8a5 5 0 0 0 5 5h6a5 5 0 0 0 0-10H5a5 5 0 0 0-5 5z"></path>
                    </svg></i> <?php
                if ($auxDsr === false) {
                    echo '<i><img src="../img/flechaabajo.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>';
                } else {
                    echo '<i><img src="../../img/flechaabajo.png" alt="Imagen de marcador genérico" width="10px" height="10px"></i>';
                }
                ?> </i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i><?php
                if ($auxDsr === false) {
                    echo '<i><img src="../img/users1.png" alt="Imagen de marcador genérico" width="20px" height="20px"></i> User Profile</a></i>';
                } else {
                    echo '<i><img src="../../img/users1.png" alt="Imagen de marcador genérico" width="20px" height="20px"></i> User Profile</a></i>';
                }
                ?>
                </i>
                    
                </li>
                <li><a href="#"><i><?php
                if ($auxDsr === false) {
                    echo '<i><img src="../img/config.png" alt="Imagen de marcador genérico" width="20px" height="20px"></i> Settings</a></i>';
                } else {
                    echo '<i><img src="../../img/config.png" alt="Imagen de marcador genérico" width="20px" height="20px"></i> Settings</a></i>';
                }
                ?></i>
                    
                
               
                </li>
                <li class="divider"></li>
                <li><a href="login.html"><i></i> <?= $usr = $this->Session->read("usr");
                                                    echo $this->Html->link("Cerrar Sesión", "/users/salir", array());
                                                    ?> </a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>

</nav>

