// document.addEventListener("DOMContentLoaded", function () {
//   const filters = document.querySelectorAll("#portfolio-flters li");
//   const portfolioItems = document.querySelectorAll(".portfolio-item");

//   filters.forEach(function (filter) {
//     filter.addEventListener("click", function () {
//       const filterValue = this.getAttribute("data-filter");

//       if (filterValue === "*") {
//         portfolioItems.forEach(function (item) {
//           item.style.display = "block";
//         });
//       } else {
//         portfolioItems.forEach(function (item) {
//           item.style.display = "none";
//         });

//         const filteredItems = document.querySelectorAll(filterValue);
//         filteredItems.forEach(function (item) {
//           item.style.display = "block";
//         });
//       }
//       filters.forEach(function (filter) {
//         filter.classList.remove("filter-active");
//       });
//       this.classList.add("filter-active");
//     });
//   });
// });