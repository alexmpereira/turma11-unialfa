
<?php $__env->startSection('title', 'Nova Serie'); ?>
<?php $__env->startSection('conteudo'); ?>

        <h1>Nova Serie</h1>
        <form action="<?php echo e(route('series.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome" required>
            </div>

            <button class="btn btn-success">Enviar</button>
        </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\turma11-unialfa\julieserpatrick\segundo-projeto\resources\views/series/create.blade.php ENDPATH**/ ?>