

<?php $__env->startSection('cabecalho'); ?>
Series
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
<a href="#" class="btn btn-dark nb-2">Adicionar</a>

<ul class="list-group">
<?php $__currentLoopData = $series; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $series): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li class="list-group-item d-flex justify-content-between align-items-center">
    <?php echo e($series->nome); ?>

</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\turma11-unialfa\julieserpatrick\segundo-projeto\resources\views/series/index.blade.php ENDPATH**/ ?>