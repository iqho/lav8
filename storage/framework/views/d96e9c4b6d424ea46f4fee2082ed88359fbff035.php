 <?php if (isset($component)) { $__componentOriginalc6e081c8432fe1dd6b4e43af4871c93447ee9b23 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\MasterLayout::class, []); ?>
<?php $component->withName('master-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>


<div>
    <p class="text-center p-6">
        <span class="text-4xl">Welcome!</span>
    </p>
<div>
	<table>
	<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($value->id); ?></td>
                <td><?php echo e($value->name); ?></td>
                <td><?php echo e($value->email); ?></td>
            </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
</div>





 <?php if (isset($__componentOriginalc6e081c8432fe1dd6b4e43af4871c93447ee9b23)): ?>
<?php $component = $__componentOriginalc6e081c8432fe1dd6b4e43af4871c93447ee9b23; ?>
<?php unset($__componentOriginalc6e081c8432fe1dd6b4e43af4871c93447ee9b23); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 



<?php /**PATH G:\laragon\www\lav8\resources\views/livewire/home.blade.php ENDPATH**/ ?>