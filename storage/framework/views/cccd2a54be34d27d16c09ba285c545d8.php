<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="RenTrip" content="ie=edge">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

 <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


    <title>RenTrip</title>
</head>
<body>


<nav class="#80cbc4 teal lighten-3">
    <div class="container">
        <div class="nav-wrapper"></div>
            <a href="/" class="brand-logo">RenTrip</a>

            <ul class="right">

                <li>
                    <a href="<?php echo e(route('admin.imoveis.index')); ?>">Hotéis</a>
                </li>

                <li>
                    <a href="<?php echo e(route('admin.imoveis.index')); ?>">Cidades</a>
                </li>

            </ul>

    </div>
</nav>



<div class="container">
    <?php echo $__env->yieldContent("conteudo-principal"); ?>
</div>

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
  
    <?php if(session("sucesso")): ?>

        M.toast ({html: "<?php echo e(session ("sucesso")); ?>"});
        
    <?php endif; ?>
</script>


</body>
</html>
<?php /**PATH C:\laragon\www\rentrip\resources\views/admin/layouts/principal.blade.php ENDPATH**/ ?>