@extends('welcome')

@section('content')
<div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">

                <h3 class="content-header-title mb-0">Home</h3>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                    <button class="btn btn-info round dropdown-toggle dropdown-menu-right px-2" id="btnGroupDrop1"
                        type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                            class="ft-settings icon-left"></i> Settings</button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item"
                            href="card-bootstrap.html">Cards</a><a class="dropdown-item"
                            href="component-buttons-extended.html">Buttons</a></div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section class="row">
                <div class="col-sm-12">
                    <!-- Kick start -->
                    <div id="kick-start" class="card">
                        <div class="card-header">
                            <h4 class="card-title">Kick start your project development !</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="card-text">
                                    <p>Getting start with your project custom requirements using a ready template which
                                        is quite difficult and time taking process, Robust Admin provides useful
                                        features to kick start your project development with no efforts !</p>
                                    <ul>
                                        <li>Robust Admin provides you getting start pages with different layouts, use
                                            the layout as per your custom requirements and just change the branding,
                                            menu & content.</li>
                                        <li>It use template engine to generate pages and whole template quickly using
                                            node js. You can generate entire template with your selected custom layout,
                                            branding & menu. Save your time for doing the common changes for
                                            each page (i.e menu, branding and footer) by generating template.</li>
                                        <li>Every components in Robust Admin are decoupled, it means use use only
                                            components you actually need! Remove unnecessary and extra code easily just
                                            by excluding the path to specific SCSS, JS file.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Kick start -->

                    <!-- What is-->
                    <div id="what-is" class="card">
                        <div class="card-header">
                            <h4 class="card-title">What is starter kit ?</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="card-text">
                                    <p>Starter kit is a set of pages with different layouts, useful for your next
                                        project to start development process from scratch with no time. </p>
                                    <ul>
                                        <li>Each layout includes basic components only.</li>
                                        <li>Select your choice of layout from starter kit, customize it with optional
                                            changes like colors and branding, add required dependency only.</li>
                                        <li>Using template engine to generate whole template quickly with your selected
                                            layout and other custom changes.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ What is-->

                    <!-- How to-->
                    <div id="how-to" class="card">
                        <div class="card-header">
                            <h4 class="card-title">How to use starter kit ?</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="card-text">
                                    <p><span class="text-bold-600 mt-2">HTML</span></p>
                                    <p>If you know just HTML, select your choice of layout from starter kit folder,
                                        customize it with optional changes like colors and branding, add required
                                        dependency only.</p>
                                    <div class="alert alert-icon-left alert-arrow-left alert-info mb-2" role="alert">
                                        <span class="alert-icon"><i class="fa fa-info"></i></span>
                                        <h4>Tip!</h4>
                                        <p>Hideable navbar option is available for fixed navbar with static navigation
                                            only. Works in top and bottom positions, single and multiple navbars.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ How to-->


                </div>
            </section>

            <section class="row">
                <div class="col-md-6 col-sm-12">
                    <div id="with-header" class="card">
                        <div class="card-header">
                            <h4 class="card-title">With Header</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body border-top-blue-grey border-top-lighten-5 ">
                                <h4 class="card-title">Content title</h4>
                                <p class="card-text">Add a heading to card with <code>.card-header </code> class &amp;
                                    content title uses <code>.card-title</code> class. For border add
                                    <code>.border-top-COLOR</code> class</p>
                                <p class="card-text">You may also include any &lt;h1&gt;-&lt;h6&gt; with a
                                    <code>.card-header </code> &amp; <code>.card-title</code> class to add heading.</p>
                                <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé. Tart
                                    lollipop carrot cake sugar plum. Marshmallow wafer tiramisu jelly beans.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div id="with-header-border-0" class="card">
                        <div class="card-header">
                            <h4 class="card-title">With Header &amp; No Border</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <h4 class="card-title">Content title</h4>
                                <p class="card-text">Add a heading to card with <code>.card-header </code> class &amp;
                                    content title uses <code>.card-title</code> class.</p>
                                <p class="card-text">You may also include any &lt;h1&gt;-&lt;h6&gt; with a
                                    <code>.card-header </code> &amp; <code>.card-title</code> class to add heading.</p>
                                <p class="card-text">Gingerbread brownie sweet roll cheesecake chocolate cake jelly
                                    beans marzipan gummies dessert. Jelly beans sugar plum cheesecake cookie oat cake
                                    soufflé.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection

@push('js')
<script>

</script>
@endpush
