<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Vivir - Live Life To The Fullest!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://d396qusza40orc.cloudfront.net/startup%2Fcode%2Fbootstrap-combined.no-icons.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css">
    <link rel="stylesheet" href="https://d396qusza40orc.cloudfront.net/startup%2Fcode%2Fsocial-buttons.css">    
    <script src="https://d396qusza40orc.cloudfront.net/startup%2Fcode%2Fjquery.js"></script>
    <script src="https://d396qusza40orc.cloudfront.net/startup%2Fcode%2Fbootstrap.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,300,400,600,700,800" 
          rel="stylesheet" type="text/css">
    <style type="text/css">

      /* Large desktop */
      @media (min-width: 980px) { 
        body {
         padding-top: 60px;
        }
       .linediv-l {
         border-right: 1px white solid;
        }
       .linediv-r {
         border-left: 1px white solid;
       }
      }

      /* Landscape phones and down */
      @media (max-width: 480px) { 
       .copy {
         padding: 2.5% 10%;
       }
       .linediv-l {
         border-bottom: 1px white solid;
       }
       .linediv-r {
         border-top: 1px white solid;
       }
      }

      /* All form factors */

      /* Main body and headings */
      body{
        font-family: 'Open Sans', Helvetica, Arial, sans-serif;
      }
      .heading, .subheading {
        font-family: 'Ubuntu', Helvetica, Arial, sans-serif;
        text-align: center;
      }
      p.lead {
        padding-top: 1.5%;
        font-size: 24px;
        line-height: 30px;
      }
      p {
        font-size: 18px;
        line-height: 24px;
      }

      /* Video pitch and Action */
      .pitch {
        padding: 2.5% 0%;
      }
      .order {
        padding: 2% 0%;
      }
      .actions {
        background-color: #343434;
        padding: 3% 0%;
      }
      .video, .thermometer, .order, .social, .statistics {
        text-align: center;
      }
      .statistics h3, .statistics p {
        color: white;
      }

      /* Marketing Copy and Footer */
      .copy {
        padding-top: 2.5%;
        padding-bottom: 2.5%;
        text-align: justify;
      }
      .asset {
        padding: 2.5% 0%;
      }
      .footer {
        color: #cccccc;
        text-align: center;
      }
      .footer p {
        font-size: 11px;
      }
      .footer a {
        color: #ccccff;
      }

     /* http://support.addthis.com/customer/portal/questions/1136093-share-buttons-in-center-position */      
     div.addthis_toolbox {
      width: 174px;
      margin: 0 auto;
     }
    </style>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-42843113-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  </head>
  <body>

    <!-- Mobile-friendly navbar adapted from example. -->
    <!-- http://twitter.github.io/bootstrap/examples/starter-template.html -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar"
                  data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Vivir!</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>              
              <li><a href="#contact">Contact</a></li>
			  <li><a href="/orders">Orders</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <!-- We use row-fluid inside containers to achieve a resizable layout. -->
    <!-- blogs.endjin.com/2013/04/tips-for-implementing-responsive-designs-using-bootstrap/ -->
    <!-- http://stackoverflow.com/a/12270322 -->
    <div class="container">
      <!-- Font and paired font of .heading/.subheading and body from Google Fonts -->
      <!-- www.google.com/fonts/specimen/Ubuntu -->
      <!-- www.google.com/fonts/specimen/Ubuntu#pairings -->
      <div class="row-fluid heading">
        <div class="span12">
          <h1>VIVIR! Live Life To The Fullest Or Pay The Consequences</h1>
        </div>
      </div> 
      <div class="row-fluid subheading">
        <div class="span12">
          <!-- Special typography from Bootstrap for lead paragraph. -->
          <!-- http://twitter.github.io/bootstrap/base-css.html#typography -->
          <p class="lead">Don't Be a Loser. Get Awesome. Vivir!</p>
        </div>
      </div>
      <div class="row-fluid pitch">
        <div class="span5 offset1 video">
          <img class="img-polaroid" src="http://i.imgur.com/zNnl1JN.jpg">
        </div>

        <!-- We define a new 'actions' div to contain statistics, order, and share buttons.-->
        <div class="span5 actions">
          <div class="row-fluid">
          <div class="span8 offset2">
            <div class="row-fluid statistics">
              <div class="span4">
                <!-- linediv-l and linediv-r give dividing lines that look
                different in horizontal and vertical layouts, illustrating
                media queries. -->
                <div class="linediv-l">
                <h3>1000</h3> <p>backers</p>
                </div>
              </div>
              <div class="span4">
                <div class="linediv-c">
                  <h3>$6000</h3> <p>of $10,000</p>
                </div>
              </div>
              <div class="span4">
                <div class="linediv-r">
                <h3>10</h3> <p>days left</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row-fluid">
          <div class="span10 offset1">
            <!-- Bootstrap progress bar -->
            <!-- http://twitter.github.io/bootstrap/components.html#progress -->
            <div class="thermometer progress active">
              <div class="bar bar-success" style="width: 60%;"></div>
              <div class="bar bar-warning" style="width: 40%;"></div>
            </div>
          </div>
          </div>
          <div class="row-fluid">
          <div class="span6 offset3 order">
	    <a class="coinbase-button" data-code="9858bf6fb921a937e1ce3667949a5aaf" data-button-style="custom_large" data-button-text="Preorder With Bitcoin" href="https://coinbase.com/checkouts/9858bf6fb921a937e1ce3667949a5aaf">Preorder With Bitcoin</a><script src="https://coinbase.com/assets/button.js" type="text/javascript"></script>
	  </div>
          </div>
          <div class="row-fluid">
          <div class="span8 offset2 social">
            <!-- AddThis Button BEGIN -->
            <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
              <a class="addthis_button_preferred_1"></a>
              <a class="addthis_button_preferred_2"></a>
              <a class="addthis_button_compact"></a>
              <a class="addthis_counter addthis_bubble_style"></a>
            </div>
	     <script type="text/javascript">var addthis_config = 
	      {"data_track_addressbar":true};</script>
	     <script type="text/javascript" 
 		     src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51e5f5d9549fdf9b"></script>
            <!-- AddThis Button END -->
          </div>
          </div>
        </div>
        </div>
      </div>
	  
      <!-- Beyond this part the marketing copy begins. -->
      <!-- https://developer.mozilla.org/en-US/docs/Web/CSS/text-align -->
      <!-- http://twitter.github.io/bootstrap/base-css.html#images -->
      <!-- http://placehold.it -->     
      <div class="row-fluid section1" id="about">
	  <div class="span12" align="center">
          <h1>ABOUT</h1>
        </div>
        <div class="span5 offset1 asset">
          <img class="img-polaroid" src="http://i.imgur.com/59TGeEO.jpg">
        </div>
        <div class="span5 copy">
          <p>
            Vivir! is an app unlike any other, part fun and games,
			part productutivity, and all together life changing.
			The basic idea is that you accomplish your goals or you
			"pay the consequences". 
          </p>
		  <p>
			Let's say you want to lose 15 lbs but you're too fucking
			lazy to exercise and you lack the self discipline. Or what if you want to have
			a 3 way with Lindsay Loahn and a midget while R Kelly narrates the whole experience 
			with sonorous melodies? Well then this is the app for you. Create any goal you want, choose an
			amout of time to accomplish it (I suggest having many short term goals, 
			several medium range goals, and one or two long term goals), and set
			the consequences. It's like your own persoanl Mr. Miyagi.
		  </p>
        </div>
      </div>

      <div class="row-fluid section2">
        <div class="span5 offset1 copy copy-right">
          <p>
            Bullshit you say! How can some stupid app where I set the goals have
			real world consequenses. Becuase if you don't accomplish your goals
			it autoposts to your facebook, twitter and wherever the fuck else you
			are on the internet. It even texts you 10 most recent contacts and tells them what a fucking
			loser you are. So you better get your ass in gear! Don't be surprised
			if your social media channels are flooded with a little bit of this in the early going.
			But if you stick with it, becase the rewards are great my friend!
          </p>
		  <p>
		     Cool! Now I feel more motivated, but what do I get if I accomplish my goals?
			 Well I'm glad you asked because this app will let everyone know how awesome you are
			 when you succeed. In fact, instead of "likes", each goal accomplished with Vivir! generates "Awesome Points".
			 Awesome points let people choose how awesome the goal you just accomplished was so you
			 feel properly validated and have some idea about how worthwhile your goals are to the
			 rest of society.
		  </p>
        </div>
        <div class="span5 asset">
          <iframe width="480" height="300" src="https://www.youtube.com/embed/YgSPaXgAdzE?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
        </div>
		<div class="span5 asset">
          <img class="img-polaroid" src="http://i.imgur.com/z4oyXAn.jpg">
        </div>
      </div>
	  <div class="row-fluid section2" id="#contact">
        <div class="span12 offset1 copy copy-right">
          
		  <p>
            If you'd like to be part of this once in a lifetime opportunity. Email me @ nathan.a.barth@gmail.com or click the link below
		  </p>
        </div>
		     <div class="row-fluid faq">
          <div class="span10 offset1">
            <h3>Contact</h3>
            <div class="accordion" id="accordion2">
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse"
                     data-parent="#accordion2" href="#collapseOne">
                    Contact Me!
                  </a>
                </div>
                <div id="collapseOne" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
  //send email
  $email = $_REQUEST['email'] ;
  $subject = $_REQUEST['subject'] ;
  $message = $_REQUEST['message'] ;
  mail("nathan.a.barth@gmail.com", $subject,
  $message, "From:" . $email);
  echo "Thank you for using our mail form";
  }
