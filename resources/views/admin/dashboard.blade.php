<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    


</head>

<body>
    <div class="container">
        <!-- aside start -->
        <aside>
            <div class="top">
                <div class="logo">
                    <h2>My <span class="danger">Blog</span></h2>
                </div>
                <div class="close" id="close_btn">
                    <span><i class="fa-solid fa-x"></i></span>
                </div>
            </div>
            <!-- end top -->
            <div class="sidebar">
                <a href="{{ route('home') }}" class="menu-link">
                    <span><i class="fa-solid fa-house"></i></span>
                    <h3>Home</h3>
                </a>

                <a href="#" class="menu-link" id="dashboardBtn">
                    <span><i i class="fa-solid fa-table-cells"></i></span>
                    <h3>Dashboard</h3>
                </a>
                <a href="#" id="usersBtn" class="menu-link">
                    <span><i class="fa-solid fa-user"></i></span>
                    <h3>Users</h3>
                </a>
                <a href="#" id="insightsbtn" class="menu-link">
                    <span><i class="fa-solid fa-chart-simple"></i></span>
                    <h3>Insights</h3>
                </a>
                <a href="#" class="menu-link">
                    <span><i class="fa-regular fa-message"></i></span>
                    <h3>Comments</h3>
                    <span class="msg_count">14</span>
                </a>
                <a href="#" id="postbtn" class="menu-link">
                    <span><i class="fa-brands fa-product-hunt"></i></span>
                    <h3>Posts</h3>
                </a>
                <div class="submenu" id="postSubmenu">
                    <a href="#" id="addBtn">
                        <span><i class="fa-solid fa-plus"></i></span>
                        <h3>Add Blog</h3>
                    </a>
                    <a href="#" id="blogListBtn">
                        <span><i class="fa-solid fa-list"></i></span>
                        <h3>Blog List</h3>
                    </a>
                </div>
                <a href="#" class="menu-link">
                    <span><i class="fa-solid fa-asterisk"></i></span>
                    <h3>Categories</h3>
                </a>
                <a href="#" class="menu-link">
                    <span><i class="fa-solid fa-gear"></i></span>
                    <h3>Settings</h3>
                </a>

                <a href="#" class="menu-link">
                    <span><i class="fa-solid fa-arrow-right-from-bracket"></i></span>
                    <h3>Log Out</h3>
                </a>


            </div>

        </aside>
        <!-- aside end -->
        <!-- main content -->
        <main > 
            <h1 id="mainheading">Dashboard</h1>

            <div class="date" id="date">
                <input type="date" value="{{ now()->format('Y-m-d') }}">
            </div>
            @if(session('success'))
                <div class="alert-success">
                    {{ session('success') }}
                </div>
            @endif


            <div class="insights" id="insightsSection">

                <!-- Sales -->
                <div class="sales">
                    <span><i class="fa-solid fa-arrow-trend-up"></i></span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Blogs</h3>
                            <h1>{{ $count }}</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle r="30" cy="40" cx="40"></circle>
                            </svg>
                            <div class="number">80%</div>
                        </div>
                    </div>
                    <small>Last 1 year</small>
                </div>

                <!-- Expenses -->
                <div class="expenses">
                    <span><i class="fa-solid fa-arrows-to-circle"></i></span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total blogs</h3>
                            <h1>{{ $lastMonthCount }}</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle r="30" cy="40" cx="40"></circle>
                            </svg>
                            <div class="number">80%</div>
                        </div>
                    </div>
                    <small>Last 1 month</small>
                </div>

                <!-- Income -->
                <div class="income">
                    <span><i class="fa-solid fa-sack-dollar"></i></span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total blogs</h3>
                            <h1>{{ $thisWeekCount }}</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle r="30" cy="40" cx="40"></circle>
                            </svg>
                            <div class="number">80%</div>
                        </div>
                    </div>
                    <small>This week</small>
                </div>

            </div>

            <!-- Recent Orders -->
            <div class="recent_order" id="recentOrderSection">
                <h1>Recent Blogs</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Title </th>
                            <th>Created At</th>
                            <th>Author</th>
                            <th>View</th>
                            <th>Update</th>
                            <th>Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($latest as $post)


                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->created_at->format('M d, Y') }}</td>
                                <td>{{ $post->author }}</td>
                                <td><a href="{{ route('blog.single', $post->slug) }}" class="primary">view</a></td>
                                <td><a href="{{ route('update', $post->slug) }}" class="success">Update</a></td>
                                <td><a href="{{ route('delete', $post->slug) }}" class="warning">Delete</a></td>

                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
            <!-- Add Blog Form -->
            <div id="postForm" class="post-form-wrapper" style="display:none;">

                 <h1>ADD Blog</h1>
                  
                <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" value="{{ old('title') }}">
                        @error('title') <small class="error">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image">
                        <small class="hint">Upload featured image</small>
                    </div>

                    <div class="form-group">
                        <label>Author</label>
                        <input type="text" name="author" value="{{ old('author') }}">
                        @error('author') <small class="error">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="contents" rows="6">{{ old('contents') }}</textarea>
                        @error('contents') <small class="error">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group">
                        <label>Category</label>
                        <select name="category">
                            <option value="">Select Category</option>
                            <option value="Technology">Technology</option>
                            <option value="Travel">Travel</option>
                            <option value="Lifestyle">Lifestyle</option>
                            <option value="Education">Education</option>
                            <option value="Kids">Kids</option>
                            <option value="Health">Health</option>
                            <option value="Biography">Biography</option>
                        </select>
                        @error('category') <small class="error">{{ $message }}</small> @enderror
                    </div>

                    <button type="submit" class="btn-primary-custom">Add Blog</button>
                </form>
            </div>
            <!-- BLOG LIST TABLE  -->
            <div id="blogListSection" style="display:none;" class="recent_order">
                <h1>All Blogs</h1>

                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Author</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($latests as $post)
                            <tr>
                                <td class="blog-name">
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="">
                                    <span>{{ $post->title }}</span>
                                </td>


                                <td>{{ $post->author }}</td>
                                <td>{{ $post->created_at->format('Y-m-d') }}</td>

                                <td>
                                    <div class="action-icons">
                                        <a href="{{ route('blog.single', $post->slug) }}" class="action-btn">
                                            <i class="fa-solid fa-eye primary"></i>
                                        </a>
                                        <a href="{{ route('update', $post->slug) }}" class="action-btn">
                                            <i class="fa-solid fa-pen success"></i>
                                        </a>
                                        <a href="{{ route('delete', $post->slug) }}" class="action-btn">
                                            <i class="fa-solid fa-trash danger"></i>
                                        </a>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- chart -->
            <div class="insights-chart" style="display:none;" id="chartjs">
                <h1>Post per Category</h1>
                <canvas id="categoryChart"></canvas>
            </div>
            <!-- author -->
            <div id="usersSection" class="users_section_wrapper" style="display:none;">
                <h1>Users & Blog Count</h1>
            
                <table>
                    <thead>
                        <tr>
                            <th>Author Name</th>
                            <th>Total Blogs</th>
                            <th>Last blog</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->author }}</td>
                                <td>
                                    <span class="user-count">{{ $user->total_blogs }}</span>
                                </td>
                                <td>{{ $user->latest_blog_date }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </main>

        <!-- main content end -->
        <!-- right div -->
        <div class="right">
            <div class="top">
                <button id="menu_bar" class="menu_icon">
                    <span><i class="fa-solid fa-bars"></i></span>
                </button>

                <div class="profile">

                    <div class="info">
                        <p><b>Shiwanshu</b></p>
                        <p>Admin</p>
                        <small class="text-muted"></small>
                    </div>
                    <div class="profile-photo">
                        <img src="" alt="">
                    </div>
                </div>
            </div>
            <!-- end top -->
            <!-- start recent -->
            <div class="recent_updates">
                <h2>Popular Blogs</h2>
                <div class="updates">
                    @foreach ($recentUpdatedBlogs as $blogs)
                        <div class="update">
                            <div class="profile-photo">
                                <img src="{{ asset('storage/' . $blogs->image) }}" alt="">
                            </div>

                            <div class="message">
                                <p><b>{{ $blogs->title }}</b> Added:{{ $blogs->created_at->format('M d, Y') }} </p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            <!-- end recent update -->




        </div>

        <!-- right div end -->

    </div>
    <script>
        window.categoryData = {
            names: @json($categoryNames),
            counts: @json($categoryCounts)
        };
    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/admin.js') }}"></script>

</body>

</html>