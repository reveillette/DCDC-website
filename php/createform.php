<h5>Create a how-to guide</h5>
<p>As you fill in the information below, the preview panel on the right will update to show you your how-to guide. Not sure how to begin? Review these <a href="getstarted.html">helpful tips</a> to help you get started.</p>

<form action="createform.php" method="post">

	<!-- Color -->
	<div class="form-group">
	  <div class="help"></div>
	  <label class="col-md-4 control-label" for="color" name="color">Select a key color:</label>  
	  <div>
		  <div class="color-block" id="red"></div>
		  <div class="color-block" id="orange"></div>
		  <div class="color-block" id="yellow"></div>
		  <div class="color-block" id="seafoam"></div>
		  <div class="color-block" id="teal"></div>
		  <div class="color-block" id="navy"></div>
	  </div>
	  <span class="help-block">This color will be the primary color of your guide. Icons and text will automatically adjust according to the color you pick.</span>  
	</div>

	<!-- City -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="city" name="city">Guide location (city)</label>  
	  <input id="city" name="city" type="text" placeholder="City" class="form-control input-md">
	  <span class="help-block">Where can this guide be used? If not location specific, feel free to leave blank.</span>  
	</div>

	<!-- State -->
	<div class="form-group">
		<label class="col-md-4 control-label" for="state" name="state">Guide location (state)</label>  
		<select name="state_picked">
			<option value="" selected>None</option>
			<option value="AL">Alabama</option>
			<option value="AK">Alaska</option>
			<option value="AZ">Arizona</option>
			<option value="AR">Arkansas</option>
			<option value="CA">California</option>
			<option value="CO">Colorado</option>
			<option value="CT">Connecticut</option>
			<option value="DE">Delaware</option>
			<option value="FL">Florida</option>
			<option value="GA">Georgia</option>
			<option value="HI">Hawaii</option>
			<option value="ID">Idaho</option>
			<option value="IL">Illinois</option>
			<option value="IN">Indiana</option>
			<option value="IA">Iowa</option>
			<option value="KS">Kansas</option>
			<option value="KY">Kentucky</option>
			<option value="LA">Louisiana</option>
			<option value="ME">Maine</option>
			<option value="MD">Maryland</option>
			<option value="MA">Massachusetts</option>
			<option value="MI">Michigan</option>
			<option value="MN">Minnesota</option>
			<option value="MS">Mississippi</option>
			<option value="MO">Missouri</option>
			<option value="MT">Montana</option>
			<option value="NE">Nebraska</option>
			<option value="NV">Nevada</option>
			<option value="NH">New Hampshire</option>
			<option value="NJ">New Jersey</option>
			<option value="NM">New Mexico</option>
			<option value="NY">New York</option>
			<option value="NC">North Carolina</option>
			<option value="ND">North Dakota</option>
			<option value="OH">Ohio</option>
			<option value="OK">Oklahoma</option>
			<option value="OR">Oregon</option>
			<option value="PA">Pennsylvania</option>
			<option value="RI">Rhode Island</option>
			<option value="SC">South Carolina</option>
			<option value="SD">South Dakota</option>
			<option value="TN">Tennessee</option>
			<option value="TX">Texas</option>
			<option value="UT">Utah</option>
			<option value="VT">Vermont</option>
			<option value="VA">Virginia</option>
			<option value="WA">Washington</option>
			<option value="DC">Washington D.C.</option>
			<option value="WV">West Virginia</option>
			<option value="WI">Wisconsin</option>
			<option value="WY">Wyoming</option>
		</select>
	</div>

	<!-- Title (name of how-to guide) -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="title" name="title">Title of guide</label>  
	  <input id="subtitle" name="subtitle" type="text" placeholder="Prepare a grant proposal" class="form-control input-md" required="" maxlength="40">
	  <span class="help-block">Make sure you select a title that is easy to understand and doesn’t need much definition. Action verbs are great!</span>  
	</div>

	<!-- Textarea -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="description">Description</label>
	  <div class="col-md-4">                     
	    <textarea class="form-control" id="description" name="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringila vel, aliquet nec, eget et vulputate.</textarea>
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="step-one">Step one</label>  
	  <div class="col-md-5">
	  	<input id="step-one" name="step-one" type="text" placeholder="Lorem ipsum dolor sit amet, consectetuer adipiscing elit Ae. " class="form-control input-md" required="">
	  </div>
	</div>
</form>