else
//if "email" is not filled out, display the form
  {
  echo "<form method='post' action='mailform.php'>
  Email: <input name='email' type='text'><br>
  Subject: <input name='subject' type='text'><br>
  Message:<br>
  <textarea name='message' width="75%" height="130px">
  </textarea><br>
  <input type='submit'>
  </form>";
  }
  ?>					
                  </div>
                </div>
              </div>
            </div>
          </div>

      </div>

      <!-- For the FAQ, we introduce a little bit of JS, using the accordion. -->
      <!-- This brings in jquery.js and bootstrap.js as dependencies. -->
      <!-- http://twitter.github.io/bootstrap/javascript.html#collapse -->
      <div class="row-fluid faq">
          <div class="span10 offset1">
            <h3>FAQ</h3>
            <div class="accordion" id="accordion2">
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse"
                     data-parent="#accordion2" href="#collapseOne">
                    What can I get some O' that Sweet Mary Jane?
                  </a>
                </div>
                <div id="collapseOne" class="accordion-body collapse">
                  <div class="accordion-inner">
                    Right Here!<br/>
					<iframe width="480" height="300" src="https://www.youtube.com/embed/qyE9vFGKogs?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>					
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse"
                     data-parent="#accordion2" href="#collapseTwo">
                    Is this a joke?
                  </a>
                </div>
                <div id="collapseTwo" class="accordion-body collapse">
                  <div class="accordion-inner">
                    No way bro!
                  </div>
                </div>
              </div>
            </div>
          </div>

      </div>

      <!-- Not crucial, but we put this under a CC By-SA 3.0 license. -->
      <!-- http://creativecommons.org/licenses/ -->
      <div class="row-fluid footer">
        <div class="span12">
          <p>This work is licensed under
            the <a href="http://creativecommons.org/licenses/by-sa/3.0/">CC
              By-SA 3.0
            </a>, without all the cruft that would otherwise be
            put at the bottom of the page.</p>
        </div>
      </div>
    </div>

<script>
  <!--GA Script To Go Here -->

</script>
  </body>
</html>
