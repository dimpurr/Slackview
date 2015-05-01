<?php if ( post_password_required() ) { return; } ?>

		<ol class="comment_list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 56,
				) );
			?>
		</ol>


<?php $comments_args = array(
  'id_form'           => 'comment_form',
  'id_submit'         => 'comment_submit',
  'title_reply'       => '',

  'comment_field' =>  '<textarea name="comment" required aria-required="true"></textarea>',

  'comment_notes_before' => '',

  'comment_notes_after' => '',

  'fields' => apply_filters( 'comment_form_default_fields', array(

    'author' =>
      '<div class="comment_form_meta"><input placeholder="'.__('Name','slackview').'" id="author" name="author" type="text" required="required" value="' . esc_attr( $commenter['comment_author'] ) .
      '" />',

    'email' =>
      '<input placeholder="'.__('Mail','slackview').'" id="email" name="email" type="email" required="required" value="' . esc_attr(  $commenter['comment_author_email'] ) .
      '" />',

    'url' =>
      '<input placeholder="'.__('Link','slackview').'" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
      '" /></div>'
    )
  ),
); ?>

<div class="comment_form">
	<?php comment_form($comments_args); ?>
</div>