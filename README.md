# wp-widgetify
The Widgetify WordPress Plugin is a collection of WordPress widgets designed to help web designers build sections of their web page easily via widgets.

## NPM
You can install directly via NPM to your project folder.
```
npm install wp-widgetify
``` 

### Usage
Once installed, log into your WordPress admin dashboard and head over to the **Widgets** section of your Widgetify theme. You should see all the available widgets for your usage. The following are a list of the standard widgetify widgets available for your use and their functions:
<ul>
  <li>
    <strong>Widgetify Banner</strong><br/>
    The banner helps you create a banner with a background picture that cuts across the full width of the screen.
  </li><br/>
  <li>
    <strong>Widgetify Blog Group</strong><br/>
    The blog group helps you create a blog group in two variants (portrait & landscape).
  </li><br/>
  <li>
    <strong>Widgetify Contact Form</strong><br/>
    The contact form helps you create a basic contact form that submits to an email.
  </li><br/>
  <li>
    <strong>Widgetify Content Box</strong><br/>
    The content box helps you create a content area with title, text and associated image.
  </li><br/>
  <li>
    <strong>Widgetify Gallery</strong><br/>
    The gallery helps you create a collection of pictures with a slideshow to help the user browse through.
  </li><br/>
  <li>
    <strong>Widgetify Google Map</strong><br/>
    The google map helps you add the classic google map into your website easily by specifying an address.
  </li><br/>
  <li>
    <strong>Widgetify HTML Container</strong><br/>
    To HTML container helps you add raw HTML code into your page by adding its widget to your page.
  </li><br/>
  <li>
    <strong>Widgetify Icon Group</strong><br/>
    The icon group helps you add a set of (font-awesome, themify) icon columns into your page.
  </li><br/>
  <li>
    <strong>Widgetify Icon Metro</strong><br/>
    The icon metro helps you add a set of icons belonging to the same category using a metro effect.
  </li><br/>
            		<div class="col">
            			<h3>widgetify-photo-canvas</h3>
            			<p>The photo canvas helps you add a group of pictures with equal heights all joined together like boxes.</p>
            		</div>
            		<div class="col">
            			<h3>widgetify-post-combo</h3>
            			<p>The post combo helps you add a post combo in a box-like format that contains equal height on both sides.</p>
            		</div>
            		<div class="col">
            			<h3>widgetify-post-group</h3>
            			<p>The post group helps you add a group of posts belonging to a category to your web page.</p>
            		</div>
            	</div>
				<div class="feature-section four-col">
            		<div class="col">
            			<h3>widgetify-post-metro</h3>
            			<p>The post metro helps you add a metro effect to a post group. Just simply add widget and specify category and you're good.</p>
            		</div>
            		<div class="col">
            			<h3>widgetify-slider</h3>
            			<p>The slider helps you add a full screen slider to the top part of your page. It is very handy and efficient for a slider.</p>
            		</div>
            		<div class="col">
            			<h3>widgetify-social-media</h3>
            			<p>The social media widget helps you add a social media sticker (facebook, twitter, instagram...) to your web page.</p>
            		</div>
</ul>

### Hooks/Extensions
You can extend the functionality of your widgetify widgets by adding the following hooks to your **functions.php** file or plugins.
<ul>
  <li>
    <strong>widgetify_gallery_caption</strong><br/>
    You can add a custom display to your gallery caption by doing so:<br/>
    <code>add_action('widgetify_gallery_caption', 'your_custom_function');</code>
  </li><br/>
  <li>
    <strong>Widgetify Blog Group</strong><br/>
    The blog group helps you create a blog group in two variants (portrait & landscape).
  </li><br/>
</ul>

### Tooling
Widgetify utilizes Bootstrap 3.3.7 and Row Spacer for UI frameworking.
<ul>
  <li>BootStrap 3.3.7</li>
  <li>Row Spacer</li>
</ul>

### Requirements
WordPress

### Contributions
Anyone and everyone is welcome to contribute.
