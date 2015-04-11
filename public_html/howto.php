<?php require_once("../resources/db_connection.php"); ?>
<?php require_once("../resources/functions.php"); ?>

<!--Header-->
<?php include("../resources/layouts/header.php"); ?>

<!-- Navigation buttons -->
<div class="fixed-left-container">
	<div class="fixed-left" id="backtop">
	    <span class="glyphicon glyphicon-fast-backward"></span>
	    <h3 class="hidden">Back to top</h3>
	</div>
	<div class="fixed-left" id="prev">
	    <span class="glyphicon glyphicon-backward"></span>
	    <h3 class="hidden">Previous</h3>
	</div>
	<div class="fixed-left" id="next">
	    <span class="glyphicon glyphicon-forward"></span>
	    <h3 class="hidden">Next</h3>
	</div>
</div>

<div class="container-fluid" id="howto">
	<div class="page-header">
		<h1>How this works</h1>
	</div>

	<section id="start" class="half">
		<p class="lead">This website is an online library and printshop where anybody can access simple and thoughtful guides to building stronger communities, lives, and connections between people. We made this site in order to create a place for anybody to view and share guides, and to contribute their own knowledge by using our guide builder. Even better, it's all completely free to access and use. Find out more: </p>
		<br/>
		<ul class="biglist" id="contents">
			<li><a href="#page01">How to use this site</a></li>
			<li><a href="#page02">FAQ</a></li>
			<li><a href="#page03">Making your first how-to guide</a></li>
			<li><a href="#page04">Good guide tour</a></li>
			<li><a href="#page05">Tips for taking real action</a></li>
		</ol>
	</section>

	<section id="page01" class="color-bar red">
		<div class="image-bar" style="background: url('img/kids.jpg') no-repeat center; background-size: 100% auto"></div>
		<div class="half rounded white-bg">
			<h3>How to use this site.<br/><small>This website has three parts.</small></h3>
			<br/>
			<div class="row centered">
			    <div class="col-sm-4">
			    	<a class="no-underline" href="library.php">
						<img class="icon" src="img/icons/shrub.svg">
						<h6>1. Learn</h6>
					</a>
					<p>Learn about how you can better engage with your community by browsing through our extensive library.</p>
				</div> 
				<div class="col-sm-4">
			        <a class="no-underline" href="library.php">
						<img class="icon" src="img/icons/lightbulb.svg">
						<h6>2. Share</h6>
			        </a>
					<p>Anyone can download or share the guides in the library. All it takes is your name and email address. </p>
				</div>     			   
				<div class="col-sm-4">
			        <a class="no-underline" href="create.php">
						<img class="icon" src="img/icons/wand.svg">
						<h6>3. Create</h6>
			        </a>
					<p>Create your own how-to guide on the create page, then publish it to web or download it as a PDF to print.</p>
				</div>     			   
			</div>
		</div>
	</section>
	
	<section id="page02" class="color-bar orange">
		<div class="half rounded white-bg">
			<h3>Frequently asked questions.<br/><small>(What's this all for, anyway?)</small></h3>
	        <ol class="biglist reveal">
	            <li>Who started this project?</li>
	            <p class="answer">This project began at the Detroit Collaborative Design Center as a set of printed guides designed by Ceara O'Leary during her Enterprise Rose Fellowship at DCDC. The guides were a big hit, so Ceara had the idea to create an interactive website so that others could create and share guides for their communities. That idea became this website, which was designed and built by Andrea Hansen and Patrick Stowe Jones, and generously funded by Enterprise Community Partners and the Surna Foundation.</p>

	            <li>Are these guides copyright protected?</li>
	            <p class="answer">All of the content on this site, including the guides, is protected by the MIT Open Source License. The following copyright notice is included on each guide, and may not be removed or altered:<br/><br/>

				Produced by (author name). 
				<br/>
				Copyright &copy;<?php echo date('Y'); ?> Enterprise Community Partners and the Detroit Collaborative Design Center.
				<br/>
				<br/>
				Permission is hereby granted, free of charge, to any person obtaining a copy of this content and associated  files, to deal in without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the content, and to permit persons to whom the content is furnished to do so, subject to the following conditions:
				<br/>
				<br/>
				THE CONTENT IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE CONTENT OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
				<br/>
				<br/>
				</p>

				<li>Do the guides have to be related to social impact?</li>
	            <p class="answer">No! We welcome how-to guides of all kinds. For instance, you might want to make a guide related to design, transportation, education, advocacy, public space, etc. They can be as general or specific as you like, but should have something to do with community building. When in doubt, you can <a href="contact.php">contact us.</a></p>

	            <li>Can I upload my own guide?</li>
	            <p class="answer">Yes! If you'd like to upload your own guide, use our <a href="create.php">creation tool.</a> After your guide is complete and you have published it, it will automatically be added to the library with the tags you've selected—unless you elected to keep it private.<br/><br/>If you prefer, we also have Adobe InDesign <a href="template.indd">templates</a> available (right click link to download). The guides created with these templates cannot be uploaded to the library at this time, so we recommend using our creation tool for easy shareability.</p>

	            <li>Do you approve guides before they show up in the library?</li>
	            <p class="answer">We don't. We rely on our users to be responsible citizens and upload quality content only. However, we do periodically review the guides uploaded by our community, and reserve the right to remove any inappropriate material.</p>

	            <li>Why do I need to register in order to download guides?</li>
	            <p class="answer">In exchange for allowing you to use and share our content, we'd like to get just a little bit of information from you. To download and share guides, you don't need to register, but we would like to get your name, email address, and zip code. We promise we will NEVER sell your information&mdash;it's just for us to keep tabs on how the guides are being used!</p>
	        </ol>
		</div>
	</section>

	<section id="page03" class="color-bar seafoam">
		<div id="03" class="half rounded white-bg">
			<h3>Making your first guide.<br/><small>Some things to think about before you get started.</small></h3>
			<br/>
			<div class="row">
				<div class="row">
					<div class="col-md-3">
						<img class="icon" src="img/icons/chair.svg">
					</div>
					<div class="col-md-9">
						<p><strong>Think about your objectives. </strong>Having clear intentions about what you want the guide to accomplish will help you make decisions about content along the way. Think about whether you may actually need <em>more than one guide</em> to explain a complex issue. <a href="" onclick="return false;" class="reveal more"></a></p>
						<ul class="answer">
							<li><strong>Demystify a process</strong> and make it more transparent and easy to understand?</li>
							<li><strong>Answer frequently asked questions</strong> that your organization receives around a specific topic?</li>
							<li><strong>Share information</strong> about a new initiative or program and encourage participation?</li>
						</ul>
						</p>
					</div>
				</div>
				<br/>
				<br/>
				<div class="row">
					<div class="col-sm-3">
						<img class="icon" src="img/icons/notepad.svg">
					</div>
					<div class="col-sm-9">
						<p><strong>Prepare your content beforehand. </strong>You can always log back in later to access a guide in process, but it also helps to start with the right information. <a href="" onclick="return false;" class="reveal more"></a></p>
						<ul class="answer">
							<li><strong>What actions</strong> do you want your guide to help accomplish?</li>
							<li>How can you break up those actions into a series of <strong>small steps</strong>?</li>
							<li><strong>Who</strong> does your guide serve? Does the audience have any special needs (e.g. language, disabilities)? Consider the education level of who your guide is trying to reach, and target your language to those individuals.</li>
							<li>What <strong>resources</strong> can you list on your guide, so that readers can find out more information?</li>
							<li>Do you need any <strong>visuals?</strong> Icons, photos, charts or graphs can help get your point across quickly, can help make sense of complex information, and can improve accessibility.</li>
						</ul>
					</div>
				</div>				
				<br/>
				<br/>
				<div class="row">
					<div class="col-sm-3">
						<img class="icon" src="img/icons/shirt.svg">
					</div>
					<div class="col-sm-9">
						<p><strong>Get the right people involved. </strong>Your guide might need input from a variety of people ranging from community members to city officials. Make sure you reach out to people who can help make sure that information in the guide is accurate and easy to use. You should definitely have a test audience review the guide before it is finalized.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="page04" class="color-bar blue">
		<div id="04" class="half rounded white-bg">
			<h3>Good guide tour!</h3>
			<p>In this section, we'll use one of the first guides we ever made to demonstrate the features of a how-to guide, as well as to offer some suggestions on what takes a guide from good to great. To use this section, hover over the stars <span class="simptip-position-right simptip-fade simptip-smooth simptip-multiline" data-tooltip="Hover me!"><span class="glyphicon glyphicon-star"></span></span> to learn more!</p>
			<br/>
			<div class="row">
				<div class="col-md-6">
					<div class="tourpoints">
						<span id="tour1" class="simptip-position-top simptip-fade simptip-smooth simptip-multiline" data-tooltip="1. Title. A good title should be short and to the point. Use action verbs and avoid obscure vocabulary, unless your guide is specifically targeted to an audience that knows what you are referencing."><span class="glyphicon glyphicon-star"></span></span>
						<span id="tour2" class="simptip-position-top simptip-fade simptip-smooth simptip-multiline" data-tooltip="2. Description. What will the user learn from the guide? Who benefits from this guide, and how is it useful? Are there any important terms you need to define upfront? Try to keep the description short and to the point (the rest of the guide can provide more detail)."><span class="glyphicon glyphicon-star"></span></span>
						<span id="tour3" class="simptip-position-top simptip-fade simptip-smooth simptip-multiline" data-tooltip="3. Key Image. A good key image describes your guide's intentions instantly. Good graphics should show, not tell: use arrows and symbols to explain your process. Sometimes a photo, chart, or graph can suffice, but make sure that what is happening in the image is easily recognizable."><span class="glyphicon glyphicon-star"></span></span>
						<span id="tour4" class="simptip-position-top simptip-fade simptip-smooth simptip-multiline" data-tooltip="4. Steps. Take a moment to break down your overall goal into bite-sized steps. Rather than multi-step tasks, these steps should be simple to understand and easy to accomplish in a reasonable amount of time. If you find yourself with more steps than fit on the first page, you might reconsider your overall intention—-should this be split into multiple guides?"><span class="glyphicon glyphicon-star"></span></span>
					</div>
					<div class="guidebox">
						<img class="img-responsive" src="img/howtofull1.png">
					</div>
				</div>
				<div class="col-md-6">
					<div class="tourpoints">
						<span id="tour5" class="simptip-position-top simptip-fade simptip-smooth simptip-multiline" data-tooltip="5. Sections. In the create feature on this website, you will be able to create custom sections for content such as FAQ's, references, glossaries, resources, or more information. Your guide can be up to four pages in length. (These are meant to be quick reference guides——any longer, and they lose their effectiveness!)"><span class="glyphicon glyphicon-star"></span></span>
						<span id="tour6" class="simptip-position-top simptip-fade simptip-smooth simptip-multiline" data-tooltip="6. Custom content. Think about what additional information you want to provide to community members. How is it best presented? In general, try to keep large chunks of text to a minimum. The create feature on this site allows you to select different kinds of pre-formatted content blocks to maximize legibility, but you also have the option to create custom content blocks."><span class="glyphicon glyphicon-star"></span></span>
						<span id="tour7" class="simptip-position-top simptip-fade simptip-smooth simptip-multiline" data-tooltip="7. Credits. Who contributed to this guide? Try to provide as much contact information as possible in the credit line, so that community members know who to get in touch with for more information."><span class="glyphicon glyphicon-star"></span></span>
					</div>
					<div class="guidebox">
						<img class="img-responsive" src="img/howtofull2.png">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="page05" class="color-bar navy">
		<div id="05" class="half rounded white-bg">
			<h3>Tips for taking real action.<br/><small>(A few more tips while you're working through your guide)</small></h3>
			<br/>
			<br/>
			<div class="row centered">
				<div class="col-md-4">
					<img class="icon" src="img/icons/shrub.svg">
					<br/>
					<h6>Build capacity</h6>
					<p>As the saying goes, "Give a man a fish and you feed him for a day; teach a man to fish and you feed him for a lifetime. Likewise, good how-to guides are all about building capacity: teach people how to take on challenges and pursue opportunities for themselves.</p>
				</div>
				<div class="col-md-4">
					<img class="icon" src="img/icons/headphones.svg">
					<br/>
					<h6>Do what you know</h6>
					<p>Do one thing, not a million things. How-to guides together form a library, so focus on what you know really well in order to contribute a unique piece.</p>
				</div>
				<div class="col-md-4">
					<img class="icon" src="img/icons/handbag.svg">
					<br/>
					<h6>Make it accessible.</h6>
					<p>Always consider your audience. You're speaking to a community, and they're probably not policy wonks and activists, but rather residents and visitors, parents and kids, professionals and community leaders.</p>
				</div>
			</div>
		</div>
	</section>

	<section id="page06" class="color-bar">
		<div class="image-bar" style="background: url('img/detroit.jpg') no-repeat center; background-size: 100% auto"></div>		
		<div id="06" class="half rounded white-bg centered">
			<h3>That's it! Now get started.</h3>
			<p class="lead">Ready to make your own guides and share them with your community? It just takes a minute to get registered, and then you'll be on your way to helping shape your community, step by step.</p>
	        <br/>
	        <br/>
	        <div>
	        	<button class="btn btn-lg btn-primary" id="register-button">Sign up</button>
	        </div>	    
		</div>
	</section>
</div>

<!--Footer-->
<?php include("../resources/layouts/footer.php"); ?>

