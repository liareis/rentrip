    

<?php $__env->startSection("conteudo-principal"); ?>


    <section class="section">

        <table class="highlight">

            <thead>

                <tr>
                    <th>Cidades</th>
                    <th class="right-align">Opções</th>
                </tr>

            </thead>

            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $cidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cidade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($cidade->nome); ?></td>
                        <td class="right-align">

                        <a href="<?php echo e(route('admin.cidades.formEditar' , $cidade->id)); ?>">
                            
                                <span>
                                    <i class="material-icons green-text text-lighten-1">edit</i>
                                </span>
                            </button>

                            <form action="<?php echo e(route('admin.cidades.deletar', $cidade->id)); ?>" method="POST" style="display:inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>

                                <button style="border:0;background:transparent" type="submit">
                                    <span>
                                        <i class="material-icons red-text text-accent-3">delete_forever</i>
                                    </span>
                                </button>
                            </form>

                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <tr>
                        <td colspan="2">Não existem cidades cadastradas</td>
                    </tr>

                <?php endif; ?>

            </tbody>

        </table>

        <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light" href="<?php echo e(route('admin.cidades.form')); ?>">
                <i class="large material-icons">add</i>
            </a>
        </div>

     
    </section>

<?php $__env->stopSection(); ?>



<?php echo $__env->make("admin.layouts.principal", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\rentrip\resources\views/admin/cidades/index.blade.php ENDPATH**/ ?>