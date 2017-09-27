<?php
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 2017-09-16
 * Time: 3:25 AM
 */


$sql_products = [["id", "userid", "product_title", "product_description", "product_image", "product_link", "product_value", "product_date"],
            ["123", "Jose", "Drugs", "Meth, LSD, MaryJ we have everything","http//josealba.org/img/stocks.jpg" ,"../file/resume.pdf", "6CAD","July 12,1996"]];

function body($sql_data){
    echo <<<ZZEOF




    <ul class="cd-gallery">
ZZEOF;
    foreach ($sql_data as $product){
        echo <<<ZZEOF
        <li>
			<a href="/file/$product">
				<ul class="cd-item-wrapper">
					<li class="selected">
						<img src="img/ugmonk-cap-1.jpg" alt="Preview image">
					</li>

					<li class="move-right">
						<img src="img/ugmonk-cap-2.jpg" alt="Preview image">
					</li>

					<li>
						<img src="img/ugmonk-cap-3.jpg" alt="Preview image">
					</li>
				</ul> <!-- cd-item-wrapper -->
			</a>

			<div class="cd-item-info">
				<b><a href="#0">Baseball Cap</a></b>

				<em class="cd-price">$42</em>
			</div> <!-- cd-item-info -->
		</li>
ZZEOF;
    }


        echo <<<ZZEOF
		<li>
			<a href="http://codyhouse.co/">
				<ul class="cd-item-wrapper">
					<li class="selected">
						<img src="img/ugmonk-bag-1.jpg" alt="Preview image">
					</li>

					<li class="move-right">
						<img src="img/ugmonk-bag-2.jpg" alt="Preview image">
					</li>

					<li>
						<img src="img/ugmonk-bag-3.jpg" alt="Preview image">
					</li>
				</ul> <!-- cd-item-wrapper -->
			</a>

			<div class="cd-item-info">
				<b><a href="#0">Messenger Bag</a></b>

				<em class="cd-price">$235</em>
			</div> <!-- cd-item-info -->
		</li>

		<li>
			<a href="http://codyhouse.co/">
				<ul class="cd-item-wrapper">
					<li class="selected">
						<img src="img/ugmonk-tshirt-1.jpg" alt="Preview image">
					</li>

					<li class="move-right" data-sale="true" data-price="$22">
						<img src="img/ugmonk-tshirt-2.jpg" alt="Preview image">
					</li>

					<li>
						<img src="img/ugmonk-tshirt-3.jpg" alt="Preview image">
					</li>
				</ul> <!-- cd-item-wrapper -->
			</a>

			<div class="cd-item-info">
				<b><a href="#0">Mountains</a></b>

				<em class="cd-price">$26</em>
			</div> <!-- cd-item-info -->
		</li>

		<li>
			<a href="http://codyhouse.co/">
				<ul class="cd-item-wrapper">
					<li class="selected">
						<img src="img/ugmonk-cap-1.jpg" alt="Preview image">
					</li>

					<li class="move-right">
						<img src="img/ugmonk-cap-2.jpg" alt="Preview image">
					</li>

					<li>
						<img src="img/ugmonk-cap-3.jpg" alt="Preview image">
					</li>
				</ul> <!-- cd-item-wrapper -->
			</a>

			<div class="cd-item-info">
				<b><a href="#0">Baseball Cap</a></b>

				<em class="cd-price">$42</em>
			</div> <!-- cd-item-info -->
		</li>

		<li>
			<a href="http://codyhouse.co/">
				<ul class="cd-item-wrapper">
					<li class="selected">
						<img src="img/ugmonk-bag-1.jpg" alt="Preview image">
					</li>

					<li class="move-right">
						<img src="img/ugmonk-bag-2.jpg" alt="Preview image">
					</li>

					<li>
						<img src="img/ugmonk-bag-3.jpg" alt="Preview image">
					</li>
				</ul> <!-- cd-item-wrapper -->
			</a>

			<div class="cd-item-info">
				<b><a href="#0">Messenger Bag</a></b>

				<em class="cd-price">$235</em>
			</div> <!-- cd-item-info -->
		</li>
       </ul>
ZZEOF;


}

?>