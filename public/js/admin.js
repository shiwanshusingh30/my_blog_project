const sideMenu = document.querySelector('aside');
const mainHeading = document.getElementById('mainheading');
const dateDiv = document.getElementById('date');
const menuBtn = document.querySelector('#menu_bar');
const closeBtn = document.querySelector('#close_btn');
const postBtn = document.getElementById('addBtn');
const insights = document.getElementById('insightsSection');
const recentOrders = document.getElementById('recentOrderSection');
const postForm = document.getElementById('postForm');
const blogListBtn = document.getElementById('blogListBtn');
const blogListSection = document.getElementById('blogListSection');
const dashboardBtn = document.getElementById('dashboardBtn');
const submenu = document.getElementById("postSubmenu");
const insightsbtn = document.getElementById("insightsbtn");
const chartjs = document.getElementById("chartjs");
const ctx = document.getElementById('categoryChart').getContext('2d');
const usersBtn = document.getElementById('usersBtn');
const usersSection = document.getElementById('usersSection');
const menuLinks = document.querySelectorAll('.menu-link');


// menu active handling
function setActiveMenu(clickedItem) {
    menuLinks.forEach(link => link.classList.remove('active'));
    clickedItem.classList.add('active');
}


//aside responsive
menuBtn.addEventListener('click', () => {
    sideMenu.style.display = "block"
})
closeBtn.addEventListener('click', () => {
    sideMenu.style.display = "none"
})

// submenu open close
document.getElementById("postbtn").addEventListener("click", function (e) {
    e.preventDefault();
    setActiveMenu(this);


    if (submenu.style.display === "block") {
        submenu.style.display = "none";
    } else {
        submenu.style.display = "block";
    }
});
//form handling
postBtn.addEventListener('click', function (e) {
    e.preventDefault();
    setActiveMenu(this);

    insights.style.display = "none";
    recentOrders.style.display = "none";


    postForm.style.display = 'block';
    blogListSection.style.display = "none"
    usersSection.style.display = "none";
    chartjs.style.display = 'none';

    mainHeading.style.display = 'none';
    dateDiv.style.display = 'none';

});
//dashboard handling
dashboardBtn.addEventListener('click', function (e) {
    e.preventDefault();
    setActiveMenu(this);

    insights.style.display = "grid";
    mainHeading.style.display = 'block';
    dateDiv.style.display = 'inline-block';
    recentOrders.style.display = "block";
    postForm.style.display = "none";
    blogListSection.style.display = "none";
    usersSection.style.display = "none";
    chartjs.style.display = 'none';

});
//bloglist
blogListBtn.addEventListener('click', function (e) {
    e.preventDefault();
    setActiveMenu(this);


    insights.style.display = "none";
    recentOrders.style.display = "none";
    postForm.style.display = "none";
    blogListSection.style.display = "block";
    usersSection.style.display = "none";
    chartjs.style.display = 'none';
    mainHeading.style.display = 'none';
    dateDiv.style.display = 'none';

});

// users table
usersBtn.addEventListener('click', function (e) {
    e.preventDefault();
    setActiveMenu(this);


    insights.style.display = "none";
    recentOrders.style.display = "none";
    postForm.style.display = "none";
    blogListSection.style.display = "none";
    mainHeading.style.display = 'none';
    dateDiv.style.display = 'none';
    usersSection.style.display = "block";
    chartjs.style.display = 'none';
});


//chart handling
insightsbtn.addEventListener('click', function (e) {
    e.preventDefault();
    setActiveMenu(this);


    insights.style.display = "none";
    recentOrders.style.display = "none";
    postForm.style.display = "none";
    blogListSection.style.display = "none";
    usersSection.style.display = "none";
    chartjs.style.display = 'block';
    mainHeading.style.display = 'none';
    dateDiv.style.display = 'none';

});
// chart js


const categoryChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: window.categoryData.names, 
        datasets: [{
            label: 'Number of Blogs',
            data: window.categoryData.counts,
            backgroundColor: 'rgba(0, 102, 105, 0.7)',
            borderColor: 'rgba(0, 102, 105, 1)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true,
                ticks: { precision: 0 }
            }
        }
    }
});











