<h2><?php eh($thread->title) ?></h2>

<p class="alert alert-success">
    You successfully created.
</p>

<a href="/">&larr; Go to main</a>
<a href="<?php eh(url('thread/view', array('thread_id' => $thread->id))) ?>">
    Go to thread &rarr;
</a>