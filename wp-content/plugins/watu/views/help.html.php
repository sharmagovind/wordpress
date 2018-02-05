<div class="wrap">
	<h1><?php _e('Watu - Help and Support', 'watu');?></h1>
	
	<div class="postbox-container" style="width:65%;margin-right:2%;">
		<h2><?php _e('Creating Quizzes', 'watu');?></h2>
		
		<p><?php _e('Go to Watu Quizzes and click on "Create new quiz". Each quiz has title, description and various settings. The quiz also consists of questions and grades / results.', 'watu');?><br>
		<?php _e('Questions are mandatory - you cannot have a quiz without at least one question. Grades are optional - for example if you want to use quizzes as surveys you might not need grades. But the regular quizzes will have grades because this is the whole purpose of a quiz - to calculate a result based on the collected points.', 'watu');?><br>
		<?php _e('Make sure to calculate how many points the user could collect if they answer all questions correctly or all wrong so your grades cover both edges of min/max collected points.', 'watu');?></p>
		
		<h2><?php _e('Frequently Asked Questions', 'watu');?></h2>
		
		<p><?php printf(__('Please check them <a href="%s" target="_blank">online</a>.', 'watu'), 'https://wordpress.org/plugins/watu/faq/');?></p>
		
		<h2><?php _e('Shortcodes', 'watu');?></h2>
		<p><?php _e('Watu uses a shortcode to publish quizzes inside a post, page or any other area of your site. There are some other useful shortcodes too:', 'watu');?>
		
		<p><b>[watu-basic-chart]</b> <?php _e('Displays chart from answers on a given quiz. More details on the Edit Quiz page.', 'watu');?></p>
		<p><b>[watu-takings]</b> <?php _e('Displays the table of results on a quiz. Get the specific shortcode for each quiz from its "View results" page.', 'watu');?></p>
		<p><b>[watu-userinfo]</b> <?php printf(__('Lets you display profile fields from logged in users profile. <a href="%s" target="_blank">Click here</a> for more details and examples.', 'watu'), 'http://blog.calendarscripts.info/user-info-shortcodes-from-watupro-version-4-1-1/');?></p>
		
		<h2><?php _e('Requesting Help', 'watu');?></h2>
		
		<p><b><?php printf(__('When opening a <a href="%s" target="_blank">support thread</a> please provide URL (link) where we can see your problem.', 'watu'), 'https://wordpress.org/support/plugin/watu');?></b></p>
		
		<h2><?php _e('PRO Inquiries', 'watu');?></h2>
		
		<p><?php printf(__('If you have pre-sales or support questions about WatuPRO please send them using the contact details on the <a href="%s" target="_blank">official WatuPRO site</a>. Do not use the wordpress.org forum for this - it allows only free plugin discussions.', 'watu'), 'http://calendarscripts.info/watupro/support.html');?></p>
		
		<h2><?php _e('MailChimp Integration', 'watu');?></h2>
		
		<p><?php printf(__('You can integrate your quizzes with MailChimp so when someone completes a chosen quiz with a given result, they can be subscribed in a mailing list. You will need <a href="%s" target="_blank">this free bridge</a> to do that.', 'watu'), 'https://wordpress.org/plugins/watu-bridge-to-mailchimp/');?></p>
	</div>	
	<div id="watu-sidebar">
			<?php include(WATU_PATH."/views/sidebar.php");?>
	</div>
</div>