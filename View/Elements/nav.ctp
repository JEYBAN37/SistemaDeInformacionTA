<ul class="nav nav-tabs">
    <li class="nav-item">
        <a href="#" class="nav-link active">INICIO</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
            aria-expanded="false">Curos de vida</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="../new/primerainfancias/">Registros menores 1 año</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../new/infantils/">Registros 1 a 5 años</a>

    </li>
    <li>
        <?php echo $this->Html->link(('Agregar nuevo registro'), array('controller' => 'sociambientals', 'action' => 'add')); ?>
    </li>



</ul>