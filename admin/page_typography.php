<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li class="active"><a href="">Typography</a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- Headings -->
    <h3 class="page-header page-header-top">Headings <small>h1, h2, h3, h4, h5, h6</small></h3>
    <div class="row">
        <div class="col-md-6">
            <h1>h1. Heading 1</h1>
            <h2>h2. Heading 2</h2>
            <h3>h3. Heading 3</h3>
        </div>
        <div class="col-md-6">
            <h4>h4. Heading 4</h4>
            <h5>h5. Heading 5</h5>
            <h6>h6. Heading 6</h6>
        </div>
    </div>
    <!-- END Headings -->

    <!-- Content -->
    <h3 class="page-header">Content <small>Demo paragraphs, links, labels, badges and more</small></h3>

    <!-- Paragraphs -->
    <div class="row">
        <div class="col-md-6">
            <p class="lead">Lead paragraph goes here!</p>
            <p><a href="javascript:void(0)">Lorem</a> ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, <strong>justo vel imperdiet gravida</strong>, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque</p>
        </div>
        <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet <a href="javascript:void(0)">gravida</a>, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate.</p>
            <p><em>Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit.</em></p>
        </div>
    </div>

    <!-- Blockquotes -->
    <h4>Blockquotes</h4>
    <div class="row">
        <div class="col-md-4">
            <blockquote>
                <p>This is a blockquote with source info</p>
                <footer>Someone famous <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
        </div>
        <div class="col-md-4">
            <blockquote>
                <p>This is the default blockquote</p>
            </blockquote>
        </div>
        <div class="col-md-4">
            <blockquote class="pull-right">
                <p>This is a blockquote pulled right</p>
                <footer>Someone famous <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
        </div>
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel <strong>imperdiet gravida</strong>, urna <a href="javascript:void(0)">ligula</a> hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate.</p>

    <!-- Paragraph in a well -->
    <p class="well"><strong>Gives the paragraph an inset effect!</strong> <code>.well</code><br>Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum. Donec vitae ultrices dolor?</p>

    <!-- Labels, badges and emphasis text -->
    <div class="row">
        <div class="col-md-4">
            <h4>Labels</h4>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Classes</th>
                        <th>Result</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>.label</code> <code>.label-default</code></td>
                        <td><span class="label label-default">Default</span></td>
                    </tr>
                    <tr>
                        <td><code>.label</code> <code>.label-success</code></td>
                        <td><span class="label label-success">Success</span></td>
                    </tr>
                    <tr>
                        <td><code>.label</code> <code>.label-danger</code></td>
                        <td><span class="label label-danger">Important</span></td>
                    </tr>
                    <tr>
                        <td><code>.label</code> <code>.label-warning</code></td>
                        <td><span class="label label-warning">Warning</span></td>
                    </tr>
                    <tr>
                        <td><code>.label</code> <code>.label-info</code></td>
                        <td><span class="label label-info">Information</span></td>
                    </tr>
                    <tr>
                        <td><code>.label</code> <code>.label-inverse</code></td>
                        <td><span class="label label-inverse">Inverse</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <h4>Badges</h4>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Classes</th>
                        <th>Result</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>.badge</code></td>
                        <td><span class="badge">5</span></td>
                    </tr>
                    <tr>
                        <td><code>.badge</code> <code>.badge-success</code></td>
                        <td><span class="badge badge-success">1</span></td>
                    </tr>
                    <tr>
                        <td><code>.badge</code> <code>.badge-danger</code></td>
                        <td><span class="badge badge-danger">2</span></td>
                    </tr>
                    <tr>
                        <td><code>.badge</code> <code>.badge-warning</code></td>
                        <td><span class="badge badge-warning">3</span></td>
                    </tr>
                    <tr>
                        <td><code>.badge</code> <code>.badge-info</code></td>
                        <td><span class="badge badge-info">4</span></td>
                    </tr>
                    <tr>
                        <td><code>.badge</code> <code>.badge-inverse</code></td>
                        <td><span class="badge badge-inverse">6</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <h4>Emphasis text</h4>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Class</th>
                        <th>Result</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>.text-muted</code></td>
                        <td><span class="text-muted">Muted!</span></td>
                    </tr>
                    <tr>
                        <td><code>.text-success</code></td>
                        <td><span class="text-success">Success!</span></td>
                    </tr>
                    <tr>
                        <td><code>.text-danger</code></td>
                        <td><span class="text-danger">Important!</span></td>
                    </tr>
                    <tr>
                        <td><code>.text-warning</code></td>
                        <td><span class="text-warning">Warning!</span></td>
                    </tr>
                    <tr>
                        <td><code>.text-info</code></td>
                        <td><span class="text-info">Information!</span></td>
                    </tr>
                    <tr>
                        <td><code>.text-black</code></td>
                        <td><span class="text-black">Text in black color!</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Content -->

    <!-- Common Lists -->
    <h3 class="page-header">Common Lists</h3>
    <div class="row">
        <div class="col-md-3">
            <h4>Unordered</h4>
            <ul>
                <li>First item</li>
                <li>Second item</li>
                <li>Third item</li>
                <li>
                    Sublist
                    <ul>
                        <li>First item</li>
                        <li>Second item</li>
                        <li>Third item</li>
                    </ul>
                </li>
                <li>Third item</li>
            </ul>
        </div>
        <div class="col-md-3">
            <h4>Ordered</h4>
            <ol>
                <li>First item</li>
                <li>Second item</li>
                <li>
                    Sublist
                    <ol>
                        <li>First item</li>
                        <li>Second item</li>
                        <li>Third item</li>
                    </ol>
                </li>
                <li>Third item</li>
            </ol>
        </div>
        <div class="col-md-3">
            <h4>Unstyled</h4>
            <ul class="list-unstyled">
                <li>First item</li>
                <li>Second item</li>
                <li>Third item</li>
                <li>
                    Sublist
                    <ul class="list-unstyled">
                        <li>First item</li>
                        <li>Second item</li>
                        <li>Third item</li>
                    </ul>
                </li>
                <li>Third item</li>
            </ul>
        </div>
        <div class="col-md-3">
            <h4>Icon styled <small>Use any icon and color!</small></h4>
            <ul class="fa-ul">
                <li><i class="fa fa-li fa-check text-success"></i>First item</li>
                <li><i class="fa fa-li fa-check text-success"></i>Second item</li>
                <li><i class="fa fa-li fa-check text-success"></i>Third item</li>
                <li>
                    <i class="fa fa-li fa-check text-success"></i>Sublist
                    <ul class="fa-ul">
                        <li><i class="fa fa-li fa-unlock text-warning"></i>First item</li>
                        <li><i class="fa fa-li fa-pencil text-info"></i>Second item</li>
                        <li><i class="fa fa-li fa-crosshairs text-danger"></i>Third item</li>
                    </ul>
                </li>
                <li><i class="fa fa-li fa-check text-success"></i>Third item</li>
            </ul>
        </div>
    </div>
    <!-- END Common Lists -->

    <!-- Description Lists -->
    <h3 class="page-header">Description Lists</h3>
    <div class="row">
        <div class="col-md-6">
            <h4>Default</h4>
            <dl>
                <dt>Description lists</dt>
                <dd>A description list is perfect for defining terms.</dd>
                <dt>Euismod</dt>
                <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                <dt>Malesuada porta</dt>
                <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
            </dl>
        </div>
        <div class="col-md-6">
            <h4>Horizontal</h4>
            <dl class="dl-horizontal">
                <dt>Description lists</dt>
                <dd>A description list is perfect for defining terms.</dd>
                <dt>Euismod</dt>
                <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                <dt>Malesuada porta</dt>
                <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
            </dl>
        </div>
    </div>
    <!-- END Description Lists -->

    <!-- Grid -->
    <h3 class="page-header">Grid <small>Fluid grid can be used to create the layout you want</small></h3>
    <div class="row grid-boxes">
        <div class="col-md-2"><div><code>.col-md-2</code></div></div>
        <div class="col-md-2"><div><code>.col-md-2</code></div></div>
        <div class="col-md-2"><div><code>.col-md-2</code></div></div>
        <div class="col-md-2"><div><code>.col-md-2</code></div></div>
        <div class="col-md-2"><div><code>.col-md-2</code></div></div>
        <div class="col-md-2"><div><code>.col-md-2</code></div></div>
    </div>
    <div class="row grid-boxes">
        <div class="col-md-3"><div><code>.col-md-3</code></div></div>
        <div class="col-md-3"><div><code>.col-md-3</code></div></div>
        <div class="col-md-3"><div><code>.col-md-3</code></div></div>
        <div class="col-md-3"><div><code>.col-md-3</code></div></div>
    </div>
    <div class="row grid-boxes">
        <div class="col-md-4"><div><code>.col-md-4</code></div></div>
        <div class="col-md-4"><div><code>.col-md-4</code></div></div>
        <div class="col-md-4"><div><code>.col-md-4</code></div></div>
    </div>
    <div class="row grid-boxes">
        <div class="col-md-6"><div><code>.col-md-6</code></div></div>
        <div class="col-md-6"><div><code>.col-md-6</code></div></div>
    </div>
    <div class="row grid-boxes">
        <div class="col-md-7"><div><code>.col-md-7</code></div></div>
        <div class="col-md-5"><div><code>.col-md-5</code></div></div>
    </div>
    <div class="row grid-boxes">
        <div class="col-md-4"><div><code>.col-md-4</code></div></div>
        <div class="col-md-8"><div><code>.col-md-8</code></div></div>
    </div>
    <div class="row grid-boxes">
        <div class="col-md-9"><div><code>.col-md-9</code></div></div>
        <div class="col-md-3"><div><code>.col-md-3</code></div></div>
    </div>
    <div class="row grid-boxes">
        <div class="col-md-2"><div><code>.col-md-2</code></div></div>
        <div class="col-md-10"><div><code>.col-md-10</code></div></div>
    </div>
    <!-- END Grid -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>
<?php include 'inc/bottom.php'; // Close body and html tags ?>