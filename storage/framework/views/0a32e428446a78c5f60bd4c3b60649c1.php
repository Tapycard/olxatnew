<?php if($xPanel->hasAccess('delete')): ?>
	<a href="<?php echo e(url($xPanel->route.'/'.$entry->getKey())); ?>" class="btn btn-xs btn-danger" data-button-type="delete">
		<i class="far fa-trash-alt"></i> <?php echo e(trans('admin.delete')); ?>

	</a>
<?php endif; ?><?php /**PATH D:\xampp\htdocs\olxatnew\resources\views/admin/panel/buttons/delete.blade.php ENDPATH**/ ?>