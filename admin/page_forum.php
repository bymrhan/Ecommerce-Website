<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="javascript:void(0)">Pages</a></li>
        <li class="active"><a href="">Forum</a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- Forum Content -->
    <h3 class="page-header page-header-top"><i class="fa fa-comment"></i> Forum UI</h3>

    <!-- Tabs -->
    <ul class="nav nav-tabs push" data-toggle="tabs">
        <li class="active"><a href="#forum-forum">Forum</a></li>
        <li><a href="#forum-cat">Category</a></li>
        <li><a href="#forum-topic">Topic</a></li>
    </ul>
    <!-- END Tabs -->

    <!-- Tab Content -->
    <div class="tab-content tab-content-default">
        <!-- Forum -->
        <div class="tab-pane active" id="forum-forum">
            <!-- Intro Category -->
            <table class="table table-bordered forum">
                <thead>
                    <tr>
                        <th class="text-center" colspan="2">Introduction</th>
                        <th class="cell-stat text-center hidden-xs hidden-sm">Topics</th>
                        <th class="cell-stat text-center hidden-xs hidden-sm">Posts</th>
                        <th class="cell-stat-2x hidden-xs hidden-sm">Last Post</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="cell-small text-center"><i class="gi gi-sun fa-2x"></i></td>
                        <td>
                            <h4><a href="javascript:void(0)">Welcome</a> <br><small>New members feel free to come inside and introduce yourself</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">6532</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">152123</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="page_profile.php">Bill</a><br><small>20:09 - September 12, 2013</small></td>
                    </tr>
                    <tr>
                        <td class="text-center"><i class="gi gi-pen fa-2x"></i></td>
                        <td>
                            <h4><a href="javascript:void(0)">Forum Rules</a> <br><small>Please read our forum rules and everything should be fine</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">10</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">10</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="page_profile.php">admin</a><br><small>14:42 - July 10, 2013</small></td>
                    </tr>
                </tbody>
            </table>
            <!-- END Intro Category -->

            <!-- Web Design and Development Category -->
            <table class="table table-bordered forum">
                <thead>
                    <tr>
                        <th class="text-center" colspan="2">Web Design and Development</th>
                        <th class="cell-stat text-center hidden-xs hidden-sm">Topics</th>
                        <th class="cell-stat text-center hidden-xs hidden-sm">Posts</th>
                        <th class="cell-stat-2x hidden-xs hidden-sm">Last Post</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="cell-small text-center"><i class="gi gi-brush fa-2x"></i></td>
                        <td>
                            <h4><a href="javascript:void(0)">Inspiration</a> <br><small>Getting inspired? This is the right place</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">6221</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">121235</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="page_profile.php">John Doe</a><br><small>10:15 - September 25, 2013</small></td>
                    </tr>
                    <tr>
                        <td class="text-center"><i class="gi gi-tint fa-2x"></i></td>
                        <td>
                            <h4><a href="javascript:void(0)">Photoshop</a> <br><small>Tutorials, Freebies and Resources</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">8652</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">165232</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="page_profile.php">Michael</a><br><small>12:16 - September 26, 2013</small></td>
                    </tr>
                    <tr>
                        <td class="text-center"><i class="gi gi-embed_close fa-2x"></i></td>
                        <td>
                            <h4><a href="javascript:void(0)">Text Editors and IDEs</a> <br><small>Find out the best of the best out there</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">2571</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">56891</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="page_profile.php">Estelle</a><br><small>18:43 - September 23, 2013</small></td>
                    </tr>
                    <tr>
                        <td class="text-center"><i class="gi gi-heart_empty fa-2x"></i></td>
                        <td>
                            <h4><a href="javascript:void(0)">HTML, CSS and Javascript</a> <br><small>Tutorials, best practices, tips and news</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">12611</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">168753</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="page_profile.php">Mike</a><br><small>19:31 - September 24, 2013</small></td>
                    </tr>
                    <tr>
                        <td class="text-center"><i class="gi gi-tower fa-2x"></i></td>
                        <td>
                            <h4><a href="javascript:void(0)">Server Side Scripting Languages</a> <br><small>PHP, ASP, Ruby, Perl, Python and even more, they are all here</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">18611</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">178369</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="page_profile.php">admin</a><br><small>23:25 - September 26, 2013</small></td>
                    </tr>
                </tbody>
            </table>
            <!-- END Web Design and Development Category -->

            <!-- Support Category -->
            <table class="table table-bordered forum remove-margin">
                <thead>
                    <tr>
                        <th class="text-center" colspan="2">Support</th>
                        <th class="cell-stat text-center hidden-xs hidden-sm">Topics</th>
                        <th class="cell-stat text-center hidden-xs hidden-sm">Posts</th>
                        <th class="cell-stat-2x hidden-xs hidden-sm">Last Post</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="cell-small text-center"><i class="gi gi-circle_question_mark fa-2x"></i></td>
                        <td>
                            <h4><a href="javascript:void(0)">Help</a> <br><small>Got stuck somewhere and need help? We are here</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">3251</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">52561</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="page_profile.php">John Doe</a><br><small>09:17 - September 27, 2013</small></td>
                    </tr>
                </tbody>
            </table>
            <!-- END Support Category -->
        </div>
        <!-- END Forum -->

        <!-- Category -->
        <div class="tab-pane" id="forum-cat">
            <!-- Forum Category -->
            <div class="push clearfix">
                <div class="pull-right">
                    <ul class="pagination remove-margin">
                        <li class="disabled"><a href="javascript:void(0)">Prev</a></li>
                        <li class="active"><a href="javascript:void(0)">1</a></li>
                        <li><a href="javascript:void(0)">2</a></li>
                        <li><a href="javascript:void(0)">...</a></li>
                        <li><a href="javascript:void(0)">Next</a></li>
                    </ul>
                </div>
                <a href="javascript:void(0)" class="btn btn-success"><i class="fa fa-pencil"></i> New</a>
            </div>
            <table class="table table-bordered forum forum-cat">
                <thead>
                    <tr>
                        <th colspan="2">Forum Category</th>
                        <th class="cell-stat text-center hidden-xs hidden-sm">Replies</th>
                        <th class="cell-stat text-center hidden-xs hidden-sm">Views</th>
                        <th class="cell-stat-2x hidden-xs hidden-sm">Last Post</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="sticky">
                        <td class="text-center cell-small sticky"><i class="gi gi-pin fa-2x"></i></td>
                        <td>
                            <ul class="pagination pagination-sm pull-right remove-margin">
                                <li><a href="javascript:void(0)">1</a></li>
                                <li><a href="javascript:void(0)">2</a></li>
                                <li><a href="javascript:void(0)">...</a></li>
                                <li><a href="javascript:void(0)">5</a></li>
                            </ul>
                            <h5><a href="javascript:void(0)">Topic Title</a> <br><small>by <a href="page_profile.php">admin</a>, August 15, 2013, 18:00</small></h5>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">25</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">356</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="page_profile.php">admin</a><br><small>15:00 - September 15, 2013</small></td>
                    </tr>
                    <tr class="sticky">
                        <td class="text-center sticky"><i class="gi gi-pin fa-2x"></i></td>
                        <td>
                            <ul class="pagination pagination-sm pull-right remove-margin">
                                <li><a href="javascript:void(0)">1</a></li>
                                <li><a href="javascript:void(0)">2</a></li>
                                <li><a href="javascript:void(0)">...</a></li>
                                <li><a href="javascript:void(0)">5</a></li>
                            </ul>
                            <h5><a href="javascript:void(0)">Topic Title</a> <br><small>by <a href="page_profile.php">admin</a>, August 15, 2013, 18:00</small></h5>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">25</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">356</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="page_profile.php">admin</a><br><small>15:00 - September 15, 2013</small></td>
                    </tr>
                    <tr class="sticky">
                        <td class="text-center sticky"><i class="gi gi-pin fa-2x"></i></td>
                        <td>
                            <ul class="pagination pagination-sm pull-right remove-margin">
                                <li><a href="javascript:void(0)">1</a></li>
                                <li><a href="javascript:void(0)">2</a></li>
                                <li><a href="javascript:void(0)">...</a></li>
                                <li><a href="javascript:void(0)">5</a></li>
                            </ul>
                            <h5><a href="javascript:void(0)">Topic Title</a> <br><small>by <a href="page_profile.php">admin</a>, August 15, 2013, 18:00</small></h5>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">25</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">356</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="page_profile.php">admin</a><br><small>15:00 - September 15, 2013</small></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <ul class="pagination pagination-sm pull-right remove-margin">
                                <li><a href="javascript:void(0)">1</a></li>
                                <li><a href="javascript:void(0)">2</a></li>
                                <li><a href="javascript:void(0)">...</a></li>
                                <li><a href="javascript:void(0)">5</a></li>
                            </ul>
                            <h5><a href="javascript:void(0)">Topic Title</a> <br><small>by <a href="page_profile.php">username</a>, August 01, 2013, 10:00</small></h5>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">25</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">356</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="page_profile.php">user</a><br><small>12:00 - September 01, 2013</small></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <ul class="pagination pagination-sm pull-right remove-margin">
                                <li><a href="javascript:void(0)">1</a></li>
                                <li><a href="javascript:void(0)">2</a></li>
                                <li><a href="javascript:void(0)">...</a></li>
                                <li><a href="javascript:void(0)">5</a></li>
                            </ul>
                            <h5><a href="javascript:void(0)">Topic Title</a> <br><small>by <a href="page_profile.php">username</a>, August 01, 2013, 10:00</small></h5>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">25</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">356</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="page_profile.php">user</a><br><small>12:00 - September 01, 2013</small></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <ul class="pagination pagination-sm pull-right remove-margin">
                                <li><a href="javascript:void(0)">1</a></li>
                                <li><a href="javascript:void(0)">2</a></li>
                                <li><a href="javascript:void(0)">...</a></li>
                                <li><a href="javascript:void(0)">5</a></li>
                            </ul>
                            <h5><a href="javascript:void(0)">Topic Title</a> <br><small>by <a href="page_profile.php">username</a>, August 01, 2013, 10:00</small></h5>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">25</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">356</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="page_profile.php">user</a><br><small>12:00 - September 01, 2013</small></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <ul class="pagination pagination-sm pull-right remove-margin">
                                <li><a href="javascript:void(0)">1</a></li>
                                <li><a href="javascript:void(0)">2</a></li>
                                <li><a href="javascript:void(0)">...</a></li>
                                <li><a href="javascript:void(0)">5</a></li>
                            </ul>
                            <h5><a href="javascript:void(0)">Topic Title</a> <br><small>by <a href="page_profile.php">username</a>, August 01, 2013, 10:00</small></h5>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">25</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">356</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="page_profile.php">user</a><br><small>12:00 - September 01, 2013</small></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <ul class="pagination pagination-sm pull-right remove-margin">
                                <li><a href="javascript:void(0)">1</a></li>
                                <li><a href="javascript:void(0)">2</a></li>
                                <li><a href="javascript:void(0)">...</a></li>
                                <li><a href="javascript:void(0)">5</a></li>
                            </ul>
                            <h5><a href="javascript:void(0)">Topic Title</a> <br><small>by <a href="page_profile.php">username</a>, August 01, 2013, 10:00</small></h5>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">25</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">356</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="page_profile.php">user</a><br><small>12:00 - September 01, 2013</small></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <ul class="pagination pagination-sm pull-right remove-margin">
                                <li><a href="javascript:void(0)">1</a></li>
                                <li><a href="javascript:void(0)">2</a></li>
                                <li><a href="javascript:void(0)">...</a></li>
                                <li><a href="javascript:void(0)">5</a></li>
                            </ul>
                            <h5><a href="javascript:void(0)">Topic Title</a> <br><small>by <a href="page_profile.php">username</a>, August 01, 2013, 10:00</small></h5>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">25</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">356</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="page_profile.php">user</a><br><small>12:00 - September 01, 2013</small></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <ul class="pagination pagination-sm pull-right remove-margin">
                                <li><a href="javascript:void(0)">1</a></li>
                                <li><a href="javascript:void(0)">2</a></li>
                                <li><a href="javascript:void(0)">...</a></li>
                                <li><a href="javascript:void(0)">5</a></li>
                            </ul>
                            <h5><a href="javascript:void(0)">Topic Title</a> <br><small>by <a href="page_profile.php">username</a>, August 01, 2013, 10:00</small></h5>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">25</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">356</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="page_profile.php">user</a><br><small>12:00 - September 01, 2013</small></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <ul class="pagination pagination-sm pull-right remove-margin">
                                <li><a href="javascript:void(0)">1</a></li>
                                <li><a href="javascript:void(0)">2</a></li>
                                <li><a href="javascript:void(0)">...</a></li>
                                <li><a href="javascript:void(0)">5</a></li>
                            </ul>
                            <h5><a href="javascript:void(0)">Topic Title</a> <br><small>by <a href="page_profile.php">username</a>, August 01, 2013, 10:00</small></h5>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">25</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">356</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="page_profile.php">user</a><br><small>12:00 - September 01, 2013</small></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <ul class="pagination pagination-sm pull-right remove-margin">
                                <li><a href="javascript:void(0)">1</a></li>
                                <li><a href="javascript:void(0)">2</a></li>
                                <li><a href="javascript:void(0)">...</a></li>
                                <li><a href="javascript:void(0)">5</a></li>
                            </ul>
                            <h5><a href="javascript:void(0)">Topic Title</a> <br><small>by <a href="page_profile.php">username</a>, August 01, 2013, 10:00</small></h5>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">25</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">356</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="page_profile.php">user</a><br><small>12:00 - September 01, 2013</small></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <ul class="pagination pagination-sm pull-right remove-margin">
                                <li><a href="javascript:void(0)">1</a></li>
                                <li><a href="javascript:void(0)">2</a></li>
                                <li><a href="javascript:void(0)">...</a></li>
                                <li><a href="javascript:void(0)">5</a></li>
                            </ul>
                            <h5><a href="javascript:void(0)">Topic Title</a> <br><small>by <a href="page_profile.php">username</a>, August 01, 2013, 10:00</small></h5>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">25</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0)">356</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="page_profile.php">user</a><br><small>12:00 - September 01, 2013</small></td>
                    </tr>
                </tbody>
            </table>
            <div class="text-right">
                <ul class="pagination remove-margin">
                    <li class="disabled"><a href="javascript:void(0)">Prev</a></li>
                    <li class="active"><a href="javascript:void(0)">1</a></li>
                    <li><a href="javascript:void(0)">2</a></li>
                    <li><a href="javascript:void(0)">...</a></li>
                    <li><a href="javascript:void(0)">Next</a></li>
                </ul>
            </div>
            <!-- END Forum Category -->
        </div>
        <!-- END Category -->

        <!-- Topic -->
        <div class="tab-pane" id="forum-topic">
            <div class="push clearfix">
                <div class="pull-right">
                    <ul class="pagination remove-margin">
                        <li class="disabled"><a href="javascript:void(0)">Prev</a></li>
                        <li class="active"><a href="javascript:void(0)">1</a></li>
                        <li><a href="javascript:void(0)">2</a></li>
                        <li><a href="javascript:void(0)">...</a></li>
                        <li><a href="javascript:void(0)">Next</a></li>
                    </ul>
                </div>
                <a href="javascript:void(0)" class="btn btn-info"><i class="fa fa-reply"></i> Reply</a>
            </div>
            <table class="table table-bordered forum">
                <tbody>
                    <tr>
                        <th class="text-center"><a href="page_profile.php">Username</a></th>
                        <th>Topic Title - <small>September 15, 10:00</small></th>
                    </tr>
                    <tr>
                        <td class="forum-avatar text-center">
                            <a href="page_profile.php"><img src="img/placeholders/image_dark_120x120.png" class="img-responsive" alt="avatar"></a>
                            <br><br><small><em>Awesome poster</em></small><br><small>256 Posts</small>
                        </td>
                        <td class="forum-post">
                            <p>Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget!</p>
                            <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti.</p>
                            <div class="forum-sign">
                                <small><em>This is my signature!</em></small>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-center"><a href="page_profile.php">Username</a></th>
                        <th>RE: Topic Title - <small>September 15, 10:00</small></th>
                    </tr>
                    <tr>
                        <td class="forum-avatar text-center">
                            <a href="page_profile.php"><img src="img/placeholders/image_dark_120x120.png" class="img-responsive" alt="avatar"></a>
                            <br><br><small><em>Awesome poster</em></small><br><small>256 Posts</small>
                        </td>
                        <td class="forum-post">
                            <p>Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget!</p>
                            <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti.</p>
                            <div class="forum-sign">
                                <small><em>This is my signature!</em></small>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-center"><a href="page_profile.php">Username</a></th>
                        <th>RE: Topic Title - <small>September 15, 10:00</small></th>
                    </tr>
                    <tr>
                        <td class="forum-avatar text-center">
                            <a href="page_profile.php"><img src="img/placeholders/image_dark_120x120.png" class="img-responsive" alt="avatar"></a>
                            <br><br><small><em>Awesome poster</em></small><br><small>256 Posts</small>
                        </td>
                        <td class="forum-post">
                            <p>Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget!</p>
                            <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti.</p>
                            <div class="forum-sign">
                                <small><em>This is my signature!</em></small>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-center"><a href="page_profile.php">Username</a></th>
                        <th>RE: Topic Title - <small>September 15, 10:00</small></th>
                    </tr>
                    <tr>
                        <td class="forum-avatar text-center">
                            <a href="page_profile.php"><img src="img/placeholders/image_dark_120x120.png" class="img-responsive" alt="avatar"></a>
                            <br><br><small><em>Awesome poster</em></small><br><small>256 Posts</small>
                        </td>
                        <td class="forum-post">
                            <p>Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget!</p>
                            <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti.</p>
                            <div class="forum-sign">
                                <small><em>This is my signature!</em></small>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-center"><a href="page_profile.php">Username</a></th>
                        <th>RE: Topic Title - <small>September 15, 10:00</small></th>
                    </tr>
                    <tr>
                        <td class="forum-avatar text-center">
                            <a href="page_profile.php"><img src="img/placeholders/image_dark_120x120.png" class="img-responsive" alt="avatar"></a>
                            <br><br><small><em>Awesome poster</em></small><br><small>256 Posts</small>
                        </td>
                        <td class="forum-post">
                            <p>Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget!</p>
                            <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti.</p>
                            <div class="forum-sign">
                                <small><em>This is my signature!</em></small>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="text-right">
                <ul class="pagination remove-margin">
                    <li class="disabled"><a href="javascript:void(0)">Prev</a></li>
                    <li class="active"><a href="javascript:void(0)">1</a></li>
                    <li><a href="javascript:void(0)">2</a></li>
                    <li><a href="javascript:void(0)">...</a></li>
                    <li><a href="javascript:void(0)">Next</a></li>
                </ul>
            </div>
        </div>
        <!-- END Topic -->
    </div>
    <!-- END Tab Content -->
    <!-- END Forum Content -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>
<?php include 'inc/bottom.php'; // Close body and html tags ?>