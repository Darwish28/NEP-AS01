<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
  <h1 class="text-2xl font-bold mb-4">Bahit was Here</h1>

  <?php if(session('status')): ?>
    <div class="mb-3"><?php echo e(session('status')); ?></div>
  <?php endif; ?>

  <a href="<?php echo e(route('posts.create')); ?>" class="underline">New Post</a>

  <ul class="mt-4 space-y-2">
    <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
      <li>
        <a class="underline" href="<?php echo e(route('posts.show', $post)); ?>"><?php echo e($post->title); ?></a>
        — <a class="underline" href="<?php echo e(route('posts.edit', $post)); ?>">Edit</a>
        <form action="<?php echo e(route('posts.destroy', $post)); ?>" method="POST" style="display:inline">
          <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
          <button onclick="return confirm('Delete this post?')">Delete</button>
        </form>
      </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
      <li>No posts yet.</li>
    <?php endif; ?>
  </ul>

  <div class="mt-4"><?php echo e($posts->links()); ?></div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $attributes = $__attributesOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__attributesOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $component = $__componentOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__componentOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>

 <?php /**PATH C:\Users\THIN15\NEP-AS01\resources\views/posts/index.blade.php ENDPATH**/ ?>