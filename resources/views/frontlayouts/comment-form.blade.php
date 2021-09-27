<section id="meta-2" class="widget widget_meta">
<h4 class="widget-title">Comments</h4>
<div id="comments" class="comments-area">
        <div id="respond" class="comment-respond">
            <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">Cancel reply</a></small></h3>
            @include('layouts.messages')
            <form action="/comment" method="get" class="comment-form">
                @csrf
                <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                <p class="comment-form-comment"><label for="comment">Comment</label> <textarea type="text" id="comment" name="comment" cols="45" rows="4" maxlength="65525" required="required"></textarea></p>
                <p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="name" name="name" type="text" value="" size="30" maxlength="245" required='required' /></p>
                <p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" required='required' /></p>
                <p class="comment-form-url"><label for="url">District</label> <input id="location" name="location" type="text" value="" size="30" maxlength="200" /></p>
                <div class="g-recaptcha" data-sitekey="6Lc8gZMcAAAAABcefJ5EQXuZN7Y_EvFdlkpG4JSA"></div>
                <br/>
                <p class="form-submit"><button type="submit" id="submit" class="submit" value="Post Comment">Post Comment</button>
                </p>
            </form>
        </div>
        <!-- #respond -->
    </div>
</section>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
</script>
{{--<script type="text/javascript">
  var onloadCallback = function() {
    alert("grecaptcha is ready!");
  };
</script>--}}