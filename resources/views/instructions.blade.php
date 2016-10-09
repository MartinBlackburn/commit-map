<div class="instructions">
    <h1 class="instructions__title">Instructions</h1>
    
    <p class="instructions_text">Copy the following to your post-commit hook.</p>
    <pre id="code1" class="instructions__code">#!/bin/sh
curl -d "message=`git log -n 1 HEAD --format=format:%s%n%b`"  http://commitmap.tech/commit/</pre>

    <p class="instructions_text">Don't forget to give the git hook permission to run.</p>
    <pre id="code2" class="instructions__code">chmod +x .git/hooks/post-commit</pre>
</div>