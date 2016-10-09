<!doctype html>
<html amp lang="<?php echo($language_code);?>">
  <head>
    <meta charset="utf-8">
    <title><?php echo( $productitem->ProductName); ?></title>
    <link rel="canonical" href="<?php echo($productitem->ProductLink) ?>" />
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
	
	<?php
	
	switch ($language_code){
		
	case "de":
	echo("<link rel=\"alternate\" hreflang=\"en\" href=\"" . $current_base_url . "/1\"/>");
	echo("<link rel=\"alternate\" hreflang=\"ru\" href=\"" . $current_base_url . "/7\"/>");
	break;
	case "ru":
	echo("<link rel=\"alternate\" hreflang=\"de\" href=\"" . $current_base_url . "/\"/>");
	echo("<link rel=\"alternate\" hreflang=\"en\" href=\"" . $current_base_url . "/1\"/>");
	break;
	default:
	echo("<link rel=\"alternate\" hreflang=\"de\" href=\"" . $current_base_url . "/\"/>");
	echo("<link rel=\"alternate\" hreflang=\"ru\" href=\"" . $current_base_url . "/7\">/");
	}
	echo("<link rel=\"alternate\" hreflang=\"x-default\" href=\"" . $current_base_url . "\"/>");
	
	
		
	?>
	<style amp-custom>
body {	font-family: Arial,Sans-serif }

/* language selectors */


/* stuff for availability */

.readytosend {
	font-weight: bold;
	margin: 5px 8px 0px 0px;		
}

.readytosend .ready{
	-webkit-box-shadow: 2px 2px 2px 4px #80c229;
	box-shadow: 2px 2px 2px 4px #80c229; 
	-webkit-border-radius: 20px;
	border-radius: 5px; 
	padding: 3px 8px 0px 8px;
	background-color:#80C229;
}

.readytosend .notready{
	-webkit-box-shadow: 2px 2px 2px 4px #dadada;
	box-shadow: 2px 2px 2px 4px #dadada; 
	-webkit-border-radius: 20px;
	border-radius: 5px; 
	padding: 3px 8px 0px 8px;
	background-color:#dadada;
}

/* attributestable override in productinfo */

.productoptions .attributestable {
	line-height: 55px;	
	letter-spacing: 0.1em;
}


/* attributes table general */
.difficultybar img {
    position: relative;
}

.difficultybarsmall img {
    position: relative;
}


.difficultybar
{
	background-image:url('/images/bars/abar.png');
	width: 160px;
	height: 28px;

	
}


.difficultybarsmall
{
    background-image:url('/images/bars/abar.png');
	width: 100px;
	height: 18px;
}



.difficultybar img {
	
	position: relative;
}

.dvalue {

	width: 10px;
	height: 10px;
}


.boolfalse {
	
	width: 10px;
	height: 10px;
	float: right;
	background-image: url("/templates/hepf55/img/boolfalse2.png");
	background-repeat:no-repeat;
}

.booltrue {
	
	width: 10px;
	height: 10px;
	float: right;
	background-image: url("/templates/hepf55/img/booltrue2.png");
	background-repeat:no-repeat;
	
	
}

technicaldata {

margin-bottom: 10px;
display: none;
margin-left: 20px;
/* float: right; */

}

shorttechnicaldata {

margin-bottom: 10px;
display: none;
margin-left: 20px;
/* float: right; */

}

.techdatacaption {

text-align:center;

}

.attributestable {

border-collapse: collapse; /* IE7 and lower */
border-spacing: 0; 
overflow: hidden;
/*line-height: 10px;*/
/*min-width: 350px;*/
margin-left: auto;
margin-right: auto;

	
}

.attributestable th
{

}

.attributestable tr
{
border: 1px solid #dedede;
}

.attributestable td
{
border: 1px solid #dedede;
padding: 2px 15px 2px 15px;
}

.attributestable td:nth-child(even)
{
text-align: right;
padding: 2px;
}

.attributestable th:first-child {
    -moz-border-radius: 6px 0 0 0;
    -webkit-border-radius: 6px 0 0 0;
    border-radius: 6px 0 0 0;
	border: 1px solid #dedede;
}

.attributestable th:last-child {
    -moz-border-radius: 0 6px 0 0;
    -webkit-border-radius: 0 6px 0 0;
    border-radius: 0 6px 0 0;
	border: 1px solid #dedede;
}

.attributestable th:only-child{
    -moz-border-radius: 6px 6px 0 0;
    -webkit-border-radius: 6px 6px 0 0;
    border-radius: 6px 6px 0 0;
	border: 1px solid #dedede;
}

.attributestable tbody tr:nth-child(even) {
    background: #f5f5f5;
    -webkit-box-shadow: 0 1px 0 rgba(255,255,255,.8) inset; 
    -moz-box-shadow:0 1px 0 rgba(255,255,255,.8) inset;  
    box-shadow: 0 1px 0 rgba(255,255,255,.8) inset;        
}

.fullshemaimage {
	
	display:none;
}



