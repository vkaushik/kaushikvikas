<!DOCTYPE html>

<html lang="en"><head><?php include '../blog_head_tag.html' ?></head>
<body>
<div class="blog-masthead"><div class="container"><?php include '../blog_nav.html' ?></div></div>
<div class="container"><div class="blog-header"></div><div class="row"><div class="col-sm-8 blog-main">

<!-- Blog Post Content here 
============================-->
<?php include './perl_strings_snippets_content.html'; ?><!-- End of Post -->


<!-- Update Previous and Next links here
========================================= -->
<nav><ul class="pager">
<li><a href="./perl_file_handling_snippets.php">Previous</a></li>
<li><a href="./perl_regular_expressions_snippets.php">Next</a></li>
</ul></nav>

</div><!-- /.blog-main --><div class="col-sm-3 col-sm-offset-1 blog-sidebar"><!-- Sidebar --><?php include '../blog_sidebar.html' ?><!-- End sidebar --></div><!-- /.blog-sidebar --></div><!-- /.row -->

<!-- disqus code pasted here -->
<div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'kaushikvikas';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
<!-- end of disqus -->      
</div><!-- /.container -->
<footer class="blog-footer"><?php include '../blog_footer.html'; ?></footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../js/ie10-viewport-bug-workaround.js"></script>
    
<!-- Disqus java script code pasted here
==========================================-->

<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'kaushikvikas';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
</script>
</body>
</html>