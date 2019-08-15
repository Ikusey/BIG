<?php include "includes/header.php"?>
<p>The CSS Flexbox Layout is used to make a page layout responsive and <em>“flexible”</em>, as per the name. Flexbox can control: the way items in the container are arranged, either in rows or columns or the reverse order of both ways; if the contents of the container wrap around when reaching the end of the container; the way items are aligned horizontally and vertically within the container i.e. center, left, right; and the size of each of the items inside the container. Using Flexbox is an easy and simple alternative to using the float property or the position property.</p>

<p>In my opinion, the grow and shrink properties for Flexbox and fairly interesting and useful to make your website more responsive. The way the properties work is they cause items in the container to either grow or shrink more than other elements in the container in relation to the size of the container itself. EX: 
<!--
<h1>The flex-grow Property</h1>

<p>Make the third flex item grow eight times faster than the other flex items:</p>

<div class="flex-container">
  <div style="flex-grow: 1">1</div>
  <div style="flex-grow: 1">2</div>
  <div style="flex-grow: 8">3</div>
</div>
 - courtesy of W3schools.com -->
</p>
<img id="example" src = "images/flexbox.png" alt="flexbox image example">
<p>In the example above, the code snippet changes the growth of the 3 items within the Flex container, causing the 3rd item to grow 8 times faster than the other 2 items, which each have a growth of 1. This can be useful if you want to split up your page to have different sized columns or rows, keeping the main content large to signify thats what should be focused on. This also requires less code to maintain the size of the container for different viewports.
</p>
</section>

<!--END LEFT COL-->

<!--START RIGHT COL-->
<aside>
    <h3>Works Cited</h3>
    <p>UNKOWN. “CSS Flexbox.” CSS Flexbox (Flexible Box), W3Schools, www.w3schools.com/css/css3_flexbox.asp</p>
    <p>UNKOWN. “A Complete Guide to Flexbox: CSS-Tricks.” CSS-Tricks, Monday.com, 13 May 2019, css-tricks.com/snippets/css/a-guide-to-flexbox/</p>
</aside>

<!--END RIGHT COL-->

<?php include "includes/footer.php"?>