/* end attributestable */
	
	</style>
	
	
	
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "https://shop.hepf.com",
  "logo": "https://shop.hepf.com/templates/hepf55/img/TopLogo_left.jpg",
  "sameas" : [
    "https://de-de.facebook.com/hepf.at",
    "https://twitter.com/hepf_at",
    "https://plus.google.com/104394193655931243891"
  ],
  "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "+43-5373-5700-33",
    "contactType": "customer service",
	"availableLanguage": ["German","English"]
  }]
}
</script>
	
	
	<?php
		$availability = "http://schema.org/OutOfStock";
		if($productitem->ProductQuantity >= 0) {
			$availability = "http://schema.org/InStock";	
		}
	?>
    <script type="application/ld+json">
      {
        "@context" : "http://schema.org", 
        "@type" : "Product", 
        "name" : "<?php echo( $productitem->ProductName); ?>", 
        "image" : "<?php echo $productitem->ProductImageLink; ?>", 
        "description" : "<?php echo( $productitem->ProductShortDescription); ?>", 
		"mpn" : "<?php echo($productitem->ProductModel); ?>",
		"model" : "<?php echo($productitem->ProductModel); ?>",
		"gtin8" : "<?php echo($productitem->ProductEan); ?>",
		"brand" : "<?php echo($productitem->ProductManufacturerName); ?>",
        "offers" : { 
        "@type" : "Offer", 
        "availability": "<?php echo($availability); ?>",
        "itemCondition": "http://schema.org/NewCondition",
        "price" : "<?php echo($productitem->ProductPricePlain); ?>",
        "priceCurrency" : "EUR",
		"url" : "<?php echo($productitem->ProductLink); ?>"

		} 
      }
    </script>
	
  <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript> 
 <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
	
	



	
	<script async src="https://cdn.ampproject.org/v0.js"></script>
  </head>	

  <body>
  <h1><a href="<?php echo($productitem->ProductLink); ?>" target="_blank"><?php echo( $productitem->ProductName); ?></a></h1>
  
   <?php
	if ($productitem->ProductQuantity >= 0 ) {
	 echo("<div class=\"readytosend\"><div class=\"ready\">" . $productitem->ProductPriceXtc . "</div></div>");
	}
	else {
		 echo("<div class=\"readytosend\"><div class=\"notready\">" . $productitem->ProductPriceXtc . "</div></div>");
	}
	?>
  
 <amp-img src="<?php echo $productitem->ProductImageLink; ?>" alt="<?php echo(htmlentities(str_replace(array('"', "'","(",")"), '', $productitem->ProductName)));?>" layout="responsive" height="400" width="400"
                                     
	srcset="<?php echo($CURRENT_HTTP_DOMAIN . "/images/product_images/popup_images/" . $productitem->ProductImage); ?> 1024w,
			<?php echo($CURRENT_HTTP_DOMAIN . "/images/product_images/info_images/" . $productitem->ProductImage); ?> 640w,
			<?php echo($CURRENT_HTTP_DOMAIN . "/images/product_images/thumbnail_images/" . $productitem->ProductImage); ?> 320w"
 > </amp-img>
 

 
<table class="attributestable">
				<?php foreach ($attributes as $attributesitem):?>
				<tr>
				
					<td><?php echo($attributesitem->options_name); ?></td>
					<td>
					
				
						<?php 
						
							echo("<a href='/index.php?cPath=" . $category_id_string . "&optfilter" . $attributesitem->options_id . "=" . $attributesitem->options_values_id . "' target=\"_blank\" >");
			
													
							/* show the graphical representation for the value, depending on it's datatype */
							switch ($attributesitem->options_datatype) {
								case "0": //its numeric
									echo($attributesitem->options_values_name);
									break;
								case "1": //its text
									echo($attributesitem->options_values_name);
									break;
								case "2": //its bool
									if($attributesitem->options_values_name == 1)
										echo "<div class=\"booltrue\"></div>";
									if($attributesitem->options_values_name == 0)
										echo "<div class=\"boolfalse\"></div>";
									break;
								case "3": //its an image
									echo($attributesitem->options_values_name);
									break;
								case "4": //its the greadient bar
								
								echo("<div class=\"difficultybarsmall\">
									<div class=\"dvalue\" title=\"" . $attributesitem->options_values_name . "\">
									<img src=\"/images/bars/adot.png\" />
									</div>
									</div>");
									break;
								case "5": // its numeric dropdown
									echo($attributesitem->options_values_name);
								case "6": // its numeric dropdown
									echo($attributesitem->options_values_name);
								break;
							}
						
						?>
						</a>
					</td>
				
				</tr>
				<?php endforeach;?>
</table>
  
  <div class="shortdescription">
	<?php echo($productitem->ProductShortDescription); ?>
  </div>
  
		
			<div class="languages">
<?php
	/*

 	switch ($language_code){
		
	case "de":
	echo("<a href=\"" . $current_base_url . "/1\">EN</a>");
	echo("<a href=\"" . $current_base_url . "/7\">RU</a>");
	break;
	case "ru":
	echo("<a href=\"" . $current_base_url . "/2\">DE</a>");
	echo("<a href=\"" . $current_base_url . "/1\">EN</a>");
	break;
	default:
	echo("<a href=\"" . $current_base_url . "/2\">DE</a>");
	echo("<a href=\"" . $current_base_url . "/7\">RU</a>");
	}
	echo("<link rel=\"alternate\" hreflang=\"x-default\" href=\"" . $current_base_url . "\"/>");
*/
	?>	

		</div>
  
 <amp-analytics type="googleanalytics" id="analytics1">
 <script type="application/json">
{
  "vars": {
    "account": "UA-XXXXXX-X" 
  },
  "triggers": {
    "trackPageview": {  
      "on": "visible",
      "request": "pageview"
    }
  }
}
</script>
 
 </amp-analytics>
 	
	
