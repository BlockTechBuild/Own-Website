<h2>Contact</h2>
<p class="lead">
	&ldquo;If I had asked people what they wanted, they would have said faster horses. &rdquo;<br />- Henry Ford
</p>

<hr />

<div class="row">
	<div class="col-md-6">
		<ul class="no-bullets">
			<li>
				<a href="<?= $contact->linkedin; ?>" target="_blank">
					<span class="fa fa-linkedin fa-2x" style="width: 32px; height: 32px; margin-right: 20px"></span><?= $contact->linkedin; ?>
				</a>
			</li>
            <li>
                <a href="<?= $contact->gitlab; ?>" target="_blank">
                    <span class="fa fa-gitlab fa-2x" style="width: 32px; height: 32px; margin-right: 20px"></span><?= $contact->gitlab; ?>
                </a>
            </li>
            <li>
                <a href="<?= $contact->datacamp ?>" target="_blank">
                    <span class="fa fa-rocket fa-2x" style="width: 32px; height: 32px; margin-right: 20px"></span><?= $contact->datacamp; ?>
                </a>
            </li>
		</ul>
	</div>
	<div class="col-md-6">
		<ul class="no-bullets">
			<li>
                <a href="<?= $contact->github; ?>" target="_blank">
                    <span class="fa fa-github fa-2x" style="width: 32px; height: 32px; margin-right: 20px"></span><?= $contact->github; ?>
                </a>
            </li>
			<li>
				<a href="mailto:<?= strrev($contact->email); ?>">
					<span class="fa fa-envelope fa-2x" style="width: 32px; height: 32px; margin-right: 20px"></span><span style="unicode-bidi:bidi-override; direction: rtl;"><?= strrev($contact->email); ?></span>
				</a>
			</li>
            <li>

            </li>
		</ul>
	</div>
</div>

<hr />

<div class="row">
    <div class="col-md-12 text-center">
        <p>&copy; Auriga Aristo, All right reserved | Design By: <a href="https://github.com/pascalvgemert" target="_blank" style="display: inline-block">Pascal van Gemert</a></p>
    </div>
</div>