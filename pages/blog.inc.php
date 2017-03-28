<h1>This is the blog page!</h1>

<p><a href=".\?page=blog.create" class="btn btn-primary" role="button">Add new blog post</a></p>
	

<?php if(count($blogs) > 0): ?>
	<ul>

<?php foreach ($blogs as $blog) : ?>

	<li><a href=".\?page=blog.post&id=<?= $blog->id ?> "><?= $blog->title ?></a></li>

<?php endforeach; ?>

</ul>

<?php else: ?>

	<p>There are no blog posts</p>

<?php endif; ?>