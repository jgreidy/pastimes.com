
				<h1 class="h1">Contact Us</h1>
		<p> We welcome your comments and questions! Please feel free to contact us at any time using the form below
		 or call us during business hours at (607)-277-3457.</p>

		<form method="post" action="{{ site.baseurl }}/assets/php/sendetail.php">
{% raw %}
		<?php
		$ipi = getenv("REMOTE_ADDR");
		$httprefi = getenv ("HTTP_REFERER");
		$httpagenti = getenv ("HTTP_USER_AGENT");
		?>
{% endraw %}
		<p>
		<input type="hidden" name="ip" value="<?php echo $ipi ?>" />
		<input type="hidden" name="httpref" value="<?php echo $httprefi ?>" />
		<input type="hidden" name="httpagent" value="<?php echo $httpagenti ?>" />
		</p>

		<p>
		Your Name:
		<br />
		<input type="text" name="visitor" size="35" />
		<br />

		Your Email:
		<br />
		<input type="text" name="visitormail" size="35" />
		<br /><br />

		Subject:
		<br />
		<select name="subj" size="1">
		<option value=" Requesting an Item ">Requesting an Item </option>
		<option value=" Selling an Item ">Selling an Item </option>
		<option value=" Questions/Comments ">Questions/Comments </option>
		<option value=" Other ">Other </option>
		</select>
		<br /><br />

		E-Mail Message:
		<br />
		<textarea name="notes" rows="4" cols="40"></textarea>
		<br /></p>

		<div id="submit">
		<p><input type="submit" value="Send Mail" />
		<br /></p>
		</div>
		</form>

<!-- PHP assistance from http://www.ibdhost.com-->

		<div>
		<p id="disclaimer">Form sends e-mail to mail@pastimes.com
		<br />
		If you choose to provide us with personal information, either by E-mail or by filling out a
		form and submitting it to us through the Web site, this information will not be released,
		disclosed, sold, or transferred to any outside source unless required for law enforcement or by statute.</p>
		</div>
