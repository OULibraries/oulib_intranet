<?php

/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

<div>
<h1><?php print render($content['field_bi_date']); ?></h1>
  <div class="row content-border">
	<div class="col-md-12">
		<h2>Library Instructor</h2>	
			<div>
				<?php print render($content['field_instructor']); ?>
				<?php print render($content['field_department']); ?>
			</div>
	</div>
  </div>
   <div class="row content-border">
	<div class="col-md-12">
		<h2>Course Details</h2>	
			<div>
				<?php print render($content['field_course_instructor']); ?>
				<?php print render($content['field_course_instructor_s_email']); ?>
				<?php print render($content['field_course_number']); ?>
				<?php print render($content['field_department_code']); ?>
				<?php print render($content['field_interaction_type']); ?>
			</div>
	</div>
  </div>
  <div class="row content-border">
		<div class="col-md-12">
			<h2>Participants</h2>	
		</div>
	
		<div class="col-md-3">
			<table border="0" cellspacing="0" class="time-table">
				<tr>
					<td class="border-bottom" ><b>Undergraduates</b></td>
					<td class="border-bottom time-number"><?php print render($content['field_undergraduates']); ?></td>
				</tr>
				<tr>
					<td class="border-bottom"><b>Graduates</b></td>
					<td class="border-bottom time-number"><?php print render($content['field_graduates']); ?></td>
				</tr>
				<tr>
					<td class="border-bottom"><b>OU Faculty</b></td>
					<td class="border-bottom time-number"><?php print render($content['field_faculty']); ?></td>
				</tr>
			</table>
		</div>
		<div class="col-md-3">
			<table border="0" cellspacing="0" class="time-table">
				<tr>
					<td class="border-bottom"><b>OU Staff</b></td>
					<td class="border-bottom time-number"><?php print render($content['field_staff']); ?></td>
				</tr>
				<tr>
					<td class="border-bottom"><b>OU Alumni</b></td>
					<td class="border-bottom time-number"><?php print render($content['field_alumni']); ?></td>
				</tr>
				<tr>
					<td class="border-bottom"><b>High School Students</b></td>
					<td class="border-bottom time-number"><?php print render($content['field_high_school']); ?></td>
				</tr>
			</table>
		</div>
		<div class="col-md-3">
			<table border="0" cellspacing="0" class="time-table">
				<tr>
					<td class="border-bottom"><b>High School Teachers</b></td>
					<td class="border-bottom time-number"><?php print render($content['field_high_school_teachers']); ?></td>
				</tr>
				<tr>
					<td class="border-bottom"><b>UL Personnel</b></td>
					<td class="border-bottom time-number"><?php print render($content['field_ul_personnel']); ?></td>
				</tr>
				<tr>
					<td class="border-bottom"><b>Other Participants</b></td>
					<td class="border-bottom time-number"><?php print render($content['field_other_participants']); ?></td>
				</tr>
			</table>
		</div>
		<div class="col-md-3">
			<table border="0" cellspacing="0" class="time-table">
				<tr>
					<td class="total-background"><h3>Total</h3></td>
					<td class="total-background time-number"><h3><?php print render($content['field_total_participants']); ?></h3></td>
				</tr>				
			</table>
		</div>
	</div>
	
	<div class="row content-border">
    
		<div class="col-md-12">
			<h2>Time Spent</h2>	
		</div>
	
		<div class="col-md-3">
			<table border="0" cellspacing="0" class="time-table">
				<tr>
					<td class="border-bottom"><b>Preparing for your session</b></td>
					<td class="border-bottom time-number"><?php print render($content['field_preparing']); ?></td>
				</tr>
			</table>
		</div>
		<div class="col-md-3">
			<table border="0" cellspacing="0" class="time-table">
				<tr>
					<td class="border-bottom"><b>In your session</b></td>
					<td class="border-bottom time-number"><?php print render($content['field_in_session']); ?></td>
				</tr>
			</table>
		</div>
		<div class="col-md-3">
			<table border="0" cellspacing="0" class="time-table">
				<tr>
					<td class="border-bottom"><b>Following up</b></td>
					<td class="border-bottom time-number"><?php print render($content['field_followup']); ?></td>
				</tr>
			</table>
		</div>
		<div class="col-md-3">
			<table border="0" cellspacing="0" class="time-table">
				<tr>
					<td class="total-background"><h3>Total</h3></td>
					<td class="total-background time-number"><h3><?php print render($content['field_total_preparation']); ?></h3></td>
				</tr>				
			</table>
		</div>
	</div>
	<div class="row content-border">
	<div class="col-md-12">
		<h2>Session Details</h2>	
			<div>
				<?php print render($content['field_session_location']); ?>
				<?php print render($content['field_other']); ?>
				<?php print render($content['field_assessment_tool']); ?><br />
				<?php print render($content['field_online_teaching']); ?><br />
				<?php print render($content['field_file_teaching']); ?>
			</div>
	</div>
	</div>
	<div class="row content-border">
	<div class="col-md-12">
		<h2>Notes</h2>	
			<div>
				<?php print render($content['field_notes']); ?>
			</div>
	</div>
	</div>
	<div class="col-md-9"> 
		
		<h1><?php print render($content['field_event_date']); ?></h1>
		<div class="bg-info"><p><?php print render($content['field_category']); ?></p></div>
		<p><?php print render($content['body']); ?></p>
		<p><?php print render($content['field_event_url']); ?></p>
		
	</div>
  </div>
 </div>
  


  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</div>
