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
$formatted_date = format_date($node->created, 'custom', ' M j, Y');
?>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

<div>

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
 
 <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Project Summary
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <div>
				<h4><?php print render($formatted_date); ?></h4>
				<h3><?php print render($content['field_project_lead']); ?></h3>
				<?php print render($content['field_project_description']); ?>
			</div>
		</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
          Timeline Considerations
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <?php print render($content['field_timeline_considerations']); ?>
		</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
          Users / Audience
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
			<?php print render($content['field_users_audience']); ?>
		</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
          Success measures
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
			<?php print render($content['field_success_measures']); ?>
		</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFive">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseOne">
          Out of scope
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFive">
      <div class="panel-body">
			<?php print render($content['field_out_of_scope']); ?>
		</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSix">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseOne">
          Risk factors
        </a>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingSix">
      <div class="panel-body">
			<?php print render($content['field_risk_factors']); ?>
		</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSeven">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="true" aria-controls="collapseOne">
          Directive
        </a>
      </h4>
    </div>
    <div id="collapseSeven" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingSeven">
      <div class="panel-body">
			<?php print render($content['field_directive']); ?>
		</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingEight">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="true" aria-controls="collapseOne">
          Any resources needed
        </a>
      </h4>
    </div>
    <div id="collapseEight" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingEight">
      <div class="panel-body">
			<?php print render($content['field_any_resources_needed']); ?>
		</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingNine">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="true" aria-controls="collapseOne">
          Implications of doing
        </a>
      </h4>
    </div>
    <div id="collapseNine" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingNine">
      <div class="panel-body">
			<?php print render($content['field_implications_of_doing']); ?>
		</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTen">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="true" aria-controls="collapseOne">
          Implications of not doing
        </a>
      </h4>
    </div>
    <div id="collapseTen" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTen">
      <div class="panel-body">
			<?php print render($content['field_implications_of_not_doing']); ?>
		</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingEleven">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="true" aria-controls="collapseOne">
          Contribution to OU goals
        </a>
      </h4>
    </div>
    <div id="collapseEleven" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingEleven">
      <div class="panel-body">
			<?php print render($content['field_contribution_to_ou_goals']); ?>
		</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwelve">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="true" aria-controls="collapseOne">
          Contribution to OU Libraries priorities
        </a>
      </h4>
    </div>
    <div id="collapseTwelve" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwelve">
      <div class="panel-body">
			<?php print render($content['field_contribution_priorities']); ?>
		</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThirteen">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="true" aria-controls="collapseOne">
          Contribution to OU Libraries organizational culture
        </a>
      </h4>
    </div>
    <div id="collapseThirteen" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThirteen">
      <div class="panel-body">
			<?php print render($content['field_contribution_to_culture']); ?>
		</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFourteen">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen" aria-expanded="true" aria-controls="collapseOne">
          Review Process
        </a>
      </h4>
    </div>
    <div id="collapseFourteen" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFourteen">
      <div class="panel-body">
			<?php print render($content['field_review_status']); ?>
			<?php print render($content['field_ksnotes']); ?>
		</div>
    </div>
  </div>
  
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
