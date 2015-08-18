

    <div class="container theme-showcase" role="main"  style=" margin-top: 40px;" >
			<p class="code" ><font class="tag1" >include</font> <font class="tag2">'loginindicator.php'</font>;</p>
			<p class="code"><font class="tag3">class</font> CommunityMainController <font class="tag1">extends</font> <font class="tag4">CI_Controller</font> {</p>

			<p class="annotation">/**</p>
			<p class="annotation">* Index Page for this controller.</p>
			<p class="annotation"> *</p>
			<p class="annotation">* Maps to the following URL</p>
			<p class="annotation">* 		http://example.com/index.php/welcome</p>
			<p class="annotation">*	- or -  </p>
			<p class="annotation">* 		http://example.com/index.php/welcome/index</p>
			<p class="annotation">*	- or -</p>
			<p class="annotation">* Since this controller is set as the default controller in </p>
			<p class="annotation">* config/routes.php, it's displayed at http://example.com/</p>
			<p class="annotation">*</p>
			<p class="annotation">* So any other public methods not prefixed with an underscore </p>
			<p class="annotation">* map to /index.php/welcome/<method_name></p>
			<p class="annotation">* @see http://codeigniter.com/user_guide/general/urls.html</p>
			<p class="annotation">*/</p>
			<p class="code"><font class="tag1" >public</font> <font class="tag3" >function __construct</font>()</p>
		    <p class="code">{</p>
		    <p class="code">       <font class="tag3">parent</font><font class="tag1">::</font>__construct();</p>
		            
			<p class="code">		$this<font class="tag1">-></font>load<font class="tag1">-></font>library(<font class="tag2">'session'</font>);</p>
		    <p class="code">}</p>
			<p class="code"><font class="tag1">public</font> <font class="tag3">function</font> <font class="tag4">index</font>()</p>
			<p class="code">{</p>
		    <p class="code">    $loginindicator_obj <font class="tag1">= new</font> <font class="tag3">LoginIndicator</font>();</p>
		    <p class="code">    $data[<font class="tag2">'login_indicator'</font>] <font class="tag1">=</font>  $loginindicator_obj<font class="tag1">-></font>getbottommessage();</p>
		    <p class="annotation2">   //show_404();</p>
			<p class="code">	$this<font class="tag1">-></font>load<font class="tag1">-></font>view(<font class="tag1 element"></font>,$data)</p>
			<p class="code">}</p>
			<p class="code">}</p>

		<!-- <span class="typed-cursor smart">|</span> -->

  </div>




	<script src="<?php echo base_url('assets/js/typed.js'); ?>"></script>

	<script>
	  $(function(){
	      $(".element").typed({
	        strings: ["'hello world'", "'mainview'"],
	        typeSpeed: 0,
	         loop: true,
	      });
	  });


window.addEventListener('load', function() {
setTimeout(scrollTo, 0, 0, 1);
}, false);


	</script>
    <!--================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->


