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
