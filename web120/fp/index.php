<?php include 'includes/config.php'; ?>
<?php include 'includes/header.php'; ?> 
<!--PAGE HEADER -->
<h1>OF THE MOUNTAIN</h1>



<div class="contentwrap">
<!--TWITCH PLAYER EMBED -->
<!--ADD A PLACEHOLDER FOR THE TWITCH EMBED-->
<div id="twitch-embed"></div>

<!--LOAD THE TWITCH EMBED SCRIPT-->
<script src="https://embed.twitch.tv/embed/v1.js"></script>

<!--CREATE A TWITCH.EMBED OBJECT THAT WILL RENDER WITHIN THE "TWITCH-EMBED" ROOT ELEMENT.-->
<script>
new Twitch.Embed("twitch-embed", {
    width: "100%",
    height: 768,
	theme: "dark",  
    autoplay: false ,
    channel: "jaderode" ,
	muted: true,
});
</script>
</div>
<?php include 'includes/footer.php'; ?>