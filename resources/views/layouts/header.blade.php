<div class="newpar new section"></div>
<div class="par iparys_inherited">
    <div class="header parbase">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark navEffect custNavBar paddingTopInNav" role="navigation">
                <div class="container">
                    <a class="navbar-brand fiplLogo nav-link" href="{{ route('index') }}"></a>
                    <button type="button" class="navbar-toggle navBarBtn paddingRight0 marginRight0"
                        data-toggle="collapse" data-target=".collapseNav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse collapseNav megaMenuWidth">
                        <div class="explrHead customNav visible-xs visible-sm">
                            <div class="nav-item navText list-unstyled">
                                <a class="nav-link explrtext" href="#" data-toggle="collapse">Menu</a>
                            </div>
                            <div class="pull-right clsBtn closebtn">
                                <a href="javascript:void(0)">
                                    <img src="{{url('assets/images/close.svg')}}" alt="Close" />
                                </a>
                            </div>
                        </div>
                        <ul class="nav navbar-nav pull-right customNav paddingTopNav">
                            <li class="nav-item navText megaMenu">
                                <a class="nav-link accordion {{ (request()->is('business*')) ? 'activeMenu' : '' }}" data-toggle="collapse">
                                    Business
                                </a>
                                <ul class="panel list-unstyled drops">
                                    <li class="subHead">
                                        <span>Business Overview</span>
                                    </li>
                                    <li>
                                        <hr class="subHeadBorder hidden-xs hidden-sm" />
                                    </li>
                                    <li class="colCount3">
                                        <ul class="list-unstyled itemA colsm">
                                            <li class="liItems">
                                                <a href="{{ route('businessArea.food') }}">Food</a>
                                            </li>
                                            <li class="liItems">
                                                <a href="{{ route('businessArea.agriculture') }}">Agriculture</a>
                                            </li>
                                        </ul>
                                        <ul class="list-unstyled itemA colsm">
                                            <li class="liItems">
                                                <a href="{{ route('businessArea.media') }}">Media</a>
                                            </li>
                                            <li class="liItems">
                                                <a href="{{ route('businessArea.realEstate') }}">Real Estate</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item navText megaMenu padTop5">
                                <a class="nav-link accordion {{ (request()->is('about-us*')) ? 'activeMenu' : '' }}" data-toggle="collapse">
                                    About Us
                                </a>
                                <ul class="panel list-unstyled aboutPanel">
                                    <li class="subHead">
                                        <span>The FIPL group</span>
                                    </li>
                                    <li>
                                        <hr class="subHeadBorder hidden-xs hidden-sm" />
                                    </li>
                                    <li class="liItems horizonIn">
                                        <a href="{{ route('aboutUs') }}">About FIPL</a>
                                    </li>
                                </ul>
                            </li>
                            <div class="backdrop"></div>
                            <li class="nav-item navText padTop5">
                                <a class="nav-link {{ (request()->is('sustainability')) ? 'activeMenu' : '' }}" href="{{ route('sustainability') }}" data-toggle="collapse" id="NewsRoom">
                                    Sustainability
                                </a>
                            </li>
                            <li class="nav-item navText padTop5">
                                <a class="nav-link {{ (request()->is('careers')) ? 'activeMenu' : '' }}" href="{{ route('careers') }}" data-toggle="collapse">
                                    Careers
                                </a>
                            </li>
                            <li class="nav-item navText padTop5">
                                <a class="nav-link {{ (request()->is('trainings')) ? 'activeMenu' : '' }}" href="{{ route('trainings') }}" data-toggle="collapse">
                                    Trainings
                                </a>
                            </li>
                            <li class="nav-item navText padTop5">
                                <a class="nav-link {{ (request()->is('contact-us')) ? 'activeMenu' : '' }}" href="{{ route('contactUs') }}" data-toggle="collapse">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="overlayDiv"></div>
        </header>
        <!--for Globalsearch-->
        <section class="searchSection" id="searchSection">
            <div class="fadeGlobalSearch"></div>
            <div class="modalGlobalSearch"></div>
            <div class="searchDiv">
                <div class="container">
                    <input type="text" id="searchInputG" class="inputBox"
                        placeholder="Enter your search keywords here…" />
                    <div class="globalSearchIcon">
                        <img src="{{url('assets/images/searchicon.svg')}}"
                            alt="Search" />
                    </div>
                </div>
            </div>
            <div class="searchSuggestions container">
                <!--filterSection-->
                <div class="filters">
                    <div class="filterHeading">
                        <img src="{{url('assets/images/globalSearch/filter.svg')}}"
                            class="filterImg touchFilter" alt="filter_img" />
                        <span class="filterHeadline touchFilter"></span>
                    </div>
                    <div class="filter_sec">
                        <div class="filter_sec_data">
                            <div class="categoryFilter filterDiv">
                                <div class="categoryContent">
                                    <div class="titleDropDown">
                                        <div class="filterTitle selectorFiltor"><span></span></div>
                                        <div class="arrow-background selectorFiltor">
                                            <div class="arrow-container ">
                                                <div class="arrow"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="categoryWrapper filterWrapper">
                                        <div class="categoryData">
                                            <div class="allCheck hiddenCategory">
                                                <input class="searchCheck chkbox" id="all" type="checkbox" />
                                                <label class="filterLabel tagName" for="all"></label>
                                            </div>
                                            <div class="tags hiddenCategory"></div>
                                            <div class="clearCategory clearSearchFilter" id="clearTags">
                                                <img class="blueCloseIcon"
                                                    src="{{url('assets/images/close_icon_blue.svg')}}"
                                                    alt="plus" />
                                                <span></span>
                                            </div>
                                            <!--<div class="Test" id="p"></div>-->
                                        </div>
                                    </div>
                                    <hr />
                                </div>
                            </div>
                            <div class="dateRangeFilter filterDiv">
                                <div class="dateRangeContent">
                                    <div class="titleDropDown">
                                        <div class="filterTitle selectorFiltor"><span>Date Range</span></div>
                                        <div class="arrow-background selectorFiltor">
                                            <div class="arrow-container">
                                                <div class="arrow"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dateRangeWrapper filterWrapper">
                                        <div class="dateRangeData">
                                            <div class="dateRanges">
                                                <div class="dateRangeLists">
                                                    <label class="dateRange" for="range">
                                                        <input type="radio" class="dateRangeRadio" name="dateRange"
                                                            id="range" value="Date Range" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="customDateRangeWrapper">
                                                        <div class="customDateRange">
                                                            <div class="dateBox">
                                                                <label for="dateFrom" class="dateRange"></label>
                                                                <div class="dateRange datePicker">
                                                                    <input type="date" name="datePicker"
                                                                        id="dateFrom" min="2017-01-01"
                                                                        max="2030-01-01" />
                                                                </div>
                                                            </div>
                                                            <div class="dateBox">
                                                                <label for="dateTo" class="dateRange"></label>
                                                                <div class="dateRange datePicker">
                                                                    <input type="date" name="datePicker" id="dateTo"
                                                                        min="2017-01-01" max="2030-01-01" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearDateRange clearSearchFilter">
                                            </div>
                                        </div>
                                    </div>
                                    <hr />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cardList" id="cardList"></div>
                <datalist class="globalList tableData" id="globalList"></datalist>

            </div>
            <div class="cardResult noDisplay">
            </div>
            <div class="pagination">
                <ul>
                    <li class="arrows jumpFirst"></li>
                    <li class="arrows leftArw"></li>
                </ul>
                <ul class="pageNumbers">
                </ul>
                <ul>
                    <li class="arrows rightArw"> </li>
                    <li class="arrows jumpLast"> </li>
                </ul>
            </div>
        </section>
    </div>
</div>