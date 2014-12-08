<!DOCTYPE html>
<html lang="en" encoding="utf-8">
<form class="form-signin" method='post' action="{{ URL::route('postpost') }}">
   <input type="text" name="post" class="input-block-level" placeholder="Post">
   <input type="text" name="tag" class="input-block-level" placeholder="Tag">
    <button class="btn btn-primary" type="submit">Post</button>
</form>
</html>